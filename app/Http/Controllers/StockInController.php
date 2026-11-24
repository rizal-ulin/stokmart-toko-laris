<?php

namespace App\Http\Controllers;

use App\Models\StockIn;
use App\Models\StockInDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StockInController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => 'nullable|string|max:100',
            'date_from' => 'nullable|date',
            'date_to' => 'nullable|date|after_or_equal:date_from',
        ]);

        $search = $validated['search'] ?? null;
        $dateFrom = $validated['date_from'] ?? null;
        $dateTo = $validated['date_to'] ?? null;

        $query = StockIn::with(['user', 'details.product']);

        // Filter berdasarkan nama produk
        if ($search) {
            $query->whereHas('details.product', function ($productQuery) use ($search) {
                $productQuery->where('name', 'like', "%{$search}%");
            });
        }

        // Filter tanggal awal
        if ($dateFrom) {
            $query->whereDate('transaction_date', '>=', $dateFrom);
        }

        // Filter tanggal akhir
        if ($dateTo) {
            $query->whereDate('transaction_date', '<=', $dateTo);
        }

        // Ringkasan berdasarkan hasil filter
        $totalTransactions = (clone $query)->count();
        $totalCost = (clone $query)->sum('total_cost');
        $totalItems = (clone $query)->sum('total_items');

        // Data riwayat stok masuk
        $stockIns = (clone $query)
            ->latest('transaction_date')
            ->get();

        return view('stock-ins.index', compact(
            'stockIns',
            'search',
            'dateFrom',
            'dateTo',
            'totalTransactions',
            'totalCost',
            'totalItems'
        ));
    }

    public function create()
    {
        $products = Product::orderBy('name')->get();

        return view('stock-ins.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'transaction_date' => 'required|date',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|exists:products,id|distinct',
            'products.*.quantity' => 'required|integer|min:1',
            'products.*.purchase_price' => 'required|numeric|min:0',
        ]);

        DB::transaction(function () use ($validated) {
            $totalItems = 0;
            $totalCost = 0;

            foreach ($validated['products'] as $item) {
                $subtotal = $item['quantity'] * $item['purchase_price'];

                $totalItems += $item['quantity'];
                $totalCost += $subtotal;
            }

            $stockIn = StockIn::create([
                'user_id' => Auth::id(),
                'transaction_date' => $validated['transaction_date'],
                'total_items' => $totalItems,
                'total_cost' => $totalCost,
            ]);

            foreach ($validated['products'] as $item) {
                StockInDetail::create([
                    'stock_in_id' => $stockIn->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'purchase_price' => $item['purchase_price'],
                    'subtotal' => $item['quantity'] * $item['purchase_price'],
                ]);

                Product::where('id', $item['product_id'])
                    ->increment('stock', $item['quantity']);
            }
        });

        return redirect()
            ->route('stock-ins.index')
            ->with('success', 'Transaksi stok masuk berhasil disimpan.');
    }

    public function show(StockIn $stockIn)
    {
        $stockIn->load(['user', 'details.product']);

        return view('stock-ins.show', compact('stockIn'));
    }

    public function edit(StockIn $stockIn)
    {
        return redirect()->route('stock-ins.show', $stockIn);
    }

    public function update(Request $request, StockIn $stockIn)
    {
        return redirect()->route('stock-ins.show', $stockIn);
    }

    public function destroy(StockIn $stockIn)
    {
        DB::transaction(function () use ($stockIn) {
            $stockIn->load('details');

            foreach ($stockIn->details as $detail) {
                $product = Product::where('id', $detail->product_id)
                    ->lockForUpdate()
                    ->firstOrFail();

                if ($product->stock < $detail->quantity) {
                    throw new \RuntimeException(
                        "Stok produk {$product->name} tidak mencukupi untuk membatalkan transaksi."
                    );
                }

                $product->decrement('stock', $detail->quantity);
            }

            $stockIn->delete();
        });

        return redirect()
            ->route('stock-ins.index')
            ->with('success', 'Transaksi stok masuk berhasil dihapus dan stok telah disesuaikan.');
    }
}
