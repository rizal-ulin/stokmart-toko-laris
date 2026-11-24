<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik penjualan hari ini
        $todaySales = Sale::whereDate('transaction_date', today());

        $todayRevenue = (clone $todaySales)->sum('total');

        $todayTransactions = (clone $todaySales)->count();

        // Total unit produk terjual hari ini
        $todayProductsSold = SaleDetail::whereHas('sale', function ($query) {
            $query->whereDate('transaction_date', today());
        })->sum('quantity');

        // Total omzet keseluruhan
        $totalRevenue = Sale::sum('total');

        // Lima transaksi terbaru
        $recentSales = Sale::with('user')
            ->latest('transaction_date')
            ->take(5)
            ->get();

        // Produk yang stoknya mencapai batas minimum
        $lowStockProducts = Product::whereColumn(
            'stock',
            '<=',
            'minimum_stock'
        )
            ->orderBy('stock', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        // Jumlah produk yang stoknya menipis atau habis
        $lowStockCount = $lowStockProducts->count();

        return view('dashboard', compact(
            'todayRevenue',
            'todayTransactions',
            'todayProductsSold',
            'totalRevenue',
            'recentSales',
            'lowStockProducts',
            'lowStockCount'
        ));
    }
}
