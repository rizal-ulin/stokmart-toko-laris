
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Masuk - StokMart</title>

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

        .summary-card,
        .table-card {
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

        .btn-action {
            border-radius: 7px;
            font-size: 11px;
            padding: 6px 9px;
        }

        .filter-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .filter-card-header {
            padding: 18px;
            border-bottom: 1px solid var(--border);
        }

        .filter-card-body {
            padding: 17px;
        }

        .form-label {
            color: var(--text);
            font-size: 12px;
            font-weight: 600;
        }

        .form-control {
            font-size: 13px;
            min-height: 40px;
            border-color: var(--border);
            border-radius: 8px;
        }

        .filter-button {
            border-radius: 8px;
            font-size: 12px;
            padding: 9px 14px;
        }

        .badge-count {
            background: var(--primary-light);
            color: var(--primary);
            font-size: 11px;
            font-weight: 600;
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

            .summary-value {
                font-size: 20px;
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

    <a href="{{ route('stock-ins.index') }}" class="side-link active">
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

            <a href="{{ route('stock-ins.index') }}" class="side-link active">
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

    {{-- TOPBAR --}}
    <header class="topbar d-flex justify-content-between align-items-center">

        <h1 class="page-title">Barang Masuk</h1>

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
                    Kelola Barang Masuk
                </h2>

                <p class="welcome-description mb-0">
                    Lihat dan kelola seluruh transaksi barang masuk Toko Laris.
                </p>
            </div>

            <a href="{{ route('stock-ins.create') }}"
               class="btn-primary-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-plus-lg me-2"></i>
                Tambah Barang Masuk
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

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- RINGKASAN --}}
        <div class="row g-3 mb-4">

            <div class="col-6 col-xl-4">
                <div class="summary-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="summary-label">Total Transaksi</div>
                        <div class="summary-icon">
                            <i class="bi bi-receipt"></i>
                        </div>
                    </div>

                    <div class="summary-value">
                        {{ number_format($totalTransactions, 0, ',', '.') }}
                    </div>

                    <div class="section-description mt-2">
                        Transaksi barang masuk
                    </div>

                </div>
            </div>

            <div class="col-6 col-xl-4">
                <div class="summary-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="summary-label">Total Unit Barang</div>
                        <div class="summary-icon">
                            <i class="bi bi-boxes"></i>
                        </div>
                    </div>

                    <div class="summary-value text-success">
                        {{ number_format($totalItems, 0, ',', '.') }}
                    </div>

                    <div class="section-description mt-2">
                        Seluruh unit barang masuk
                    </div>

                </div>
            </div>

            <div class="col-6 col-xl-4">
                <div class="summary-card">

                    <div class="d-flex justify-content-between align-items-start">
                        <div class="summary-label">Total Biaya</div>
                        <div class="summary-icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                    </div>

                    <div class="summary-value">
                        Rp {{ number_format($totalCost, 0, ',', '.') }}
                    </div>

                    <div class="section-description mt-2">
                        Biaya pembelian barang
                    </div>

                </div>
            </div>

        </div>

        {{-- FILTER RIWAYAT --}}
        <div class="filter-card mb-4">

            <div class="filter-card-header">
                <h3 class="section-title mb-1">
                    <i class="bi bi-funnel me-2"></i>Filter Riwayat
                </h3>

                <p class="section-description mb-0">
                    Cari transaksi berdasarkan nama produk atau tanggal.
                </p>
            </div>

            <div class="filter-card-body">

                <form action="{{ route('stock-ins.index') }}" method="GET">

                    <div class="row g-3">

                        <div class="col-md-4">
                            <label class="form-label">Nama Produk</label>
                            <input type="text"
                                   name="search"
                                   class="form-control"
                                   placeholder="Cari nama produk..."
                                   value="{{ $search }}">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Tanggal Awal</label>
                            <input type="date"
                                   name="date_from"
                                   class="form-control"
                                   value="{{ $dateFrom }}">
                        </div>

                        <div class="col-md-3">
                            <label class="form-label">Tanggal Akhir</label>
                            <input type="date"
                                   name="date_to"
                                   class="form-control"
                                   value="{{ $dateTo }}">
                        </div>

                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit"
                                    class="btn btn-success filter-button w-100">
                                <i class="bi bi-search me-1"></i> Filter
                            </button>
                        </div>

                    </div>

                    <div class="mt-3">
                        <a href="{{ route('stock-ins.index') }}"
                           class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-arrow-counterclockwise me-1"></i>
                            Reset Filter
                        </a>
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
                        Informasi riwayat penambahan stok barang.
                    </p>
                </div>

                <span class="badge rounded-pill px-3 py-2 badge-count">
                    {{ $stockIns->count() }} Transaksi
                </span>

            </div>

            <div class="table-card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total Unit Barang</th>
                                <th>Total Biaya</th>
                                <th>Petugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($stockIns as $stockIn)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        {{ \Carbon\Carbon::parse($stockIn->transaction_date)->format('d-m-Y H:i') }}
                                    </td>

                                    <td class="fw-semibold">
                                        {{ number_format($stockIn->total_items, 0, ',', '.') }}
                                    </td>

                                    <td class="fw-semibold">
                                        Rp {{ number_format($stockIn->total_cost, 0, ',', '.') }}
                                    </td>

                                    <td>
                                        {{ $stockIn->user->username ?? '-' }}
                                    </td>

                                    <td>
                                        <a href="{{ route('stock-ins.show', $stockIn->id) }}"
                                           class="btn btn-outline-success btn-action">
                                            <i class="bi bi-eye me-1"></i>
                                            Detail
                                        </a>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center text-muted py-5">
                                        <i class="bi bi-inbox fs-2 d-block mb-2"></i>

                                        <strong>Tidak ada transaksi ditemukan.</strong>

                                        <div class="mt-2">
                                            Coba ubah kata kunci atau rentang tanggal filter.
                                        </div>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                        @if ($stockIns->count() > 0)
                            <tfoot>
                                <tr class="table-light fw-bold">
                                    <td colspan="2">Total</td>

                                    <td>
                                        {{ number_format($stockIns->sum('total_items'), 0, ',', '.') }}
                                    </td>

                                    <td colspan="3">
                                        Rp {{ number_format($stockIns->sum('total_cost'), 0, ',', '.') }}
                                    </td>
                                </tr>
                            </tfoot>
                        @endif

                    </table>

                </div>

            </div>
        </div>

        {{-- FOOTER --}}
        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Riwayat barang masuk Toko Laris</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
