<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $ship->name }} · Nyanyian Hujan</title>

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

        /* =====================================================
           NAVBAR
        ===================================================== */

        nav {
            width: 100%;

            padding: 24px 6%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            position: relative;

            z-index: 10;
        }

        .logo {
            color: #ffffff;

            text-decoration: none;

            font-size: 20px;

            font-weight: 700;

            letter-spacing: 3px;
        }

        .logo span {
            color: #00d9ff;
        }

        .nav-right {
            color: #82aab7;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        /* =====================================================
           SUCCESS
        ===================================================== */

        .success-wrapper {
            width: min(920px, 92%);

            margin: 8px auto 0;

            position: relative;

            z-index: 5;
        }

        .success-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 18px;

            padding: 13px 16px;

            color: #ffffff;

            background:
                rgba(8, 22, 31, .85);

            border:
                1px solid rgba(0,217,255,.16);

            border-radius: 15px;

            box-shadow:
                0 15px 35px rgba(0,0,0,.28),
                inset 0 1px 0 rgba(255,255,255,.05);

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            font-size: 12px;

            font-weight: 600;
        }

        .success-content {
            display: flex;
            align-items: center;

            gap: 10px;
        }

        .success-icon {
            width: 25px;
            height: 25px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            color: #031018;

            background:
                #00d9ff;

            font-size: 12px;

            font-weight: 800;
        }

        .success-bar button {
            border: 0;

            padding: 7px 15px;

            border-radius: 999px;

            color: #031018;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #dff9ff
                );

            font-family: 'Montserrat', sans-serif;

            font-size: 10px;

            font-weight: 800;

            cursor: pointer;

            transition:
                transform .3s ease,
                box-shadow .3s ease;
        }

        .success-bar button:hover {
            transform: scale(1.02);

            box-shadow:
                0 6px 18px rgba(255,255,255,.10);
        }

        /* =====================================================
           CONTAINER
        ===================================================== */

        .container {
            width: min(1100px, 92%);

            margin: 35px auto 90px;

            position: relative;

            z-index: 2;
        }

        /* =====================================================
           BACK BUTTON
        ===================================================== */

        .back {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            margin-bottom: 20px;

            padding: 10px 16px;

            border-radius: 999px;

            color: #b8dce8;

            background:
                rgba(255,255,255,.035);

            border:
                1px solid rgba(255,255,255,.09);

            box-shadow:
                0 8px 22px rgba(0,0,0,.14),
                inset 0 1px 0 rgba(255,255,255,.05);

            text-decoration: none;

            font-size: 12px;

            font-weight: 600;

            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                color .3s ease,
                border-color .3s ease,
                background .3s ease,
                box-shadow .3s ease;
        }

        .back-icon {
            width: 24px;
            height: 24px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            color: #00d9ff;

            background:
                rgba(0,217,255,.08);

            border:
                1px solid rgba(0,217,255,.16);

            font-size: 14px;

            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                background .3s ease;
        }

        .back:hover {
            color: #ffffff;

            border-color:
                rgba(0,217,255,.28);

            background:
                rgba(0,217,255,.06);

            transform: scale(1.018);

            box-shadow:
                0 12px 28px rgba(0,0,0,.20),
                0 0 20px rgba(0,217,255,.06);
        }

        .back:hover .back-icon {
            transform: translateX(-2px);

            background:
                rgba(0,217,255,.14);
        }

        /* =====================================================
           DETAIL CARD
        ===================================================== */

        .detail {
            display: grid;

            grid-template-columns:
                minmax(0, 1.05fr)
                minmax(0, .95fr);

            overflow: hidden;

            border-radius: 30px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.075),
                    rgba(255,255,255,.025)
                );

            border:
                1px solid rgba(255,255,255,.10);

            box-shadow:
                0 35px 85px rgba(0,0,0,.40),
                inset 0 1px 0 rgba(255,255,255,.07);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        /* =====================================================
           IMAGE
        ===================================================== */

        .image-area {
            position: relative;

            min-height: 570px;

            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    #082638,
                    #03141e
                );
        }

        .image-area::after {
            content: "";

            position: absolute;
            inset: 0;

            pointer-events: none;

            background:
                linear-gradient(
                    to top,
                    rgba(2,12,18,.62),
                    transparent 48%
                );
        }

        .ship-image {
            width: 100%;
            height: 100%;

            min-height: 570px;

            display: block;

            object-fit: cover;

            transition:
                transform .8s cubic-bezier(.22,1,.36,1),
                filter .5s ease;
        }

        .detail:hover .ship-image {
            transform: scale(1.018);

            filter:
                brightness(1.035);
        }

        .image-badge {
            position: absolute;

            top: 20px;
            left: 20px;

            z-index: 2;

            padding: 8px 13px;

            border-radius: 999px;

            color: #bdf5ff;

            background:
                rgba(3,20,30,.68);

            border:
                1px solid rgba(0,217,255,.20);

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }

        .image-bottom {
            position: absolute;

            left: 24px;
            right: 24px;
            bottom: 22px;

            z-index: 3;

            display: flex;

            align-items: flex-end;

            justify-content: space-between;

            gap: 15px;
        }

        .image-caption-label {
            color: rgba(224,249,255,.68);

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-bottom: 5px;
        }

        .image-caption {
            color: #ffffff;

            font-family: 'Playfair Display', serif;

            font-size: 23px;

            font-weight: 500;
        }

        /* =====================================================
           NO IMAGE
        ===================================================== */

        .no-image {
            width: 100%;
            height: 100%;

            min-height: 570px;

            display: flex;
            align-items: center;
            justify-content: center;

            flex-direction: column;

            gap: 11px;

            color: #6f909d;

            font-size: 12px;

            font-weight: 600;
        }

        .no-image-icon {
            width: 65px;
            height: 65px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 19px;

            color: #00d9ff;

            background:
                rgba(0,217,255,.06);

            border:
                1px solid rgba(0,217,255,.14);

            font-size: 27px;
        }

        /* =====================================================
           CONTENT
        ===================================================== */

        .content {
            padding: 45px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .eyebrow {
            display: inline-flex;

            width: fit-content;

            padding: 7px 11px;

            margin-bottom: 17px;

            border-radius: 999px;

            color: #7eeaff;

            background:
                rgba(0,217,255,.07);

            border:
                1px solid rgba(0,217,255,.15);

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;
        }

        .content h1 {
            color: #f6fdff;

            font-family: 'Playfair Display', serif;

            font-size: clamp(39px, 4vw, 57px);

            font-weight: 500;

            line-height: 1.05;

            letter-spacing: -1px;

            margin-bottom: 17px;
        }

        .description {
            color: #8faab4;

            font-size: 13px;

            line-height: 1.85;

            margin-bottom: 27px;
        }

        /* =====================================================
           INFO
        ===================================================== */

        .info {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 12px;

            margin-bottom: 24px;
        }

        .info-item {
            padding: 17px;

            border-radius: 17px;

            background:
                rgba(255,255,255,.025);

            border:
                1px solid rgba(255,255,255,.07);

            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                border-color .35s ease,
                background .35s ease;
        }

        .info-item:hover {
            transform: scale(1.012);

            border-color:
                rgba(0,217,255,.18);

            background:
                rgba(255,255,255,.04);
        }

        .info-label {
            display: block;

            margin-bottom: 7px;

            color: #6f909d;

            font-size: 9px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1.5px;
        }

        .info-value {
            color: #ecfaff;

            font-size: 14px;

            font-weight: 600;
        }

        /* =====================================================
           STATUS
        ===================================================== */

        .status-available,
        .status-unavailable {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            width: fit-content;

            padding: 7px 10px;

            border-radius: 999px;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: .7px;

            text-transform: uppercase;
        }

        .status-available {
            color: #7cf7b5;

            background:
                rgba(43,205,130,.08);

            border:
                1px solid rgba(43,205,130,.16);
        }

        .status-unavailable {
            color: #ff9f9f;

            background:
                rgba(255,76,76,.08);

            border:
                1px solid rgba(255,76,76,.16);
        }

        .status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: currentColor;

            box-shadow:
                0 0 10px currentColor;
        }

        /* =====================================================
           PRICE
        ===================================================== */

        .price-box {
            padding-top: 5px;

            margin-bottom: 23px;
        }

        .price-label {
            display: block;

            color: #6f909d;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-bottom: 6px;
        }

        .price {
            color: #ffffff;

            font-size: 31px;

            font-weight: 700;

            letter-spacing: -.6px;
        }

        .price span {
            color: #6f909d;

            font-size: 10px;

            font-weight: 500;

            margin-left: 4px;
        }

        /* =====================================================
           BUTTON
        ===================================================== */

        .btn {
            width: 100%;

            min-height: 54px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 0 20px;

            border-radius: 15px;

            color: #031018;

            background:
                linear-gradient(
                    135deg,
                    #00e2ff,
                    #00a9d7
                );

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .4px;

            box-shadow:
                0 14px 30px rgba(0,217,255,.16);

            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                filter .35s ease,
                box-shadow .35s ease;
        }

        .btn-arrow {
            font-size: 15px;

            transition:
                transform .35s cubic-bezier(.22,1,.36,1);
        }

        .btn:hover {
            transform: scale(1.012);

            filter: brightness(1.04);

            box-shadow:
                0 18px 36px rgba(0,217,255,.22);
        }

        .btn:hover .btn-arrow {
            transform: translateX(3px);
        }

        .btn-disabled {
            width: 100%;

            min-height: 54px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 0 20px;

            border-radius: 15px;

            color: #657b84;

            background:
                rgba(255,255,255,.045);

            border:
                1px solid rgba(255,255,255,.08);

            font-size: 12px;

            font-weight: 700;

            cursor: not-allowed;
        }

        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 800px) {

            nav {
                padding: 20px 5%;
            }

            .nav-right {
                display: none;
            }

            .success-wrapper {
                width: 92%;
            }

            .success-bar {
                align-items: flex-start;
            }

            .container {
                width: 92%;

                margin-top: 25px;
            }

            .detail {
                grid-template-columns: 1fr;
            }

            .image-area {
                min-height: 300px;
            }

            .ship-image {
                min-height: 300px;
                height: 300px;
            }

            .no-image {
                min-height: 300px;
            }

            .content {
                padding: 30px 23px;
            }

            .content h1 {
                font-size: 35px;
            }

            .info {
                grid-template-columns: 1fr;
            }

            .price {
                font-size: 27px;
            }
        }

        @media (max-width: 500px) {

            .success-bar {
                flex-direction: column;
                align-items: stretch;
            }

            .success-bar button {
                width: 100%;
            }

            .back {
                margin-bottom: 16px;
            }

            .image-bottom {
                left: 18px;
                right: 18px;
                bottom: 17px;
            }

            .image-caption {
                font-size: 20px;
            }

            .content h1 {
                font-size: 31px;
            }
        }
    </style>
</head>

<body>

    {{-- =====================================================
         NAVBAR
    ===================================================== --}}

    <nav>

        <a href="/" class="logo">
            NYANYIAN<span>HUJAN</span>
        </a>

        <div class="nav-right">
            Perjalanan Laut Yang Nyaman
        </div>

    </nav>


    {{-- =====================================================
         SUCCESS MESSAGE
    ===================================================== --}}

    @if(session('success'))

        <div class="success-wrapper">

            <div
                class="success-bar"
                id="successBar"
            >

                <div class="success-content">

                    <div class="success-icon">
                        ✓
                    </div>

                    <span>
                        {{ session('success') }}
                    </span>

                </div>

                <button
                    type="button"
                    onclick="closeSuccess()"
                >
                    OKE
                </button>

            </div>

        </div>

    @endif


    {{-- =====================================================
         CONTENT
    ===================================================== --}}

    <div class="container">


        {{-- BACK --}}

        <a
            href="{{ route('ships.index') }}"
            class="back"
        >

            <span class="back-icon">
                ←
            </span>

            <span>
                Kembali ke Fleet
            </span>

        </a>


        {{-- =================================================
             DETAIL
        ================================================= --}}

        <div class="detail">


            {{-- =================================================
                 FOTO KAPAL
            ================================================= --}}

            <div class="image-area">

                <div class="image-badge">
                    Nyanyian Hujan Fleet
                </div>


                @if($ship->image)

                    @if(\Illuminate\Support\Str::startsWith(
                        $ship->image,
                        ['http://', 'https://']
                    ))

                        <img
                            src="{{ $ship->image }}"
                            alt="{{ $ship->name }}"
                            class="ship-image"
                        >

                    @else

                        <img
                            src="{{ asset('storage/' . $ship->image) }}"
                            alt="{{ $ship->name }}"
                            class="ship-image"
                        >

                    @endif

                @else

                    <div class="no-image">

                        <div class="no-image-icon">
                            ⚓
                        </div>

                        Foto kapal belum tersedia

                    </div>

                @endif


                @if($ship->image)

                    <div class="image-bottom">

                        <div>

                            <div class="image-caption-label">
                                Selected Vessel
                            </div>

                            <div class="image-caption">
                                {{ $ship->name }}
                            </div>

                        </div>

                    </div>

                @endif

            </div>


            {{-- =================================================
                 INFORMASI KAPAL
            ================================================= --}}

            <div class="content">


                <span class="eyebrow">
                    Nyanyian Hujan Fleet
                </span>


                <h1>
                    {{ $ship->name }}
                </h1>


                @if($ship->description)

                    <p class="description">
                        {{ $ship->description }}
                    </p>

                @else

                    <p class="description">
                        Kapal Nyanyian Hujan untuk perjalanan laut
                        yang nyaman bersama keluarga dan teman.
                    </p>

                @endif


                {{-- INFO --}}

                <div class="info">


                    <div class="info-item">

                        <span class="info-label">
                            Kapasitas
                        </span>

                        <span class="info-value">
                            {{ $ship->capacity }} orang
                        </span>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            Status
                        </span>


                        @if($ship->status)

                            <span class="status-available">

                                <span class="status-dot"></span>

                                Tersedia

                            </span>

                        @else

                            <span class="status-unavailable">

                                <span class="status-dot"></span>

                                Tidak tersedia

                            </span>

                        @endif

                    </div>


                </div>


                {{-- HARGA --}}

                <div class="price-box">

                    <span class="price-label">
                        Harga Booking
                    </span>

                    <div class="price">

                        Rp {{ number_format($ship->price, 0, ',', '.') }}

                        <span>
                            / booking
                        </span>

                    </div>

                </div>


                {{-- BUTTON --}}

                @if($ship->status)

                    <a
                        href="{{ route('bookings.create', $ship) }}"
                        class="btn"
                    >

                        Booking Sekarang

                        <span class="btn-arrow">
                            →
                        </span>

                    </a>

                @else

                    <div class="btn-disabled">
                        Kapal Tidak Tersedia
                    </div>

                @endif


            </div>


        </div>


    </div>


    {{-- =====================================================
         SUCCESS SCRIPT
    ===================================================== --}}

    <script>

        function closeSuccess() {

            const successBar =
                document.getElementById('successBar');

            if (successBar) {

                successBar.style.display = 'none';

            }

        }

    </script>

</body>
</html>