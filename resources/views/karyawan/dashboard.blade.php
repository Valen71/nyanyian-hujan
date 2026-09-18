<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Karyawan - Nyanyian Hujan</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600&display=swap');

/* =========================================================
   GLOBAL
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --bg: #06111f;
    --bg-secondary: #081a2b;
    --card: rgba(10, 29, 46, .88);
    --card-hover: rgba(13, 37, 57, .96);

    --cyan: #58ddff;
    --cyan-bright: #70e7ff;
    --cyan-soft: rgba(0, 217, 255, .10);

    --text: #f4fbff;
    --text-soft: #cbdbe3;
    --muted: #8299a7;

    --border: rgba(255, 255, 255, .07);

    --green: #86efac;
    --yellow: #fcd34d;
    --red: #fca5a5;
}

html {
    min-height: 100%;
}

body {
    min-height: 100vh;
    font-family: 'Montserrat', sans-serif;
    color: var(--text);

    background:
        radial-gradient(
            circle at top left,
            rgba(0, 217, 255, .10),
            transparent 30%
        ),
        radial-gradient(
            circle at bottom right,
            rgba(0, 119, 182, .13),
            transparent 35%
        ),
        linear-gradient(
            145deg,
            #04141f,
            #061a29 55%,
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
            rgba(255, 255, 255, .018) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255, 255, 255, .018) 1px,
            transparent 1px
        );

    background-size: 45px 45px;

    mask-image:
        linear-gradient(
            to bottom,
            rgba(0,0,0,.55),
            transparent
        );

    z-index: -1;
}


/* =========================================================
   TOPBAR
========================================================= */

.topbar {
    min-height: 72px;

    background:
        linear-gradient(
            90deg,
            rgba(4, 20, 31, .97),
            rgba(7, 29, 46, .95)
        );

    border-bottom: 1px solid rgba(255,255,255,.07);

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 0 6%;

    box-shadow:
        0 15px 40px rgba(0,0,0,.22);
}

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.brand-icon {
    width: 40px;
    height: 40px;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #00bfe8,
            #0369a1
        );

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 19px;

    box-shadow:
        0 8px 22px rgba(0,217,255,.15);
}

.brand-text h2 {
    color: #fff;

    font-family: 'Playfair Display', serif;

    font-size: 19px;
    font-weight: 600;

    letter-spacing: 1.5px;
}

.brand-text span {
    display: block;

    margin-top: 2px;

    color: #7f99a7;

    font-size: 10px;
    font-weight: 500;

    letter-spacing: .2px;
}

.topbar-right {
    display: flex;
    align-items: center;
    gap: 17px;
}

.user-info {
    text-align: right;
}

.user-name {
    color: #fff;

    font-size: 13px;
    font-weight: 700;
}

.user-role {
    margin-top: 3px;

    color: #7f99a7;

    font-size: 10px;
}

.logout-form {
    margin: 0;
}

.logout-button {
    border: 1px solid rgba(255,255,255,.10);

    background: rgba(255,255,255,.035);

    color: #cfe5ec;

    padding: 9px 15px;

    border-radius: 9px;

    cursor: pointer;

    font-family: 'Montserrat', sans-serif;

    font-size: 11px;
    font-weight: 700;

    transition:
        background .2s ease,
        border-color .2s ease,
        color .2s ease,
        transform .2s ease;
}

.logout-button:hover {
    background: rgba(239,68,68,.12);

    border-color: rgba(239,68,68,.30);

    color: #fca5a5;

    transform: translateY(-1px);
}


/* =========================================================
   MAIN
========================================================= */

.main {
    width: 100%;
    max-width: 1250px;

    margin: 0 auto;

    padding: 38px 25px 55px;
}

.page-header {
    display: flex;

    justify-content: space-between;
    align-items: flex-end;

    gap: 20px;

    margin-bottom: 28px;
}

.page-header h1 {
    margin-bottom: 7px;

    color: #fff;

    font-family: 'Playfair Display', serif;

    font-size: 32px;
    font-weight: 600;

    letter-spacing: -.4px;
}

.page-header p {
    color: var(--muted);

    font-size: 13px;

    line-height: 1.6;
}

.date-box {
    padding: 10px 15px;

    background: rgba(10,29,46,.78);

    border: 1px solid var(--border);

    border-radius: 10px;

    color: #9fb5c0;

    font-size: 12px;

    white-space: nowrap;

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.025);
}


/* =========================================================
   PENDING ALERT
========================================================= */

.pending-alert {
    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 26px;

    padding: 18px 20px;

    background:
        linear-gradient(
            135deg,
            rgba(120,62,12,.25),
            rgba(60,34,10,.22)
        );

    border: 1px solid rgba(245,158,11,.20);

    border-radius: 16px;

    box-shadow:
        0 15px 40px rgba(0,0,0,.14);
}

.pending-left {
    display: flex;
    align-items: center;
    gap: 14px;
}

.pending-icon {
    width: 44px;
    height: 44px;

    flex-shrink: 0;

    border-radius: 12px;

    background: rgba(245,158,11,.10);

    border: 1px solid rgba(245,158,11,.16);

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 20px;
}

.pending-text h3 {
    margin-bottom: 5px;

    color: #fcd34d;

    font-size: 14px;
    font-weight: 700;
}

.pending-text p {
    color: #b9a98d;

    font-size: 12px;

    line-height: 1.5;
}

.pending-button {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 7px;

    padding: 10px 15px;

    background: rgba(245,158,11,.12);

    border: 1px solid rgba(245,158,11,.25);

    border-radius: 9px;

    color: #fcd34d;

    text-decoration: none;

    font-family: 'Montserrat', sans-serif;

    font-size: 11px;
    font-weight: 700;

    white-space: nowrap;

    transition:
        background .2s ease,
        border-color .2s ease,
        transform .2s ease;
}

.pending-button:hover {
    background: rgba(245,158,11,.19);

    border-color: rgba(245,158,11,.40);

    transform: translateY(-1px);
}


/* =========================================================
   SECTION TITLE
========================================================= */

.section-title {
    margin-bottom: 14px;
}

.section-title h2 {
    color: #fff;

    font-size: 18px;
    font-weight: 700;
}

.section-title p {
    margin-top: 5px;

    color: var(--muted);

    font-size: 12px;
}


/* =========================================================
   STATISTICS
========================================================= */

.stats {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 15px;

    margin-bottom: 30px;
}

.stat-card {
    position: relative;

    overflow: hidden;

    padding: 21px;

    background:
        linear-gradient(
            145deg,
            rgba(12,32,51,.95),
            rgba(7,21,36,.90)
        );

    border: 1px solid var(--border);

    border-radius: 16px;

    text-decoration: none;

    color: inherit;

    box-shadow:
        0 18px 45px rgba(0,0,0,.16),
        inset 0 1px 0 rgba(255,255,255,.025);

    transition:
        transform .25s ease,
        border-color .25s ease,
        box-shadow .25s ease;
}

.stat-card::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;
    right: 0;

    height: 1px;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(0,217,255,.30),
            transparent
        );
}

.stat-card:hover {
    transform: translateY(-3px);

    border-color: rgba(0,217,255,.18);

    box-shadow:
        0 22px 50px rgba(0,0,0,.24),
        0 0 25px rgba(0,217,255,.035);
}

.stat-top {
    display: flex;

    justify-content: space-between;
    align-items: center;

    margin-bottom: 17px;
}

.stat-title {
    color: #91a8b5;

    font-size: 12px;
    font-weight: 600;
}

.stat-icon {
    width: 37px;
    height: 37px;

    border-radius: 10px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 16px;
}

.icon-blue {
    background: rgba(0,217,255,.10);

    border: 1px solid rgba(0,217,255,.15);
}

.icon-orange {
    background: rgba(245,158,11,.10);

    border: 1px solid rgba(245,158,11,.15);
}

.icon-green {
    background: rgba(34,197,94,.10);

    border: 1px solid rgba(34,197,94,.15);
}

.icon-purple {
    background: rgba(139,92,246,.10);

    border: 1px solid rgba(139,92,246,.15);
}

.stat-number {
    margin-bottom: 7px;

    color: #fff;

    font-size: 29px;
    font-weight: 800;

    letter-spacing: -.5px;
}

.stat-link {
    color: var(--cyan-bright);

    font-size: 11px;
    font-weight: 600;
}


/* =========================================================
   LATEST BOOKINGS
========================================================= */

.booking-card {
    overflow: hidden;

    margin-bottom: 25px;

    background:
        linear-gradient(
            145deg,
            rgba(12,32,51,.95),
            rgba(7,21,36,.92)
        );

    border: 1px solid var(--border);

    border-radius: 18px;

    box-shadow:
        0 22px 55px rgba(0,0,0,.18),
        inset 0 1px 0 rgba(255,255,255,.025);
}

.booking-header {
    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 20px;

    padding: 21px 23px;

    border-bottom: 1px solid rgba(255,255,255,.06);
}

.booking-header h2 {
    color: #fff;

    font-size: 18px;
    font-weight: 700;
}

.booking-header p {
    margin-top: 5px;

    color: var(--muted);

    font-size: 12px;
}

.all-booking {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 36px;

    padding: 0 15px;

    background: rgba(0,217,255,.09);

    border: 1px solid rgba(0,217,255,.22);

    border-radius: 9px;

    color: var(--cyan-bright);

    text-decoration: none;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;
    font-weight: 700;

    white-space: nowrap;

    transition:
        background .2s ease,
        border-color .2s ease,
        transform .2s ease;
}

.all-booking:hover {
    background: rgba(0,217,255,.16);

    border-color: rgba(0,217,255,.38);

    color: #fff;

    transform: translateY(-1px);
}


/* =========================================================
   TABLE
========================================================= */

.table-wrapper {
    width: 100%;

    overflow-x: auto;
}

table {
    width: 100%;

    min-width: 850px;

    border-collapse: collapse;
}

th {
    padding: 14px 19px;

    background: rgba(0,217,255,.035);

    color: #58ddff;

    text-align: left;

    font-size: 11px;
    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .7px;

    border-bottom: 1px solid rgba(0,217,255,.12);
}

td {
    padding: 15px 19px;

    background: rgba(7,24,39,.72);

    color: #cbdbe3;

    font-size: 13px;

    border-bottom: 1px solid rgba(255,255,255,.045);

    vertical-align: middle;
}

tbody tr {
    transition: background .2s ease;
}

tbody tr:hover td {
    background: rgba(0,217,255,.035);
}

tbody tr:last-child td {
    border-bottom: none;
}

.booking-code {
    color: #70e7ff;

    font-size: 13px;
    font-weight: 700;

    letter-spacing: .2px;
}

.customer-name {
    color: #f1f8fb;

    font-size: 13px;
    font-weight: 600;
}

.ship-name {
    color: #91a6b3;

    font-size: 13px;
}


/* =========================================================
   STATUS
========================================================= */

.status {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-width: 86px;

    padding: 6px 11px;

    border-radius: 999px;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;

    border: 1px solid transparent;
}

.status.pending {
    background: rgba(245,158,11,.08);

    border-color: rgba(245,158,11,.20);

    color: #fcd34d;
}

.status.confirmed {
    background: rgba(59,130,246,.08);

    border-color: rgba(59,130,246,.20);

    color: #93c5fd;
}

.status.completed {
    background: rgba(34,197,94,.08);

    border-color: rgba(34,197,94,.20);

    color: #86efac;
}

.status.cancelled {
    background: rgba(239,68,68,.08);

    border-color: rgba(239,68,68,.20);

    color: #fca5a5;
}


/* =========================================================
   EMPTY
========================================================= */

.empty {
    padding: 55px 20px;

    text-align: center;

    color: #718896;

    font-size: 13px;
}


/* =========================================================
   QUICK ACTION
========================================================= */

.quick-card {
    position: relative;

    overflow: hidden;

    display: flex;

    justify-content: space-between;
    align-items: center;

    gap: 20px;

    padding: 23px 25px;

    background:
        linear-gradient(
            135deg,
            rgba(7,34,51,.97),
            rgba(5,23,38,.96)
        );

    border: 1px solid rgba(0,217,255,.13);

    border-radius: 18px;

    box-shadow:
        0 20px 50px rgba(0,0,0,.18);
}

.quick-card::before {
    content: "";

    position: absolute;

    width: 260px;
    height: 260px;

    top: -160px;
    right: -100px;

    background: rgba(0,217,255,.08);

    border-radius: 50%;

    filter: blur(10px);

    pointer-events: none;
}

.quick-card h2 {
    margin-bottom: 6px;

    color: #fff;

    font-size: 18px;
    font-weight: 700;
}

.quick-card p {
    color: #8ca4b1;

    font-size: 12px;

    line-height: 1.6;
}

.quick-button {
    position: relative;
    z-index: 1;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 38px;

    padding: 0 17px;

    background: rgba(0,217,255,.10);

    border: 1px solid rgba(0,217,255,.25);

    border-radius: 9px;

    color: var(--cyan-bright);

    text-decoration: none;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;
    font-weight: 700;

    white-space: nowrap;

    transition:
        background .2s ease,
        border-color .2s ease,
        color .2s ease,
        transform .2s ease;
}

.quick-button:hover {
    background: rgba(0,217,255,.18);

    border-color: rgba(0,217,255,.42);

    color: #fff;

    transform: translateY(-1px);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1000px) {

    .stats {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media (max-width: 700px) {

    .topbar {
        min-height: auto;

        padding: 15px 20px;

        align-items: flex-start;
    }

    .topbar-right {
        gap: 9px;
    }

    .user-info {
        display: none;
    }

    .main {
        padding: 28px 16px 42px;
    }

    .page-header {
        align-items: flex-start;

        flex-direction: column;
    }

    .page-header h1 {
        font-size: 27px;
    }

    .date-box {
        width: 100%;
    }

    .pending-alert {
        align-items: flex-start;

        flex-direction: column;
    }

    .pending-button {
        width: 100%;
    }

    .stats {
        grid-template-columns: 1fr;
    }

    .booking-header {
        align-items: flex-start;

        flex-direction: column;
    }

    .all-booking {
        width: 100%;
    }

    .quick-card {
        align-items: flex-start;

        flex-direction: column;
    }

    .quick-button {
        width: 100%;
    }

}

@media (max-width: 500px) {

    .brand-text h2 {
        font-size: 17px;
    }

    .brand-text span {
        font-size: 9px;
    }

    .brand-icon {
        width: 37px;
        height: 37px;
    }

    .logout-button {
        padding: 8px 11px;

        font-size: 10px;
    }

    .main {
        padding: 24px 12px 35px;
    }

    .page-header h1 {
        font-size: 25px;
    }

    .page-header p {
        font-size: 12px;
    }

    .section-title h2 {
        font-size: 17px;
    }

    .booking-header h2 {
        font-size: 17px;
    }

    .quick-card h2 {
        font-size: 17px;
    }

}
/* =========================================
   PREMIUM DASHBOARD TYPOGRAPHY
========================================= */

.page-header {
    position: relative;
    padding: 8px 0 28px;
}

/* Label kecil di atas judul */
.page-header::before {
    content: "Nyanyian Hujan • STAFF AREA";
    display: block;
    margin-bottom: 10px;
    color: #5ddff5;
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    opacity: .85;
}

/* Judul Dashboard Karyawan */
.page-header h1 {
    margin: 0;
    color: #f4fcff;
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    font-weight: 600;
    line-height: 1.15;
    letter-spacing: -.5px;
}

/* Deskripsi */
.page-header p {
    margin-top: 10px;
    max-width: 650px;
    color: #91aeb9;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.7;
    letter-spacing: .1px;
}

/* Tanggal */
.page-header .date,
.page-header .current-date {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 16px;
    padding: 8px 13px;
    border: 1px solid rgba(0, 217, 255, .14);
    border-radius: 8px;
    background: rgba(0, 217, 255, .045);
    color: #a7c5cf;
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .3px;
}

/* =========================================
   RINGKASAN BOOKING
========================================= */

.booking-summary,
.section-header {
    margin-top: 8px;
}

.booking-summary h2,
.section-header h2 {
    margin: 0;
    color: #f1fbff;
    font-family: 'Playfair Display', serif;
    font-size: 27px;
    font-weight: 600;
    letter-spacing: -.2px;
}

.booking-summary p,
.section-header p {
    margin-top: 6px;
    color: #78939e;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.6;
}

/* Garis kecil premium di bawah heading */
.booking-summary h2::after,
.section-header h2::after {
    content: "";
    display: block;
    width: 38px;
    height: 2px;
    margin-top: 9px;
    border-radius: 10px;
    background: #00d9ff;
    box-shadow: 0 0 10px rgba(0, 217, 255, .35);
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 700px) {
    .page-header h1 {
        font-size: 34px;
    }

    .page-header p {
        font-size: 13px;
    }

    .booking-summary h2,
    .section-header h2 {
        font-size: 24px;
    }
}
.page-header {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.page-header::before {
    margin-left: auto;
    margin-right: auto;
}

.page-header h1 {
    text-align: center;
}

.page-header p {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

.page-header .date,
.page-header .current-date {
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>

<body>

    <!-- TOPBAR -->
    <header class="topbar">

        <div class="brand">

            <div class="brand-icon">
                ⚓
            </div>

            <div class="brand-text">
                <h2>Nyanyian Hujan</h2>
                <span>Employee Management System</span>
            </div>

        </div>

        <div class="topbar-right">

            <div class="user-info">
                <div class="user-name">
                    {{ auth()->user()->name }}
                </div>

                <div class="user-role">
                    Karyawan
                </div>
            </div>

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
                class="logout-form"
            >
                @csrf

                <button type="submit" class="logout-button">
                    Logout
                </button>
            </form>

        </div>

    </header>


    <!-- MAIN -->
    <main class="main">

        <!-- HEADER -->
        <div class="page-header">

            <div>
                <h1>Dashboard Karyawan</h1>

                <p>
                    Selamat datang kembali, {{ auth()->user()->name }}.
                    Kelola aktivitas booking Nyanyian Hujan di sini.
                </p>
            </div>

            <div class="date-box">
                📅 {{ now()->format('d F Y') }}
            </div>

        </div>


        <!-- PENDING ALERT -->
        @if($pending > 0)

            <div class="pending-alert">

                <div class="pending-left">

                    <div class="pending-icon">
                        🔔
                    </div>

                    <div class="pending-text">

                        <h3>
                            Ada {{ $pending }} Booking Menunggu Konfirmasi
                        </h3>

                        <p>
                            Silakan periksa booking pending dan proses sesuai kebutuhan.
                        </p>

                    </div>

                </div>

                <a
                    href="{{ route('karyawan.bookings.index', ['status' => 'pending']) }}"
                    class="pending-button"
                >
                    Lihat Booking Pending →
                </a>

            </div>

        @endif


        <!-- STATISTICS -->
        <div class="section-title">

            <h2>Ringkasan Booking</h2>

            <p>
                Statistik booking Nyanyian Hujan saat ini.
            </p>

        </div>


        <div class="stats">

            <!-- TOTAL -->
            <a
                href="{{ route('karyawan.bookings.index') }}"
                class="stat-card"
            >

                <div class="stat-top">

                    <div class="stat-title">
                        Total Booking
                    </div>

                    <div class="stat-icon icon-blue">
                        📋
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalBooking }}
                </div>

                <div class="stat-link">
                    Lihat semua booking →
                </div>

            </a>


            <!-- PENDING -->
            <a
                href="{{ route('karyawan.bookings.index', ['status' => 'pending']) }}"
                class="stat-card"
            >

                <div class="stat-top">

                    <div class="stat-title">
                        Pending
                    </div>

                    <div class="stat-icon icon-orange">
                        ⏳
                    </div>

                </div>

                <div class="stat-number">
                    {{ $pending }}
                </div>

                <div class="stat-link">
                    Perlu diproses →
                </div>

            </a>


            <!-- CONFIRMED -->
            <a
                href="{{ route('karyawan.bookings.index', ['status' => 'confirmed']) }}"
                class="stat-card"
            >

                <div class="stat-top">

                    <div class="stat-title">
                        Confirmed
                    </div>

                    <div class="stat-icon icon-green">
                        ✓
                    </div>

                </div>

                <div class="stat-number">
                    {{ $confirmed }}
                </div>

                <div class="stat-link">
                    Booking dikonfirmasi →
                </div>

            </a>


            <!-- COMPLETED -->
            <a
                href="{{ route('karyawan.bookings.index', ['status' => 'completed']) }}"
                class="stat-card"
            >

                <div class="stat-top">

                    <div class="stat-title">
                        Completed
                    </div>

                    <div class="stat-icon icon-purple">
                        ★
                    </div>

                </div>

                <div class="stat-number">
                    {{ $completed }}
                </div>

                <div class="stat-link">
                    Booking selesai →
                </div>

            </a>

        </div>


        <!-- LATEST BOOKINGS -->
        <section class="booking-card">

            <div class="booking-header">

                <div>

                    <h2>Booking Terbaru</h2>

                    <p>
                        5 booking terakhir yang masuk ke sistem.
                    </p>

                </div>

                <a
                    href="{{ route('karyawan.bookings.index') }}"
                    class="all-booking"
                >
                    Lihat Semua
                </a>

            </div>


            @if($latestBookings->count() > 0)

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>
                                <th>Kode Booking</th>
                                <th>Pelanggan</th>
                                <th>Kapal</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($latestBookings as $booking)

                                <tr>

                                    <td>
                                        <span class="booking-code">
                                            {{ $booking->booking_code }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="customer-name">
                                            {{ $booking->customer_name }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="ship-name">
                                            {{ $booking->ship->name ?? '-' }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $booking->booking_date->format('d/m/Y') }}
                                    </td>

                                    <td>

                                        <span class="status {{ $booking->status }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="empty">
                    Belum ada booking.
                </div>

            @endif

        </section>


        <!-- QUICK ACTION -->
        <section class="quick-card">

            <div>

                <h2>Kelola Data Booking</h2>

                <p>
                    Lihat, periksa, dan proses seluruh booking pelanggan Nyanyian Hujan.
                </p>

            </div>

            <a
                href="{{ route('karyawan.bookings.index') }}"
                class="quick-button"
            >
                Kelola Booking →
            </a>

        </section>

    </main>

</body>
</html>