
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - StokMart</title>

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
            margin-bottom: 5px;
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
            overflow: hidden;
        }

        .form-card-header {
            padding: 18px 22px;
            border-bottom: 1px solid var(--border);
        }

        .form-card-body {
            padding: 24px;
        }

        .section-title {
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .section-description {
            font-size: 12px;
            color: var(--muted);
            margin-bottom: 0;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            min-height: 43px;
            border: 1px solid #dce5df;
            border-radius: 8px;
            font-size: 13px;
            color: var(--text);
            padding: 10px 12px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(23, 107, 73, .10);
        }

        .form-control::placeholder {
            color: #a4afa8;
        }

        .form-text {
            font-size: 11px;
            color: var(--muted);
        }

        .form-section {
            margin-bottom: 25px;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .section-divider {
            border: 0;
            border-top: 1px solid var(--border);
            margin: 23px 0;
            opacity: 1;
        }

        .btn-primary-custom {
            background: var(--primary);
            color: #fff;
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 10px 17px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
            color: #fff;
        }

        .btn-primary-custom:disabled {
            background: #6c9b83;
            border-color: #6c9b83;
        }

        .btn-outline-custom {
            background: #fff;
            color: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 8px;
            padding: 10px 17px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-outline-custom:hover {
            background: var(--primary-light);
            color: var(--primary-dark);
        }

        .alert {
            font-size: 13px;
            border-radius: 8px;
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
                padding: 17px;
            }

            .form-card-header {
                padding: 16px 17px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .form-actions a,
            .form-actions button {
                width: 100%;
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

        <h1 class="page-title">Tambah Produk</h1>

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

        <div class="mb-4">
            <h2 class="welcome-title">
                Tambahkan Barang Baru
            </h2>

            <p class="welcome-description">
                Lengkapi informasi produk untuk menambahkannya ke dalam persediaan toko.
            </p>
        </div>

        <div class="form-card">

            <div class="form-card-header">
                <h3 class="section-title">
                    <i class="bi bi-box-seam me-2" style="color: var(--primary);"></i>
                    Formulir Produk
                </h3>

                <p class="section-description">
                    Isi seluruh informasi produk dengan benar.
                </p>
            </div>

            <div class="form-card-body">

                <div id="formErrors" class="alert alert-danger d-none" role="alert"></div>

                <form action="{{ route('products.store') }}"
                      method="POST"
                      id="productForm">

                    @csrf

                    {{-- INFORMASI PRODUK --}}
                    <div class="form-section">

                        <h4 class="section-title mb-3">
                            Informasi Produk
                        </h4>

                        <div class="mb-3">
                            <label class="form-label">
                                Kategori <span class="text-danger">*</span>
                            </label>

                            <select name="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror"
                                    required>

                                <option value="">Pilih Kategori</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>

                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Kode Produk <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       name="code"
                                       class="form-control @error('code') is-invalid @enderror"
                                       value="{{ old('code') }}"
                                       placeholder="Contoh: PRD001"
                                       required>

                                @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Nama Produk <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       name="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}"
                                       placeholder="Masukkan nama barang"
                                       required>

                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Satuan <span class="text-danger">*</span>
                            </label>

                            <input type="text"
                                   name="unit"
                                   class="form-control @error('unit') is-invalid @enderror"
                                   value="{{ old('unit') }}"
                                   placeholder="Contoh: pcs, kg, dus"
                                   required>

                            <div class="form-text">
                                Contoh satuan: pcs, bungkus, botol, kg, atau dus.
                            </div>

                            @error('unit')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <hr class="section-divider">

                    {{-- INFORMASI HARGA --}}
                    <div class="form-section">

                        <h4 class="section-title mb-3">
                            Informasi Harga
                        </h4>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Harga Beli (Rp) <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                       name="purchase_price"
                                       class="form-control @error('purchase_price') is-invalid @enderror"
                                       value="{{ old('purchase_price') }}"
                                       min="0"
                                       step="1"
                                       placeholder="Contoh: 3000"
                                       required>

                                @error('purchase_price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Harga Jual (Rp) <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                       name="selling_price"
                                       class="form-control @error('selling_price') is-invalid @enderror"
                                       value="{{ old('selling_price') }}"
                                       min="0"
                                       step="1"
                                       placeholder="Contoh: 4000"
                                       required>

                                @error('selling_price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <hr class="section-divider">

                    {{-- INFORMASI PERSEDIAAN --}}
                    <div class="form-section">

                        <h4 class="section-title mb-3">
                            Informasi Persediaan
                        </h4>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Stok Awal <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                       name="stock"
                                       class="form-control @error('stock') is-invalid @enderror"
                                       value="{{ old('stock', 0) }}"
                                       min="0"
                                       step="1"
                                       required>

                                <div class="form-text">
                                    Jumlah stok produk yang tersedia saat ini.
                                </div>

                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">
                                    Stok Minimum <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                       name="minimum_stock"
                                       class="form-control @error('minimum_stock') is-invalid @enderror"
                                       value="{{ old('minimum_stock', 5) }}"
                                       min="0"
                                       step="1"
                                       required>

                                <div class="form-text">
                                    Batas stok untuk memberikan peringatan persediaan menipis.
                                </div>

                                @error('minimum_stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                    </div>

                    <hr class="section-divider">

                    {{-- TOMBOL AKSI --}}
                    <div class="d-flex flex-wrap justify-content-end gap-2 mt-4 form-actions">

                        <a href="{{ route('products.index') }}"
                           class="btn-outline-custom"
                           onclick="event.preventDefault(); window.location.replace(this.href);">
                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-primary-custom">
                            <i class="bi bi-check-circle me-1"></i>
                            Simpan Produk
                        </button>

                    </div>

                </form>

            </div>
        </div>

        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Manajemen data barang</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.getElementById('productForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    const form = this;
    const button = form.querySelector('button[type="submit"]');
    const errorsBox = document.getElementById('formErrors');

    const originalButtonContent = button.innerHTML;

    button.disabled = true;
    button.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Menyimpan...';

    errorsBox.classList.add('d-none');
    errorsBox.innerHTML = '';

    try {
        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            body: new FormData(form)
        });

        const data = await response.json();

        if (response.ok && data.redirect) {
            window.location.replace(data.redirect);
            return;
        }

        if (response.status === 422) {
            const messages = Object.values(data.errors || {}).flat();

            messages.forEach(function(message) {
                const error = document.createElement('div');
                error.textContent = message;
                errorsBox.appendChild(error);
            });

            errorsBox.classList.remove('d-none');
            errorsBox.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });

        } else {
            errorsBox.textContent = data.message || 'Terjadi kesalahan saat menyimpan produk.';
            errorsBox.classList.remove('d-none');
        }

    } catch (error) {
        errorsBox.textContent = 'Gagal menghubungi server. Silakan coba kembali.';
        errorsBox.classList.remove('d-none');
    }

    button.disabled = false;
    button.innerHTML = originalButtonContent;
});
</script>

</body>
</html>
