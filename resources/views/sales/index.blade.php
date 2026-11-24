
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Penjualan - StokMart</title>

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
            padding: 10px 16px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-primary-custom:hover {
            background: var(--primary-dark);
            color: #fff;
        }

        .btn-secondary-custom {
            background: #fff;
            color: #596c61;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 9px 14px;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-secondary-custom:hover {
            background: #f3f7f4;
            color: var(--primary);
        }

        .table-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .table-card-header {
            padding: 18px;
            border-bottom: 1px solid var(--border);
        }

        .table-card-body {
            padding: 17px;
        }

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
            color: var(--text);
        }

        .form-control,
        .form-select {
            font-size: 13px;
            border-color: var(--border);
            border-radius: 8px;
            padding: 10px 12px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(23, 107, 73, .1);
        }

        .btn-search {
            background: var(--primary);
            color: #fff;
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 9px 14px;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-search:hover {
            background: var(--primary-dark);
            color: #fff;
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

        .transaction-code {
            font-weight: 600;
            color: var(--text);
            font-size: 12px;
            white-space: nowrap;
        }

        .price-text {
            font-weight: 700;
            white-space: nowrap;
        }

        .payment-badge {
            display: inline-block;
            border-radius: 6px;
            padding: 6px 10px;
            font-size: 11px;
            font-weight: 600;
            white-space: nowrap;
        }

        .payment-cash {
            background: #e8f3ed;
            color: #176b49;
        }

        .payment-transfer {
            background: #e8f1fc;
            color: #245a91;
        }

        .btn-action {
            border-radius: 7px;
            font-size: 11px;
            padding: 6px 10px;
        }

        .mobile-header {
            display: none;
        }

        .footer-info {
            color: var(--muted);
            font-size: 11px;
            margin-top: 24px;
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

    <a href="{{ route('dashboard') }}" class="side-link">
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

    <a href="{{ route('sales.index') }}" class="side-link active">
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
            <button type="submit"
                    class="side-link border-0 bg-transparent w-100 text-start">
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

            <a href="{{ route('sales.index') }}" class="side-link active">
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

        <h1 class="page-title">Kasir</h1>

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
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">

            <div>
                <h2 class="welcome-title mb-2">
                    Riwayat Transaksi Penjualan
                </h2>

                <p class="welcome-description mb-0">
                    Lihat dan kelola seluruh transaksi penjualan Toko Laris.
                </p>
            </div>

            <a href="{{ route('sales.create') }}"
               class="btn-primary-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-plus-lg me-2"></i>
                Tambah Penjualan
            </a>

        </div>

        {{-- NOTIFIKASI --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle me-2"></i>
                {{ session('error') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- FILTER TRANSAKSI --}}
        <div class="table-card mb-4">

            <div class="table-card-header">
                <h3 class="section-title mb-1">
                    <i class="bi bi-funnel me-2"></i>
                    Filter Transaksi
                </h3>

                <p class="section-description mb-0">
                    Cari transaksi berdasarkan kode atau metode pembayaran.
                </p>
            </div>

            <div class="table-card-body">

                <form action="{{ route('sales.index') }}" method="GET">

                    <div class="row g-3 align-items-end">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                Cari Kode Transaksi
                            </label>

                            <input
                                type="text"
                                name="search"
                                class="form-control"
                                placeholder="Masukkan kode transaksi..."
                                value="{{ request('search') }}"
                            >
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">
                                Metode Pembayaran
                            </label>

                            <select name="payment_method" class="form-select">
                                <option value="">Semua Metode</option>

                                <option value="cash"
                                    {{ request('payment_method') === 'cash' ? 'selected' : '' }}>
                                    Tunai
                                </option>

                                <option value="transfer"
                                    {{ request('payment_method') === 'transfer' ? 'selected' : '' }}>
                                    Transfer
                                </option>
                            </select>
                        </div>

                        <div class="col-md-2 d-flex gap-2">
                            <button type="submit" class="btn-search flex-fill">
                                <i class="bi bi-search me-1"></i>
                                Cari
                            </button>

                            <a href="{{ route('sales.index') }}"
                               class="btn-secondary-custom">
                                Reset
                            </a>
                        </div>

                    </div>

                </form>

            </div>
        </div>

        {{-- TABEL TRANSAKSI --}}
        <div class="table-card">

            <div class="table-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">

                <div>
                    <h3 class="section-title mb-1">
                        Daftar Transaksi
                    </h3>

                    <p class="section-description mb-0">
                        Informasi transaksi penjualan dan pembayaran.
                    </p>
                </div>

                <span class="badge rounded-pill px-3 py-2"
                      style="background: var(--primary-light); color: var(--primary);">
                    {{ $sales->count() }} Transaksi
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
                                <th>Total</th>
                                <th>Metode Pembayaran</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($sales as $index => $sale)

                                <tr>
                                    <td>{{ $index + 1 }}</td>

                                    <td>
                                        <span class="transaction-code">
                                            {{ $sale->transaction_code }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $sale->transaction_date->format('d-m-Y H:i') }}
                                    </td>

                                    <td>
                                        {{ $sale->user->username }}
                                    </td>

                                    <td class="price-text">
                                        Rp{{ number_format($sale->total, 0, ',', '.') }}
                                    </td>

                                    <td>
                                        @if ($sale->payment_method === 'cash')
                                            <span class="payment-badge payment-cash">
                                                <i class="bi bi-cash me-1"></i>
                                                Tunai
                                            </span>
                                        @else
                                            <span class="payment-badge payment-transfer">
                                                <i class="bi bi-credit-card me-1"></i>
                                                Transfer
                                            </span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('sales.show', $sale->id) }}"
                                           class="btn btn-outline-success btn-action">
                                            <i class="bi bi-eye me-1"></i>
                                            Detail
                                        </a>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="text-center text-muted py-5">

                                        <i class="bi bi-receipt fs-2 d-block mb-2"></i>

                                        <strong>Belum ada transaksi penjualan.</strong>

                                        <div class="mt-2">
                                            @if (request()->filled('search') || request()->filled('payment_method'))
                                                Transaksi tidak ditemukan berdasarkan pencarian atau filter.
                                            @else
                                                Transaksi penjualan akan muncul di halaman ini.
                                            @endif
                                        </div>

                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        {{-- KEMBALI --}}
        <div class="mt-3">
            <a href="{{ route('dashboard') }}"
               class="btn-secondary-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-arrow-left me-1"></i>
                Kembali ke Dashboard
            </a>
        </div>

        {{-- FOOTER --}}
        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Riwayat transaksi penjualan Toko Laris</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
