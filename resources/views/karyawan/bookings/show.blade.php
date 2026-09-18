<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Detail Booking - Karyawan | Nyanyian Hujan</title>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        min-height: 100%;
        background: #06111f;
    }

    body {
        min-height: 100vh;
        font-family: 'Montserrat', sans-serif;
        color: #eefaff;

        background:
            radial-gradient(
                circle at top left,
                rgba(0, 217, 255, .10),
                transparent 30%
            ),
            radial-gradient(
                circle at bottom right,
                rgba(0, 119, 182, .12),
                transparent 35%
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

        mask-image: linear-gradient(
            to bottom,
            rgba(0,0,0,.55),
            transparent
        );
    }

    /* NAVBAR */

    .navbar {
        position: relative;
        z-index: 5;

        width: 100%;

        padding: 18px 40px;

        display: flex;
        justify-content: space-between;
        align-items: center;

        background: rgba(3, 16, 24, .82);

        border-bottom: 1px solid rgba(0, 217, 255, .10);

        box-shadow:
            0 8px 30px rgba(0,0,0,.18);

        backdrop-filter: blur(16px);
    }

    .logo {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 2px;
        color: #ffffff;
    }

    .role {
        font-size: 12px;
        font-weight: 600;
        color: #9fb5c0;
        letter-spacing: .2px;
    }

    /* CONTAINER */

    .container {
        position: relative;
        z-index: 2;

        width: min(100% - 40px, 1050px);

        margin: 38px auto 50px;
    }

    /* BACK */

   /* ================================
   TOMBOL KEMBALI
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

    transition:
        all .25s ease;
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

    /* MAIN CARD */

    .card {
        background:
            linear-gradient(
                145deg,
                rgba(10, 32, 45, .92),
                rgba(4, 20, 30, .92)
            );

        border: 1px solid rgba(255,255,255,.07);

        border-radius: 18px;

        box-shadow:
            0 25px 70px rgba(0,0,0,.28),
            inset 0 1px 0 rgba(255,255,255,.025);

        overflow: hidden;

        backdrop-filter: blur(18px);
    }

    /* HEADER */

    .card-header {
        padding: 27px 30px;

        display: flex;
        justify-content: space-between;
        align-items: center;

        gap: 20px;

        background:
            linear-gradient(
                90deg,
                rgba(0,217,255,.035),
                transparent 65%
            );

        border-bottom: 1px solid rgba(255,255,255,.07);
    }

    .header-title h1 {
        font-family: 'Playfair Display', serif;

        font-size: 27px;
        font-weight: 600;

        color: #ffffff;

        margin-bottom: 7px;
    }

    .subtitle {
        color: #8fa9b5;
        font-size: 13px;
        line-height: 1.6;
    }

    /* STATUS */

    .status {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        min-width: 100px;

        padding: 8px 15px;

        border-radius: 999px;

        font-size: 12px;
        font-weight: 700;

        border: 1px solid transparent;
    }

    .status.pending {
        color: #f8d98b;
        background: rgba(245, 158, 11, .10);
        border-color: rgba(245, 158, 11, .25);
    }

    .status.confirmed {
        color: #8feaff;
        background: rgba(0, 217, 255, .09);
        border-color: rgba(0, 217, 255, .25);
    }

    .status.completed {
        color: #8de6b0;
        background: rgba(34, 197, 94, .09);
        border-color: rgba(34, 197, 94, .25);
    }

    .status.cancelled {
        color: #ff9d9d;
        background: rgba(239, 68, 68, .09);
        border-color: rgba(239, 68, 68, .25);
    }

    /* SUCCESS */

    .success {
        margin: 22px 30px 0;

        padding: 13px 16px;

        border-radius: 10px;

        color: #9ff2bd;

        background: rgba(34, 197, 94, .08);

        border: 1px solid rgba(34, 197, 94, .20);

        font-size: 13px;
        font-weight: 600;
    }

    /* CONTENT */

    .content {
        padding: 30px;
    }

    .section-title {
        color: #ffffff;

        font-size: 16px;
        font-weight: 700;

        margin-bottom: 15px;
    }

    /* INFO GRID */

    .info {
        display: grid;

        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 12px;
    }

    .item {
        min-width: 0;

        padding: 16px 17px;

        border-radius: 11px;

        background: rgba(255,255,255,.025);

        border: 1px solid rgba(255,255,255,.065);

        transition:
            border-color .2s ease,
            background .2s ease,
            transform .2s ease;
    }

    .item:hover {
        background: rgba(0,217,255,.035);

        border-color: rgba(0,217,255,.16);

        transform: translateY(-1px);
    }

    .item label {
        display: block;

        color: #77909c;

        font-size: 11px;
        font-weight: 600;

        letter-spacing: .25px;

        margin-bottom: 7px;

        text-transform: uppercase;
    }

    .item strong {
        display: block;

        color: #eefaff;

        font-size: 14px;
        font-weight: 600;

        line-height: 1.55;

        word-break: break-word;
    }

    /* BOOKING CODE */

    .item:first-child strong {
        color: #8feaff;

        font-size: 15px;

        letter-spacing: .3px;
    }

    /* PRICE */

    .price {
        color: #8feaff !important;

        font-size: 16px !important;
        font-weight: 700 !important;
    }

    /* UPDATE STATUS */

    .update {
        margin-top: 28px;

        padding-top: 27px;

        border-top: 1px solid rgba(255,255,255,.07);
    }

    .update-description {
        color: #819aa6;

        font-size: 12px;

        line-height: 1.6;

        margin-bottom: 14px;
    }

    .update-form {
        display: flex;

        gap: 11px;

        align-items: center;
    }

    select {
        flex: 1;

        min-height: 43px;

        padding: 0 14px;

        border: 1px solid rgba(255,255,255,.10);

        border-radius: 9px;

        background: #0a202d;

        color: #eafaff;

        font-family: 'Montserrat', sans-serif;

        font-size: 13px;
        font-weight: 500;

        cursor: pointer;

        outline: none;
    }

    select:hover {
        border-color: rgba(0,217,255,.25);
    }

    select:focus {
        border-color: rgba(0,217,255,.45);

        box-shadow:
            0 0 0 3px rgba(0,217,255,.08);
    }

    select option {
        background: #071923;
        color: #ffffff;
    }

    /* SAVE BUTTON */

    /* TOMBOL SIMPAN STATUS - PREMIUM */

.button {
    position: relative;

    min-height: 44px;
    padding: 0 24px;

    border: 1px solid rgba(0, 217, 255, .42);
    border-radius: 10px;

    background:
        linear-gradient(
            135deg,
            rgba(0, 217, 255, .22),
            rgba(0, 126, 170, .16)
        );

    color: #d9f9ff;

    font-family: 'Montserrat', sans-serif;
    font-size: 13px;
    font-weight: 700;

    letter-spacing: .2px;

    cursor: pointer;
    white-space: nowrap;

    box-shadow:
        0 8px 22px rgba(0, 0, 0, .20),
        inset 0 1px 0 rgba(255, 255, 255, .08);

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease,
        box-shadow .25s ease,
        color .25s ease;
}

.button::before {
    content: "";
    position: absolute;

    inset: 1px;

    border-radius: 9px;

    background:
        linear-gradient(
            120deg,
            rgba(255,255,255,.08),
            transparent 45%
        );

    pointer-events: none;
}

.button:hover {
    color: #ffffff;

    background:
        linear-gradient(
            135deg,
            rgba(0, 217, 255, .38),
            rgba(0, 145, 190, .25)
        );

    border-color: rgba(0, 217, 255, .70);

    transform: translateY(-2px);

    box-shadow:
        0 12px 28px rgba(0, 217, 255, .14),
        0 0 18px rgba(0, 217, 255, .08),
        inset 0 1px 0 rgba(255, 255, 255, .12);
}

.button:active {
    transform: translateY(0);

    box-shadow:
        0 5px 14px rgba(0, 217, 255, .10);
}

.button:focus-visible {
    outline: none;

    box-shadow:
        0 0 0 3px rgba(0, 217, 255, .12),
        0 0 20px rgba(0, 217, 255, .10);
}

    /* LOGOUT */

    .logout {
        margin-top: 18px;
    }

    .logout button {
        padding: 10px 17px;

        border: 1px solid rgba(239,68,68,.20);

        border-radius: 8px;

        background: rgba(239,68,68,.07);

        color: #ff9b9b;

        font-family: 'Montserrat', sans-serif;

        font-size: 12px;
        font-weight: 600;

        cursor: pointer;

        transition: .2s ease;
    }

    .logout button:hover {
        color: #ffffff;

        background: rgba(239,68,68,.15);

        border-color: rgba(239,68,68,.35);
    }

    /* MOBILE */

    @media (max-width: 700px) {

        .navbar {
            padding: 16px 20px;
        }

        .logo {
            font-size: 21px;
        }

        .role {
            font-size: 11px;
        }

        .container {
            width: min(100% - 28px, 1050px);

            margin-top: 27px;
        }

        .card-header {
            padding: 22px 20px;

            flex-direction: column;

            align-items: flex-start;
        }

        .header-title h1 {
            font-size: 24px;
        }

        .subtitle {
            font-size: 12px;
        }

        .content {
            padding: 21px;
        }

        .info {
            grid-template-columns: 1fr;

            gap: 10px;
        }

        .item {
            padding: 14px 15px;
        }

        .update {
            margin-top: 24px;

            padding-top: 23px;
        }

        .update-form {
            flex-direction: column;

            align-items: stretch;
        }

        select,
        .button {
            width: 100%;
        }

        .button {
            justify-content: center;
        }

        .success {
            margin-left: 20px;
            margin-right: 20px;
        }
    }
    /* ================================
   TOMBOL BOOKING - Nyanyian Hujan
   OVERRIDE
================================ */

button.button {
    min-height: 46px !important;
    padding: 0 26px !important;

    border: 1px solid #00d9ff !important;
    border-radius: 10px !important;

    background: linear-gradient(
        135deg,
        #00d9ff,
        #008db5
    ) !important;

    color: #ffffff !important;

    font-family: 'Montserrat', sans-serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;

    letter-spacing: .2px !important;

    cursor: pointer !important;
    white-space: nowrap !important;

    box-shadow:
        0 8px 22px rgba(0, 217, 255, .18) !important;

    transition:
        all .25s ease !important;
}

button.button:hover {
    background: linear-gradient(
        135deg,
        #20e1ff,
        #00a3cc
    ) !important;

    color: #ffffff !important;

    border-color: #5beaff !important;

    transform: translateY(-2px) !important;

    box-shadow:
        0 12px 30px rgba(0, 217, 255, .28),
        0 0 20px rgba(0, 217, 255, .15) !important;
}

button.button:active {
    transform: translateY(0) !important;

    box-shadow:
        0 5px 15px rgba(0, 217, 255, .18) !important;
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


<!-- CONTAINER -->
<div class="container">

    <!-- BACK -->
    <a
        href="{{ route('karyawan.bookings.index') }}"
        class="back"
    >
        ← Kembali ke Data Booking
    </a>


    <!-- CARD -->
    <div class="card">

        <!-- HEADER -->
        <div class="card-header">

            <div class="header-title">

                <h1>
                    Detail Booking
                </h1>

                <p class="subtitle">
                    Informasi lengkap booking pelanggan Nyanyian Hujan.
                </p>

            </div>


            <!-- STATUS -->
            <span class="status {{ $booking->status }}">
                {{ ucfirst($booking->status) }}
            </span>

        </div>


        <!-- SUCCESS MESSAGE -->
        @if (session('success'))

            <div class="success">
                ✓ {{ session('success') }}
            </div>

        @endif


        <!-- CONTENT -->
        <div class="content">

            <div class="section-title">
                Informasi Booking
            </div>


            <div class="info">

                <!-- KODE BOOKING -->
                <div class="item">

                    <label>
                        Kode Booking
                    </label>

                    <strong>
                        {{ $booking->booking_code }}
                    </strong>

                </div>


                <!-- NAMA PELANGGAN -->
                <div class="item">

                    <label>
                        Nama Pelanggan
                    </label>

                    <strong>
                        {{ $booking->customer_name }}
                    </strong>

                </div>


                <!-- EMAIL -->
                <div class="item">

                    <label>
                        Email
                    </label>

                    <strong>
                        {{ $booking->customer_email }}
                    </strong>

                </div>


                <!-- TELEPON -->
                <div class="item">

                    <label>
                        No. Telepon
                    </label>

                    <strong>
                        {{ $booking->customer_phone }}
                    </strong>

                </div>


                <!-- KAPAL -->
                <div class="item">

                    <label>
                        Kapal
                    </label>

                    <strong>
                        {{ $booking->ship->name ?? '-' }}
                    </strong>

                </div>


                <!-- TANGGAL -->
                <div class="item">

                    <label>
                        Tanggal Booking
                    </label>

                    <strong>
                        {{ $booking->booking_date->format('d/m/Y') }}
                    </strong>

                </div>


                <!-- JAM -->
                <div class="item">

                    <label>
                        Jam Booking
                    </label>

                    <strong>
                        {{ $booking->booking_time->format('H:i') }}
                    </strong>

                </div>


                <!-- PENUMPANG -->
                <div class="item">

                    <label>
                        Jumlah Penumpang
                    </label>

                    <strong>
                        {{ $booking->passengers }} orang
                    </strong>

                </div>


                <!-- TUJUAN -->
                <div class="item">

                    <label>
                        Tujuan
                    </label>

                    <strong>
                        {{ $booking->destination }}
                    </strong>

                </div>


                <!-- TOTAL HARGA -->
                <div class="item">

                    <label>
                        Total Harga
                    </label>

                    <strong class="price">
                        Rp {{ number_format($booking->total_price, 0, ',', '.') }}
                    </strong>

                </div>


                <!-- CATATAN -->
                <div class="item">

                    <label>
                        Catatan
                    </label>

                    <strong>
                        {{ $booking->notes ?: '-' }}
                    </strong>

                </div>

            </div>


            <!-- UPDATE STATUS -->
            <div class="update">

                <div class="section-title">
                    Update Status Booking
                </div>

                <p class="update-description">
                    Pilih status terbaru untuk booking ini.
                </p>


                <form
                    action="{{ route('karyawan.bookings.update', $booking) }}"
                    method="POST"
                    class="update-form"
                >

                    @csrf

                    @method('PUT')


                    <select name="status" required>

                        <option
                            value="pending"
                            {{ $booking->status === 'pending' ? 'selected' : '' }}
                        >
                            Pending
                        </option>

                        <option
                            value="confirmed"
                            {{ $booking->status === 'confirmed' ? 'selected' : '' }}
                        >
                            Confirmed
                        </option>

                        <option
                            value="completed"
                            {{ $booking->status === 'completed' ? 'selected' : '' }}
                        >
                            Completed
                        </option>

                        <option
                            value="cancelled"
                            {{ $booking->status === 'cancelled' ? 'selected' : '' }}
                        >
                            Cancelled
                        </option>

                    </select>


                    <button
                        type="submit"
                        class="button"
                    >
                        Simpan Status
                    </button>

                </form>

            </div>

        </div>

    </div>


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
