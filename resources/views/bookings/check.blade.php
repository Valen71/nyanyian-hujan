<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cek Booking · Nyanyian Hujan</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
            color: #ecfaff;
            background:
                radial-gradient(circle at top left, rgba(0, 217, 255, .10), transparent 28%),
                radial-gradient(circle at bottom right, rgba(0, 128, 170, .16), transparent 30%),
                linear-gradient(145deg, #04141f, #061d2a 55%, #031018);
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(rgba(255,255,255,.018) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.018) 1px, transparent 1px);
            background-size: 45px 45px;
            mask-image: linear-gradient(to bottom, rgba(0,0,0,.45), transparent);
        }

        /* =========================
           NAVBAR
        ========================= */

        .top-nav {
            width: 100%;
            padding: 24px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .brand {
            color: #ffffff;
            text-decoration: none;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .brand span {
            color: #00d9ff;
        }

        .back-home {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 10px 16px;
    border-radius: 999px;

    color: #b8dce8;
    text-decoration: none;

    font-size: 12px;
    font-weight: 600;
    letter-spacing: .2px;

    background: rgba(255,255,255,.035);
    border: 1px solid rgba(255,255,255,.09);

    box-shadow:
        0 8px 22px rgba(0,0,0,.14),
        inset 0 1px 0 rgba(255,255,255,.05);

    transition:
        transform .35s cubic-bezier(.22,1,.36,1),
        color .3s ease,
        border-color .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

.back-icon {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 24px;
    height: 24px;

    border-radius: 50%;

    color: #00d9ff;
    background: rgba(0,217,255,.08);
    border: 1px solid rgba(0,217,255,.16);

    font-size: 14px;
    line-height: 1;

    transition:
        transform .35s cubic-bezier(.22,1,.36,1),
        background .3s ease;
}

.back-home:hover {
    color: #ffffff;
    border-color: rgba(0,217,255,.28);
    background: rgba(0,217,255,.06);

    transform: scale(1.018);

    box-shadow:
        0 12px 28px rgba(0,0,0,.20),
        0 0 20px rgba(0,217,255,.06);
}

.back-home:hover .back-icon {
    transform: translateX(-2px);
    background: rgba(0,217,255,.14);
}

        /* =========================
           MAIN
        ========================= */

        .page {
            width: min(1080px, 92%);
            margin: 0 auto;
            padding: 55px 0 90px;
            position: relative;
            z-index: 2;
        }

        .hero {
            text-align: center;
            margin-bottom: 48px;
        }

        .hero-label {
            color: #00d9ff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(42px, 6vw, 72px);
            line-height: 1;
            font-weight: 500;
            letter-spacing: -1px;
            color: #f6fdff;
            margin-bottom: 18px;
        }

        .hero p {
            max-width: 620px;
            margin: 0 auto;
            color: #8fb5c2;
            font-size: 14px;
            line-height: 1.8;
        }

        /* =========================
           SEARCH CARD
        ========================= */

        .search-card {
            max-width: 860px;
            margin: 0 auto 42px;
            padding: 32px;
            border-radius: 28px;
            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.085),
                    rgba(255,255,255,.035)
                );
            border: 1px solid rgba(255,255,255,.10);
            box-shadow:
                0 30px 70px rgba(0,0,0,.35),
                inset 0 1px 0 rgba(255,255,255,.08);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .search-label {
            display: block;
            margin-bottom: 12px;
            color: #d9f3fa;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .search-row {
            display: flex;
            gap: 12px;
        }

        .search-input {
            flex: 1;
            width: 100%;
            height: 58px;
            padding: 0 20px;
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,.12);
            outline: none;
            background: rgba(0,0,0,.20);
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            transition: .3s ease;
        }

        .search-input::placeholder {
            color: #7695a1;
        }

        .search-input:focus {
            border-color: rgba(0,217,255,.65);
            box-shadow: 0 0 0 4px rgba(0,217,255,.08);
        }

        .search-button {
            min-width: 160px;
            height: 58px;
            padding: 0 24px;
            border: 0;
            border-radius: 15px;
            cursor: pointer;
            color: #031018;
            background: linear-gradient(135deg, #00e2ff, #00a9d7);
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .5px;
            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                box-shadow .35s ease,
                filter .35s ease;
            box-shadow: 0 14px 30px rgba(0, 217, 255, .18);
        }

        .search-button:hover {
            transform: scale(1.018);
            filter: brightness(1.04);
            box-shadow: 0 18px 36px rgba(0,217,255,.24);
        }

        .search-note {
            margin-top: 14px;
            color: #7897a3;
            font-size: 11px;
            line-height: 1.6;
        }

        /* =========================
           ERROR
        ========================= */

        .error-box {
            max-width: 860px;
            margin: 0 auto 30px;
            padding: 18px 20px;
            border-radius: 16px;
            border: 1px solid rgba(255, 86, 86, .20);
            background: rgba(255, 70, 70, .08);
            color: #ffb9b9;
            box-shadow: 0 12px 30px rgba(0,0,0,.16);
        }

        .error-box strong {
            display: block;
            margin-bottom: 5px;
            color: #ff8d8d;
            font-size: 13px;
        }

        .error-box div {
            font-size: 12px;
        }

        /* =========================
           BOOKING RESULT
        ========================= */

        .result-card {
            max-width: 920px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 30px;
            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.075),
                    rgba(255,255,255,.025)
                );
            border: 1px solid rgba(255,255,255,.10);
            box-shadow:
                0 35px 85px rgba(0,0,0,.40),
                inset 0 1px 0 rgba(255,255,255,.07);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .result-top {
            padding: 28px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            border-bottom: 1px solid rgba(255,255,255,.08);
            background:
                linear-gradient(
                    90deg,
                    rgba(0,217,255,.08),
                    transparent 45%
                );
        }

        .result-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #00d9ff;
            margin-bottom: 8px;
        }

        .booking-code {
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            font-size: clamp(22px, 4vw, 34px);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .status-badge {
            padding: 10px 16px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            white-space: nowrap;
        }

        .status-pending {
            color: #ffd875;
            background: rgba(255, 193, 7, .10);
            border: 1px solid rgba(255,193,7,.20);
        }

        .status-confirmed {
            color: #72e5ff;
            background: rgba(0,217,255,.10);
            border: 1px solid rgba(0,217,255,.20);
        }

        .status-completed {
            color: #7cf7b5;
            background: rgba(43, 205, 130, .10);
            border: 1px solid rgba(43,205,130,.20);
        }

        .status-cancelled {
            color: #ff9f9f;
            background: rgba(255, 76, 76, .10);
            border: 1px solid rgba(255,76,76,.20);
        }

        .status-default {
            color: #b8d0d8;
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.10);
        }

        .result-body {
            padding: 30px;
        }

        .ship-highlight {
            display: flex;
            align-items: center;
            gap: 17px;
            margin-bottom: 30px;
            padding: 18px;
            border-radius: 19px;
            border: 1px solid rgba(255,255,255,.08);
            background: rgba(255,255,255,.035);
        }

        .ship-icon {
            width: 56px;
            height: 56px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: linear-gradient(145deg, rgba(0,217,255,.14), rgba(255,255,255,.05));
            border: 1px solid rgba(0,217,255,.20);
            font-size: 25px;
            box-shadow:
                0 10px 28px rgba(0,0,0,.18),
                inset 0 1px 0 rgba(255,255,255,.08);
        }

        .ship-label {
            color: #7d9ca8;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .ship-name {
            color: #ffffff;
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 500;
        }

        .booking-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .info-item {
            padding: 18px;
            border-radius: 17px;
            border: 1px solid rgba(255,255,255,.07);
            background: rgba(255,255,255,.025);
            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                border-color .35s ease,
                background .35s ease;
        }

        .info-item:hover {
            transform: scale(1.012);
            border-color: rgba(0,217,255,.18);
            background: rgba(255,255,255,.04);
        }

        .info-label {
            color: #7695a1;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .info-value {
            color: #edfaff;
            font-size: 14px;
            line-height: 1.5;
            font-weight: 600;
        }

        .result-footer {
            padding: 22px 30px;
            border-top: 1px solid rgba(255,255,255,.07);
            color: #72919d;
            font-size: 11px;
            line-height: 1.7;
            text-align: center;
        }

        .result-footer strong {
            color: #b6dbe5;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty-card {
            max-width: 760px;
            margin: 0 auto;
            padding: 34px;
            text-align: center;
            border-radius: 25px;
            border: 1px solid rgba(255,255,255,.08);
            background: rgba(255,255,255,.025);
        }

        .empty-icon {
            width: 62px;
            height: 62px;
            margin: 0 auto 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            color: #00d9ff;
            background: rgba(0,217,255,.07);
            border: 1px solid rgba(0,217,255,.15);
            font-size: 25px;
        }

        .empty-card h3 {
            margin-bottom: 8px;
            color: #ffffff;
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 500;
        }

        .empty-card p {
            color: #7897a3;
            font-size: 12px;
            line-height: 1.7;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 700px) {

            .top-nav {
                padding: 20px 5%;
            }

            .page {
                width: 92%;
                padding-top: 38px;
            }

            .hero {
                margin-bottom: 30px;
            }

            .hero h1 {
                font-size: 46px;
            }

            .search-card {
                padding: 22px;
                border-radius: 22px;
            }

            .search-row {
                flex-direction: column;
            }

            .search-button {
                width: 100%;
            }

            .result-top {
                align-items: flex-start;
                flex-direction: column;
                padding: 24px 22px;
            }

            .result-body {
                padding: 22px;
            }

            .result-footer {
                padding: 20px 22px;
            }

            .booking-grid {
                grid-template-columns: 1fr;
            }

            .booking-code {
                font-size: 25px;
            }

            .ship-name {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

    <nav class="top-nav">
        <a href="/" class="brand">
            NYANYIAN HUJAN
        </a>

       <a href="/" class="back-home">
    <span class="back-icon">←</span>
    <span>Kembali ke Beranda</span>
</a>
    </nav>

    <main class="page">

        <section class="hero">
            <div class="hero-label">
                Booking Verification
            </div>

            <h1>
                Cek Booking
            </h1>

            <p>
                Masukkan kode booking Nyanyian Hujan untuk melihat
                status dan detail perjalanan kapal Anda.
            </p>
        </section>


        {{-- =========================
             FORM CEK BOOKING
        ========================= --}}

        <section class="search-card">

            <form action="{{ route('bookings.search') }}" method="POST">
                @csrf

                <label class="search-label">
                    Kode Booking
                </label>

                <div class="search-row">

                    <input
                        type="text"
                        name="booking_code"
                        class="search-input"
                        value="{{ old('booking_code') }}"
                        placeholder="Contoh: OT-A5CCTXIW"
                        autocomplete="off"
                        required
                    >

                    <button
                        type="submit"
                        class="search-button"
                    >
                        Cek Booking
                    </button>

                </div>

                <div class="search-note">
                    Masukkan kode booking sesuai yang Anda terima setelah melakukan pemesanan.
                </div>

            </form>

        </section>


        {{-- =========================
             ERROR
        ========================= --}}

        @if ($errors->has('booking_code'))

            <div class="error-box">

                <strong>
                    Booking tidak ditemukan
                </strong>

                <div>
                    {{ $errors->first('booking_code') }}
                </div>

            </div>

        @endif


        {{-- =========================
             HASIL BOOKING
        ========================= --}}

        @if (isset($booking))

            @php
                $status = strtolower($booking->status ?? '');

                $statusClass = match ($status) {
                    'pending'   => 'status-pending',
                    'confirmed' => 'status-confirmed',
                    'completed' => 'status-completed',
                    'cancelled' => 'status-cancelled',
                    default     => 'status-default',
                };
            @endphp

            <section class="result-card">

                <div class="result-top">

                    <div>
                        <div class="result-title">
                            Booking Ditemukan
                        </div>

                        <div class="booking-code">
                            {{ $booking->booking_code }}
                        </div>
                    </div>

                    <div class="status-badge {{ $statusClass }}">
                        {{ ucfirst($booking->status ?? 'Pending') }}
                    </div>

                </div>


                <div class="result-body">

                    {{-- KAPAL --}}

                    <div class="ship-highlight">

                        <div class="ship-icon">
                            ⛴
                        </div>

                        <div>

                            <div class="ship-label">
                                Kapal
                            </div>

                            <div class="ship-name">
                                {{ $booking->ship->name ?? '-' }}
                            </div>

                        </div>

                    </div>


                    {{-- DETAIL --}}

                    <div class="booking-grid">

                        <div class="info-item">

                            <div class="info-label">
                                Nama Pemesan
                            </div>

                            <div class="info-value">
                                {{ $booking->customer_name ?? '-' }}
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Penumpang
                            </div>

                            <div class="info-value">
                                {{ $booking->passengers ?? '-' }} orang
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Tanggal
                            </div>

                            <div class="info-value">
                                @if ($booking->booking_date)
                                    {{ \Carbon\Carbon::parse($booking->booking_date)->translatedFormat('d F Y') }}
                                @else
                                    -
                                @endif
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Jam
                            </div>

                            <div class="info-value">

                                @if (
                                    $booking->booking_hour !== null &&
                                    $booking->booking_hour !== ''
                                )

                                    {{ sprintf('%02d', $booking->booking_hour) }}:{{ sprintf('%02d', $booking->booking_minute ?? 0) }}

                                @else

                                    -

                                @endif

                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Tujuan
                            </div>

                            <div class="info-value">
                                {{ $booking->destination ?? '-' }}
                            </div>

                        </div>


                        <div class="info-item">

                            <div class="info-label">
                                Status
                            </div>

                            <div class="info-value">
                                {{ ucfirst($booking->status ?? '-') }}
                            </div>

                        </div>

                    </div>

                </div>


                <div class="result-footer">
                    Simpan kode booking
                    <strong>{{ $booking->booking_code }}</strong>
                    untuk memudahkan pengecekan perjalanan Anda.
                </div>

            </section>

        @else

            <div class="empty-card">

                <div class="empty-icon">
                    ⌕
                </div>

                <h3>
                    Pantau Perjalanan Anda
                </h3>

                <p>
                    Kode booking akan digunakan untuk menampilkan
                    informasi kapal, tanggal perjalanan, tujuan,
                    jumlah penumpang, dan status booking.
                </p>

            </div>

        @endif

    </main>

</body>
</html>
