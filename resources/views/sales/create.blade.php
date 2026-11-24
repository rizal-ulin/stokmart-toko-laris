
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penjualan - StokMart</title>

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

        .table-card,
        .form-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .table-card-header,
        .form-card-header {
            padding: 18px;
            border-bottom: 1px solid var(--border);
        }

        .table-card-body,
        .form-card-body {
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
            font-weight: 600;
            color: var(--text);
            margin-bottom: 7px;
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

        .form-control[readonly] {
            background: #f5f8f6;
            color: var(--text);
            font-weight: 600;
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
            padding: 11px 9px;
            border-color: var(--border);
            vertical-align: middle;
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

        .btn-primary-custom:disabled {
            background: #91aa9d;
            border-color: #91aa9d;
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

        .btn-add {
            background: var(--primary-light);
            color: var(--primary);
            border: 1px solid #cfe3d7;
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-add:hover {
            background: #dcefe4;
            color: var(--primary-dark);
        }

        .btn-remove {
            border-radius: 7px;
            font-size: 11px;
            padding: 6px 9px;
        }

        .summary-box {
            background: #f5f8f6;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px;
        }

        .summary-label {
            color: var(--muted);
            font-size: 12px;
        }

        .summary-value {
            font-size: 21px;
            font-weight: 700;
            color: var(--text);
        }

        .grand-total {
            color: var(--primary);
            font-size: 24px;
            font-weight: 700;
        }

        .payment-note {
            color: var(--muted);
            font-size: 11px;
            margin-top: 6px;
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
                font-size: 19px;
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
        <div class="mb-4">
            <h2 class="welcome-title mb-2">
                Tambah Penjualan
            </h2>

            <p class="welcome-description mb-0">
                Masukkan produk yang dibeli pelanggan dan lengkapi informasi pembayaran.
            </p>
        </div>

        <form id="saleForm" action="{{ route('sales.store') }}" method="POST">
            @csrf

            {{-- PESAN ERROR --}}
            <div id="formErrors" class="alert alert-danger d-none"></div>

            {{-- DAFTAR PRODUK --}}
            <div class="table-card mb-4">

                <div class="table-card-header">
                    <h3 class="section-title mb-1">
                        <i class="bi bi-basket me-2"></i>
                        Daftar Produk
                    </h3>

                    <p class="section-description mb-0">
                        Pilih produk dan masukkan jumlah barang yang dibeli.
                    </p>
                </div>

                <div class="table-card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle" id="productTable">

                            <thead>
                                <tr>
                                    <th width="35%">Produk</th>
                                    <th>Harga Satuan</th>
                                    <th width="15%">Jumlah</th>
                                    <th>Subtotal</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>

                            <tbody id="productRows">

                                <tr class="product-row">

                                    <td>
                                        <select name="products[0][product_id]"
                                                class="form-select product-select"
                                                required>
                                            <option value="">Pilih Produk</option>

                                            @foreach($products as $product)
                                                <option
                                                    value="{{ $product->id }}"
                                                    data-price="{{ $product->selling_price }}"
                                                    data-stock="{{ $product->stock }}">
                                                    {{ $product->name }} (Stok: {{ $product->stock }})
                                                </option>
                                            @endforeach

                                        </select>
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control price-display"
                                               value="Rp 0"
                                               readonly>
                                    </td>

                                    <td>
                                        <input type="number"
                                               name="products[0][quantity]"
                                               class="form-control quantity-input"
                                               min="1"
                                               value="1"
                                               required>
                                    </td>

                                    <td>
                                        <input type="text"
                                               class="form-control subtotal-display"
                                               value="Rp 0"
                                               readonly>
                                    </td>

                                    <td>
                                        <button type="button"
                                                class="btn btn-outline-danger btn-remove remove-row"
                                                disabled>
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <button type="button" id="addProduct" class="btn-add mt-3">
                        <i class="bi bi-plus-lg me-1"></i>
                        Tambah Produk
                    </button>

                    @if($products->isEmpty())
                        <div class="alert alert-warning mt-3 mb-0">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            Belum ada produk dengan stok tersedia. Tambahkan stok terlebih dahulu.
                        </div>
                    @endif

                </div>

            </div>

            {{-- PEMBAYARAN DAN RINGKASAN --}}
            <div class="row g-3">

                <div class="col-lg-6">

                    <div class="form-card h-100">

                        <div class="form-card-header">
                            <h3 class="section-title mb-1">
                                <i class="bi bi-wallet2 me-2"></i>
                                Pembayaran
                            </h3>

                            <p class="section-description mb-0">
                                Masukkan metode dan nominal pembayaran pelanggan.
                            </p>
                        </div>

                        <div class="form-card-body">

                            <div class="mb-3">
                                <label class="form-label">
                                    Metode Pembayaran
                                </label>

                                <select name="payment_method"
                                        id="paymentMethod"
                                        class="form-select"
                                        required>
                                    <option value="cash">Tunai</option>
                                    <option value="transfer">Transfer</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Uang Diterima
                                </label>

                                <input type="number"
                                       name="amount_received"
                                       id="amountReceived"
                                       class="form-control"
                                       min="0"
                                       step="0.01"
                                       value="0"
                                       required>

                                <div class="payment-note">
                                    Masukkan nominal uang tunai atau transfer dari pelanggan.
                                </div>
                            </div>

                            <div>
                                <label class="form-label">
                                    Kembalian
                                </label>

                                <input type="text"
                                       id="changeDisplay"
                                       class="form-control"
                                       value="Rp 0"
                                       readonly>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form-card h-100">

                        <div class="form-card-header">
                            <h3 class="section-title mb-1">
                                <i class="bi bi-receipt me-2"></i>
                                Ringkasan Transaksi
                            </h3>

                            <p class="section-description mb-0">
                                Periksa jumlah barang dan total pembayaran.
                            </p>
                        </div>

                        <div class="form-card-body">

                            <div class="summary-box mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="summary-label">
                                        Total Item
                                    </span>

                                    <span class="summary-value" id="totalItems">
                                        0
                                    </span>
                                </div>
                            </div>

                            <div class="summary-box">
                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <span class="summary-label">
                                        Total Bayar
                                    </span>

                                    <span class="grand-total" id="grandTotal">
                                        Rp 0
                                    </span>
                                </div>
                            </div>

                            <div class="payment-note mt-3">
                                Pastikan total transaksi sudah sesuai sebelum menyimpan.
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            {{-- TOMBOL AKSI --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mt-4">

                <a href="{{ route('sales.index') }}"
                   class="btn-secondary-custom"
                   onclick="event.preventDefault(); window.location.replace(this.href);">
                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali
                </a>

                <button type="submit"
                        class="btn-primary-custom"
                        {{ $products->isEmpty() ? 'disabled' : '' }}>
                    <i class="bi bi-check-circle me-1"></i>
                    Simpan Transaksi
                </button>

            </div>

        </form>

        {{-- FOOTER --}}
        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Transaksi penjualan Toko Laris</span>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const saleForm = document.getElementById('saleForm');
    const productRows = document.getElementById('productRows');
    const addProductButton = document.getElementById('addProduct');
    const amountReceived = document.getElementById('amountReceived');
    const errorsBox = document.getElementById('formErrors');

    let rowIndex = 1;

    function formatRupiah(value) {
        return 'Rp ' + Number(value).toLocaleString('id-ID');
    }

    // Menghitung total transaksi
    function calculateTotal() {
        let grandTotal = 0;
        let totalItems = 0;

        document.querySelectorAll('.product-row').forEach(row => {
            const select = row.querySelector('.product-select');
            const quantityInput = row.querySelector('.quantity-input');

            const option = select.selectedOptions[0];

            const price = Number(option?.dataset.price || 0);
            const stock = Number(option?.dataset.stock || 0);
            const quantity = Number(quantityInput.value || 0);

            quantityInput.max = stock;

            row.querySelector('.price-display').value =
                formatRupiah(price);

            row.querySelector('.subtotal-display').value =
                formatRupiah(price * quantity);

            grandTotal += price * quantity;
            totalItems += quantity;
        });

        document.getElementById('grandTotal').textContent =
            formatRupiah(grandTotal);

        document.getElementById('totalItems').textContent =
            totalItems;

        updateChange(grandTotal);
    }

    // Menghitung kembalian
    function updateChange(grandTotal) {
        const received = Number(amountReceived.value || 0);
        const change = Math.max(0, received - grandTotal);

        document.getElementById('changeDisplay').value =
            formatRupiah(change);
    }

    // Mengatur tombol hapus produk
    function updateRemoveButtons() {
        const rows = document.querySelectorAll('.product-row');

        rows.forEach(row => {
            row.querySelector('.remove-row').disabled =
                rows.length === 1;
        });
    }

    // Mencegah produk yang sama dipilih dua kali
    function updateProductOptions() {
        const selects = document.querySelectorAll('.product-select');

        const selectedValues = Array.from(selects).map(select => select.value);

        selects.forEach((select, currentIndex) => {
            Array.from(select.options).forEach(option => {
                if (!option.value) return;

                const usedElsewhere = selectedValues.some((value, index) =>
                    index !== currentIndex && value === option.value
                );

                option.disabled = usedElsewhere;
            });
        });
    }

    // Menampilkan pesan kesalahan
    function showErrors(messages) {
        errorsBox.innerHTML = '';

        messages.forEach(message => {
            const error = document.createElement('div');
            error.textContent = message;

            errorsBox.appendChild(error);
        });

        errorsBox.classList.remove('d-none');

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Menambahkan baris produk
    addProductButton.addEventListener('click', function () {
        const firstRow = document.querySelector('.product-row');
        const newRow = firstRow.cloneNode(true);

        newRow.querySelector('.product-select').name =
            `products[${rowIndex}][product_id]`;

        newRow.querySelector('.product-select').value = '';

        newRow.querySelector('.quantity-input').name =
            `products[${rowIndex}][quantity]`;

        newRow.querySelector('.quantity-input').value = 1;
        newRow.querySelector('.quantity-input').removeAttribute('max');

        newRow.querySelector('.price-display').value = 'Rp 0';
        newRow.querySelector('.subtotal-display').value = 'Rp 0';

        productRows.appendChild(newRow);

        rowIndex++;

        updateRemoveButtons();
        updateProductOptions();
        calculateTotal();
    });

    // Menghapus baris produk
    productRows.addEventListener('click', function (event) {
        if (event.target.closest('.remove-row')) {
            event.target.closest('.product-row').remove();

            updateRemoveButtons();
            updateProductOptions();
            calculateTotal();
        }
    });

    // Perubahan produk
    productRows.addEventListener('change', function (event) {
        if (event.target.classList.contains('product-select')) {
            updateProductOptions();
        }

        calculateTotal();
    });

    // Perubahan jumlah produk
    productRows.addEventListener('input', calculateTotal);

    // Perubahan pembayaran
    document.getElementById('paymentMethod').addEventListener('change', calculateTotal);

    amountReceived.addEventListener('input', calculateTotal);

    // Proses penyimpanan transaksi
    saleForm.addEventListener('submit', async function (event) {
        event.preventDefault();

        errorsBox.classList.add('d-none');
        errorsBox.innerHTML = '';

        const submitButton = saleForm.querySelector('button[type="submit"]');
        const originalText = submitButton.innerHTML;

        let hasInvalidProduct = false;
        let grandTotal = 0;

        // Validasi produk dan jumlah
        document.querySelectorAll('.product-row').forEach(row => {
            const select = row.querySelector('.product-select');
            const quantityInput = row.querySelector('.quantity-input');

            const stock = Number(select.selectedOptions[0]?.dataset.stock || 0);
            const price = Number(select.selectedOptions[0]?.dataset.price || 0);
            const quantity = Number(quantityInput.value || 0);

            if (!select.value || !Number.isInteger(quantity) ||
                quantity < 1 || quantity > stock) {
                hasInvalidProduct = true;
            }

            grandTotal += price * quantity;
        });

        if (hasInvalidProduct) {
            showErrors([
                'Periksa kembali produk dan jumlah barang. Pastikan stok mencukupi.'
            ]);
            return;
        }

        // Validasi pembayaran
        const received = Number(amountReceived.value || 0);

        if (!Number.isFinite(received) || received < grandTotal) {
            showErrors([
                'Uang yang diterima tidak boleh kurang dari total belanja.'
            ]);
            return;
        }

        submitButton.disabled = true;
        submitButton.textContent = 'Menyimpan...';

        try {
            const response = await fetch(saleForm.action, {
                method: 'POST',

                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },

                body: new FormData(saleForm)
            });

            const data = await response.json();

            if (response.ok && data.redirect) {
                window.location.replace(data.redirect);
                return;
            }

            if (response.status === 422 && data.errors) {
                showErrors(Object.values(data.errors).flat());
            } else {
                showErrors([
                    data.message || 'Terjadi kesalahan saat menyimpan transaksi.'
                ]);
            }

        } catch (error) {
            showErrors([
                'Gagal menghubungi server. Silakan coba kembali.'
            ]);
        }

        submitButton.disabled = false;
        submitButton.innerHTML = originalText;
    });

    // Inisialisasi awal
    updateRemoveButtons();
    calculateTotal();
</script>

</body>
</html>
