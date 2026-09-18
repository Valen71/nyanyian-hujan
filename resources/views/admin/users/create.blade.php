<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Akun - Nyanyian Hujan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            font-family: 'Montserrat', sans-serif;

            color: #ecfaff;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(0, 217, 255, .10),
                    transparent 28%
                ),
                radial-gradient(
                    circle at bottom right,
                    rgba(0, 128, 170, .16),
                    transparent 30%
                ),
                linear-gradient(
                    145deg,
                    #04141f,
                    #061d2a 55%,
                    #031018
                );

            overflow-x: hidden;
        }

        /* GRID BACKGROUND */

        body::before {
            content: "";

            position: fixed;
            inset: 0;

            pointer-events: none;

            background:
                linear-gradient(
                    rgba(255,255,255,.018) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.018) 1px,
                    transparent 1px
                );

            background-size: 45px 45px;

            mask-image:
                linear-gradient(
                    to bottom,
                    rgba(0,0,0,.45),
                    transparent
                );
        }

        /* GLOW */

        .glow {
            position: fixed;

            width: 350px;
            height: 350px;

            border-radius: 50%;

            background: rgba(0, 217, 255, .055);

            filter: blur(80px);

            pointer-events: none;
        }

        .glow.one {
            top: -160px;
            left: -120px;
        }

        .glow.two {
            right: -180px;
            bottom: -150px;
        }

        /* CONTAINER */

        .container {
            position: relative;

            width: min(720px, calc(100% - 40px));

            margin: 55px auto;

            z-index: 2;
        }

        /* TOP BAR */

        .topbar {
            display: flex;

            align-items: center;
            justify-content: space-between;

            margin-bottom: 25px;
        }

        .brand {
            display: flex;

            align-items: center;

            gap: 12px;
        }

        .brand-mark {
            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    rgba(0,217,255,.20),
                    rgba(0,217,255,.05)
                );

            border: 1px solid rgba(0,217,255,.20);

            color: #00d9ff;

            font-size: 17px;

            box-shadow:
                0 0 20px rgba(0,217,255,.07);
        }

        .brand-text {
            display: flex;

            flex-direction: column;

            gap: 2px;
        }

        .brand-name {
            color: #ffffff;

            font-size: 14px;
            font-weight: 700;

            letter-spacing: 1.5px;
        }

        .brand-subtitle {
            color: #638b9a;

            font-size: 9px;
            font-weight: 600;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }

        .back-btn {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 9px 15px;

            border-radius: 10px;

            color: #8fb7c5;

            background: rgba(255,255,255,.025);

            border: 1px solid rgba(255,255,255,.08);

            font-size: 11px;
            font-weight: 600;

            text-decoration: none;

            transition:
                color .25s ease,
                border-color .25s ease,
                background .25s ease;
        }

        .back-btn:hover {
            color: #00d9ff;

            background: rgba(0,217,255,.06);

            border-color: rgba(0,217,255,.25);
        }

        /* CARD */

        .card {
            position: relative;

            padding: 36px;

            border-radius: 24px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.055),
                    rgba(255,255,255,.025)
                );

            border: 1px solid rgba(0,217,255,.14);

            box-shadow:
                0 25px 70px rgba(0,0,0,.35),
                0 0 45px rgba(0,217,255,.035);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 10%;

            width: 80%;
            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(0,217,255,.45),
                    transparent
                );
        }

        /* HEADER */

        .header {
            margin-bottom: 32px;

            text-align: center;
        }

        .header-icon {
            width: 52px;
            height: 52px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: 0 auto 17px;

            border-radius: 16px;

            background:
                rgba(0,217,255,.07);

            border: 1px solid rgba(0,217,255,.18);

            color: #00d9ff;

            font-size: 21px;

            box-shadow:
                0 0 25px rgba(0,217,255,.06);
        }

        h1 {
            margin-bottom: 9px;

            color: #ffffff;

            font-family: 'Playfair Display', serif;

            font-size: 30px;
            font-weight: 600;

            letter-spacing: -.3px;
        }

        .subtitle {
            color: #7199a8;

            font-size: 12px;

            line-height: 1.7;
        }

        /* FORM */

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;

            margin-bottom: 9px;

            color: #b9d7df;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;
        }

        input,
        select {
            width: 100%;

            padding: 14px 15px;

            border-radius: 12px;

            background: rgba(2, 18, 27, .72);

            border: 1px solid rgba(255,255,255,.09);

            color: #e9faff;

            font-family: 'Montserrat', sans-serif;

            font-size: 13px;

            outline: none;

            transition:
                border-color .25s ease,
                background .25s ease,
                box-shadow .25s ease;
        }

        input::placeholder {
            color: #52727e;
        }

        input:hover,
        select:hover {
            border-color: rgba(0,217,255,.20);
        }

        input:focus,
        select:focus {
            background: rgba(2, 25, 36, .85);

            border-color: rgba(0,217,255,.55);

            box-shadow:
                0 0 0 3px rgba(0,217,255,.06),
                0 0 20px rgba(0,217,255,.04);
        }

        /* SELECT */

        select {
            cursor: pointer;
        }

        select option {
            background: #061923;

            color: #e9faff;
        }

        select option:checked {
            background: #0b3443;

            color: #00d9ff;
        }

        /* ERROR */

        .error {
            display: flex;

            align-items: center;

            gap: 7px;

            margin-top: 7px;

            color: #ff8d9a;

            font-size: 11px;

            line-height: 1.5;
        }

        .error::before {
            content: "!";

            width: 17px;
            height: 17px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            flex-shrink: 0;

            border-radius: 50%;

            background: rgba(255,92,110,.10);

            border: 1px solid rgba(255,92,110,.25);

            color: #ff7f8d;

            font-size: 10px;
            font-weight: 700;
        }

        /* HINT */

        .field-hint {
            margin-top: 7px;

            color: #527582;

            font-size: 10px;

            line-height: 1.5;
        }

        /* DIVIDER */

        .divider {
            height: 1px;

            margin: 29px 0;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255,255,255,.08),
                    transparent
                );
        }

        /* BUTTON */

        .buttons {
            display: flex;

            gap: 12px;

            margin-top: 30px;
        }

        .btn {
            min-height: 45px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            padding: 0 20px;

            border-radius: 11px;

            cursor: pointer;

            font-family: 'Montserrat', sans-serif;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: .6px;

            text-decoration: none;

            transition:
                transform .25s ease,
                background .25s ease,
                border-color .25s ease,
                box-shadow .25s ease;
        }

        .btn-primary {
            flex: 1;

            background: #00d9ff;

            border: 1px solid #00d9ff;

            color: #02141d;

            box-shadow:
                0 8px 25px rgba(0,217,255,.13);
        }

        .btn-primary:hover {
            background: #ffffff;

            border-color: #ffffff;

            color: #03141d;

            transform: translateY(-2px);

            box-shadow:
                0 10px 28px rgba(0,217,255,.15);
        }

        .btn-secondary {
            padding-left: 25px;
            padding-right: 25px;

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.10);

            color: #9bbbc5;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,.07);

            border-color: rgba(0,217,255,.25);

            color: #00d9ff;

            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* FOOTER */

        .card-footer {
            margin-top: 25px;

            padding-top: 19px;

            border-top: 1px solid rgba(255,255,255,.06);

            text-align: center;

            color: #4f707c;

            font-size: 9px;

            letter-spacing: .7px;
        }

        /* RESPONSIVE */

        @media (max-width: 600px) {

            .container {
                width: min(100% - 24px, 720px);

                margin: 25px auto;
            }

            .topbar {
                margin-bottom: 18px;
            }

            .brand-subtitle {
                display: none;
            }

            .card {
                padding: 25px 20px;

                border-radius: 20px;
            }

            h1 {
                font-size: 26px;
            }

            .subtitle {
                font-size: 11px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn-primary {
                order: 1;
            }

            .btn-secondary {
                order: 2;
            }

            .back-btn {
                padding: 8px 11px;

                font-size: 10px;
            }
        }
    </style>
</head>

<body>

<div class="glow one"></div>
<div class="glow two"></div>

<div class="container">

    <!-- TOP BAR -->

    <div class="topbar">

        <div class="brand">

            <div class="brand-mark">
                ◈
            </div>

            <div class="brand-text">

                <span class="brand-name">
                    Nyanyian Hujan
                </span>

                <span class="brand-subtitle">
                    Management System
                </span>

            </div>

        </div>

        <a
            href="{{ route('admin.users.index') }}"
            class="back-btn"
        >
            ← Data Pengguna
        </a>

    </div>


    <!-- MAIN CARD -->

    <div class="card">

        <div class="header">

            <div class="header-icon">
                +
            </div>

            <h1>
                Tambah Akun
            </h1>

            <p class="subtitle">
                Buat akun pengguna baru untuk mengakses sistem Nyanyian Hujan.
            </p>

        </div>


        <form
            action="{{ route('admin.users.store') }}"
            method="POST"
        >

            @csrf


            <!-- NAMA -->

            <div class="form-group">

                <label for="name">
                    Nama Pengguna
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama pengguna"
                    autocomplete="name"
                    required
                >

                @error('name')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan alamat email"
                    autocomplete="email"
                    required
                >

                @error('email')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="divider"></div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    autocomplete="new-password"
                    required
                >

                <div class="field-hint">
                    Gunakan password yang kuat dan mudah dikelola oleh pengguna.
                </div>

                @error('password')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- KONFIRMASI PASSWORD -->

            <div class="form-group">

                <label for="password_confirmation">
                    Konfirmasi Password
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    autocomplete="new-password"
                    required
                >

            </div>


            <div class="divider"></div>


            <!-- ROLE -->

            <div class="form-group">

                <label for="role">
                    Role Akun
                </label>

                <select
                    id="role"
                    name="role"
                    required
                >

                    <option
                        value="admin"
                        {{ old('role') == 'admin' ? 'selected' : '' }}
                    >
                        Admin
                    </option>

                    <option
                        value="karyawan"
                        {{ old('role') == 'karyawan' ? 'selected' : '' }}
                    >
                        Karyawan
                    </option>

                </select>

                @error('role')
                    <div class="error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <!-- BUTTON -->

            <div class="buttons">

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Buat Akun
                </button>

                <a
                    href="{{ route('admin.users.index') }}"
                    class="btn btn-secondary"
                >
                    Batal
                </a>

            </div>

        </form>


        <div class="card-footer">
            Nyanyian Hujan • USER ACCOUNT MANAGEMENT
        </div>

    </div>

</div>

</body>
</html>