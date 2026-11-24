
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StokMart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7f5;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
        }

        /* PANEL KIRI */
        .brand-panel {
            width: 50%;
            min-height: 100vh;
            padding: 30px 48px 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
            background: linear-gradient(145deg, #116b3b, #16834a 65%, #20985b);
            position: relative;
            overflow: hidden;
        }

        .brand-panel::before,
        .brand-panel::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 50%;
            pointer-events: none;
        }

        .brand-panel::before {
            width: 380px;
            height: 380px;
            right: -160px;
            top: -170px;
        }

        .brand-panel::after {
            width: 300px;
            height: 300px;
            left: -150px;
            bottom: -160px;
        }

        .brand-content,
        .brand-footer {
            position: relative;
            z-index: 1;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.25);
            border-radius: 11px;
            font-size: 22px;
        }

        .brand-heading {
            max-width: 460px;
            margin-top: clamp(25px, 7vh, 65px);
        }

        .brand-heading h1 {
            font-size: clamp(30px, 3.5vw, 42px);
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .brand-heading p {
            color: rgba(255,255,255,.82);
            font-size: 14px;
            line-height: 1.7;
            max-width: 420px;
            margin-bottom: 0;
        }

        .illustration {
            margin-top: clamp(22px, 5vh, 42px);
            max-width: 420px;
            padding: 17px 21px;
            border-radius: 16px;
            background: rgba(255,255,255,.12);
            border: 1px solid rgba(255,255,255,.18);
            backdrop-filter: blur(5px);
        }

        .illustration-title {
            font-size: 11px;
            color: rgba(255,255,255,.75);
            margin-bottom: 9px;
            letter-spacing: .5px;
        }

        .stock-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            padding: 9px 0;
            border-bottom: 1px solid rgba(255,255,255,.15);
        }

        .stock-row:last-child {
            border-bottom: none;
        }

        .stock-name {
            font-size: 13px;
            font-weight: 600;
        }

        .stock-status {
            font-size: 11px;
            padding: 5px 9px;
            border-radius: 20px;
            background: rgba(255,255,255,.17);
            white-space: nowrap;
        }

        .brand-footer {
            color: rgba(255,255,255,.7);
            font-size: 11px;
            margin-top: 18px;
        }

        /* PANEL KANAN */
        .form-panel {
            width: 50%;
            min-height: 100vh;
            padding: 30px 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .login-form {
            width: 100%;
            max-width: 390px;
        }

        .form-heading h2 {
            color: #20352a;
            font-size: 27px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .form-heading p {
            color: #78847c;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-label {
            color: #34443a;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .form-control {
            min-height: 44px;
            border: 1px solid #dce5df;
            border-radius: 8px;
            padding: 10px 13px;
            font-size: 13px;
        }

        .form-control:focus {
            border-color: #16834a;
            box-shadow: 0 0 0 3px rgba(22,131,74,.10);
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .form-control {
            padding-right: 48px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 13px;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: #78847c;
            font-size: 12px;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #16834a;
            border-color: #16834a;
        }

        .form-check-label {
            color: #657269;
            font-size: 12px;
        }

        .forgot-link {
            color: #16834a;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            min-height: 44px;
            border: none;
            border-radius: 8px;
            background: #16834a;
            color: white;
            font-size: 14px;
            font-weight: 700;
            transition: .2s;
        }

        .btn-login:hover {
            background: #116b3b;
            color: white;
        }

        .copyright {
            margin-top: 25px;
            text-align: center;
            color: #9aa49d;
            font-size: 11px;
        }

        .alert {
            font-size: 13px;
            padding: 10px 12px;
            margin-bottom: 16px;
        }

        /* LAPTOP DENGAN TINGGI LAYAR PENDEK */
        @media (min-width: 701px) and (max-height: 650px) {
            .brand-panel {
                padding-top: 20px;
                padding-bottom: 15px;
            }

            .brand-heading {
                margin-top: 18px;
            }

            .brand-heading h1 {
                font-size: 29px;
                margin-bottom: 8px;
            }

            .brand-heading p {
                font-size: 12px;
                line-height: 1.5;
            }

            .illustration {
                margin-top: 15px;
                padding: 10px 16px;
            }

            .stock-row {
                padding: 6px 0;
            }

            .form-panel {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .form-heading p {
                margin-bottom: 17px;
            }

            .copyright {
                margin-top: 17px;
            }
        }

        /* TABLET DAN HP */
        @media (max-width: 700px) {
            .login-wrapper {
                flex-direction: column;
            }

            .brand-panel {
                width: 100%;
                min-height: auto;
                padding: 25px 23px;
            }

            .brand-logo {
                font-size: 21px;
            }

            .brand-heading {
                margin-top: 28px;
            }

            .brand-heading h1 {
                font-size: 29px;
            }

            .brand-heading p {
                font-size: 13px;
            }

            .illustration {
                margin-top: 22px;
                padding: 14px 17px;
            }

            .brand-footer {
                margin-top: 22px;
            }

            .form-panel {
                width: 100%;
                min-height: auto;
                padding: 35px 23px;
            }

            .login-form {
                max-width: 430px;
            }

            .form-heading h2 {
                font-size: 25px;
            }

            .copyright {
                margin-top: 22px;
            }
        }
    </style>
</head>
<body>

<div class="login-wrapper">

    <div class="brand-panel">
        <div class="brand-content">

            <div class="brand-logo">
                <div class="logo-icon">▦</div>
                <span>StokMart</span>
            </div>

            <div class="brand-heading">
                <h1>Toko tertata.<br>Usaha makin lancar.</h1>

                <p>
                    Kelola persediaan barang, catat transaksi penjualan,
                    dan pantau perkembangan toko dalam satu sistem
                    yang praktis dan mudah digunakan.
                </p>
            </div>

            <div class="illustration">
                <div class="illustration-title">
                    GAMBARAN MANAJEMEN STOK
                </div>

                <div class="stock-row">
                    <span class="stock-name">Beras Premium</span>
                    <span class="stock-status">Stok tersedia</span>
                </div>

                <div class="stock-row">
                    <span class="stock-name">Minyak Goreng</span>
                    <span class="stock-status">Stok tersedia</span>
                </div>

                <div class="stock-row">
                    <span class="stock-name">Gula Pasir</span>
                    <span class="stock-status">Stok tersedia</span>
                </div>
            </div>

        </div>

        <div class="brand-footer">
            Sistem Manajemen Toko Laris
        </div>
    </div>

    <div class="form-panel">
        <div class="login-form">

            <div class="form-heading">
                <h2>Selamat Datang!</h2>
                <p>Silakan masuk untuk mengelola toko Anda.</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Username</label>

                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        value="{{ old('username') }}"
                        placeholder="Masukkan username"
                        required
                        autofocus
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>

                    <div class="password-wrapper">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Masukkan password"
                            required
                        >

                        <button
                            type="button"
                            class="toggle-password"
                            onclick="togglePassword()"
                        >
                            Lihat
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                            class="form-check-input"
                            id="remember"
                        >

                        <label class="form-check-label" for="remember">
                            Ingat Saya
                        </label>
                    </div>

                    <a href="{{ route('password.request') }}" class="forgot-link">
                        Lupa Password?
                    </a>
                </div>

                <button type="submit" class="btn btn-login">
                    Masuk ke StokMart
                </button>
            </form>

            <div class="copyright">
                &copy; {{ date('Y') }} StokMart - Toko Laris
            </div>

        </div>
    </div>

</div>

<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const button = document.querySelector('.toggle-password');

        if (password.type === 'password') {
            password.type = 'text';
            button.textContent = 'Sembunyikan';
        } else {
            password.type = 'password';
            button.textContent = 'Lihat';
        }
    }
</script>

</body>
</html>
