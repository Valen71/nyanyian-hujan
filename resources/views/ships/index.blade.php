<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fleet · Nyanyian Hujan</title>

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
            width: 24px;
            height: 24px;

            display: flex;
            align-items: center;
            justify-content: center;

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

        /* =====================================================
           HERO
        ===================================================== */

        .hero {
            width: min(1080px, 92%);
            margin: 0 auto;

            padding:
                45px
                0
                38px;

            text-align: center;
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
            color: #f6fdff;

            font-family: 'Playfair Display', serif;

            font-size: clamp(48px, 6vw, 72px);

            line-height: 1;

            font-weight: 500;

            letter-spacing: -1px;

            margin-bottom: 18px;
        }

        .hero p {
            max-width: 620px;
            margin: 0 auto;

            color: #8fb5c2;

            font-size: 14px;
            line-height: 1.8;
        }

        /* =====================================================
           FLEET GRID
        ===================================================== */

        .ships {
            width: min(1160px, 92%);
            margin: 0 auto;

            padding:
                12px
                0
                100px;

            display: grid;

            grid-template-columns:
                repeat(
                    auto-fit,
                    minmax(300px, 1fr)
                );

            gap: 22px;
        }

        /* =====================================================
           CARD
        ===================================================== */

        .card {
            position: relative;

            overflow: hidden;

            border-radius: 25px;

            background:
                linear-gradient(
                    145deg,
                    rgba(255,255,255,.075),
                    rgba(255,255,255,.025)
                );

            border: 1px solid rgba(255,255,255,.09);

            box-shadow:
                0 25px 55px rgba(0,0,0,.30),
                inset 0 1px 0 rgba(255,255,255,.06);

            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);

            transition:
                transform .45s cubic-bezier(.22,1,.36,1),
                border-color .35s ease,
                box-shadow .45s ease;
        }

        .card:hover {
            transform: scale(1.012);

            border-color:
                rgba(0,217,255,.18);

            box-shadow:
                0 30px 65px rgba(0,0,0,.38),
                0 0 35px rgba(0,217,255,.05),
                inset 0 1px 0 rgba(255,255,255,.08);
        }

        /* =====================================================
           IMAGE
        ===================================================== */

        .card-image {
            position: relative;
            width: 100%;
            height: 245px;

            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    #082638,
                    #03141e
                );
        }

        .card-image::after {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(
                    to bottom,
                    transparent 45%,
                    rgba(2,12,18,.58)
                );

            pointer-events: none;
        }

        .card-image img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition:
                transform .6s cubic-bezier(.22,1,.36,1),
                filter .45s ease;
        }

        .card:hover .card-image img {
            transform: scale(1.035);
            filter: brightness(1.04);
        }

        /* =====================================================
           IMAGE TAG
        ===================================================== */

        .fleet-tag {
            position: absolute;

            top: 16px;
            left: 16px;

            z-index: 2;

            padding: 8px 12px;

            border-radius: 999px;

            color: #bff6ff;

            background:
                rgba(3, 20, 30, .68);

            border:
                1px solid rgba(0,217,255,.20);

            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);

            font-size: 9px;
            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }

        /* =====================================================
           CARD CONTENT
        ===================================================== */

        .card-content {
            padding: 24px 24px 25px;
        }

        .card h2 {
            color: #ffffff;

            font-family: 'Playfair Display', serif;

            font-size: 27px;
            line-height: 1.15;

            font-weight: 500;

            margin-bottom: 10px;
        }

        .card p {
            color: #8faab4;

            font-size: 12px;

            line-height: 1.75;

            margin-bottom: 18px;

            min-height: 43px;
        }

        /* =====================================================
           META
        ===================================================== */

        .ship-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;

            margin-bottom: 20px;
        }

        .capacity {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            padding: 8px 11px;

            border-radius: 10px;

            color: #a7c5cf;

            background:
                rgba(255,255,255,.035);

            border:
                1px solid rgba(255,255,255,.08);

            font-size: 10px;

            font-weight: 600;
        }

        .capacity-icon {
            color: #00d9ff;
        }

        /* =====================================================
           PRICE
        ===================================================== */

        .price-label {
            color: #698996;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-bottom: 4px;
        }

        .price {
            color: #ffffff;

            font-size: 23px;

            font-weight: 700;

            letter-spacing: .1px;

            margin-bottom: 21px;
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

            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            min-height: 50px;

            padding: 0 18px;

            border-radius: 14px;

            text-decoration: none;

            color: #031018;

            background:
                linear-gradient(
                    135deg,
                    #00e2ff,
                    #00a9d7
                );

            font-size: 12px;

            font-weight: 700;

            letter-spacing: .4px;

            box-shadow:
                0 12px 28px rgba(0,217,255,.14);

            transition:
                transform .35s cubic-bezier(.22,1,.36,1),
                box-shadow .35s ease,
                filter .35s ease;
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
                0 16px 34px rgba(0,217,255,.22);
        }

        .btn:hover .btn-arrow {
            transform: translateX(3px);
        }

        /* =====================================================
           EMPTY
        ===================================================== */

        .empty-state {
            width: min(700px, 100%);
            margin: 0 auto;

            padding: 45px 30px;

            text-align: center;

            border-radius: 24px;

            border:
                1px solid rgba(255,255,255,.08);

            background:
                rgba(255,255,255,.025);
        }

        .empty-icon {
            width: 64px;
            height: 64px;

            margin: 0 auto 17px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 18px;

            color: #00d9ff;

            background:
                rgba(0,217,255,.07);

            border:
                1px solid rgba(0,217,255,.15);

            font-size: 27px;
        }

        .empty-state h3 {
            color: #ffffff;

            font-family: 'Playfair Display', serif;

            font-size: 26px;

            font-weight: 500;

            margin-bottom: 9px;
        }

        .empty-state p {
            color: #7897a3;

            font-size: 12px;

            line-height: 1.7;
        }

        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 700px) {

            nav {
                padding: 20px 5%;
            }

            .logo {
                font-size: 19px;
            }

            .hero {
                width: 92%;
                padding:
                    32px
                    0
                    28px;
            }

            .hero h1 {
                font-size: 48px;
            }

            .hero p {
                font-size: 13px;
            }

            .ships {
                width: 92%;

                padding-bottom: 60px;

                grid-template-columns: 1fr;

                gap: 18px;
            }

            .card-image {
                height: 220px;
            }

            .card-content {
                padding: 21px;
            }

            .card h2 {
                font-size: 24px;
            }

            .card p {
                font-size: 12px;
            }

            .price {
                font-size: 21px;
            }
        }

        @media (max-width: 480px) {

            .back-home {
                padding: 9px 12px;
            }

            .back-home span:last-child {
                display: none;
            }

            .hero h1 {
                font-size: 43px;
            }

            .hero-label {
                font-size: 9px;
                letter-spacing: 3px;
            }

            .card-image {
                height: 205px;
            }
        }
    </style>
</head>

<body>

<nav>

    <a href="/" class="logo">
        NYANYIAN<span>HUJAN</span>
    </a>

    <a href="/" class="back-home">

        <span class="back-icon">
            ←
        </span>

        <span>
            Kembali ke Beranda
        </span>

    </a>

</nav>


<section class="hero">

    <div class="hero-label">
        Nyanyian Hujan Fleet
    </div>

    <h1>
        Our Fleet
    </h1>

    <p>
        Jelajahi pilihan kapal Nyanyian Hujan untuk perjalanan
        laut yang nyaman, aman, dan berkesan.
    </p>

</section>


<section class="ships">

    @forelse ($ships as $ship)

        <article class="card">

            {{-- =========================
                 GAMBAR KAPAL
            ========================= --}}

            <div class="card-image">

                <div class="fleet-tag">
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
                        >

                    @else

                        <img
                            src="{{ asset('storage/' . $ship->image) }}"
                            alt="{{ $ship->name }}"
                        >

                    @endif

                @else

                    <div
                        style="
                            width:100%;
                            height:100%;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#5f8491;
                            font-size:12px;
                        "
                    >
                        Foto kapal belum tersedia
                    </div>

                @endif

            </div>


            {{-- =========================
                 CONTENT
            ========================= --}}

            <div class="card-content">

                <h2>
                    {{ $ship->name }}
                </h2>


                <p>
                    {{ $ship->description }}
                </p>


                <div class="ship-meta">

                    <div class="capacity">

                        <span class="capacity-icon">
                            ⚓
                        </span>

                        <span>
                            {{ $ship->capacity }} orang
                        </span>

                    </div>

                </div>


                <div class="price-label">
                    Harga Booking
                </div>


                <div class="price">

                    Rp {{ number_format($ship->price, 0, ',', '.') }}

                    <span>
                        / booking
                    </span>

                </div>


                <a
                    href="{{ route('ships.show', $ship) }}"
                    class="btn"
                >

                    Lihat Detail

                    <span class="btn-arrow">
                        →
                    </span>

                </a>

            </div>

        </article>

    @empty

        <div class="empty-state">

            <div class="empty-icon">
                ⚓
            </div>

            <h3>
                Belum Ada Kapal
            </h3>

            <p>
                Saat ini belum ada kapal yang tersedia.
                Silakan kembali lagi nanti.
            </p>

        </div>

    @endforelse

</section>


</body>
</html>