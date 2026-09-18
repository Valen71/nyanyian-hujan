<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buat Akun - Nyanyian Hujan</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0077b6, #023e8a);
            padding: 20px;
        }

        .register-box {
            width: 100%;
            max-width: 430px;
            background: white;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: 800;
            color: #023e8a;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .title {
            text-align: center;
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #64748b;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #334155;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #0077b6;
            box-shadow: 0 0 0 3px rgba(0, 119, 182, 0.1);
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .error ul {
            margin-left: 18px;
        }

        .btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #0077b6;
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
        }

        .btn:hover {
            background: #023e8a;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #0077b6;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="register-box">

        <div class="logo">
            Nyanyian Hujan
        </div>

        <h1 class="title">
            Buat Akun
        </h1>

        <p class="subtitle">
            Buat akun admin baru untuk mengakses sistem.
        </p>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.register.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama</label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama"
                    required
                >
            </div>

            <div class="form-group">
                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    required
                >
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>

                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    required
                >
            </div>

            <button type="submit" class="btn">
                Buat Akun
            </button>
        </form>

        <a href="{{ route('admin.login') }}" class="back">
            ← Kembali ke Login
        </a>

    </div>

</body>
</html>