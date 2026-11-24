
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Stok Masuk - StokMart</title>

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

        .table-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .table-card-header {
            padding: 18px;
            border-bottom: 1px solid var(--border);
        }

        .table-card-body {
            padding: 20px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 700;
        }

        .section-description {
            color: var(--muted);
            font-size: 12px;
        }

        .detail-label {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 6px;
        }

        .detail-value {
            color: var(--text);
            font-size: 14px;
            font-weight: 600;
            word-break: break-word;
        }

        .detail-item {
            padding: 13px;
            background: #fafcfb;
            border: 1px solid var(--border);
            border-radius: 9px;
            height: 100%;
        }

        .transaction-number {
            color: var(--primary);
            font-weight: 700;
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

        .product-name {
            font-weight: 600;
            color: var(--text);
            font-size: 13px;
        }

        .price-text {
            white-space: nowrap;
        }

        .total-box {
            background: var(--primary-light);
            border-radius: 10px;
            padding: 17px 20px;
        }

        .total-label {
            color: var(--muted);
            font-size: 12px;
        }

        .total-value {
            color: var(--primary);
            font-size: 22px;
            font-weight: 700;
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

        .btn-outline-custom {
            background: #fff;
            color: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 9px 14px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-outline-custom:hover {
            background: var(--primary-light);
            color: var(--primary-dark);
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

            .table-card-body {
                padding: 14px;
            }

            .total-value {
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

    <header class="topbar d-flex justify-content-between align-items-center">

        <h1 class="page-title">Detail Stok Masuk</h1>

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
                    Informasi Transaksi
                </h2>

                <p class="welcome-description mb-0">
                    Lihat informasi lengkap pembelian dan barang yang masuk ke toko.
                </p>
            </div>

            <a href="{{ route('stock-ins.index') }}"
               class="btn-outline-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-arrow-left me-1"></i>
                Kembali
            </a>

        </div>

        {{-- INFORMASI TRANSAKSI --}}
        <div class="table-card">

            <div class="table-card-header">
                <h3 class="section-title mb-1">
                    <i class="bi bi-receipt me-2" style="color: var(--primary);"></i>
                    Informasi Transaksi
                </h3>

                <p class="section-description mb-0">
                    Ringkasan informasi transaksi stok masuk.
                </p>
            </div>

            <div class="table-card-body">

                <div class="row g-3">

                    <div class="col-12 col-md-6">
                        <div class="detail-item">
                            <div class="detail-label">
                                Nomor Transaksi
                            </div>

                            <div class="detail-value transaction-number">
                                STK-{{ str_pad($stockIn->id, 5, '0', STR_PAD_LEFT) }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="detail-item">
                            <div class="detail-label">
                                Tanggal Transaksi
                            </div>

                            <div class="detail-value">
                                {{ \Carbon\Carbon::parse($stockIn->transaction_date)->format('d-m-Y H:i') }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="detail-item">
                            <div class="detail-label">
                                Petugas
                            </div>

                            <div class="detail-value">
                                <i class="bi bi-person me-1" style="color: var(--primary);"></i>
                                {{ $stockIn->user->username ?? '-' }}
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="detail-item">
                            <div class="detail-label">
                                Total Unit Barang
                            </div>

                            <div class="detail-value">
                                {{ number_format($stockIn->total_items, 0, ',', '.') }} Unit
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- RINCIAN BARANG --}}
        <div class="table-card">

            <div class="table-card-header">
                <h3 class="section-title mb-1">
                    <i class="bi bi-box-seam me-2" style="color: var(--primary);"></i>
                    Rincian Barang
                </h3>

                <p class="section-description mb-0">
                    Daftar produk yang tercatat dalam transaksi ini.
                </p>
            </div>

            <div class="table-card-body">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga Beli</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($stockIn->details as $detail)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        <div class="product-name">
                                            {{ $detail->product->name ?? 'Produk tidak tersedia' }}
                                        </div>
                                    </td>

                                    <td class="fw-semibold">
                                        {{ number_format($detail->quantity, 0, ',', '.') }}
                                    </td>

                                    <td class="price-text">
                                        Rp{{ number_format($detail->purchase_price, 0, ',', '.') }}
                                    </td>

                                    <td class="price-text fw-semibold">
                                        Rp{{ number_format($detail->subtotal, 0, ',', '.') }}
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="text-center text-muted py-5">
                                        <i class="bi bi-box-seam fs-2 d-block mb-2"></i>

                                        <strong>Belum ada rincian barang.</strong>

                                        <div class="mt-2">
                                            Rincian produk untuk transaksi ini belum tersedia.
                                        </div>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="total-box mt-4 d-flex flex-wrap justify-content-between align-items-center gap-2">

                    <div>
                        <div class="total-label mb-1">
                            Total Biaya Pembelian
                        </div>

                        <div class="total-value">
                            Rp{{ number_format($stockIn->total_cost, 0, ',', '.') }}
                        </div>
                    </div>

                    <i class="bi bi-wallet2 fs-2" style="color: var(--primary);"></i>

                </div>

            </div>
        </div>

        {{-- TOMBOL KEMBALI --}}
        <div class="d-flex justify-content-end">

            <a href="{{ route('stock-ins.index') }}"
               class="btn-outline-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-arrow-left me-1"></i>
                Kembali ke Data Stok Masuk
            </a>

        </div>

        {{-- FOOTER --}}
        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Detail transaksi barang masuk</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
