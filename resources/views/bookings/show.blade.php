<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Booking Berhasil - Nyanyian Hujan</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;

            min-height: 100vh;

            padding: 40px 20px;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(0,168,232,.15),
                    transparent 35%
                ),
                linear-gradient(
                    135deg,
                    #f4f8fb,
                    #eaf5fa
                );

            color: #102a43;
        }

        .container {
            width: 100%;
            max-width: 850px;

            margin: auto;
        }


        /* ================================
           TOP NAV
        ================================= */

        .top-nav {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-bottom: 25px;
        }

        .logo {
            color: #071a2b;

            font-size: 20px;

            font-weight: 800;

            letter-spacing: 3px;
        }

        .logo span {
            color: #00a8e8;
        }

        .home-link {
            color: #0077b6;

            font-size: 13px;

            font-weight: 700;

            text-decoration: none;
        }

        .home-link:hover {
            text-decoration: underline;
        }


        /* ================================
           MAIN CARD
        ================================= */

        .card {
            overflow: hidden;

            background: white;

            border-radius: 24px;

            border: 1px solid #e2e8f0;

            box-shadow:
                0 25px 70px rgba(15,23,42,.10);
        }


        /* ================================
           SUCCESS HEADER
        ================================= */

        .success-header {
            position: relative;

            padding: 45px 30px 40px;

            text-align: center;

            background:
                linear-gradient(
                    135deg,
                    #061a2b,
                    #083b5c,
                    #0077b6
                );

            overflow: hidden;
        }

        .success-header::before {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            border-radius: 50%;

            background: rgba(0,168,232,.15);

            top: -170px;
            right: -100px;
        }

        .success-header::after {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            border-radius: 50%;

            background: rgba(255,255,255,.05);

            bottom: -150px;
            left: -70px;
        }

        .success-content {
            position: relative;

            z-index: 2;
        }

        .check {
            width: 70px;
            height: 70px;

            margin: 0 auto 18px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #22c55e;

            color: white;

            font-size: 35px;

            font-weight: bold;

            box-shadow:
                0 10px 30px rgba(34,197,94,.30);
        }

        .success-header h1 {
            color: white;

            font-size: 30px;

            margin-bottom: 10px;
        }

        .success-header p {
            color: #c9e5f3;

            font-size: 14px;

            line-height: 1.6;
        }


        /* ================================
           CONTENT
        ================================= */

        .content {
            padding: 35px;
        }


        /* ================================
           BOOKING CODE
        ================================= */

        .booking-code {
            padding: 22px;

            margin-bottom: 30px;

            text-align: center;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #071a2b,
                    #0c3552
                );

            color: white;

            box-shadow:
                0 12px 30px rgba(7,26,43,.15);
        }

        .booking-code small {
            display: block;

            margin-bottom: 8px;

            color: #8fcde5;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;
        }

        .booking-code strong {
            display: block;

            font-size: 26px;

            letter-spacing: 3px;
        }

        .booking-code p {
            margin-top: 8px;

            color: #9fb9c7;

            font-size: 11px;
        }


        /* ================================
           SECTION
        ================================= */

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 15px;

            padding-bottom: 12px;

            border-bottom: 1px solid #e5edf3;
        }

        .section-title-icon {
            width: 32px;
            height: 32px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 9px;

            background: #e5f7fd;

            font-size: 16px;
        }

        .section-title h3 {
            color: #102a43;

            font-size: 16px;
        }


        /* ================================
           INFORMATION GRID
        ================================= */

        .info-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 12px;
        }

        .info-item {
            padding: 15px;

            border-radius: 12px;

            background: #f8fafc;

            border: 1px solid #edf2f7;
        }

        .info-item.full {
            grid-column: 1 / -1;
        }

        .info-label {
            display: block;

            margin-bottom: 6px;

            color: #64748b;

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: .5px;
        }

        .info-value {
            color: #102a43;

            font-size: 14px;

            font-weight: 700;

            word-break: break-word;
        }


        /* ================================
           STATUS
        ================================= */

        .status {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 7px 13px;

            border-radius: 30px;

            background: #fef3c7;

            color: #92400e;

            font-size: 12px;

            font-weight: 700;
        }

        .status-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: #f59e0b;
        }


        /* ================================
           TOTAL
        ================================= */

        .total-box {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-top: 5px;

            padding: 22px;

            border-radius: 16px;

            background:
                linear-gradient(
                    135deg,
                    #e8f8fd,
                    #f3fbfe
                );

            border: 1px solid #ccecf7;
        }

        .total-label {
            color: #64748b;

            font-size: 12px;

            font-weight: 700;
        }

        .total-label span {
            display: block;

            margin-top: 4px;

            color: #94a3b8;

            font-size: 10px;

            font-weight: 400;
        }

        .total-price {
            color: #0077b6;

            font-size: 25px;

            font-weight: 800;

            white-space: nowrap;
        }


        /* ================================
           BUTTONS
        ================================= */

        .actions {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 12px;

            margin-top: 30px;
        }

        .btn {
            display: flex;

            align-items: center;
            justify-content: center;

            min-height: 48px;

            padding: 13px 18px;

            border-radius: 12px;

            font-size: 13px;

            font-weight: 700;

            text-decoration: none;

            cursor: pointer;

            transition: .25s;

            border: none;
        }

        .btn-primary {
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #00a8e8,
                    #0077b6
                );

            box-shadow:
                0 8px 20px rgba(0,119,182,.20);
        }

        .btn-primary:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(0,119,182,.30);
        }

        .btn-secondary {
            color: #102a43;

            background: #f1f5f9;

            border: 1px solid #e2e8f0;
        }

        .btn-secondary:hover {
            background: #e2e8f0;
        }


        /* ================================
           FOOTER NOTE
        ================================= */

        .note {
            margin-top: 22px;

            padding: 14px;

            text-align: center;

            color: #64748b;

            font-size: 11px;

            line-height: 1.6;

            background: #f8fafc;

            border-radius: 10px;
        }


        /* ================================
   PRINT - BUKTI BOOKING
================================ */

@media print {

    @page {
        size: A4;
        margin: 8mm;
    }

    html,
    body {
        width: 210mm !important;
        height: 297mm !important;
        margin: 0 !important;
        padding: 0 !important;
        background: #fff !important;
        font-size: 9px !important;
    }

    .top-nav,
    .actions,
    .note,
    .copy-button {
        display: none !important;
    }

    .container {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .card {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        box-shadow: none !important;
        border: 1px solid #ddd !important;
        border-radius: 6px !important;

        page-break-inside: avoid !important;
        break-inside: avoid !important;
    }

    .success-header {
        padding: 10px 15px !important;
    }

    .check {
        width: 30px !important;
        height: 30px !important;
        font-size: 15px !important;
        margin-bottom: 4px !important;
    }

    .success-header h1 {
        font-size: 15px !important;
        margin: 0 0 2px !important;
    }

    .success-header p {
        font-size: 8px !important;
        margin: 0 !important;
    }

    .content {
        padding: 8px !important;
    }

    .booking-code {
        padding: 6px 9px !important;
        margin-bottom: 7px !important;
    }

    .booking-code strong {
        font-size: 13px !important;
    }

    .booking-code p {
        font-size: 7px !important;
        margin: 2px 0 0 !important;
    }

    .section {
        margin-bottom: 7px !important;
        page-break-inside: avoid !important;
        break-inside: avoid !important;
    }

    .section-title {
        margin-bottom: 4px !important;
        padding-bottom: 4px !important;
    }

    .section-title-icon {
        width: 18px !important;
        height: 18px !important;
        font-size: 8px !important;
    }

    .section-title h3 {
        font-size: 9px !important;
    }

    .info-grid {
        gap: 3px !important;
    }

    .info-item {
        padding: 5px !important;
        border-radius: 4px !important;
    }

    .info-label {
        font-size: 6px !important;
        margin-bottom: 1px !important;
    }

    .info-value {
        font-size: 7px !important;
    }

    .status {
        padding: 2px 6px !important;
        font-size: 6px !important;
    }

    .total-box {
        padding: 6px 9px !important;
        border-radius: 5px !important;
    }

    .total-label {
        font-size: 7px !important;
    }

    .total-label span {
        font-size: 6px !important;
    }

    .total-price {
        font-size: 13px !important;
    }
}


        /* ================================
           MOBILE
        ================================= */

        @media (max-width: 600px) {

            body {
                padding: 20px 12px;
            }

            .success-header {
                padding: 35px 20px;
            }

            .success-header h1 {
                font-size: 25px;
            }

            .content {
                padding: 22px;
            }

            .booking-code strong {
                font-size: 21px;

                letter-spacing: 2px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-item.full {
                grid-column: auto;
            }

            .actions {
                grid-template-columns: 1fr;
            }

            .total-box {
                align-items: flex-start;

                flex-direction: column;
            }

            .total-price {
                font-size: 22px;
            }

        }
        .copy-button {
    margin-top: 12px;
    padding: 9px 16px;
    border: none;
    border-radius: 8px;
    background: #0ea5e9;
    color: white;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
}

.copy-button:hover {
    background: #0284c7;
}

.copy-button:active {
    transform: scale(0.97);
}
/* =====================================================
   Nyanyian Hujan PREMIUM BOOKING SUCCESS
===================================================== */

body {
    font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;
    min-height: 100vh;
    padding: 55px 20px !important;

    background:
        radial-gradient(
            circle at 15% 10%,
            rgba(0,217,255,.10),
            transparent 30%
        ),
        radial-gradient(
            circle at 85% 90%,
            rgba(0,119,182,.12),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #03111f,
            #061a2b 45%,
            #08263a
        ) !important;

    color: #e6f7ff !important;
}

.container {
    max-width: 920px !important;
}

.top-nav {
    margin-bottom: 28px !important;
}

.logo {
    color: #ffffff !important;
    font-size: 19px !important;
    font-weight: 700 !important;
    letter-spacing: 3px !important;
}

.logo span {
    color: #00d9ff !important;
}

.home-link {
    color: #8feaff !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    letter-spacing: .4px;
}

/* =========================
   CARD
========================= */

.card {
    background: rgba(7, 26, 43, .76) !important;
    border: 1px solid rgba(255,255,255,.09) !important;
    border-radius: 24px !important;

    box-shadow:
        0 30px 80px rgba(0,0,0,.35),
        0 0 0 1px rgba(0,217,255,.03) !important;

    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

/* =========================
   SUCCESS HEADER
========================= */

.success-header {
    padding: 52px 30px 45px !important;

    background:
        radial-gradient(
            circle at 50% 0%,
            rgba(0,217,255,.20),
            transparent 45%
        ),
        linear-gradient(
            135deg,
            rgba(5,28,46,.98),
            rgba(4,53,80,.96)
        ) !important;

    border-bottom: 1px solid rgba(0,217,255,.12);
}

.success-header::before {
    background: rgba(0,217,255,.08) !important;
}

.success-header::after {
    background: rgba(255,255,255,.03) !important;
}

.check {
    width: 66px !important;
    height: 66px !important;
    margin-bottom: 20px !important;

    background:
        linear-gradient(
            145deg,
            #22c55e,
            #16a34a
        ) !important;

    box-shadow:
        0 12px 35px rgba(34,197,94,.24) !important;
}

.success-header h1 {
    font-family: 'Playfair Display', serif !important;
    font-size: 29px !important;
    font-weight: 600 !important;
    letter-spacing: .2px;
}

.success-header p {
    color: rgba(225,247,255,.72) !important;
    font-size: 13px !important;
}

/* =========================
   CONTENT
========================= */

.content {
    padding: 38px !important;
}

/* =========================
   BOOKING CODE
========================= */

.booking-code {
    margin-bottom: 34px !important;
    padding: 25px !important;

    background:
        linear-gradient(
            145deg,
            rgba(5,24,40,.98),
            rgba(8,48,73,.98)
        ) !important;

    border: 1px solid rgba(0,217,255,.14);
    border-radius: 17px !important;

    box-shadow:
        0 15px 35px rgba(0,0,0,.22);
}

.booking-code small {
    color: #6fdfff !important;
    font-size: 10px !important;
    letter-spacing: 2.5px;
}

.booking-code strong {
    color: #ffffff !important;
    font-size: 25px !important;
    letter-spacing: 3px !important;
}

.booking-code p {
    color: rgba(210,238,248,.60) !important;
}

.copy-button {
    background: linear-gradient(
        135deg,
        #00d9ff,
        #008fc7
    ) !important;

    border: 1px solid rgba(255,255,255,.10) !important;

    box-shadow:
        0 8px 22px rgba(0,217,255,.15);
}

.copy-button:hover {
    background: linear-gradient(
        135deg,
        #19defd,
        #009bd8
    ) !important;
}

/* =========================
   SECTION
========================= */

.section {
    margin-bottom: 34px !important;
}

.section-title {
    gap: 12px !important;
    margin-bottom: 18px !important;
    padding-bottom: 13px !important;

    border-bottom:
        1px solid rgba(255,255,255,.09) !important;
}

.section-title-icon {
    width: 34px !important;
    height: 34px !important;

    border-radius: 10px !important;

    background:
        linear-gradient(
            145deg,
            rgba(0,217,255,.15),
            rgba(255,255,255,.04)
        ) !important;

    border:
        1px solid rgba(0,217,255,.18);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.08);
}

.section-title h3 {
    color: #ffffff !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    letter-spacing: .2px;
}

/* =========================
   INFORMATION
========================= */

.info-grid {
    gap: 14px !important;
}

.info-item {
    padding: 17px !important;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.055),
            rgba(255,255,255,.025)
        ) !important;

    border:
        1px solid rgba(255,255,255,.075) !important;

    border-radius: 13px !important;

    box-shadow:
        0 8px 22px rgba(0,0,0,.10);

    transition:
        transform .25s ease,
        border-color .25s ease,
        background .25s ease;
}

.info-item:hover {
    transform: scale(1.008);

    border-color:
        rgba(0,217,255,.16) !important;

    background:
        linear-gradient(
            145deg,
            rgba(0,217,255,.07),
            rgba(255,255,255,.025)
        ) !important;
}

.info-label {
    color: #7ca6ba !important;
    margin-bottom: 7px !important;
    font-size: 10px !important;
    letter-spacing: .8px;
}

.info-value {
    color: #f4fbff !important;
    font-size: 14px !important;
    font-weight: 600 !important;
}

/* =========================
   STATUS
========================= */

.status {
    padding: 8px 14px !important;

    background:
        rgba(245,158,11,.12) !important;

    border:
        1px solid rgba(245,158,11,.22);

    color: #fbbf24 !important;
}

.status-dot {
    background: #f59e0b !important;
    box-shadow:
        0 0 0 4px rgba(245,158,11,.10);
}

/* =========================
   TOTAL
========================= */

.total-box {
    margin-top: 8px !important;
    padding: 23px !important;

    background:
        linear-gradient(
            145deg,
            rgba(0,217,255,.10),
            rgba(0,119,182,.07)
        ) !important;

    border:
        1px solid rgba(0,217,255,.18) !important;

    border-radius: 16px !important;

    box-shadow:
        0 12px 30px rgba(0,0,0,.14);
}

.total-label {
    color: #8db2c2 !important;
}

.total-label span {
    color: #638493 !important;
}

.total-price {
    color: #42ddff !important;
    font-size: 25px !important;
}

/* =========================
   BUTTON
========================= */

.actions {
    gap: 13px !important;
    margin-top: 34px !important;
}

.btn {
    min-height: 49px !important;
    border-radius: 13px !important;
    font-size: 12px !important;
    letter-spacing: .2px;
}

.btn-primary {
    background:
        linear-gradient(
            135deg,
            #00d9ff,
            #0077b6
        ) !important;

    box-shadow:
        0 10px 24px rgba(0,217,255,.15) !important;
}

.btn-primary:hover {
    transform: scale(1.012) !important;
}

.btn-secondary {
    color: #dff8ff !important;

    background:
        rgba(255,255,255,.045) !important;

    border:
        1px solid rgba(255,255,255,.10) !important;
}

.btn-secondary:hover {
    background:
        rgba(255,255,255,.08) !important;
}

/* =========================
   NOTE
========================= */

.note {
    margin-top: 24px !important;
    padding: 16px !important;

    color: #7698a8 !important;

    background:
        rgba(255,255,255,.025) !important;

    border:
        1px solid rgba(255,255,255,.06);

    border-radius: 11px !important;
}

.note strong {
    color: #a7d8e8;
}

/* =========================
   MOBILE
========================= */

@media (max-width: 600px) {

    body {
        padding: 25px 12px !important;
    }

    .content {
        padding: 24px !important;
    }

    .success-header {
        padding: 40px 20px !important;
    }

    .success-header h1 {
        font-size: 25px !important;
    }

    .booking-code strong {
        font-size: 21px !important;
    }
}

/* =========================
   BACK TO HOME
========================= */

.home-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    padding: 10px 16px;

    color: #dff8ff !important;
    background: rgba(255,255,255,.045);

    border: 1px solid rgba(255,255,255,.10);
    border-radius: 12px;

    font-size: 12px !important;
    font-weight: 600 !important;
    letter-spacing: .2px;

    text-decoration: none !important;

    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

    box-shadow:
        0 8px 22px rgba(0,0,0,.12);

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease;
}

.home-link:hover {
    transform: scale(1.015);

    color: #ffffff !important;

    background: rgba(0,217,255,.08);

    border-color:
        rgba(0,217,255,.22);

    box-shadow:
        0 10px 25px rgba(0,0,0,.18);
}

.back-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 25px;
    height: 25px;

    border-radius: 8px;

    background: rgba(0,217,255,.10);
    border: 1px solid rgba(0,217,255,.12);

    color: #42ddff;

    font-size: 15px;
    line-height: 1;
}


    </style>

</head>

<body>

<div class="container">


    <!-- =========================================
         TOP NAV
    ========================================= -->

    <div class="top-nav">

        <div class="logo">
            NYANYIAN HUJAN
        </div>

        <a
    href="{{ url('/') }}"
    class="home-link"
>
    <span class="back-icon">←</span>
    <span>Kembali ke Beranda</span>
</a>

    </div>


    <!-- =========================================
         CARD
    ========================================= -->

    <div class="card">


        <!-- SUCCESS HEADER -->

        <div class="success-header">

            <div class="success-content">

                <div class="check">
                    ✓
                </div>

                <h1>
                    Booking Berhasil!
                </h1>

                <p>
                    Terima kasih telah melakukan booking
                    perjalanan bersama Nyanyian Hujan.
                </p>

            </div>

        </div>


        <div class="content">


            <!-- =====================================
                 BOOKING CODE
            ====================================== -->

            <div class="booking-code">

            <small>
                KODE BOOKING
            </small>

            <strong id="bookingCode">
                {{ $booking->booking_code }}
            </strong>

            <button
                type="button"
                onclick="copyBookingCode()"
                class="copy-button"
            >
                📋 Salin Kode Booking
            </button>

            <p>
                Simpan kode ini untuk mengecek
                status booking kamu.
            </p>

        </div>

            <!-- =====================================
                 CUSTOMER
            ====================================== -->

            <div class="section">

                <div class="section-title">

                    <div class="section-title-icon">
                        👤
                    </div>

                    <h3>
                        Informasi Pelanggan
                    </h3>

                </div>


                <div class="info-grid">

                    <div class="info-item">

                        <span class="info-label">
                            Nama
                        </span>

                        <div class="info-value">
                            {{ $booking->customer_name }}
                        </div>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            No. Telepon
                        </span>

                        <div class="info-value">
                            {{ $booking->customer_phone }}
                        </div>

                    </div>


                    <div class="info-item full">

                        <span class="info-label">
                            Email
                        </span>

                        <div class="info-value">
                            {{ $booking->customer_email }}
                        </div>

                    </div>

                </div>

            </div>


            <!-- =====================================
                 TRIP
            ====================================== -->

            <div class="section">

                <div class="section-title">

                    <div class="section-title-icon">
                        🚢
                    </div>

                    <h3>
                        Informasi Perjalanan
                    </h3>

                </div>


                <div class="info-grid">

                    <div class="info-item full">

                        <span class="info-label">
                            Kapal
                        </span>

                        <div class="info-value">
                            {{ $booking->ship->name }}
                        </div>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Tanggal
                        </span>

                        <div class="info-value">
                            {{ $booking->booking_date->format('d-m-Y') }}
                        </div>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Waktu
                        </span>

                        <div class="info-value">
                            {{ $booking->booking_time->format('H:i') }}
                        </div>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Penumpang
                        </span>

                        <div class="info-value">
                            {{ $booking->passengers }} orang
                        </div>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Tujuan
                        </span>

                        <div class="info-value">
                            {{ $booking->destination }}
                        </div>

                    </div>

                </div>

            </div>


            <!-- =====================================
                 STATUS
            ====================================== -->

            <div class="section">

                <div class="section-title">

                    <div class="section-title-icon">
                        📋
                    </div>

                    <h3>
                        Status Booking
                    </h3>

                </div>


                <div class="info-item">

                    <span class="info-label">
                        Status Saat Ini
                    </span>

                    <span class="status">

                        <span class="status-dot"></span>

                        {{ ucfirst($booking->status) }}

                    </span>

                </div>

            </div>


            <!-- =====================================
                 TOTAL
            ====================================== -->

            <div class="total-box">

                <div class="total-label">

                    TOTAL PEMBAYARAN

                    <span>
                        Harga booking kapal
                    </span>

                </div>

                <div class="total-price">

                    Rp {{ number_format(
                        $booking->total_price,
                        0,
                        ',',
                        '.'
                    ) }}

                </div>

            </div>


          <!-- =====================================
     ACTIONS
====================================== -->

<div class="actions">

    <button
        type="button"
        class="btn btn-primary"
        onclick="window.print()"
    >
        🖨️ Cetak Booking
    </button>

    <a
        href="{{ route('bookings.check') }}"
        class="btn btn-secondary"
    >
        🔎 Cek Booking
    </a>

    <a
        href="{{ url('/') }}"
        class="btn btn-secondary"
    >
        🏠 Kembali ke Beranda
    </a>

</div>
            <div class="note">

                Simpan kode booking
                <strong>{{ $booking->booking_code }}</strong>
                untuk mengecek status booking melalui
                menu <strong>Cek Booking</strong>.

            </div>

        </div>

    </div>

</div>
        <script>
function copyBookingCode() {

    const code = document.getElementById('bookingCode').innerText;
    const button = document.querySelector('.copy-button');

    navigator.clipboard.writeText(code).then(function () {

        button.innerHTML = '✅ Kode Tersalin';

        setTimeout(function () {
            button.innerHTML = '📋 Salin Kode Booking';
        }, 2000);

    });

}
</script>
</body>

</html>
