<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layanan Customer - Nyanyian Hujan</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

    body::before {
        content: "";
        position: fixed;
        inset: 0;
        pointer-events: none;
        z-index: -1;

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

    .nav-menu {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .nav-menu > a {
        color: #a9c7d1;
        text-decoration: none;

        font-size: 11px;
        font-weight: 600;

        padding: 9px 12px;
        border-radius: 999px;

        transition:
            color .3s ease,
            background .3s ease,
            transform .3s ease;
    }

    .nav-menu > a:hover {
        color: #ffffff;
        background: rgba(255,255,255,.045);
        transform: translateY(-1px);
    }

    .nav-login {
        border: 1px solid rgba(255,255,255,.09);
        background: rgba(255,255,255,.035);
    }

    .nav-booking {
        color: #031018 !important;

        background:
            linear-gradient(
                135deg,
                #00e2ff,
                #00a9d7
            ) !important;

        box-shadow:
            0 10px 25px rgba(0,217,255,.12);
    }

    .nav-booking:hover {
        filter: brightness(1.05);
        box-shadow:
            0 14px 30px rgba(0,217,255,.20);
    }


    /* =====================================================
       BACK HOME
    ===================================================== */

    .back-home-wrapper {
    width: min(1160px, 92%);
    margin: 50px auto 0;

    display: flex;
    justify-content: flex-end;

    padding-right: 4px;
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

        border:
            1px solid rgba(255,255,255,.09);

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

    .back-home:hover {
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


    /* =====================================================
       HERO
    ===================================================== */

    .hero {
    width: min(1080px, 92%);
    margin: 0 auto;

    padding:
        58px
        0
        38px;

    text-align: center;
}
    .hero h1 {
        color: #f6fdff;

        font-family:
            'Playfair Display',
            serif;

        font-size:
            clamp(42px, 5vw, 64px);

        line-height: 1;
        font-weight: 500;

        letter-spacing: -1px;

        margin-bottom: 18px;
    }

    .hero h1 span {
        color: #00d9ff;
    }

    .hero p {
        max-width: 620px;
        margin: 0 auto;

        color: #8fb5c2;

        font-size: 13px;
        line-height: 1.8;
    }


    /* =====================================================
       MAIN CONTAINER
    ===================================================== */

    .container {
        width: min(1160px, 92%);
        margin: 0 auto;

        padding-bottom: 90px;
    }


    /* =====================================================
       SERVICE GRID
    ===================================================== */

    .service-grid {
    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 22px;
}
.service-card:first-child {
    grid-column: 1 / -1;
}
.service-card:first-child {
    grid-column: 1 / -1;
    padding: 32px 34px 30px;
}

.service-card:first-child .icon {
    width: 64px;
    height: 64px;
    font-size: 28px;
}

.service-card:first-child h2 {
    font-size: 30px;
}

.service-card:first-child p {
    max-width: 700px;
}
@media (max-width: 700px) {

    .service-grid {
        grid-template-columns: 1fr;
    }

    .service-card:first-child {
        grid-column: auto;
    }

}


    /* =====================================================
       SERVICE CARD
    ===================================================== */

    .service-card {
        position: relative;

        overflow: hidden;

        border-radius: 25px;

        padding: 28px 25px 26px;

        background:
            linear-gradient(
                145deg,
                rgba(255,255,255,.075),
                rgba(255,255,255,.025)
            );

        border:
            1px solid rgba(255,255,255,.09);

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

    .service-card::before {
        content: "";

        position: absolute;

        width: 160px;
        height: 160px;

        top: -90px;
        right: -80px;

        border-radius: 50%;

        background:
            rgba(0,217,255,.055);

        filter: blur(5px);

        pointer-events: none;
    }

    .service-card:hover {
        transform: scale(1.012);

        border-color:
            rgba(0,217,255,.18);

        box-shadow:
            0 30px 65px rgba(0,0,0,.38),
            0 0 35px rgba(0,217,255,.05),
            inset 0 1px 0 rgba(255,255,255,.08);
    }


    /* =====================================================
       ICON
    ===================================================== */

    .icon {
        width: 58px;
        height: 58px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 20px;

        border-radius: 18px;

        color: #00d9ff;

        background:
            rgba(0,217,255,.07);

        border:
            1px solid rgba(0,217,255,.15);

        font-size: 25px;

        box-shadow:
            inset 0 1px 0 rgba(255,255,255,.04);

        transition:
            transform .35s ease,
            background .35s ease;
    }

    .service-card:hover .icon {
        transform: translateY(-3px);

        background:
            rgba(0,217,255,.12);
    }


    /* =====================================================
       CARD TITLE
    ===================================================== */

    .service-card h2 {
        color: #ffffff;

        font-family:
            'Playfair Display',
            serif;

        font-size: 26px;
        line-height: 1.15;

        font-weight: 500;

        margin-bottom: 11px;
    }

    .service-card p {
        color: #8faab4;

        font-size: 12px;
        line-height: 1.75;

        margin-bottom: 19px;
    }


    /* =====================================================
       FORM
    ===================================================== */

    .service-card form {
        width: 100%;
    }

    .service-card input,
    .service-card textarea {
        width: 100%;

        display: block;

        padding: 13px 14px;

        margin-bottom: 11px;

        border-radius: 12px;

        color: #eafaff;

        background:
            rgba(255,255,255,.035);

        border:
            1px solid rgba(255,255,255,.09);

        outline: none;

        font-family:
            'Montserrat',
            sans-serif;

        font-size: 11px;

        transition:
            border-color .3s ease,
            background .3s ease,
            box-shadow .3s ease;
    }

    .service-card input::placeholder,
    .service-card textarea::placeholder {
        color: #678995;
    }

    .service-card input:focus,
    .service-card textarea:focus {
        border-color:
            rgba(0,217,255,.45);

        background:
            rgba(0,217,255,.035);

        box-shadow:
            0 0 0 3px rgba(0,217,255,.05);
    }

    .service-card textarea {
        min-height: 115px;
        resize: vertical;
    }


    /* =====================================================
       BUTTON
    ===================================================== */

    .service-button {
        width: 100%;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        min-height: 48px;

        padding: 0 17px;

        border: none;
        border-radius: 13px;

        text-decoration: none;

        color: #031018;

        background:
            linear-gradient(
                135deg,
                #00e2ff,
                #00a9d7
            );

        font-family:
            'Montserrat',
            sans-serif;

        font-size: 11px;
        font-weight: 700;

        letter-spacing: .4px;

        cursor: pointer;

        box-shadow:
            0 12px 28px rgba(0,217,255,.14);

        transition:
            transform .35s cubic-bezier(.22,1,.36,1),
            box-shadow .35s ease,
            filter .35s ease;
    }

    .service-button:hover {
        transform: scale(1.012);

        filter: brightness(1.04);

        box-shadow:
            0 16px 34px rgba(0,217,255,.22);
    }


    /* =====================================================
       WHATSAPP / PHONE / EMAIL
    ===================================================== */

    .service-button.whatsapp,
    .service-button.phone,
    .service-button.email {
        margin-top: 5px;
    }


    /* =====================================================
       CHECK REPLY BUTTON
    ===================================================== */

    .service-card > div[style*="text-align: center"] {
        margin-top: 14px !important;
    }

    .service-card > div[style*="text-align: center"] .service-button {
        background:
            rgba(255,255,255,.045) !important;

        border:
            1px solid rgba(0,217,255,.22) !important;

        color: #9feeff !important;

        box-shadow: none;

        min-height: 45px;
    }

    .service-card > div[style*="text-align: center"] .service-button:hover {
        background:
            rgba(0,217,255,.08) !important;

        color: #ffffff !important;

        border-color:
            rgba(0,217,255,.40) !important;

        box-shadow:
            0 10px 25px rgba(0,217,255,.08);
    }


    /* =====================================================
       SUCCESS MESSAGE
    ===================================================== */

    .success-message {
        margin-bottom: 14px;

        padding: 13px 14px;

        border-radius: 12px;

        color: #bff6ff;

        background:
            rgba(0,217,255,.055);

        border:
            1px solid rgba(0,217,255,.18);

        font-size: 11px;
        line-height: 1.6;
    }

    .success-message strong {
        color: #ffffff;
    }


    /* =====================================================
       ERROR MESSAGE
    ===================================================== */

    .error-message {
        margin-bottom: 14px;

        padding: 12px 14px;

        border-radius: 12px;

        color: #ffb7b7;

        background:
            rgba(255,70,70,.055);

        border:
            1px solid rgba(255,90,90,.18);

        font-size: 11px;
        line-height: 1.6;
    }


    /* =====================================================
       INFO BOX
    ===================================================== */

    .info-box {
        margin-top: 22px;

        padding: 25px 28px;

        border-radius: 22px;

        background:
            linear-gradient(
                145deg,
                rgba(255,255,255,.055),
                rgba(255,255,255,.02)
            );

        border:
            1px solid rgba(255,255,255,.08);

        box-shadow:
            0 20px 45px rgba(0,0,0,.24),
            inset 0 1px 0 rgba(255,255,255,.05);

        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);

        text-align: center;
    }

    .info-box h3 {
        color: #ffffff;

        font-family:
            'Playfair Display',
            serif;

        font-size: 22px;
        font-weight: 500;

        margin-bottom: 9px;
    }

    .info-box p {
        color: #829eaa;

        font-size: 11px;
        line-height: 1.8;
    }


    /* =====================================================
       FOOTER
    ===================================================== */

    footer {
        padding: 28px 20px 35px;

        text-align: center;

        color: #5f7f8b;

        font-size: 10px;
        letter-spacing: .4px;

        border-top:
            1px solid rgba(255,255,255,.05);
    }


    /* =====================================================
       SCROLLBAR
    ===================================================== */

    ::-webkit-scrollbar {
        width: 7px;
    }

    ::-webkit-scrollbar-track {
        background: #031018;
    }

    ::-webkit-scrollbar-thumb {
        background: #16485a;
        border-radius: 999px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #00a9d7;
    }


    /* =====================================================
       MOBILE
    ===================================================== */

    @media (max-width: 900px) {

        nav {
            padding: 20px 5%;
        }

        .nav-menu {
            gap: 3px;
        }

        .nav-menu > a {
            padding: 8px 9px;
            font-size: 10px;
        }

        .container {
            width: 92%;
        }
    }


    @media (max-width: 700px) {

        nav {
            padding: 20px 5%;

            flex-direction: column;
            gap: 18px;
        }

        .logo {
            font-size: 19px;
        }

        .nav-menu {
            width: 100%;

            justify-content: center;

            flex-wrap: wrap;
        }

        .back-home-wrapper {
            width: 92%;
            margin-top: 5px;
        }

        .hero {
            width: 92%;

            padding:
                38px
                0
                30px;
        }

        .hero h1 {
            font-size: 46px;
        }

        .hero p {
            font-size: 12px;
        }

        .service-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .service-card {
            padding: 24px 21px;
        }

        .service-card h2 {
            font-size: 24px;
        }

        .info-box {
            padding: 23px 20px;
        }
    }


    @media (max-width: 480px) {

        nav {
            padding: 18px 4%;
        }

        .nav-menu > a {
            font-size: 9px;
            padding: 7px 8px;
        }

        .nav-login {
            display: none !important;
        }

        .back-home {
            padding: 9px 12px;
        }

        .hero {
            padding-top: 32px;
        }

        .hero h1 {
            font-size: 40px;
        }

        .hero p {
            font-size: 11px;
        }

        .service-card {
            border-radius: 21px;
        }

        .service-card h2 {
            font-size: 23px;
        }

        .info-box h3 {
            font-size: 20px;
        }

        .info-box p {
            font-size: 10px;
        }
    }
</style>


</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    
<div class="back-home-wrapper">
    <a href="{{ url('/') }}" class="back-home">
        ← Kembali ke Beranda
    </a>
</div>

    <!-- =========================
         HERO
    ========================= -->

    <section class="hero">

        <h1>
            Layanan <span>Customer</span>
        </h1>

        <p>
            Butuh bantuan mengenai booking, jadwal kapal,
            pembayaran, atau informasi lainnya?
            Tim Nyanyian Hujan siap membantu kamu.
        </p>

    </section>


    <!-- =========================
         SERVICE
    ========================= -->

    <div class="container">

        <div class="service-grid">


            <!-- CHAT WEBSITE -->

<div class="service-card">

    <div class="icon">
        💬
    </div>

    <h2>
        Chat Admin
    </h2>

    <p>
        Kirim pesan langsung kepada admin Nyanyian Hujan
        melalui website.
    </p>

    @if (session('success'))
    <div class="success-message">
        ✅ Pesan berhasil dikirim!

        <div style="margin-top: 6px; font-weight: normal;">
            Admin akan membaca pesan kamu dan memberikan balasan.
            Kamu bisa mengecek balasan melalui tombol
            <strong>🔎 Cek Balasan Admin</strong>.
        </div>
    </div>
@endif

    @if ($errors->any())
        <div class="error-message">
            {{ $errors->first() }}
        </div>
    @endif

    <form
        action="{{ route('customer.message.store') }}"
        method="POST"
    >

        @csrf

        <input
            type="text"
            name="customer_name"
            placeholder="Nama kamu"
            value="{{ old('customer_name') }}"
            required
        >

        <input
            type="email"
            name="customer_email"
            placeholder="Email (opsional)"
            value="{{ old('customer_email') }}"
        >

        <input
            type="text"
            name="customer_phone"
            placeholder="Nomor WhatsApp (opsional)"
            value="{{ old('customer_phone') }}"
        >

        <textarea
            name="message"
            placeholder="Tulis pesan kamu..."
            rows="5"
            required
        >{{ old('message') }}</textarea>

        <button
            type="submit"
            class="service-button"
        >
            Kirim Pesan
        </button>

    </form>
    <div style="margin-top: 15px; text-align: center;">

    <a
        href="{{ route('customer.message.check') }}"
        class="service-button"
        style="
            display: inline-block;
            text-decoration: none;
            background: #0ea5e9;
            border: 1px solid #0ea5e9;
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
        "
    >
        🔎 Cek Balasan Admin
    </a>

</div>

</div>

            <!-- WHATSAPP -->

            <div class="service-card">

                <div class="icon">
                    📱
                </div>

                <h2>
                    WhatsApp Admin
                </h2>

                <p>
                    Hubungi admin melalui WhatsApp untuk
                    mendapatkan bantuan dengan lebih cepat.
                </p>

                <a
                    href="https://wa.me/6285188501511"
                    target="_blank"
                    class="service-button whatsapp"
                >
                    Chat WhatsApp
                </a>

            </div>


            <!-- TELEPON -->

            <div class="service-card">

                <div class="icon">
                    📞
                </div>

                <h2>
                    Telepon Admin
                </h2>

                <p>
                    Hubungi tim Nyanyian Hujan secara langsung
                    melalui layanan telepon.
                </p>

                <a
                    href="tel:+628xxxxxxxxxx"
                    class="service-button phone"
                >
                    Hubungi Admin
                </a>

            </div>


            <!-- EMAIL -->

            <div class="service-card">

                <div class="icon">
                    ✉️
                </div>

                <h2>
                    Email Admin
                </h2>

                <p>
                    Kirim pertanyaan atau kebutuhan informasi
                    melalui email resmi Nyanyian Hujan.
                </p>

                <a
                    href="mailto:admin@Nyanyian Hujan.com"
                    class="service-button email"
                >
                    Kirim Email
                </a>

            </div>


        </div>


        <!-- INFO -->

        <div class="info-box">

            <h3>
                🕐 Jam Layanan Customer
            </h3>

            <p>
                Senin - Sabtu, 08.00 - 17.00 WIB
                <br>
                Tim kami siap membantu kebutuhan perjalanan
                dan booking kamu.
            </p>

        </div>

    </div>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        © {{ date('Y') }} Nyanyian Hujan.
        Semua Hak Dilindungi.

    </footer>
<script>
    setTimeout(function () {
        const successMessage = document.querySelector('.success-message');

        if (successMessage) {
            successMessage.style.transition = 'opacity 0.5s ease';
            successMessage.style.opacity = '0';

            setTimeout(function () {
                successMessage.remove();
            }, 500);
        }
    }, 5000);
</script>
</body>

</html>