<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleDetail;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'date_from' => 'nullable|date',
            'date_to' => 'nullable|date|after_or_equal:date_from',
        ]);

        $dateFrom = $validated['date_from'] ?? null;
        $dateTo = $validated['date_to'] ?? null;

        // Query transaksi berdasarkan periode
        $query = Sale::with(['user', 'details.product']);

        if ($dateFrom) {
            $query->whereDate('transaction_date', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->whereDate('transaction_date', '<=', $dateTo);
        }

        // Daftar transaksi
        $reportSales = (clone $query)
            ->latest('transaction_date')
            ->get();

        // Total omzet
        $totalRevenue = (clone $query)->sum('total');

        // Jumlah transaksi
        $totalTransactions = (clone $query)->count();

        // Total unit produk terjual
        $productQuery = SaleDetail::whereHas('sale', function ($saleQuery) use ($dateFrom, $dateTo) {
            if ($dateFrom) {
                $saleQuery->whereDate('transaction_date', '>=', $dateFrom);
            }

            if ($dateTo) {
                $saleQuery->whereDate('transaction_date', '<=', $dateTo);
            }
        });

        $totalProductsSold = $productQuery->sum('quantity');

        return view('reports.index', compact(
            'reportSales',
            'totalRevenue',
            'totalTransactions',
            'totalProductsSold',
            'dateFrom',
            'dateTo'
        ));
    }
}
