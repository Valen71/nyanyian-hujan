<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - Nyanyian Hujan</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        min-height: 100vh;
        padding: 30px 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        background:
            radial-gradient(
                circle at 15% 10%,
                rgba(0,217,255,.12),
                transparent 32%
            ),
            radial-gradient(
                circle at 85% 90%,
                rgba(0,119,182,.14),
                transparent 32%
            ),
            linear-gradient(
                135deg,
                #03111f,
                #061a2b 48%,
                #08263a
            );

        color: #e8f8ff;
    }

    .login-container {
        width: 100%;
        max-width: 430px;
    }

    /* =========================
       LOGO
    ========================= */

    .logo {
        text-align: center;
        margin-bottom: 28px;
    }

    .logo h1 {
        font-family: 'Playfair Display', serif;
        color: #ffffff;
        font-size: 34px;
        font-weight: 600;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .logo h1::after {
        content: "";
        display: block;
        width: 42px;
        height: 2px;
        margin: 12px auto 0;

        background: #00d9ff;
        border-radius: 10px;
        box-shadow: 0 0 12px rgba(0,217,255,.35);
    }

    .logo p {
        color: rgba(220,245,255,.62);
        font-size: 11px;
        font-weight: 500;
        letter-spacing: 1.8px;
        text-transform: uppercase;
    }

    /* =========================
       LOGIN CARD
    ========================= */

    .login-card {
        position: relative;
        padding: 38px;

        background:
            linear-gradient(
                145deg,
                rgba(8,31,49,.88),
                rgba(5,23,38,.82)
            );

        border:
            1px solid rgba(255,255,255,.09);

        border-radius: 22px;

        box-shadow:
            0 30px 80px rgba(0,0,0,.38),
            0 0 0 1px rgba(0,217,255,.025);

        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
    }

    .login-card::before {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;

        top: -100px;
        right: -90px;

        border-radius: 50%;

        background: rgba(0,217,255,.08);

        pointer-events: none;
    }

    .login-card h2 {
        position: relative;
        z-index: 1;

        color: #ffffff;
        font-family: 'Playfair Display', serif;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: .2px;

        margin-bottom: 10px;
    }

    .login-card .description {
        position: relative;
        z-index: 1;

        color: rgba(220,245,255,.62);
        font-size: 12px;
        line-height: 1.7;

        margin-bottom: 30px;
    }

    /* =========================
       ERROR
    ========================= */

    .error {
        position: relative;
        z-index: 1;

        background: rgba(239,68,68,.10);
        color: #fca5a5;

        border:
            1px solid rgba(239,68,68,.22);

        padding: 12px 14px;
        border-radius: 10px;

        margin-bottom: 22px;

        font-size: 12px;
        line-height: 1.5;
    }

    /* =========================
       FORM
    ========================= */

    .form-group {
        position: relative;
        z-index: 1;
        margin-bottom: 22px;
    }

    .form-group label {
        display: block;

        margin-bottom: 9px;

        color: #a9cbd9;

        font-size: 11px;
        font-weight: 600;
        letter-spacing: .6px;
        text-transform: uppercase;
    }

    .form-group input {
        width: 100%;

        padding: 14px 15px;

        border:
            1px solid rgba(255,255,255,.10);

        border-radius: 11px;

        background:
            rgba(255,255,255,.045);

        color: #ffffff;

        font-family: 'Montserrat', Arial, sans-serif;
        font-size: 13px;

        outline: none;

        transition:
            border-color .25s ease,
            background .25s ease,
            box-shadow .25s ease;
    }

    .form-group input::placeholder {
        color: rgba(190,215,225,.38);
    }

    .form-group input:focus {
        border-color: rgba(0,217,255,.55);

        background:
            rgba(0,217,255,.045);

        box-shadow:
            0 0 0 3px rgba(0,217,255,.08);
    }

    /* =========================
       LOGIN BUTTON
    ========================= */

    .login-btn {
        position: relative;
        z-index: 1;

        width: 100%;

        margin-top: 5px;
        padding: 14px;

        border: none;
        border-radius: 11px;

        background:
            linear-gradient(
                135deg,
                #00d9ff,
                #0077b6
            );

        color: #ffffff;

        font-family: 'Montserrat', Arial, sans-serif;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .4px;

        cursor: pointer;

        box-shadow:
            0 10px 25px rgba(0,217,255,.14);

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            filter .25s ease;
    }

    .login-btn:hover {
        transform: scale(1.012);

        filter: brightness(1.04);

        box-shadow:
            0 14px 30px rgba(0,217,255,.22);
    }

    /* =========================
       REGISTER BUTTON
    ========================= */

    .register-btn {
        position: relative;
        z-index: 1;

        display: block;
        width: 100%;

        margin-top: 13px;
        padding: 13px;

        text-align: center;

        background:
            rgba(255,255,255,.045);

        color: #9feaff;

        border:
            1px solid rgba(0,217,255,.20);

        border-radius: 11px;

        text-decoration: none;

        font-family: 'Montserrat', Arial, sans-serif;
        font-size: 12px;
        font-weight: 600;

        transition:
            background .25s ease,
            border-color .25s ease,
            transform .25s ease;
    }

    .register-btn:hover {
        background:
            rgba(0,217,255,.08);

        border-color:
            rgba(0,217,255,.35);

        color: #ffffff;

        transform: scale(1.008);
    }

    /* =========================
       HOME BUTTON
    ========================= */

    .home-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    margin-top: 12px;
    padding: 12px 16px;
    border-radius: 12px;

    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.10);

    color: rgba(255, 255, 255, 0.78);
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.3px;

    text-decoration: none;
    transition: all 0.25s ease;
}

.home-btn:hover {
    background: rgba(0, 217, 255, 0.08);
    border-color: rgba(0, 217, 255, 0.25);
    color: #ffffff;
    transform: scale(1.01);
}

.back-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 24px;
    height: 24px;
    border-radius: 8px;

    background: rgba(0, 217, 255, 0.10);
    border: 1px solid rgba(0, 217, 255, 0.15);

    color: #42ddff;
    font-size: 15px;
}

    /* =========================
       FOOTER
    ========================= */

    .footer {
        text-align: center;

        margin-top: 22px;

        color: rgba(190,215,225,.42);

        font-size: 10px;
        letter-spacing: .4px;
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 600px) {

        body {
            padding: 20px 14px;
        }

        .logo h1 {
            font-size: 29px;
        }

        .login-card {
            padding: 28px 22px;
            border-radius: 18px;
        }

        .login-card h2 {
            font-size: 23px;
        }
    }

</style>

</head>

<body>

<div class="login-container">

    <div class="logo">
        <h1>Nyanyian Hujan</h1>
        <p>Admin Management System</p>
    </div>

    <div class="login-card">

        <h2>Login Admin</h2>

        <p class="description">
            Silakan masuk untuk mengakses dashboard admin.
        </p>

        @if($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Masukkan email"
                    value="{{ old('email') }}"
                    required
                >

            </div>


            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

            </div>


            <button type="submit" class="login-btn">
                Login
            </button>
        <a href="{{ route('admin.register') }}" class="register-btn">
    Buat Akun
</a>
        <a href="{{ url('/') }}" class="home-btn">
    <span class="back-icon">←</span>
    <span>Kembali ke Beranda</span>
</a>
        </form>

    </div>

    <div class="footer">
        © {{ date('Y') }} Nyanyian Hujan. All rights reserved.
    </div>

</div>

</body>

</html>