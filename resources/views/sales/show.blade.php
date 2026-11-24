
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi - StokMart</title>

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

        .receipt-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            max-width: 900px;
            margin: 0 auto;
        }

        .receipt-body {
            padding: 30px;
        }

        .receipt-heading {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px dashed #cbd8cf;
        }

        .receipt-heading h2 {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .receipt-heading p {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 0;
        }

        .receipt-heading h5 {
            font-size: 15px;
            font-weight: 700;
            margin-top: 18px;
            letter-spacing: 1px;
        }

        .receipt-meta {
            padding: 20px 0;
            border-bottom: 1px dashed #cbd8cf;
        }

        .meta-label {
            color: var(--muted);
            font-size: 11px;
            margin-bottom: 4px;
        }

        .meta-value {
            font-size: 13px;
            font-weight: 600;
            overflow-wrap: anywhere;
        }

        .receipt-table {
            margin-top: 18px;
            margin-bottom: 18px;
            font-size: 12px;
        }

        .receipt-table thead th {
            background: #f5f8f6;
            color: #53685b;
            font-size: 11px;
            padding: 12px 10px;
            border-bottom: 1px solid var(--border);
            white-space: nowrap;
        }

        .receipt-table tbody td {
            padding: 12px 10px;
            border-color: var(--border);
            vertical-align: middle;
        }

        .payment-summary {
            max-width: 390px;
            margin-left: auto;
        }

        .payment-summary table {
            font-size: 13px;
        }

        .payment-summary th,
        .payment-summary td {
            padding: 9px 5px;
        }

        .payment-total {
            color: var(--primary);
            font-size: 16px;
            font-weight: 700;
        }

        .receipt-thanks {
            text-align: center;
            border-top: 1px dashed #cbd8cf;
            margin-top: 20px;
            padding-top: 22px;
        }

        .receipt-thanks h6 {
            font-size: 14px;
            font-weight: 700;
        }

        .receipt-thanks p {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 0;
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
            background: #fff;
            color: #596c61;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 10px 16px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-secondary-custom:hover {
            background: #f3f7f4;
            color: var(--primary);
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

            .receipt-body {
                padding: 18px;
            }

            .receipt-heading h2 {
                font-size: 21px;
            }
        }

        /* Tampilan khusus cetak struk */
        @media print {
            @page {
                size: auto;
                margin: 12mm;
            }

            body {
                background: #fff !important;
                color: #000 !important;
                font-size: 12px;
            }

            .no-print,
            .sidebar,
            .mobile-header,
            .topbar,
            .footer-info {
                display: none !important;
            }

            .main-content {
                margin: 0 !important;
                min-height: auto !important;
            }

            .content-area {
                padding: 0 !important;
            }

            .receipt-card {
                max-width: 100% !important;
                width: 100% !important;
                margin: 0 !important;
                border: none !important;
                border-radius: 0 !important;
                box-shadow: none !important;
            }

            .receipt-body {
                padding: 0 !important;
            }

            .receipt-heading p,
            .meta-label,
            .receipt-thanks p {
                color: #333 !important;
            }

            .receipt-table {
                width: 100% !important;
                border-collapse: collapse !important;
            }

            .receipt-table th,
            .receipt-table td {
                border: 1px solid #bbb !important;
                color: #000 !important;
            }

            .receipt-table thead th {
                background: #eee !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .payment-summary {
                max-width: 100% !important;
            }

            .payment-total {
                color: #000 !important;
            }

            .receipt-heading,
            .receipt-meta,
            .receipt-thanks {
                border-color: #999 !important;
            }

            .receipt-table tr,
            .payment-summary tr {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>

{{-- SIDEBAR DESKTOP --}}
<aside class="sidebar no-print">

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
<div class="mobile-header no-print">

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

    <header class="topbar no-print d-flex justify-content-between align-items-center">

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
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4 no-print">

            <div>
                <h2 class="welcome-title mb-2">
                    Detail Transaksi Penjualan
                </h2>

                <p class="welcome-description mb-0">
                    Informasi lengkap transaksi penjualan Toko Laris.
                </p>
            </div>

            <div class="d-flex flex-wrap gap-2">

                <a href="{{ route('sales.index') }}"
                   class="btn-secondary-custom"
                   onclick="event.preventDefault(); window.location.replace(this.href);">
                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali
                </a>

                <button type="button"
                        class="btn-primary-custom"
                        onclick="window.print()">
                    <i class="bi bi-printer me-1"></i>
                    Cetak Struk
                </button>

            </div>

        </div>

        @if(session('success'))
            <div class="alert alert-success no-print">
                <i class="bi bi-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        @endif

        {{-- STRUK TRANSAKSI --}}
        <div class="receipt-card">

            <div class="receipt-body">

                {{-- IDENTITAS TOKO --}}
                <div class="receipt-heading">

                    <h2>TOKO LARIS</h2>

                    <p>
                        Desa Lebak Kauman RT 01/05
                    </p>

                    <p>
                        Kecamatan Pakis Aji, Kabupaten Jepara
                    </p>

                    <h5>STRUK PENJUALAN</h5>

                </div>

                {{-- INFORMASI TRANSAKSI --}}
                <div class="receipt-meta">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="mb-3">
                                <div class="meta-label">
                                    Kode Transaksi
                                </div>

                                <div class="meta-value">
                                    {{ $sale->transaction_code }}
                                </div>
                            </div>

                            <div>
                                <div class="meta-label">
                                    Tanggal Transaksi
                                </div>

                                <div class="meta-value">
                                    {{ $sale->transaction_date->format('d-m-Y H:i') }}
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="mb-3">
                                <div class="meta-label">
                                    Kasir
                                </div>

                                <div class="meta-value">
                                    {{ $sale->user->username }}
                                </div>
                            </div>

                            <div>
                                <div class="meta-label">
                                    Metode Pembayaran
                                </div>

                                <div class="meta-value">
                                    {{ $sale->payment_method === 'cash' ? 'Tunai' : 'Transfer' }}
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- DAFTAR BARANG --}}
                <div class="table-responsive">

                    <table class="table receipt-table align-middle">

                        <thead>
                            <tr>
                                <th width="6%">No</th>
                                <th>Nama Produk</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-end">Harga</th>
                                <th class="text-end">Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($sale->details as $index => $detail)
                                <tr>

                                    <td>{{ $index + 1 }}</td>

                                    <td>
                                        {{ $detail->product->name }}
                                    </td>

                                    <td class="text-center">
                                        {{ $detail->quantity }}
                                    </td>

                                    <td class="text-end">
                                        Rp {{ number_format($detail->selling_price, 0, ',', '.') }}
                                    </td>

                                    <td class="text-end">
                                        Rp {{ number_format($detail->subtotal, 0, ',', '.') }}
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

                {{-- RINGKASAN PEMBAYARAN --}}
                <div class="payment-summary">

                    <table class="table table-sm mb-0">

                        <tr>
                            <th class="fw-normal">
                                Total Belanja
                            </th>

                            <td class="text-end payment-total">
                                Rp {{ number_format($sale->total, 0, ',', '.') }}
                            </td>
                        </tr>

                        <tr>
                            <th class="fw-normal">
                                Uang Diterima
                            </th>

                            <td class="text-end">
                                Rp {{ number_format($sale->amount_received, 0, ',', '.') }}
                            </td>
                        </tr>

                        <tr>
                            <th class="fw-normal">
                                Kembalian
                            </th>

                            <td class="text-end fw-bold">
                                Rp {{ number_format($sale->change_amount, 0, ',', '.') }}
                            </td>
                        </tr>

                    </table>

                </div>

                {{-- UCAPAN --}}
                <div class="receipt-thanks">

                    <h6>Terima Kasih Telah Berbelanja!</h6>

                    <p>
                        Semoga hari Anda menyenangkan.
                    </p>

                    <p class="mt-2">
                        <strong>TOKO LARIS</strong>
                    </p>

                </div>

            </div>

        </div>

        <div class="footer-info d-flex flex-wrap justify-content-between gap-2 no-print">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Detail transaksi penjualan</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
