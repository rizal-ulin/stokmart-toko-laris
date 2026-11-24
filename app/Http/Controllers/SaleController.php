<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        $query = Sale::with('user');

        // Pencarian berdasarkan kode transaksi
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(
                'transaction_code',
                'like',
                "%{$search}%"
            );
        }

        // Filter berdasarkan metode pembayaran
        if ($request->filled('payment_method')) {
            $query->where(
                'payment_method',
                $request->payment_method
            );
        }

        $sales = $query->latest()->get();

        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Product::where('stock', '>', 0)
            ->orderBy('name')
            ->get();

        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'payment_method' => 'required|in:cash,transfer',
            'amount_received' => 'required|numeric|min:0',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|exists:products,id|distinct',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        $sale = DB::transaction(function () use ($validated) {
            $total = 0;
            $saleItems = [];

            foreach ($validated['products'] as $item) {
                $product = Product::where('id', $item['product_id'])
                    ->lockForUpdate()
                    ->firstOrFail();

                $quantity = (int) $item['quantity'];

                if ($product->stock < $quantity) {
                    throw ValidationException::withMessages([
                        'products' => "Stok produk {$product->name} tidak mencukupi. Stok tersedia: {$product->stock}.",
                    ]);
                }

                $sellingPrice = (float) $product->selling_price;
                $purchasePrice = (float) $product->purchase_price;
                $subtotal = $sellingPrice * $quantity;

                $total += $subtotal;

                $saleItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'selling_price' => $sellingPrice,
                    'purchase_price' => $purchasePrice,
                    'subtotal' => $subtotal,
                ];
            }

            $amountReceived = (float) $validated['amount_received'];

            if ($amountReceived < $total) {
                throw ValidationException::withMessages([
                    'amount_received' => 'Uang yang diterima tidak boleh kurang dari total belanja.',
                ]);
            }

            $changeAmount = $amountReceived - $total;

            $sale = Sale::create([
                'user_id' => Auth::id(),
                'transaction_code' => 'TRX-' . now()->format('YmdHis') . '-' . Str::upper(Str::random(5)),
                'transaction_date' => now(),
                'total' => $total,
                'payment_method' => $validated['payment_method'],
                'amount_received' => $amountReceived,
                'change_amount' => $changeAmount,
            ]);

            foreach ($saleItems as $item) {
                SaleDetail::create([
                    'sale_id' => $sale->id,
                    'product_id' => $item['product']->id,
                    'quantity' => $item['quantity'],
                    'selling_price' => $item['selling_price'],
                    'purchase_price' => $item['purchase_price'],
                    'subtotal' => $item['subtotal'],
                ]);

                $item['product']->decrement('stock', $item['quantity']);
            }

            return $sale;
        });

        if ($request->expectsJson()) {
            session()->flash('success', 'Transaksi penjualan berhasil disimpan.');

            return response()->json([
                'redirect' => route('sales.show', $sale->id),
            ]);
        }

        return redirect()
            ->route('sales.show', $sale->id)
            ->with('success', 'Transaksi penjualan berhasil disimpan.');
    }

    public function show(Sale $sale)
    {
        $sale->load(['user', 'details.product']);

        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        return redirect()->route('sales.show', $sale);
    }

    public function update(Request $request, Sale $sale)
    {
        return redirect()->route('sales.show', $sale);
    }

    public function destroy(Sale $sale)
    {
        return redirect()
            ->route('sales.index')
            ->with('error', 'Penghapusan transaksi penjualan belum diaktifkan.');
    }
}
