
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan - StokMart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #176b49;
            --primary-dark: #12583c;
            --primary-light: #e8f3ed;
            --background: #f4f7f5;
            --text: #20372d;
            --muted: #78877f;
            --border: #e1e9e4;
        }

        * { box-sizing: border-box; }

        body {
            background: var(--background);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        .sidebar {
            width: 235px;
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid var(--border);
            position: fixed;
            inset: 0 auto 0 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            padding: 20px 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 6px;
            color: var(--text);
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: var(--primary);
            color: white;
            font-size: 19px;
        }

        .store-info {
            background: #f3f7f4;
            border-radius: 12px;
            padding: 13px;
            margin-top: 26px;
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .store-icon { color: var(--primary); font-size: 20px; }
        .store-info strong { display: block; font-size: 13px; }
        .store-info small { color: var(--muted); font-size: 11px; }

        .nav-heading {
            color: var(--muted);
            font-size: 11px;
            font-weight: 600;
            margin: 26px 8px 10px;
            text-transform: uppercase;
            letter-spacing: .4px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 12px;
            margin-bottom: 5px;
            border-radius: 9px;
            color: #596c61;
            text-decoration: none;
            font-size: 13px;
            transition: .15s;
        }

        .side-link i {
            font-size: 17px;
            width: 20px;
            text-align: center;
        }

        .side-link:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

        .side-link.active {
            background: var(--primary);
            color: #fff;
        }

        .sidebar-bottom {
            margin-top: auto;
            border-top: 1px solid var(--border);
            padding-top: 15px;
        }

        .sidebar-footer {
            font-size: 11px;
            color: var(--muted);
            padding: 15px 8px 0;
        }

        .main-content {
            margin-left: 235px;
            min-height: 100vh;
        }

        .topbar {
            background: #fff;
            border-bottom: 1px solid var(--border);
            min-height: 69px;
            padding: 13px 26px;
        }

        .page-title {
            font-size: 25px;
            font-weight: 700;
            margin: 0;
        }

        .topbar-date {
            color: var(--muted);
            font-size: 12px;
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .content-area { padding: 25px 26px; }

        .welcome-title {
            font-size: 16px;
            font-weight: 700;
        }

        .welcome-description {
            color: var(--muted);
            font-size: 13px;
        }

        .btn-primary-custom {
            background: var(--primary);
            color: #fff;
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 10px 16px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background: var(--primary-dark);
            color: #fff;
        }

        .btn-secondary-custom {
            border: 1px solid var(--border);
            background: #fff;
            color: var(--text);
            border-radius: 8px;
            padding: 9px 14px;
            font-size: 13px;
            text-decoration: none;
        }

        .btn-secondary-custom:hover {
            background: #f3f7f4;
            color: var(--primary);
        }

        .summary-card,
        .table-card,
        .filter-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .summary-card {
            padding: 17px;
            height: 100%;
        }

        .summary-label {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 10px;
        }

        .summary-value {
            font-size: 23px;
            font-weight: 700;
        }

        .summary-icon {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9px;
            background: var(--primary-light);
            color: var(--primary);
            font-size: 17px;
        }

        .filter-card { padding: 18px; }

        .table-card-header {
            padding: 18px;
            border-bottom: 1px solid var(--border);
        }

        .table-card-body { padding: 17px; }

        .section-title {
            font-size: 16px;
            font-weight: 700;
        }

        .section-description {
            color: var(--muted);
            font-size: 12px;
        }

        .form-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text);
        }

        .form-control {
            font-size: 13px;
            border-color: var(--border);
            border-radius: 8px;
            padding: 10px 12px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(23, 107, 73, .1);
        }

        .table {
            font-size: 12px;
            margin-bottom: 0;
        }

        .table thead th {
            background: #f5f8f6;
            color: var(--muted);
            font-size: 11px;
            font-weight: 600;
            padding: 13px 10px;
            white-space: nowrap;
            border-bottom: 1px solid var(--border);
        }

        .table tbody td {
            padding: 13px 10px;
            border-color: var(--border);
            vertical-align: middle;
        }

        .footer-info {
            color: var(--muted);
            font-size: 11px;
            margin-top: 24px;
        }

        .mobile-header { display: none; }

        @media (max-width: 991.98px) {
            .sidebar { display: none; }
            .main-content { margin-left: 0; }

            .mobile-header {
                display: block;
                background: #fff;
                border-bottom: 1px solid var(--border);
                padding: 12px 18px;
            }

            .mobile-menu {
                background: #fff;
                border: 1px solid var(--border);
                border-radius: 10px;
                padding: 12px;
                margin-top: 12px;
            }

            .content-area { padding: 20px 18px; }
            .topbar { padding: 15px 18px; }
        }

        @media (max-width: 575.98px) {
            .page-title { font-size: 21px; }
            .content-area { padding: 17px 13px; }
            .summary-value { font-size: 19px; }
        }

        @media print {
            @page { size: landscape; margin: 12mm; }

            body {
                background: white !important;
                color: #000 !important;
                font-size: 11px;
            }

            .sidebar,
            .mobile-header,
            .topbar,
            .no-print {
                display: none !important;
            }

            .main-content {
                margin: 0 !important;
                min-height: auto !important;
            }

            .content-area { padding: 0 !important; }

            .summary-card,
            .table-card,
            .filter-card {
                border: 1px solid #ddd !important;
                box-shadow: none !important;
                break-inside: avoid;
            }

            .summary-value { font-size: 18px; }

            .table { font-size: 10px; }
            .table thead th,
            .table tbody td {
                padding: 7px !important;
                color: #000 !important;
            }

            .table thead th { background: #eee !important; }

            .print-heading { display: block !important; }
            .footer-info { display: none !important; }
        }

        .print-heading { display: none; }
    </style>
</head>

<body>

{{-- SIDEBAR DESKTOP --}}
<aside class="sidebar">

    <a href="{{ route('dashboard') }}" class="brand">
        <span class="brand-icon"><i class="bi bi-shop"></i></span>
        StokMart
    </a>

    <div class="store-info">
        <i class="bi bi-shop store-icon"></i>
        <div>
            <strong>Toko Laris</strong>
            <small>Manajemen toko</small>
        </div>
    </div>

    <div class="nav-heading">Menu Utama</div>

    <a href="{{ route('dashboard') }}" class="side-link">
        <i class="bi bi-grid"></i> Dashboard
    </a>

    <a href="{{ route('products.index') }}" class="side-link">
        <i class="bi bi-box-seam"></i> Data Barang
    </a>

    <a href="{{ route('categories.index') }}" class="side-link">
        <i class="bi bi-tags"></i> Kategori Barang
    </a>

    <a href="{{ route('stock-ins.index') }}" class="side-link">
        <i class="bi bi-box-arrow-in-down"></i> Barang Masuk
    </a>

    <a href="{{ route('sales.index') }}" class="side-link">
        <i class="bi bi-cart3"></i> Kasir
    </a>

    <a href="{{ route('products.index') }}" class="side-link">
        <i class="bi bi-box"></i> Persediaan
    </a>

    <a href="{{ route('reports.index') }}" class="side-link active">
        <i class="bi bi-file-earmark-bar-graph"></i> Laporan
    </a>

    <div class="sidebar-bottom">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                    class="side-link border-0 bg-transparent w-100 text-start">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>

        <div class="sidebar-footer">StokMart • Toko Laris</div>
    </div>
</aside>

{{-- HEADER MOBILE --}}
<div class="mobile-header">
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('dashboard') }}" class="brand">
            <span class="brand-icon"><i class="bi bi-shop"></i></span>
            StokMart
        </a>

        <button class="btn btn-outline-success"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mobileNavigation">
            <i class="bi bi-list fs-5"></i>
        </button>
    </div>

    <div class="collapse" id="mobileNavigation">
        <div class="mobile-menu">
            <a href="{{ route('dashboard') }}" class="side-link">
                <i class="bi bi-grid"></i> Dashboard
            </a>
            <a href="{{ route('products.index') }}" class="side-link">
                <i class="bi bi-box-seam"></i> Data Barang
            </a>
            <a href="{{ route('categories.index') }}" class="side-link">
                <i class="bi bi-tags"></i> Kategori Barang
            </a>
            <a href="{{ route('stock-ins.index') }}" class="side-link">
                <i class="bi bi-box-arrow-in-down"></i> Barang Masuk
            </a>
            <a href="{{ route('sales.index') }}" class="side-link">
                <i class="bi bi-cart3"></i> Kasir
            </a>
            <a href="{{ route('products.index') }}" class="side-link">
                <i class="bi bi-box"></i> Persediaan
            </a>
            <a href="{{ route('reports.index') }}" class="side-link active">
                <i class="bi bi-file-earmark-bar-graph"></i> Laporan
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="side-link border-0 bg-transparent w-100 text-start">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
</div>

{{-- KONTEN UTAMA --}}
<main class="main-content">

    <header class="topbar d-flex justify-content-between align-items-center">
        <h1 class="page-title">Laporan Penjualan</h1>

        <div class="d-flex align-items-center gap-3">
            <div class="topbar-date d-none d-sm-flex align-items-center gap-2">
                <i class="bi bi-calendar3 fs-6"></i>
                {{ now()->locale('id')->translatedFormat('l, d F Y') }}
            </div>

            <div class="vr d-none d-sm-block" style="height: 30px;"></div>

            <div class="user-avatar">
                <i class="bi bi-person"></i>
            </div>

            <div class="d-none d-sm-block">
                <div class="fw-semibold" style="font-size: 12px;">
                    {{ Auth::user()->username }}
                </div>
                <div class="text-muted" style="font-size: 10px;">
                    Pemilik toko
                </div>
            </div>
        </div>
    </header>

    <div class="content-area">

        {{-- HEADER HALAMAN --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4 no-print">
            <div>
                <h2 class="welcome-title mb-2">Laporan Penjualan</h2>
                <p class="welcome-description mb-0">
                    Lihat ringkasan dan rincian transaksi penjualan Toko Laris.
                </p>
            </div>

            <button onclick="window.print()" class="btn-primary-custom">
                <i class="bi bi-printer me-2"></i>
                Cetak Laporan
            </button>
        </div>

        {{-- JUDUL CETAK --}}
        <div class="print-heading text-center mb-4">
            <h3 class="fw-bold mb-1">TOKO LARIS</h3>
            <h5 class="fw-bold">LAPORAN PENJUALAN</h5>
            <p class="mb-0">
                Periode:
                {{ $dateFrom ? \Carbon\Carbon::parse($dateFrom)->format('d-m-Y') : 'Semua' }}
                s/d
                {{ $dateTo ? \Carbon\Carbon::parse($dateTo)->format('d-m-Y') : 'Semua' }}
            </p>
        </div>

        {{-- FILTER PERIODE --}}
        <div class="filter-card mb-4 no-print">
            <h3 class="section-title mb-1">Filter Periode Laporan</h3>
            <p class="section-description mb-3">
                Pilih rentang tanggal untuk melihat laporan penjualan.
            </p>

            <form action="{{ route('reports.index') }}" method="GET">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4">
                        <label class="form-label">Tanggal Awal</label>
                        <input type="date"
                               name="date_from"
                               class="form-control"
                               value="{{ $dateFrom }}"
                               max="{{ now()->toDateString() }}">
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Tanggal Akhir</label>
                        <input type="date"
                               name="date_to"
                               class="form-control"
                               value="{{ $dateTo }}"
                               max="{{ now()->toDateString() }}">
                    </div>

                    <div class="col-md-4 d-flex flex-wrap gap-2">
                        <button type="submit" class="btn-primary-custom">
                            <i class="bi bi-funnel me-1"></i> Tampilkan
                        </button>

                        <a href="{{ route('reports.index') }}"
                           class="btn-secondary-custom">
                            <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>

        {{-- RINGKASAN --}}
        <div class="mb-3">
            <h3 class="section-title mb-1">Ringkasan Penjualan</h3>
            <p class="section-description mb-0">
                Rekapitulasi hasil penjualan berdasarkan periode yang dipilih.
            </p>
        </div>

        <div class="row g-3 mb-4">

            <div class="col-12 col-md-4">
                <div class="summary-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="summary-label">Total Omzet</div>
                        <div class="summary-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                    <div class="summary-value">
                        Rp {{ number_format($totalRevenue, 0, ',', '.') }}
                    </div>
                    <div class="section-description mt-2">Total penjualan</div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="summary-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="summary-label">Jumlah Transaksi</div>
                        <div class="summary-icon">
                            <i class="bi bi-receipt"></i>
                        </div>
                    </div>
                    <div class="summary-value">
                        {{ number_format($totalTransactions, 0, ',', '.') }}
                    </div>
                    <div class="section-description mt-2">Transaksi penjualan</div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="summary-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="summary-label">Produk Terjual</div>
                        <div class="summary-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                    </div>
                    <div class="summary-value">
                        {{ number_format($totalProductsSold, 0, ',', '.') }}
                    </div>
                    <div class="section-description mt-2">Total unit barang</div>
                </div>
            </div>

        </div>

        {{-- RINCIAN TRANSAKSI --}}
        <div class="table-card">

            <div class="table-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                <div>
                    <h3 class="section-title mb-1">Rincian Transaksi</h3>
                    <p class="section-description mb-0">
                        Daftar transaksi penjualan Toko Laris.
                    </p>
                </div>

                <span class="badge rounded-pill px-3 py-2"
                      style="background: var(--primary-light); color: var(--primary);">
                    {{ $reportSales->count() }} Transaksi
                </span>
            </div>

            <div class="table-card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Tanggal</th>
                                <th>Kasir</th>
                                <th>Jumlah Item</th>
                                <th>Metode Pembayaran</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($reportSales as $index => $sale)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="fw-semibold">{{ $sale->transaction_code }}</td>
                                    <td>{{ $sale->transaction_date->format('d-m-Y H:i') }}</td>
                                    <td>{{ $sale->user->username }}</td>
                                    <td>{{ $sale->details->sum('quantity') }}</td>
                                    <td>
                                        @if($sale->payment_method === 'cash')
                                            <span class="badge bg-success">Tunai</span>
                                        @else
                                            <span class="badge bg-info text-dark">Transfer</span>
                                        @endif
                                    </td>
                                    <td class="text-end fw-semibold">
                                        Rp {{ number_format($sale->total, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-5">
                                        <i class="bi bi-receipt fs-2 d-block mb-2"></i>
                                        <strong>Tidak ada transaksi.</strong>
                                        <div class="mt-1">
                                            Tidak ditemukan transaksi pada periode yang dipilih.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                        <tfoot>
                            <tr>
                                <th colspan="6" class="text-end">
                                    TOTAL OMZET
                                </th>
                                <th class="text-end">
                                    Rp {{ number_format($totalRevenue, 0, ',', '.') }}
                                </th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>

        {{-- TOMBOL KEMBALI --}}
        <div class="mt-3 no-print">
            <a href="{{ route('dashboard') }}"
               class="btn-secondary-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-arrow-left me-1"></i>
                Kembali ke Dashboard
            </a>
        </div>

        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Laporan penjualan Toko Laris</span>
        </div>

        <div class="print-heading text-center mt-4">
            <small>StokMart - Sistem Informasi Toko Laris</small>
        </div>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
