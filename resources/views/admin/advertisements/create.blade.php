<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Iklan - Nyanyian Hujan</title>

    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    min-height: 100%;
}

body {
    min-height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
    color: #eafaff;

    background:
        radial-gradient(
            circle at top left,
            rgba(0, 217, 255, 0.10),
            transparent 30%
        ),
        radial-gradient(
            circle at bottom right,
            rgba(0, 128, 170, 0.15),
            transparent 32%
        ),
        linear-gradient(
            145deg,
            #04141f,
            #061d2a 55%,
            #031018
        );

    overflow-x: hidden;
}

/* GRID HALUS */
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
            rgba(0,0,0,.5),
            transparent
        );
}

/* =========================================
   DASHBOARD
========================================= */

.dashboard {
    display: flex;
    min-height: 100vh;
}

/* =========================================
   SIDEBAR
========================================= */

.sidebar {
    width: 250px;
    min-height: 100vh;

    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;

    padding: 28px 18px;

    background:
        linear-gradient(
            180deg,
            rgba(3, 18, 28, .98),
            rgba(2, 13, 21, .98)
        );

    border-right: 1px solid rgba(0, 217, 255, .10);

    box-shadow:
        10px 0 40px rgba(0,0,0,.18);

    color: white;

    z-index: 10;
}

/* LOGO */

.logo {
    padding: 0 12px;
    margin-bottom: 42px;
}

.logo h2 {
    color: #ffffff;
    font-size: 23px;
    font-weight: 800;
    letter-spacing: .5px;
}

.logo span {
    display: block;
    margin-top: 6px;

    color: #7199a8;

    font-size: 12px;
    font-weight: 500;
}

/* MENU TITLE */

.menu-title {
    margin: 0 12px 13px;

    color: #547684;

    font-size: 11px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* MENU */

.menu {
    list-style: none;
}

.menu li {
    margin-bottom: 6px;
}

.menu a {
    display: flex;
    align-items: center;

    gap: 12px;

    padding: 13px 12px;

    border-radius: 10px;

    color: #9bb8c2;

    text-decoration: none;

    font-size: 14px;
    font-weight: 600;

    transition:
        background .2s ease,
        color .2s ease,
        transform .2s ease;
}

.menu a:hover {
    background: rgba(0,217,255,.06);
    color: #eaffff;
    transform: translateX(2px);
}

.menu a.active {
    background:
        linear-gradient(
            90deg,
            rgba(0,217,255,.13),
            rgba(0,217,255,.04)
        );

    color: #00d9ff;

    border: 1px solid rgba(0,217,255,.12);

    box-shadow:
        0 0 20px rgba(0,217,255,.04);
}

.menu-icon {
    width: 22px;

    text-align: center;

    font-size: 16px;
}

/* =========================================
   MAIN
========================================= */

.main {
    margin-left: 250px;

    width: calc(100% - 250px);

    min-height: 100vh;

    padding: 38px 42px;
}

/* =========================================
   TOPBAR
========================================= */

.topbar {
    display: flex;

    justify-content: space-between;
    align-items: center;

    margin-bottom: 30px;
}

.topbar h1 {
    margin-bottom: 7px;

    color: #ffffff;

    font-size: 30px;
    font-weight: 800;

    letter-spacing: -.4px;
}

.topbar p {
    color: #7699a6;

    font-size: 14px;
    font-weight: 500;
}

/* =========================================
   ADMIN PROFILE
========================================= */

.admin-profile {
    display: flex;
    align-items: center;

    gap: 12px;

    padding: 9px 14px;

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(0,217,255,.10);

    border-radius: 12px;

    box-shadow:
        0 12px 35px rgba(0,0,0,.18);

    backdrop-filter: blur(12px);
}

.avatar {
    width: 38px;
    height: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            #0b7189,
            #043646
        );

    border: 1px solid rgba(0,217,255,.25);

    color: #ffffff;

    font-size: 14px;
    font-weight: 800;
}

.admin-info strong {
    display: block;

    color: #eaffff;

    font-size: 13px;
    font-weight: 700;
}

.admin-info span {
    display: block;

    margin-top: 3px;

    color: #658895;

    font-size: 11px;
}

/* LOGOUT */

.logout-btn {
    border: 1px solid rgba(255,92,110,.18);

    background: rgba(255,92,110,.07);

    color: #ff9aa6;

    padding: 9px 13px;

    border-radius: 8px;

    font-size: 12px;
    font-weight: 700;

    cursor: pointer;

    transition: .2s ease;
}

.logout-btn:hover {
    background: rgba(255,92,110,.14);
    border-color: rgba(255,92,110,.30);
}

/* =========================================
   FORM CARD
========================================= */

.form-card {
    width: 100%;
    max-width: 1000px;

    padding: 32px;

    background:
        linear-gradient(
            145deg,
            rgba(10, 35, 47, .78),
            rgba(4, 22, 32, .82)
        );

    border: 1px solid rgba(0,217,255,.12);

    border-radius: 18px;

    box-shadow:
        0 25px 60px rgba(0,0,0,.25),
        0 0 40px rgba(0,217,255,.025);

    backdrop-filter: blur(16px);
}

/* =========================================
   FORM HEADER
========================================= */

.form-header {
    margin-bottom: 28px;

    padding-bottom: 22px;

    border-bottom: 1px solid rgba(255,255,255,.07);
}

.form-header h2 {
    margin-bottom: 7px;

    color: #ffffff;

    font-size: 21px;
    font-weight: 800;
}

.form-header p {
    color: #779ba8;

    font-size: 14px;
    font-weight: 500;
}

/* =========================================
   FORM GROUP
========================================= */

.form-group {
    margin-bottom: 23px;
}

.form-group label {
    display: block;

    margin-bottom: 9px;

    color: #c6e2e9;

    font-size: 14px;
    font-weight: 700;

    letter-spacing: .1px;
}

.required {
    color: #ff7b8a;
}

/* =========================================
   INPUT
========================================= */

.form-control {
    width: 100%;

    padding: 14px 16px;

    border: 1px solid rgba(120,170,185,.20);

    border-radius: 10px;

    outline: none;

    background:
        rgba(2, 17, 26, .72);

    color: #eaffff;

    font-family: Arial, Helvetica, sans-serif;

    font-size: 15px;
    font-weight: 500;

    transition:
        border-color .2s ease,
        box-shadow .2s ease,
        background .2s ease;
}

.form-control::placeholder {
    color: #54717c;
}

.form-control:focus {
    border-color: rgba(0,217,255,.55);

    background:
        rgba(3, 23, 34, .90);

    box-shadow:
        0 0 0 3px rgba(0,217,255,.08),
        0 0 25px rgba(0,217,255,.035);
}

textarea.form-control {
    min-height: 135px;

    resize: vertical;

    line-height: 1.7;
}

/* =========================================
   HELP TEXT
========================================= */

.form-help {
    margin-top: 7px;

    color: #648792;

    font-size: 12px;
    font-weight: 500;

    line-height: 1.6;
}

/* =========================================
   TWO COLUMNS
========================================= */

.form-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 22px;
}

/* =========================================
   FILE INPUT
========================================= */

.file-input {
    padding: 10px;

    background:
        rgba(2,17,26,.55);

    cursor: pointer;
}

.file-input::file-selector-button {
    margin-right: 12px;

    padding: 9px 13px;

    border: 1px solid rgba(0,217,255,.20);

    border-radius: 7px;

    background:
        rgba(0,217,255,.08);

    color: #9eeeff;

    font-size: 12px;
    font-weight: 700;

    cursor: pointer;
}

/* =========================================
   CHECKBOX
========================================= */

.checkbox-wrapper {
    display: flex;
    align-items: center;

    gap: 11px;

    padding: 15px 16px;

    background:
        rgba(0,217,255,.035);

    border: 1px solid rgba(0,217,255,.12);

    border-radius: 10px;
}

.checkbox-wrapper input {
    width: 18px;
    height: 18px;

    accent-color: #00d9ff;

    cursor: pointer;
}

.checkbox-wrapper label {
    margin: 0;

    color: #cbe6ed;

    font-size: 14px;
    font-weight: 700;

    cursor: pointer;
}

/* =========================================
   ERROR
========================================= */

.error-box {
    margin-bottom: 24px;

    padding: 15px 17px;

    background:
        rgba(255,92,110,.07);

    border: 1px solid rgba(255,92,110,.20);

    border-radius: 10px;

    color: #ffadb6;

    font-size: 13px;
    font-weight: 500;

    line-height: 1.6;
}

.error-box strong {
    color: #ff8d9b;

    font-size: 14px;
    font-weight: 800;
}

.error-box ul {
    margin-top: 8px;
    margin-left: 20px;
}

.error-box li {
    margin-bottom: 4px;
}

/* =========================================
   BUTTON AREA
========================================= */

.form-actions {
    display: flex;

    gap: 12px;

    margin-top: 28px;

    padding-top: 23px;

    border-top: 1px solid rgba(255,255,255,.07);
}

/* SEMUA BUTTON */

.btn {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 43px;

    padding: 0 20px;

    border-radius: 9px;

    text-decoration: none;

    border: 1px solid transparent;

    font-size: 14px;
    font-weight: 700;

    cursor: pointer;

    transition:
        transform .2s ease,
        background .2s ease,
        border-color .2s ease,
        box-shadow .2s ease;
}

/* SIMPAN */

.btn-primary {
    background:
        linear-gradient(
            135deg,
            #00b9dc,
            #008eaa
        );

    color: #02141d;

    border-color: rgba(0,217,255,.35);

    box-shadow:
        0 8px 25px rgba(0,217,255,.12);
}

.btn-primary:hover {
    transform: translateY(-1px);

    background:
        linear-gradient(
            135deg,
            #19d9fa,
            #00a7c7
        );

    box-shadow:
        0 12px 30px rgba(0,217,255,.18);
}

/* KEMBALI */

.btn-secondary {
    background:
        rgba(255,255,255,.045);

    color: #a9cbd4;

    border-color: rgba(255,255,255,.10);
}

.btn-secondary:hover {
    transform: translateY(-1px);

    background:
        rgba(255,255,255,.08);

    color: #ffffff;

    border-color: rgba(255,255,255,.16);
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 900px) {

    .sidebar {
        width: 70px;

        padding: 20px 10px;
    }

    .logo h2 {
        font-size: 0;
    }

    .logo h2::after {
        content: "OT";

        font-size: 20px;
    }

    .logo span,
    .menu-title,
    .menu-text {
        display: none;
    }

    .menu a {
        justify-content: center;
    }

    .main {
        margin-left: 70px;

        width: calc(100% - 70px);

        padding: 25px;
    }

    .admin-info {
        display: none;
    }
}

@media (max-width: 650px) {

    .main {
        padding: 20px 15px;
    }

    .topbar {
        flex-direction: column;

        gap: 15px;

        align-items: flex-start;
    }

    .topbar h1 {
        font-size: 25px;
    }

    .form-card {
        padding: 22px 18px;
    }

    .form-grid {
        grid-template-columns: 1fr;
    }

    .form-actions {
        flex-direction: column;
    }

    .btn {
        width: 100%;
    }
}
/* =========================================
   IKON KALENDER - PUTIH
========================================= */

input[type="date"] {
    color-scheme: dark !important;
    color: #eafaff !important;
    background-color: rgba(2, 17, 26, .72) !important;
}

input[type="date"]::-webkit-calendar-picker-indicator {
    opacity: 1 !important;
    filter: brightness(0) invert(1) !important;
    cursor: pointer !important;
}

/* Chrome / Edge */
input[type="date"]::-webkit-inner-spin-button {
    display: none;
}

input[type="date"]::-webkit-clear-button {
    display: none;
}
    </style>
</head>

<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <h2>Nyanyian Hujan</h2>
            <span>Admin Dashboard</span>
        </div>

        <div class="menu-title">
            Menu
        </div>

        <ul class="menu">

            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <span class="menu-icon">⌂</span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.bookings.index') }}">
                    <span class="menu-icon">▣</span>
                    <span class="menu-text">Data Booking</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.ships.index') }}">
                    <span class="menu-icon">⚓</span>
                    <span class="menu-text">Data Kapal</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.users.index') }}">
                    <span class="menu-icon">👤</span>
                    <span class="menu-text">Kelola Akun</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.customer_messages.index') }}">
                    <span class="menu-icon">💬</span>
                    <span class="menu-text">Pesan Customer</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.advertisements.index') }}" class="active">
                    <span class="menu-icon">📢</span>
                    <span class="menu-text">Manajemen Iklan</span>
                </a>
            </li>

        </ul>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <div>
                <h1>Tambah Iklan</h1>

                <p>
                    Buat banner atau iklan baru untuk halaman Nyanyian Hujan.
                </p>
            </div>

            <div class="admin-profile">

                <div class="avatar">
                    A
                </div>

                <div class="admin-info">
                    <strong>Administrator</strong>
                    <span>Admin Nyanyian Hujan</span>
                </div>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-btn">
                        Logout
                    </button>
                </form>

            </div>

        </div>


        <!-- FORM CARD -->
        <div class="form-card">

            <div class="form-header">

                <h2>Informasi Iklan</h2>

                <p>
                    Isi informasi berikut untuk membuat iklan baru.
                </p>

            </div>


            <!-- VALIDATION ERROR -->
            @if($errors->any())

                <div class="error-box">

                    <strong>
                        Ada data yang belum benar:
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- FORM -->
            <form
                action="{{ route('admin.advertisements.store') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <!-- JUDUL -->
                <div class="form-group">

                    <label for="title">
                        Judul Iklan
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{ old('title') }}"
                        placeholder="Contoh: Promo Liburan Akhir Tahun"
                        required
                    >

                </div>


                <!-- DESKRIPSI -->
                <div class="form-group">

                    <label for="description">
                        Deskripsi
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        class="form-control"
                        placeholder="Tuliskan informasi singkat mengenai promo atau iklan..."
                    >{{ old('description') }}</textarea>

                    <div class="form-help">
                        Deskripsi akan digunakan sebagai informasi tambahan untuk iklan.
                    </div>

                </div>


                <!-- GAMBAR -->
                <div class="form-group">

                    <label for="image">
                        Gambar / Banner
                    </label>

                    <input
                        type="file"
                        id="image"
                        name="image"
                        class="form-control file-input"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <div class="form-help">
                        Format yang diperbolehkan: JPG, JPEG, PNG, WEBP.
                        Maksimal ukuran 30 MB.
                    </div>

                </div>


                <!-- LINK -->
                <div class="form-group">

                    <label for="link">
                        Link Iklan
                    </label>

                    <input
                        type="url"
                        id="link"
                        name="link"
                        class="form-control"
                        value="{{ old('link') }}"
                        placeholder="https://contoh.com/promo"
                    >

                    <div class="form-help">
                        Opsional. Jika banner diklik, pengunjung akan diarahkan ke link ini.
                    </div>

                </div>


                <!-- TANGGAL -->
                <div class="form-grid">

                    <div class="form-group">

                        <label for="start_date">
                            Tanggal Mulai
                        </label>

                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            class="form-control"
                            value="{{ old('start_date') }}"
                        >

                        <div class="form-help">
                            Kosongkan jika iklan langsung berlaku tanpa batas awal.
                        </div>

                    </div>


                    <div class="form-group">

                        <label for="end_date">
                            Tanggal Berakhir
                        </label>

                        <input
                            type="date"
                            id="end_date"
                            name="end_date"
                            class="form-control"
                            value="{{ old('end_date') }}"
                        >

                        <div class="form-help">
                            Kosongkan jika iklan tidak memiliki batas akhir.
                        </div>

                    </div>

                </div>


                <!-- STATUS -->
                <div class="form-group">

                    <div class="checkbox-wrapper">

                        <input
                            type="checkbox"
                            id="is_active"
                            name="is_active"
                            value="1"
                            {{ old('is_active', true) ? 'checked' : '' }}
                        >

                        <label for="is_active">
                            Aktifkan iklan ini
                        </label>

                    </div>

                </div>


                <!-- BUTTON -->
                <div class="form-actions">

                    <a
                        href="{{ route('admin.advertisements.index') }}"
                        class="btn btn-secondary"
                    >
                        ← Kembali
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Simpan Iklan
                    </button>

                </div>

            </form>

        </div>

    </main>

</div>

</body>

</html>
