
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori - StokMart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #198754;
            --primary-dark: #146c43;
            --primary-light: #e8f5ee;
            --background: #f5f7f9;
            --text: #263238;
            --muted: #7b8794;
            --border: #e8edf0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: var(--background);
            color: var(--text);
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 235px;
            height: 100vh;
            background: #fff;
            border-right: 1px solid var(--border);
            padding: 20px 16px;
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 0 5px;
            margin-bottom: 27px;
        }

        .brand-icon {
            width: 39px;
            height: 39px;
            border-radius: 11px;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .brand-name {
            font-size: 17px;
            font-weight: 700;
            margin: 0;
        }

        .brand-subtitle {
            font-size: 11px;
            color: var(--muted);
            margin: 2px 0 0;
        }

        .store-card {
            background: #f7faf8;
            border: 1px solid #edf2ee;
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 25px;
        }

        .store-title {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .store-description {
            font-size: 11px;
            color: var(--muted);
        }

        .menu-label {
            color: #9aa4ae;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .8px;
            margin: 0 0 10px 10px;
        }

        .sidebar-menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 12px;
            border-radius: 8px;
            text-decoration: none;
            color: #64717d;
            font-size: 13px;
            font-weight: 500;
            transition: .2s;
        }

        .sidebar-menu a i {
            font-size: 17px;
        }

        .sidebar-menu a:hover {
            background: #f4f8f5;
            color: var(--primary);
        }

        .sidebar-menu a.active {
            background: var(--primary-light);
            color: var(--primary);
            font-weight: 700;
        }

        .sidebar-bottom {
            margin-top: auto;
        }

        .logout-link {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            border: 0;
            background: transparent;
            color: #dc3545;
            padding: 11px 12px;
            border-radius: 8px;
            font-size: 13px;
            text-align: left;
        }

        .logout-link:hover {
            background: #fff1f1;
        }

        .sidebar-footer {
            border-top: 1px solid var(--border);
            padding-top: 13px;
            margin-top: 12px;
            color: var(--muted);
            font-size: 10px;
            text-align: center;
        }

        /* MAIN CONTENT */
        .main-content {
            margin-left: 235px;
            min-height: 100vh;
        }

        .topbar {
            height: 69px;
            background: #fff;
            border-bottom: 1px solid var(--border);
            padding: 0 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar-title {
            font-size: 15px;
            font-weight: 700;
            margin: 0;
        }

        .topbar-subtitle {
            color: var(--muted);
            font-size: 11px;
            margin-top: 3px;
        }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .user-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .user-name {
            font-size: 12px;
            font-weight: 700;
        }

        .user-role {
            font-size: 10px;
            color: var(--muted);
        }

        .content-area {
            padding: 25px 26px;
            max-width: 1100px;
        }

        .breadcrumb-text {
            color: var(--muted);
            font-size: 12px;
            margin-bottom: 17px;
        }

        .breadcrumb-text a {
            color: var(--primary);
            text-decoration: none;
        }

        .page-heading {
            margin-bottom: 21px;
        }

        .page-title {
            font-size: 21px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-description {
            color: var(--muted);
            font-size: 12px;
            margin: 0;
        }

        .form-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            max-width: 720px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .025);
        }

        .form-card-header {
            padding: 19px 22px;
            border-bottom: 1px solid var(--border);
        }

        .form-card-title {
            font-size: 15px;
            font-weight: 700;
            margin: 0 0 4px;
        }

        .form-card-description {
            color: var(--muted);
            font-size: 11px;
            margin: 0;
        }

        .form-card-body {
            padding: 23px 22px;
        }

        .form-label {
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-control {
            font-size: 13px;
            padding: 10px 12px;
            border-color: #dfe5e9;
            border-radius: 7px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(25, 135, 84, .10);
        }

        .form-hint {
            color: var(--muted);
            font-size: 11px;
            margin-top: 6px;
        }

        .btn {
            font-size: 12px;
            font-weight: 600;
            border-radius: 7px;
            padding: 9px 15px;
        }

        .btn-success {
            background: var(--primary);
            border-color: var(--primary);
        }

        .btn-success:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .footer-info {
            color: var(--muted);
            font-size: 10px;
            margin-top: 28px;
            padding-top: 15px;
            border-top: 1px solid var(--border);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 65px;
                padding: 18px 9px;
            }

            .brand {
                justify-content: center;
                padding: 0;
            }

            .brand-text,
            .store-card,
            .menu-label,
            .sidebar-menu a span,
            .logout-link span,
            .sidebar-footer {
                display: none;
            }

            .sidebar-menu a {
                justify-content: center;
                padding: 12px 5px;
            }

            .sidebar-menu a i {
                font-size: 19px;
            }

            .logout-link {
                justify-content: center;
                padding: 12px 5px;
            }

            .main-content {
                margin-left: 65px;
            }

            .topbar {
                padding: 0 15px;
            }

            .content-area {
                padding: 20px 15px;
            }

            .user-name,
            .user-role {
                display: none;
            }

            .form-card-header,
            .form-card-body {
                padding: 17px;
            }
        }
    </style>
</head>

<body>

{{-- SIDEBAR --}}
<aside class="sidebar">

    <div class="brand">
        <div class="brand-icon">
            <i class="bi bi-shop"></i>
        </div>

        <div class="brand-text">
            <p class="brand-name">StokMart</p>
            <p class="brand-subtitle">Inventory Management</p>
        </div>
    </div>

    <div class="store-card">
        <div class="store-title">
            <i class="bi bi-shop-window me-1 text-success"></i>
            Toko Laris
        </div>
        <div class="store-description">Sistem Manajemen Toko</div>
    </div>

    <div class="menu-label">MENU UTAMA</div>

    <nav class="sidebar-menu">
        <a href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('categories.index') }}" class="active">
            <i class="bi bi-tags"></i>
            <span>Kategori</span>
        </a>

        <a href="{{ route('products.index') }}">
            <i class="bi bi-box-seam"></i>
            <span>Data Barang</span>
        </a>

        <a href="{{ route('stock-ins.index') }}">
            <i class="bi bi-box-arrow-in-down"></i>
            <span>Stok Masuk</span>
        </a>

        <a href="{{ route('sales.index') }}">
            <i class="bi bi-cart3"></i>
            <span>Penjualan</span>
        </a>

        <a href="{{ route('reports.index') }}">
            <i class="bi bi-file-earmark-bar-graph"></i>
            <span>Laporan</span>
        </a>
    </nav>

    <div class="sidebar-bottom">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-link">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </button>
        </form>

        <div class="sidebar-footer">
            © {{ date('Y') }} StokMart • Toko Laris
        </div>
    </div>

</aside>

{{-- MAIN CONTENT --}}
<main class="main-content">

    <header class="topbar">
        <div>
            <p class="topbar-title">Kategori Barang</p>
            <div class="topbar-subtitle">Kelola kategori produk toko</div>
        </div>

        <div class="topbar-user">
            <div class="user-icon">
                <i class="bi bi-person"></i>
            </div>

            <div>
                <div class="user-name">
                    {{ auth()->user()->name ?? auth()->user()->username }}
                </div>
                <div class="user-role">Administrator</div>
            </div>
        </div>
    </header>

    <section class="content-area">

        <div class="breadcrumb-text">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <i class="bi bi-chevron-right mx-1"></i>
            <a href="{{ route('categories.index') }}">Kategori</a>
            <i class="bi bi-chevron-right mx-1"></i>
            <span>Tambah Kategori</span>
        </div>

        <div class="page-heading">
            <h1 class="page-title">Tambah Kategori</h1>
            <p class="page-description">
                Tambahkan kategori baru untuk mengelompokkan produk Toko Laris.
            </p>
        </div>

        <div class="form-card">

            <div class="form-card-header">
                <h5 class="form-card-title">
                    <i class="bi bi-tags text-success me-2"></i>
                    Formulir Kategori
                </h5>

                <p class="form-card-description">
                    Lengkapi informasi kategori di bawah ini.
                </p>
            </div>

            <div class="form-card-body">

                <div id="formErrors" class="alert alert-danger d-none" role="alert"></div>

                <form action="{{ route('categories.store') }}"
                      method="POST"
                      id="categoryForm">

                    @csrf

                    <div class="mb-4">
                        <label class="form-label" for="name">
                            Nama Kategori <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                               name="name"
                               id="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Contoh: Makanan"
                               maxlength="255"
                               required>

                        <div class="form-hint">
                            Masukkan nama kategori yang mudah dikenali.
                        </div>

                        @error('name')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="description">
                            Deskripsi
                        </label>

                        <textarea name="description"
                                  id="description"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Masukkan deskripsi kategori">{{ old('description') }}</textarea>

                        <div class="form-hint">
                            Deskripsi bersifat opsional.
                        </div>

                        @error('description')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex flex-wrap gap-2 pt-3 border-top">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle me-1"></i>
                            Simpan Kategori
                        </button>

                        <a href="{{ route('categories.index') }}"
                           class="btn btn-light border"
                           onclick="event.preventDefault(); window.location.replace(this.href);">
                            <i class="bi bi-arrow-left me-1"></i>
                            Kembali
                        </a>
                    </div>

                </form>

            </div>
        </div>

        <div class="footer-info d-flex flex-wrap justify-content-between gap-2">
            <span>© {{ date('Y') }} StokMart • Toko Laris</span>
            <span>Sistem Manajemen Persediaan</span>
        </div>

    </section>

</main>

<script>
document.getElementById('categoryForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    const form = this;
    const button = form.querySelector('button[type="submit"]');
    const errorsBox = document.getElementById('formErrors');

    button.disabled = true;
    button.innerHTML = '<i class="bi bi-hourglass-split me-1"></i> Menyimpan...';

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
        } else {
            errorsBox.textContent = data.message || 'Terjadi kesalahan saat menyimpan kategori.';
            errorsBox.classList.remove('d-none');
        }

    } catch (error) {
        errorsBox.textContent = 'Gagal menghubungi server. Silakan coba kembali.';
        errorsBox.classList.remove('d-none');
    }

    button.disabled = false;
    button.innerHTML = '<i class="bi bi-check-circle me-1"></i> Simpan Kategori';
});
</script>

</body>
</html>
