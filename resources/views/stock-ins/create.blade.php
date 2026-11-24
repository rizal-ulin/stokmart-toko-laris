
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Stok Masuk - StokMart</title>

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

        .form-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 7px;
        }

        .form-control,
        .form-select {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 13px;
            color: var(--text);
            min-height: 40px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(23, 107, 73, .10);
        }

        .product-row {
            background: #fafcfb;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 12px;
        }

        .subtotal {
            background: #f0f5f2 !important;
            font-weight: 600;
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
            padding: 9px 14px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-outline-custom:hover {
            background: var(--primary-light);
            color: var(--primary-dark);
        }

        .btn-remove {
            width: 36px;
            height: 36px;
            border-radius: 8px;
        }

        .total-box {
            background: var(--primary-light);
            border-radius: 10px;
            padding: 17px;
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

        <h1 class="page-title">Tambah Stok Masuk</h1>

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
        <div class="mb-4">
            <h2 class="welcome-title mb-2">
                Catat Barang Masuk
            </h2>

            <p class="welcome-description mb-0">
                Masukkan informasi pembelian untuk memperbarui persediaan Toko Laris.
            </p>
        </div>

        {{-- NOTIFIKASI VALIDASI --}}
        @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm" role="alert">
                <div class="fw-bold mb-2">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    Periksa kembali data yang diisi:
                </div>

                <ul class="mb-0 ps-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @php
            $oldProducts = old('products', [
                [
                    'product_id' => '',
                    'quantity' => '',
                    'purchase_price' => ''
                ]
            ]);
        @endphp

        <form action="{{ route('stock-ins.store') }}" method="POST">
            @csrf

            {{-- INFORMASI TRANSAKSI --}}
            <div class="table-card">

                <div class="table-card-header">
                    <h3 class="section-title mb-1">
                        <i class="bi bi-calendar-check me-2" style="color: var(--primary);"></i>
                        Informasi Transaksi
                    </h3>

                    <p class="section-description mb-0">
                        Tentukan tanggal dan waktu pembelian barang.
                    </p>
                </div>

                <div class="table-card-body">

                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <label class="form-label">
                                Tanggal dan Waktu Transaksi
                            </label>

                            <input type="datetime-local"
                                   name="transaction_date"
                                   class="form-control"
                                   value="{{ old('transaction_date', now()->format('Y-m-d\TH:i')) }}"
                                   required>
                        </div>
                    </div>

                </div>
            </div>

            {{-- DETAIL BARANG --}}
            <div class="table-card">

                <div class="table-card-header d-flex flex-wrap justify-content-between align-items-center gap-3">

                    <div>
                        <h3 class="section-title mb-1">
                            <i class="bi bi-box-seam me-2" style="color: var(--primary);"></i>
                            Detail Barang
                        </h3>

                        <p class="section-description mb-0">
                            Pilih barang dan masukkan jumlah serta harga belinya.
                        </p>
                    </div>

                    <button type="button"
                            class="btn-primary-custom"
                            id="addProduct">
                        <i class="bi bi-plus-lg me-1"></i>
                        Tambah Barang
                    </button>

                </div>

                <div class="table-card-body">

                    <div id="productContainer">

                        @foreach ($oldProducts as $index => $oldProduct)

                            <div class="row g-3 product-row align-items-end">

                                <div class="col-12 col-lg-4">
                                    <label class="form-label">Produk</label>

                                    <select name="products[{{ $index }}][product_id]"
                                            class="form-select"
                                            required>

                                        <option value="">Pilih Produk</option>

                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}"
                                                {{ (string) ($oldProduct['product_id'] ?? '') === (string) $product->id ? 'selected' : '' }}>
                                                {{ $product->name }} ({{ $product->unit }})
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-6 col-lg-2">
                                    <label class="form-label">Jumlah</label>

                                    <input type="number"
                                           name="products[{{ $index }}][quantity]"
                                           class="form-control quantity"
                                           min="1"
                                           placeholder="Jumlah"
                                           value="{{ $oldProduct['quantity'] ?? '' }}"
                                           required>
                                </div>

                                <div class="col-6 col-lg-2">
                                    <label class="form-label">Harga Beli</label>

                                    <input type="number"
                                           name="products[{{ $index }}][purchase_price]"
                                           class="form-control purchase-price"
                                           min="0"
                                           placeholder="Harga beli"
                                           value="{{ $oldProduct['purchase_price'] ?? '' }}"
                                           required>
                                </div>

                                <div class="col-9 col-lg-3">
                                    <label class="form-label">Subtotal</label>

                                    <input type="text"
                                           class="form-control subtotal"
                                           value="Rp 0"
                                           readonly>
                                </div>

                                <div class="col-3 col-lg-1 d-flex justify-content-end">
                                    <button type="button"
                                            class="btn btn-outline-danger btn-remove removeProduct"
                                            title="Hapus barang">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>

                            </div>

                        @endforeach

                    </div>

                    <div class="total-box mt-4 d-flex flex-wrap justify-content-between align-items-center gap-2">

                        <div>
                            <div class="total-label mb-1">
                                Total Biaya Pembelian
                            </div>

                            <div class="total-value" id="totalCost">
                                Rp 0
                            </div>
                        </div>

                        <div class="text-end">
                            <i class="bi bi-receipt fs-2" style="color: var(--primary);"></i>
                        </div>

                    </div>

                </div>
            </div>

            {{-- TOMBOL AKSI --}}
            <div class="d-flex flex-wrap justify-content-end gap-2">

                <a href="{{ route('stock-ins.index') }}"
                   class="btn btn-outline-custom"
                   onclick="event.preventDefault(); window.location.replace(this.href);">
                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali
                </a>

                <button type="submit" class="btn-primary-custom">
                    <i class="bi bi-check-circle me-1"></i>
                    Simpan Transaksi
                </button>

            </div>

        </form>

        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Manajemen barang masuk</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const container = document.getElementById('productContainer');
    const addButton = document.getElementById('addProduct');
    const totalCostElement = document.getElementById('totalCost');

    let productIndex = {{ count($oldProducts) }};

    function formatRupiah(number) {
        return 'Rp ' + number.toLocaleString('id-ID');
    }

    function calculateTotal() {
        let total = 0;

        document.querySelectorAll('.product-row').forEach(row => {
            const quantity = Number(row.querySelector('.quantity').value) || 0;
            const price = Number(row.querySelector('.purchase-price').value) || 0;
            const subtotal = quantity * price;

            row.querySelector('.subtotal').value = formatRupiah(subtotal);
            total += subtotal;
        });

        totalCostElement.textContent = formatRupiah(total);
    }

    function updateRemoveButtons() {
        const rows = document.querySelectorAll('.product-row');

        rows.forEach(row => {
            row.querySelector('.removeProduct').disabled = rows.length === 1;
        });
    }

    addButton.addEventListener('click', function () {
        const firstRow = container.querySelector('.product-row');
        const newRow = firstRow.cloneNode(true);

        newRow.querySelector('select').name =
            `products[${productIndex}][product_id]`;
        newRow.querySelector('select').value = '';

        newRow.querySelector('.quantity').name =
            `products[${productIndex}][quantity]`;
        newRow.querySelector('.quantity').value = '';

        newRow.querySelector('.purchase-price').name =
            `products[${productIndex}][purchase_price]`;
        newRow.querySelector('.purchase-price').value = '';

        newRow.querySelector('.subtotal').value = 'Rp 0';

        container.appendChild(newRow);

        productIndex++;

        updateRemoveButtons();
        calculateTotal();
    });

    container.addEventListener('click', function (event) {
        const removeButton = event.target.closest('.removeProduct');

        if (removeButton && !removeButton.disabled) {
            removeButton.closest('.product-row').remove();

            updateRemoveButtons();
            calculateTotal();
        }
    });

    container.addEventListener('input', function (event) {
        if (
            event.target.classList.contains('quantity') ||
            event.target.classList.contains('purchase-price')
        ) {
            calculateTotal();
        }
    });

    updateRemoveButtons();
    calculateTotal();

    window.addEventListener('pageshow', function (event) {
        if (event.persisted) {
            window.location.reload();
        }
    });
</script>

</body>
</html>
