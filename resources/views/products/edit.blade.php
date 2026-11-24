
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - StokMart</title>

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
            margin-bottom: 7px;
        }

        .welcome-description {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 0;
        }

        .form-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            max-width: 850px;
        }

        .form-card-header {
            padding: 20px 22px;
            border-bottom: 1px solid var(--border);
        }

        .form-card-body {
            padding: 24px 22px;
        }

        .section-title {
            font-size: 15px;
            font-weight: 700;
        }

        .section-description {
            color: var(--muted);
            font-size: 12px;
        }

        .form-label {
            color: #40584b;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .form-control,
        .form-select {
            min-height: 42px;
            border: 1px solid #dce6df;
            border-radius: 8px;
            font-size: 13px;
            padding: 9px 12px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(23, 107, 73, .10);
        }

        .input-hint {
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
        }

        .form-section {
            border-bottom: 1px solid var(--border);
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .form-section:last-child {
            border-bottom: 0;
            padding-bottom: 0;
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

        .btn-outline-custom {
            background: #fff;
            color: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 9px 15px;
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

            .form-card-body {
                padding: 18px 15px;
            }

            .form-card-header {
                padding: 17px 15px;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions button,
            .form-actions a {
                width: 100%;
                text-align: center;
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

    <a href="{{ route('products.index') }}" class="side-link active">
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

            <a href="{{ route('products.index') }}" class="side-link active">
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

        <h1 class="page-title">Edit Produk</h1>

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
                <h2 class="welcome-title">
                    Perbarui Informasi Produk
                </h2>

                <p class="welcome-description">
                    Ubah informasi produk sesuai kondisi terbaru toko.
                </p>
            </div>

            <a href="{{ route('products.index') }}"
               class="btn-outline-custom"
               onclick="event.preventDefault(); window.location.replace(this.href);">
                <i class="bi bi-arrow-left me-1"></i>
                Kembali
            </a>

        </div>

        {{-- FORM EDIT PRODUK --}}
        <div class="form-card">

            <div class="form-card-header">

                <h3 class="section-title mb-1">
                    <i class="bi bi-pencil-square me-2" style="color: var(--primary);"></i>
                    Form Edit Produk
                </h3>

                <p class="section-description mb-0">
                    Periksa kembali data produk sebelum menyimpan perubahan.
                </p>

            </div>

            <div class="form-card-body">

                <form action="{{ route('products.update', $product->id) }}"
                      method="POST"
                      id="editProductForm">

                    @csrf
                    @method('PUT')

                    {{-- INFORMASI PRODUK --}}
                    <div class="form-section">

                        <h4 class="section-title mb-3">
                            Informasi Produk
                        </h4>

                        <div class="mb-3">

                            <label class="form-label">Kategori Produk</label>

                            <select name="category_id" class="form-select" required>
                                <option value="">Pilih Kategori</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>

                            @error('category_id')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Kode Produk</label>

                            <input type="text"
                                   name="code"
                                   class="form-control"
                                   value="{{ old('code', $product->code) }}"
                                   placeholder="Contoh: PRD001"
                                   required>

                            @error('code')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Nama Produk</label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ old('name', $product->name) }}"
                                   placeholder="Masukkan nama produk"
                                   required>

                            @error('name')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="mb-0">

                            <label class="form-label">Satuan</label>

                            <input type="text"
                                   name="unit"
                                   class="form-control"
                                   value="{{ old('unit', $product->unit) }}"
                                   placeholder="Contoh: pcs, kg, dus"
                                   required>

                            <div class="input-hint">
                                Contoh satuan: pcs, kg, liter, dus, atau pak.
                            </div>

                            @error('unit')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror

                        </div>

                    </div>

                    {{-- INFORMASI HARGA --}}
                    <div class="form-section">

                        <h4 class="section-title mb-3">
                            Informasi Harga
                        </h4>

                        <div class="row">

                            <div class="col-md-6 mb-3 mb-md-0">

                                <label class="form-label">Harga Beli (Rp)</label>

                                <input type="number"
                                       name="purchase_price"
                                       class="form-control"
                                       value="{{ old('purchase_price', $product->purchase_price) }}"
                                       min="0"
                                       required>

                                @error('purchase_price')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">Harga Jual (Rp)</label>

                                <input type="number"
                                       name="selling_price"
                                       class="form-control"
                                       value="{{ old('selling_price', $product->selling_price) }}"
                                       min="0"
                                       required>

                                @error('selling_price')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                        </div>

                    </div>

                    {{-- INFORMASI STOK --}}
                    <div class="form-section">

                        <h4 class="section-title mb-3">
                            Informasi Persediaan
                        </h4>

                        <div class="row">

                            <div class="col-md-6 mb-3 mb-md-0">

                                <label class="form-label">Stok Saat Ini</label>

                                <input type="number"
                                       name="stock"
                                       class="form-control"
                                       value="{{ old('stock', $product->stock) }}"
                                       min="0"
                                       required>

                                <div class="input-hint">
                                    Jumlah stok produk yang tersedia saat ini.
                                </div>

                                @error('stock')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                            <div class="col-md-6">

                                <label class="form-label">Stok Minimum</label>

                                <input type="number"
                                       name="minimum_stock"
                                       class="form-control"
                                       value="{{ old('minimum_stock', $product->minimum_stock) }}"
                                       min="0"
                                       required>

                                <div class="input-hint">
                                    Batas minimum stok sebelum muncul peringatan.
                                </div>

                                @error('minimum_stock')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                            </div>

                        </div>

                    </div>

                    {{-- TOMBOL AKSI --}}
                    <div class="d-flex flex-wrap gap-2 mt-4 form-actions">

                        <button type="submit" class="btn-primary-custom">
                            <i class="bi bi-check-circle me-1"></i>
                            Simpan Perubahan
                        </button>

                        <a href="{{ route('products.index') }}"
                           class="btn-outline-custom"
                           onclick="event.preventDefault(); window.location.replace(this.href);">
                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali ke Data Barang
                        </a>

                    </div>

                </form>

            </div>
        </div>

        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Pengelolaan data produk</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
