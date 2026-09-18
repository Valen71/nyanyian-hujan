<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Booking - Karyawan | Nyanyian Hujan</title>

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
    --bg-dark: #04141f;

    --card: rgba(10, 29, 46, .92);
    --card-soft: rgba(7, 24, 39, .78);

    --cyan: #58ddff;
    --cyan-light: #70e7ff;

    --text: #f4fbff;
    --text-soft: #cbdbe3;
    --muted: #8299a7;

    --border: rgba(255,255,255,.07);
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
            rgba(0,217,255,.10),
            transparent 30%
        ),
        radial-gradient(
            circle at bottom right,
            rgba(0,119,182,.13),
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
            rgba(0,0,0,.55),
            transparent
        );

    z-index: -1;
}


/* =========================================================
   NAVBAR
========================================================= */

.navbar {
    min-height: 72px;

    padding: 0 6%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    background:
        linear-gradient(
            90deg,
            rgba(4,20,31,.97),
            rgba(7,29,46,.95)
        );

    border-bottom: 1px solid rgba(255,255,255,.07);

    box-shadow:
        0 15px 40px rgba(0,0,0,.22);
}

.logo {
    color: #fff;

    font-family: 'Playfair Display', serif;

    font-size: 24px;
    font-weight: 600;

    letter-spacing: 1.5px;
}

.role {
    color: #9fb5c0;

    font-size: 12px;
    font-weight: 500;
}


/* =========================================================
   CONTAINER
========================================================= */

.container {
    width: 100%;
    max-width: 1250px;

    margin: 0 auto;

    padding: 38px 25px 55px;
}


/* =========================================================
   HEADER
========================================================= */

.header {
    margin-bottom: 24px;

    padding: 23px 24px;

    background:
        linear-gradient(
            145deg,
            rgba(12,32,51,.95),
            rgba(7,21,36,.90)
        );

    border: 1px solid var(--border);

    border-radius: 18px;

    box-shadow:
        0 20px 50px rgba(0,0,0,.16),
        inset 0 1px 0 rgba(255,255,255,.025);
}

/* ================================
   TOMBOL KEMBALI KE DASHBOARD
================================ */

.back {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;

    min-height: 40px;

    padding: 0 16px;

    margin-bottom: 20px;

    border: 1px solid rgba(0, 217, 255, .20);
    border-radius: 9px;

    background: rgba(0, 217, 255, .055);

    color: #9eeeff;

    text-decoration: none;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;
    font-weight: 600;

    letter-spacing: .1px;

    box-shadow:
        0 5px 18px rgba(0, 0, 0, .12);

    transition: all .25s ease;
}

.back:hover {
    color: #ffffff;

    background: rgba(0, 217, 255, .12);

    border-color: rgba(0, 217, 255, .42);

    transform: translateX(-3px);

    box-shadow:
        0 8px 22px rgba(0, 217, 255, .10);
}

.back:active {
    transform: translateX(-1px);
}

.header h1 {
    margin-bottom: 7px;

    color: #fff;

    font-family: 'Playfair Display', serif;

    font-size: 30px;
    font-weight: 600;

    letter-spacing: -.3px;
}

.header p {
    color: var(--muted);

    font-size: 13px;

    line-height: 1.6;
}


/* =========================================================
   TABLE CARD
========================================================= */

.table-wrapper {
    overflow: hidden;

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


/* =========================================================
   SEARCH & FILTER
========================================================= */

.search-form {
    display: flex;

    align-items: center;

    gap: 9px;

    padding: 19px 20px;

    background: rgba(0,217,255,.018);

    border-bottom: 1px solid rgba(255,255,255,.06);
}

.search-form input,
.search-form select {
    min-height: 41px;

    padding: 9px 13px;

    outline: none;

    border: 1px solid rgba(255,255,255,.09);

    border-radius: 10px;

    background: rgba(10,29,46,.88);

    color: #d8e6ec;

    font-family: 'Montserrat', sans-serif;

    font-size: 13px;

    transition:
        border-color .2s ease,
        background .2s ease,
        box-shadow .2s ease;
}

.search-form input {
    flex: 1;

    min-width: 280px;
}

.search-form select {
    min-width: 155px;

    cursor: pointer;

    color-scheme: dark;
}

.search-form input::placeholder {
    color: #607987;
}

.search-form input:focus,
.search-form select:focus {
    border-color: rgba(0,217,255,.35);

    background: rgba(10,31,49,.95);

    box-shadow:
        0 0 0 3px rgba(0,217,255,.05);
}


/* SEARCH BUTTON */

.search-form button {
    min-height: 41px;

    padding: 9px 17px;

    border: 1px solid rgba(0,217,255,.25);

    border-radius: 10px;

    background: rgba(0,217,255,.10);

    color: var(--cyan-light);

    font-family: 'Montserrat', sans-serif;

    font-size: 13px;
    font-weight: 700;

    cursor: pointer;

    transition:
        background .2s ease,
        border-color .2s ease,
        transform .2s ease;
}

.search-form button:hover {
    background: rgba(0,217,255,.17);

    border-color: rgba(0,217,255,.40);

    transform: translateY(-1px);
}


/* RESET */

.reset-btn {
    min-height: 41px;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    padding: 0 16px;

    border: 1px solid rgba(255,255,255,.08);

    border-radius: 10px;

    background: rgba(255,255,255,.04);

    color: #9eb2bd;

    text-decoration: none;

    font-size: 13px;
    font-weight: 600;

    transition:
        background .2s ease,
        border-color .2s ease,
        color .2s ease;
}

.reset-btn:hover {
    background: rgba(255,255,255,.08);

    border-color: rgba(255,255,255,.15);

    color: #fff;
}


/* =========================================================
   TABLE
========================================================= */

.table-wrapper > table,
.table-wrapper .table-wrapper table {
    width: 100%;
}

table {
    width: 100%;

    min-width: 950px;

    border-collapse: collapse;
}

th {
    padding: 14px 17px;

    background: rgba(0,217,255,.035);

    color: var(--cyan);

    text-align: left;

    font-size: 11px;
    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .7px;

    border-bottom: 1px solid rgba(0,217,255,.12);
}

td {
    padding: 15px 17px;

    background: rgba(7,24,39,.72);

    color: var(--text-soft);

    font-size: 13px;

    border-bottom: 1px solid rgba(255,255,255,.045);

    vertical-align: middle;

    white-space: nowrap;
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


/* =========================================================
   BOOKING CODE
========================================================= */

.code {
    color: var(--cyan-light);

    font-size: 13px;
    font-weight: 700;

    letter-spacing: .2px;
}


/* =========================================================
   CREATED DATE
========================================================= */

.created-date {
    color: #d9e8ee;

    font-size: 13px;

    font-weight: 600;
}

.created-time {
    margin-top: 3px;

    color: #78909d;

    font-size: 11px;
}


/* =========================================================
   STATUS
========================================================= */

.status {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-width: 85px;

    padding: 6px 11px;

    border-radius: 999px;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;

    border: 1px solid transparent;
}

.status.pending {
    background: rgba(245,158,11,.08);

    color: #fcd34d;

    border-color: rgba(245,158,11,.20);
}

.status.confirmed {
    background: rgba(59,130,246,.08);

    color: #93c5fd;

    border-color: rgba(59,130,246,.20);
}

.status.completed {
    background: rgba(34,197,94,.08);

    color: #86efac;

    border-color: rgba(34,197,94,.20);
}

.status.cancelled {
    background: rgba(239,68,68,.08);

    color: #fca5a5;

    border-color: rgba(239,68,68,.20);
}


/* =========================================================
   DETAIL BUTTON
========================================================= */

.detail-btn {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    min-height: 34px;

    padding: 0 13px;

    background: rgba(0,217,255,.09);

    border: 1px solid rgba(0,217,255,.22);

    border-radius: 8px;

    color: var(--cyan-light);

    text-decoration: none;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;
    font-weight: 700;

    transition:
        background .2s ease,
        border-color .2s ease,
        color .2s ease,
        transform .2s ease;
}

.detail-btn:hover {
    background: rgba(0,217,255,.17);

    border-color: rgba(0,217,255,.40);

    color: #fff;

    transform: translateY(-1px);
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
   CUSTOM PAGINATION Nyanyian Hujan
========================================================= */

.custom-pagination {
    display: flex;
    justify-content: center;
    align-items: center;

    width: 100%;
    padding: 20px;

    border-top: 1px solid rgba(255,255,255,.06);
}

.custom-pagination nav {
    display: flex;
    justify-content: center;
    align-items: center;
}

.custom-pagination svg {
    width: 16px;
    height: 16px;
}

.custom-pagination a,
.custom-pagination span {
    margin: 0 3px;
    font-size: 12px;
}
/* =========================================================
   LOGOUT
========================================================= */

/* ================================
   LOGOUT
================================ */

.logout {
    width: 100%;

    display: flex;
    justify-content: center;

    margin-top: 15px;
    padding: 0;
}
.logout button {
    padding: 10px 17px;

    border: 1px solid rgba(239, 68, 68, .20);

    border-radius: 8px;

    background: rgba(239, 68, 68, .07);

    color: #ff9b9b;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;
    font-weight: 600;

    cursor: pointer;

    transition: all .2s ease;
}

.logout button:hover {
    color: #ffffff;

    background: rgba(239, 68, 68, .15);

    border-color: rgba(239, 68, 68, .35);

    transform: translateY(-1px);
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 800px) {

    .navbar {
        padding: 16px 5%;
    }

    .container {
        padding: 30px 18px 40px;
    }

    .search-form {
        flex-direction: column;

        align-items: stretch;
    }

    .search-form input,
    .search-form select,
    .search-form button,
    .reset-btn {
        width: 100%;

        min-width: 0;

        min-height: 42px;
    }

    .reset-btn {
        padding: 10px;
    }

    .header h1 {
        font-size: 27px;
    }

    .table-wrapper {
        border-radius: 15px;
    }

}

@media (max-width: 500px) {

    .navbar {
        gap: 10px;
    }

    .logo {
        font-size: 20px;
    }

    .role {
        font-size: 10px;
    }

    .container {
        padding: 24px 12px 35px;
    }

    .header {
        padding: 20px;
    }

    .header h1 {
        font-size: 25px;
    }

    .header p {
        font-size: 12px;
    }

    .back {
        font-size: 11px;
    }

}
/* =========================================================
   CUSTOM PAGINATION Nyanyian Hujan
========================================================= */

.custom-pagination {
    width: 100%;
    min-height: 78px;

    display: flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    padding: 20px;

    border-top: 1px solid rgba(255, 255, 255, 0.06);
}

/* Tombol halaman */
.custom-pagination .page-btn {
    width: 38px !important;
    height: 38px !important;

    min-width: 38px !important;
    min-height: 38px !important;

    padding: 0 !important;
    margin: 0 !important;

    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;

    flex: 0 0 38px !important;

    border: 1px solid rgba(255, 255, 255, 0.10) !important;
    border-radius: 9px !important;

    background: rgba(255, 255, 255, 0.035) !important;

    color: #9db1bd !important;

    font-family: 'Montserrat', sans-serif !important;
    font-size: 12px !important;
    font-weight: 600 !important;

    line-height: 1 !important;

    text-decoration: none !important;

    box-sizing: border-box !important;

    transition: all .2s ease;
}

/* Hover */
.custom-pagination a.page-btn:hover {
    color: #ffffff !important;

    background: rgba(0, 217, 255, 0.10) !important;

    border-color: rgba(0, 217, 255, 0.30) !important;

    transform: translateY(-1px);
}

/* Halaman aktif */
.custom-pagination .page-btn.active {
    color: #ffffff !important;

    background: rgba(0, 217, 255, 0.16) !important;

    border-color: rgba(0, 217, 255, 0.40) !important;

    box-shadow: 0 0 14px rgba(0, 217, 255, 0.10);
}

/* Mobile */
@media (max-width: 600px) {

    .custom-pagination {
        gap: 6px;
        min-height: 70px;
        padding: 16px 10px;
    }

    .custom-pagination .page-btn {
        width: 34px !important;
        height: 34px !important;

        min-width: 34px !important;
        min-height: 34px !important;

        flex-basis: 34px !important;
    }
}
</style>
</head>

<body>

    <!-- NAVBAR -->

    <div class="navbar">

        <div class="logo">
            Nyanyian Hujan
        </div>

        <div class="role">
            {{ auth()->user()->name }} · Karyawan
        </div>

    </div>


    <div class="container">

        <!-- HEADER -->

        <div class="header">

            <a
                href="{{ route('karyawan.dashboard') }}"
                class="back"
            >
                ← Kembali ke Dashboard
            </a>

            <h1>
                Data Booking
            </h1>

            <p>
                Kelola dan pantau seluruh data booking Nyanyian Hujan.
            </p>

        </div>


        <!-- TABLE -->

        <div class="table-wrapper">

            <!-- SEARCH & FILTER -->

            <form
                action="{{ route('karyawan.bookings.index') }}"
                method="GET"
                class="search-form"
            >

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Cari kode booking, nama pelanggan, atau email..."
                >

                <select name="status">

                    <option value="">
                        Semua Status
                    </option>

                    <option
                        value="pending"
                        {{ request('status') == 'pending' ? 'selected' : '' }}
                    >
                        Pending
                    </option>

                    <option
                        value="confirmed"
                        {{ request('status') == 'confirmed' ? 'selected' : '' }}
                    >
                        Confirmed
                    </option>

                    <option
                        value="completed"
                        {{ request('status') == 'completed' ? 'selected' : '' }}
                    >
                        Completed
                    </option>

                    <option
                        value="cancelled"
                        {{ request('status') == 'cancelled' ? 'selected' : '' }}
                    >
                        Cancelled
                    </option>

                </select>


                <button type="submit">
                    Cari
                </button>


                <a
                    href="{{ route('karyawan.bookings.index') }}"
                    class="reset-btn"
                >
                    Reset
                </a>

            </form>


            @if ($bookings->count() > 0)

                <table>

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Kode Booking</th>
                            <th>Pelanggan</th>
                            <th>Kapal</th>
                            <th>Tanggal</th>
                            <th>Dibuat</th>
                            <th>Penumpang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>


                    <tbody>

                        @foreach ($bookings as $booking)

                            <tr>

                                     <td>
        {{ $bookings->firstItem() + $loop->index }}
    </td>

                                <td>

                                    <span class="code">
                                        {{ $booking->booking_code }}
                                    </span>

                                </td>


                                <td>
                                    {{ $booking->customer_name }}
                                </td>


                                <td>
                                    {{ $booking->ship->name ?? '-' }}
                                </td>


                                <td>
                                    {{ $booking->booking_date->format('d/m/Y') }}
                                </td>
                                <td>
                                    <div class="created-date">
                                        {{ $booking->created_at->format('d/m/Y') }}
                                    </div>

                                    <div class="created-time">
                                        {{ $booking->created_at->format('H:i') }}
                                    </div>
                                </td>


                                <td>
                                    {{ $booking->passengers }} orang
                                </td>


                                <td>

                                    <span
                                        class="status {{ $booking->status }}"
                                    >
                                        {{ ucfirst($booking->status) }}
                                    </span>

                                </td>


                                <td>

                                    <a
                                        href="{{ route('karyawan.bookings.show', $booking) }}"
                                        class="detail-btn"
                                    >
                                        Detail
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

@endif
         <!-- PAGINATION -->

@if ($bookings->hasPages())
    <div class="custom-pagination">

        @if ($bookings->currentPage() > 1)
            <a
                href="{{ $bookings->url($bookings->currentPage() - 1) }}"
                class="page-btn"
            >
                ‹
            </a>
        @endif

        @for ($page = 1; $page <= $bookings->lastPage(); $page++)

            @if ($page == $bookings->currentPage())
                <span class="page-btn active">
                    {{ $page }}
                </span>
            @else
                <a
                    href="{{ $bookings->url($page) }}"
                    class="page-btn"
                >
                    {{ $page }}
                </a>
            @endif

        @endfor

        @if ($bookings->currentPage() < $bookings->lastPage())
            <a
                href="{{ $bookings->url($bookings->currentPage() + 1) }}"
                class="page-btn"
            >
                ›
            </a>
        @endif

    </div>
@endif

<!-- LOGOUT -->

<div class="logout">

    <form
        action="{{ route('admin.logout') }}"
        method="POST"
    >

        @csrf

        <button type="submit">
            Logout
        </button>

    </form>

</div>

</div>

</body>
</html>