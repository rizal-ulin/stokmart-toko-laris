
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - StokMart</title>

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

        * {
            box-sizing: border-box;
        }

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
            top: 0;
            left: 0;
            bottom: 0;
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

        .store-icon {
            color: var(--primary);
            font-size: 20px;
        }

        .store-info strong {
            display: block;
            font-size: 13px;
        }

        .store-info small {
            color: var(--muted);
            font-size: 11px;
        }

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

        .content-area {
            padding: 25px 26px;
        }

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
            padding: 10px 17px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-primary-custom:hover {
            background: var(--primary-dark);
            color: #fff;
        }

        .stat-card,
        .content-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            height: 100%;
        }

        .stat-card {
            padding: 17px;
        }

        .stat-label {
            color: #64776b;
            font-size: 12px;
            margin-bottom: 13px;
        }

        .stat-value {
            font-size: clamp(19px, 2vw, 25px);
            font-weight: 700;
            line-height: 1.3;
            overflow-wrap: anywhere;
        }

        .stat-description {
            color: var(--muted);
            font-size: 11px;
            margin-top: 12px;
        }

        .stat-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 700;
        }

        .section-description {
            color: var(--muted);
            font-size: 12px;
        }

        .content-card-header {
            padding: 17px;
            border-bottom: 1px solid var(--border);
        }

        .content-card-body {
            padding: 15px 17px;
        }

        .table {
            font-size: 12px;
            margin-bottom: 0;
        }

        .table thead th {
            background: #f5f8f6;
            color: var(--muted);
            font-weight: 500;
            font-size: 11px;
            border-bottom: 1px solid var(--border);
            padding: 11px 9px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 12px 9px;
            border-color: var(--border);
            vertical-align: middle;
        }

        .transaction-code {
            font-weight: 600;
            color: var(--text);
        }

        .payment-badge {
            display: inline-block;
            background: var(--primary-light);
            color: var(--primary);
            border-radius: 6px;
            padding: 5px 9px;
            font-size: 11px;
            white-space: nowrap;
        }

        .stock-item {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 13px 0;
            border-bottom: 1px solid var(--border);
        }

        .stock-item:last-child {
            border-bottom: none;
        }

        .stock-item-icon {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: #f1f5f2;
            color: #61796b;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .stock-item-name {
            font-weight: 600;
            font-size: 12px;
        }

        .stock-item-info {
            color: var(--muted);
            font-size: 11px;
            margin-top: 4px;
        }

        .stock-item-value {
            text-align: right;
            font-size: 12px;
            font-weight: 700;
            color: var(--primary);
            white-space: nowrap;
        }

        .stock-item-status {
            color: var(--muted);
            font-size: 10px;
            font-weight: 400;
            margin-top: 4px;
        }

        .stock-empty {
            text-align: center;
            padding: 30px 10px;
            color: var(--muted);
        }

        .stock-empty i {
            font-size: 30px;
            color: var(--primary);
        }

        .card-link {
            color: var(--primary);
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
        }

        .card-link:hover {
            color: var(--primary-dark);
        }

        .footer-info {
            color: var(--muted);
            font-size: 11px;
            margin-top: 25px;
        }

        .mobile-header {
            display: none;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                display: none;
            }

            .main-content {
                margin-left: 0;
            }

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

            .content-area {
                padding: 20px 18px;
            }

            .topbar {
                padding: 15px 18px;
            }
        }

        @media (max-width: 575.98px) {
            .page-title {
                font-size: 21px;
            }

            .content-area {
                padding: 17px 13px;
            }

            .stat-card {
                padding: 14px;
            }

            .stat-value {
                font-size: 19px;
            }

            .welcome-title {
                font-size: 15px;
            }

            .btn-primary-custom {
                padding: 10px 12px;
            }

            .topbar-date {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>

{{-- SIDEBAR DESKTOP --}}
<aside class="sidebar">

    <a href="{{ route('dashboard') }}" class="brand">
        <span class="brand-icon">
            <i class="bi bi-shop"></i>
        </span>
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

    <a href="{{ route('dashboard') }}" class="side-link active">
        <i class="bi bi-grid"></i>
        Dashboard
    </a>

    <a href="{{ route('products.index') }}" class="side-link">
        <i class="bi bi-box-seam"></i>
        Data Barang
    </a>

    <a href="{{ route('categories.index') }}" class="side-link">
        <i class="bi bi-tags"></i>
        Kategori Barang
    </a>

    <a href="{{ route('stock-ins.index') }}" class="side-link">
        <i class="bi bi-box-arrow-in-down"></i>
        Barang Masuk
    </a>

    <a href="{{ route('sales.index') }}" class="side-link">
        <i class="bi bi-cart3"></i>
        Kasir
    </a>

    <a href="{{ route('products.index') }}" class="side-link">
        <i class="bi bi-box"></i>
        Persediaan
    </a>

    <a href="{{ route('reports.index') }}" class="side-link">
        <i class="bi bi-file-earmark-bar-graph"></i>
        Laporan
    </a>

    <div class="sidebar-bottom">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="side-link border-0 bg-transparent w-100 text-start">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </button>
        </form>

        <div class="sidebar-footer">
            StokMart • Toko Laris
        </div>
    </div>

</aside>

{{-- HEADER MOBILE --}}
<div class="mobile-header">
    <div class="d-flex justify-content-between align-items-center">

        <a href="{{ route('dashboard') }}" class="brand">
            <span class="brand-icon">
                <i class="bi bi-shop"></i>
            </span>
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

            <a href="{{ route('dashboard') }}" class="side-link active">
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

            <a href="{{ route('reports.index') }}" class="side-link">
                <i class="bi bi-file-earmark-bar-graph"></i> Laporan
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="side-link border-0 bg-transparent w-100 text-start">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>

        </div>
    </div>
</div>

{{-- KONTEN UTAMA --}}
<main class="main-content">

    {{-- TOPBAR --}}
    <header class="topbar d-flex justify-content-between align-items-center">

        <h1 class="page-title">Dashboard</h1>

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

        {{-- SAMBUTAN --}}
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

            <div>
                <h2 class="welcome-title mb-2">
                    Selamat Datang di StokMart - Toko Laris
                </h2>

                <p class="welcome-description mb-0">
                    Berikut ringkasan persediaan dan penjualan toko Anda hari ini.
                </p>
            </div>

            <a href="{{ route('sales.create') }}"
               class="btn-primary-custom">
                <i class="bi bi-cart3 me-2"></i>
                Buka Kasir
            </a>

        </div>

        {{-- RINGKASAN --}}
        <div class="row g-3 mb-4">

            <div class="col-6 col-xl-3">
                <div class="stat-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="stat-label">Omzet Hari Ini</div>
                        <div class="stat-icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                    </div>

                    <div class="stat-value" style="color: var(--primary);">
                        Rp{{ number_format($todayRevenue, 0, ',', '.') }}
                    </div>

                    <div class="stat-description">
                        Total penjualan hari ini
                    </div>

                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="stat-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="stat-label">Transaksi Hari Ini</div>
                        <div class="stat-icon">
                            <i class="bi bi-receipt"></i>
                        </div>
                    </div>

                    <div class="stat-value">
                        {{ number_format($todayTransactions, 0, ',', '.') }}
                    </div>

                    <div class="stat-description">
                        Transaksi berhasil
                    </div>

                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="stat-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="stat-label">Produk Terjual Hari Ini</div>
                        <div class="stat-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>
                    </div>

                    <div class="stat-value">
                        {{ number_format($todayProductsSold, 0, ',', '.') }}
                    </div>

                    <div class="stat-description">
                        Total unit barang terjual
                    </div>

                </div>
            </div>

            <div class="col-6 col-xl-3">
                <div class="stat-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="stat-label">Total Omzet Keseluruhan</div>
                        <div class="stat-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                    </div>

                    <div class="stat-value" style="color: var(--primary);">
                        Rp{{ number_format($totalRevenue, 0, ',', '.') }}
                    </div>

                    <div class="stat-description">
                        Akumulasi seluruh penjualan
                    </div>

                </div>
            </div>

        </div>

        {{-- PENJUALAN DAN STOK MENIPIS --}}
        <div class="row g-3">

            {{-- TRANSAKSI TERBARU --}}
            <div class="col-xl-8">

                <div class="content-card">

                    <div class="content-card-header d-flex justify-content-between align-items-center gap-2">

                        <div>
                            <h3 class="section-title mb-1">
                                Penjualan Terbaru
                            </h3>

                            <p class="section-description mb-0">
                                Transaksi terakhir yang berhasil diproses.
                            </p>
                        </div>

                        <a href="{{ route('sales.index') }}" class="card-link text-nowrap">
                            Lihat semua
                            <i class="bi bi-chevron-right ms-1"></i>
                        </a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>No. Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Kasir</th>
                                    <th>Total</th>
                                    <th>Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($recentSales as $sale)

                                    <tr>
                                        <td>
                                            <span class="transaction-code">
                                                {{ $sale->transaction_code }}
                                            </span>
                                        </td>

                                        <td>
                                            {{ $sale->transaction_date->format('d M Y') }}
                                            <div class="text-muted" style="font-size: 10px;">
                                                {{ $sale->transaction_date->format('H:i') }} WIB
                                            </div>
                                        </td>

                                        <td>
                                            {{ $sale->user->username ?? '-' }}
                                        </td>

                                        <td class="fw-semibold text-nowrap">
                                            Rp{{ number_format($sale->total, 0, ',', '.') }}
                                        </td>

                                        <td>
                                            <span class="payment-badge">
                                                {{ $sale->payment_method === 'cash' ? 'Tunai' : 'Transfer' }}
                                            </span>
                                        </td>

                                        <td>
                                            <a href="{{ route('sales.show', $sale->id) }}"
                                               class="btn btn-sm btn-outline-success">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-5">
                                            Belum ada transaksi penjualan.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>
                    </div>

                    <div class="content-card-body d-flex justify-content-between align-items-center">
                        <span class="section-description">
                            Menampilkan {{ $recentSales->count() }} transaksi terbaru
                        </span>

                        <span class="section-description">
                            Terbaru lebih dulu
                        </span>
                    </div>

                </div>

            </div>

            {{-- STOK MENIPIS --}}
            <div class="col-xl-4">

                <div class="content-card">

                    <div class="content-card-header d-flex justify-content-between align-items-center gap-2">

                        <div>
                            <h3 class="section-title mb-1">
                                Stok Menipis
                            </h3>

                            <p class="section-description mb-0">
                                Segera periksa persediaan barang.
                            </p>
                        </div>

                        <span class="badge rounded-pill"
                              style="background: var(--primary-light); color: var(--primary);">
                            {{ $lowStockCount }}
                        </span>

                    </div>

                    <div class="content-card-body">

                        @forelse ($lowStockProducts as $product)

                            <div class="stock-item">

                                <div class="stock-item-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>

                                <div class="flex-grow-1 min-width-0">
                                    <div class="stock-item-name">
                                        {{ $product->name }}
                                    </div>

                                    <div class="stock-item-info">
                                        Minimum {{ $product->minimum_stock }}
                                        {{ $product->unit }}
                                    </div>
                                </div>

                                <div class="stock-item-value">
                                    {{ $product->stock }} {{ $product->unit }}

                                    <div class="stock-item-status">
                                        {{ $product->stock <= 0 ? 'Stok habis' : 'Tersisa' }}
                                    </div>
                                </div>

                            </div>

                        @empty

                            <div class="stock-empty">
                                <i class="bi bi-check-circle"></i>

                                <div class="fw-semibold mt-2" style="color: var(--primary);">
                                    Semua Stok Aman
                                </div>

                                <div class="section-description mt-1">
                                    Tidak ada produk yang mencapai batas minimum.
                                </div>
                            </div>

                        @endforelse

                    </div>

                    <div class="content-card-body border-top">
                        <a href="{{ route('products.index') }}" class="card-link">
                            Lihat persediaan
                            <i class="bi bi-chevron-right float-end"></i>
                        </a>
                    </div>

                </div>

            </div>

        </div>

        {{-- FOOTER --}}
        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Dashboard diperbarui saat halaman dimuat</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
