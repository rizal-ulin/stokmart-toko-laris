<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\StockInDetail;
use App\Models\SaleDetail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'code' => 'required|string|max:30|unique:products,code',
            'name' => 'required|string|max:150',
            'unit' => 'required|string|max:30',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'minimum_stock' => 'required|integer|min:0',
        ]);

        Product::create($validated);

        if ($request->expectsJson()) {
            session()->flash('success', 'Produk berhasil ditambahkan.');

            return response()->json([
                'redirect' => route('products.index')
            ]);
        }

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'code' => 'required|string|max:30|unique:products,code,' . $product->id,
            'name' => 'required|string|max:150',
            'unit' => 'required|string|max:30',
            'purchase_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'minimum_stock' => 'required|integer|min:0',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        // Periksa riwayat barang masuk
        $hasStockIn = StockInDetail::where('product_id', $product->id)
            ->exists();

        // Periksa riwayat penjualan
        $hasSale = SaleDetail::where('product_id', $product->id)
            ->exists();

        // Tolak penghapusan jika barang memiliki riwayat transaksi
        if ($hasStockIn || $hasSale) {
            return redirect()->route('products.index')
                ->with('error', 'Barang tidak dapat dihapus karena masih memiliki riwayat barang masuk atau penjualan.');
        }

        // Hapus barang jika tidak memiliki riwayat transaksi
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
