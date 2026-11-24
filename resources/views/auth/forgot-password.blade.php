
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - StokMart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            background: #f3f7f4;
            font-family: Arial, sans-serif;
        }

        .forgot-card {
            width: 100%;
            max-width: 460px;
            padding: 42px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 12px 40px rgba(20, 60, 35, .08);
        }

        .brand {
            color: #16834a;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #34443a;
        }

        .form-control {
            min-height: 48px;
            border-radius: 9px;
        }

        .form-control:focus {
            border-color: #16834a;
            box-shadow: 0 0 0 3px rgba(22, 131, 74, .12);
        }

        .btn-submit {
            width: 100%;
            min-height: 48px;
            border: none;
            border-radius: 9px;
            background: #16834a;
            color: white;
            font-weight: 700;
        }

        .btn-submit:hover {
            background: #116b3b;
            color: white;
        }

        .back-link {
            color: #16834a;
            text-decoration: none;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .forgot-card {
                padding: 28px 22px;
            }
        }
    </style>
</head>
<body>

    <div class="forgot-card">

        <div class="brand text-center">StokMart</div>

        <h4 class="fw-bold mb-2">Lupa Password?</h4>

        <p class="text-muted mb-4">
            Masukkan alamat email akun Anda. Kami akan mengirimkan tautan untuk mengatur ulang password.
        </p>

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

        <form action="{{ route('password.email') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="form-label">Alamat Email</label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email terdaftar"
                    required
                    autofocus
                >
            </div>

            <button type="submit" class="btn btn-submit">
                Kirim Tautan Reset
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="back-link">
                &larr; Kembali ke Login
            </a>
        </div>

        <p class="text-center text-muted small mt-4 mb-0">
            &copy; {{ date('Y') }} StokMart - Toko Laris
        </p>

    </div>

</body>
</html>
