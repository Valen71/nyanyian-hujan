<!DOCTYPE html>
<html lang="id">
<head>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nyanyian Hujan — Jelajahi Laut</title>

    <style>
       

@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Montserrat:wght@400;500;600;700&display=swap');


/* =========================================================
   RESET
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, Helvetica, sans-serif;

    background:
        linear-gradient(
            180deg,
            #f5fbfd 0%,
            #eaf7fb 45%,
            #f5fbfd 100%
        );

    color: #102a43;

    overflow-x: hidden;
}

a {
    text-decoration: none;
}


/* =========================================================
   NAVBAR
========================================================= */

nav {
    position: absolute;

    top: 0;
    left: 0;

    width: 100%;

    background: transparent !important;

    border: none !important;

    box-shadow: none !important;

    z-index: 1000;

    display: flex;

    align-items: center;
    justify-content: space-between;

    padding: 24px 5%;

    box-sizing: border-box;
}


/* LOGO */

.logo {
    font-family: 'Cormorant Garamond', serif !important;

    font-size: 27px;
    font-weight: 600;

    letter-spacing: 3px;
    line-height: 1;

    color: #f6fdff;

    white-space: nowrap;
}

.logo span {
    font-family: 'Cormorant Garamond', serif !important;

    color: #00d9ff;
}


/* MENU */

.nav-menu {
    display: flex;

    align-items: center;

    gap: 25px;
}


/* MENU LINK */

.nav-menu a {
    position: relative;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    padding: 10px 16px;

    font-family: 'Montserrat', sans-serif;

    color: #dbeafe;

    font-size: 12px;
    font-weight: 600;

    letter-spacing: .3px;

    border: 1px solid transparent;

    border-radius: 50px;

    background: transparent;

    transition: .3s ease;

    text-decoration: none;
}


/* MENU HOVER */

.nav-menu a:hover {
    color: #ffffff;

    background: rgba(255,255,255,.10);

    border-color: rgba(255,255,255,.18);

    transform: translateY(-2px);

    box-shadow:
        0 8px 25px rgba(0,0,0,.15);
}


/* =========================================================
   PREMIUM LOGIN ADMIN / KARYAWAN
========================================================= */

.nav-login {
    position: relative;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    height: 42px;

    padding: 0 20px;

    margin-left: 8px;

    border: 1px solid rgba(0, 217, 255, .35);

    border-radius: 999px;

    background: rgba(0, 217, 255, .045);

    color: rgba(255,255,255,.82) !important;

    font-family: 'Montserrat', sans-serif;

    font-size: 9px;
    font-weight: 600;

    letter-spacing: 1.5px;

    text-transform: uppercase;

    text-decoration: none;

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.08),
        0 5px 20px rgba(0,0,0,.12);

    transition:
        .35s ease;
}

/* garis cahaya kecil */

.nav-login::before {
    content: '';

    width: 5px;
    height: 5px;

    margin-right: 9px;

    border-radius: 50%;

    background: #00d9ff;

    box-shadow:
        0 0 8px rgba(0,217,255,.9),
        0 0 16px rgba(0,217,255,.35);

    transition: .35s ease;
}

/* hover */

.nav-login:hover {
    color: #ffffff !important;

    background: rgba(0,217,255,.10);

    border-color: rgba(0,217,255,.75);

    transform: translateY(-2px);

    box-shadow:
        0 8px 25px rgba(0,0,0,.25),
        0 0 20px rgba(0,217,255,.10);
}

.nav-login:hover::before {
    transform: scale(1.35);

    box-shadow:
        0 0 10px rgba(0,217,255,1),
        0 0 20px rgba(0,217,255,.5);
}

/* MOBILE */

@media (max-width: 900px) {
    .nav-login {
        margin-left: 0;
    }
}


/* BOOKING */

.nav-menu .nav-booking {
    color: #ffffff !important;

    background:
        linear-gradient(
            135deg,
            #00a8e8,
            #0077b6
        );

    border-color: transparent;

    border-radius: 30px;

    box-shadow:
        0 8px 20px rgba(0,119,182,.25);
}

.nav-menu .nav-booking:hover {
    color: #ffffff !important;

    background:
        linear-gradient(
            135deg,
            #20cfff,
            #008ac7
        );

    transform: translateY(-2px);

    box-shadow:
        0 10px 28px rgba(0,119,182,.35);
}


/* =========================================================
   GENERAL SECTION — NYANYIAN HUJAN
========================================================= */

.section {
    position: relative;

    max-width: 1200px;

    margin: auto;

    padding: 95px 20px;
}

.section-title {
    text-align: center;

    margin-bottom: 45px;
}

.section-label {
    display: inline-block;

    margin-bottom: 12px;

    color: #0087b8;

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;
    font-weight: 800;

    letter-spacing: 2.5px;

    text-transform: uppercase;
}

.section-title h2 {
    margin-bottom: 12px;

    color: #082f49;

    font-family: 'Montserrat', sans-serif;

    font-size: 38px;
    font-weight: 800;

    letter-spacing: -1px;
}

.section-title p {
    max-width: 600px;

    margin: auto;

    color: #607d8b;

    font-family: 'Montserrat', sans-serif;

    font-size: 13px;

    line-height: 1.8;
}


/* =========================================================
   PREMIUM ADVERTISEMENT / PROMO
========================================================= */

.advertisement-section {
    position: relative;

    width: 100%;

    padding: 110px 24px 80px;

    overflow: hidden;

    background:
        linear-gradient(
            rgba(4, 20, 35, .22),
            rgba(4, 20, 35, .30)
        ),
        url('/images/laut-cinematic.jpeg')
        center center / cover no-repeat;
}


/* LAPISAN GELAP */

.advertisement-section::before {
    content: "";

    position: absolute;

    inset: 0;

    background:
        rgba(4, 20, 35, .30);

    z-index: 1;

    pointer-events: none;
}


/* JUDUL IKLAN */

.advertisement-section .section-title {
    position: relative;

    z-index: 2;

    margin-bottom: 36px;

    color: #ffffff;
}


/* =========================================================
   WRAPPER IKLAN
========================================================= */

.advertisement-wrapper {
    position: relative;

    z-index: 2;

    width: min(1360px, 94vw);

    max-width: 1360px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        110px
        minmax(0, 1fr)
        minmax(0, 1fr)
        110px;

    column-gap: 28px;

    align-items: center;

    box-sizing: border-box;
}


/* =========================================================
   AREA IKLAN UTAMA
========================================================= */

.advertisement-main {
    grid-column: 2 / 4;

    width: 100%;

    min-width: 0;
}


/* =========================================================
   DUA KARTU IKLAN
========================================================= */

.advertisement-cards {
    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 24px;

    align-items: stretch;
}


/* =========================================================
   KARTU IKLAN
========================================================= */

.advertisement-slider {
    position: relative;

    width: 100%;

    height: 270px;

    min-height: 270px;

    overflow: hidden;

    border-radius: 20px;

    background: #071827;

    isolation: isolate;

    box-sizing: border-box;

    transition:
        box-shadow .45s ease;
}

.advertisement-slider:hover {
    transform: none;

    box-shadow:
        0 14px 32px rgba(0,0,0,.20),
        0 0 0 1px rgba(255,255,255,.10);
}


/* =========================================================
   TEKS IKLAN
========================================================= */

.advertisement-info {
    padding:
        80px
        28px
        24px;
}

.advertisement-info h2 {
    font-size: 23px;

    line-height: 1.2;
}

.advertisement-info p {
    font-size: 12px;

    line-height: 1.5;

    margin-bottom: 15px;
}

.advertisement-label {
    font-size: 8px;

    padding: 6px 11px;
}


/* BUTTON IKLAN */

.advertisement-button {
    font-size: 10px;

    padding: 9px 16px;
}


/* =========================================================
   KOMPAS KIRI & KANAN
========================================================= */

.advertisement-nautical-left,
.advertisement-nautical-right {
    width: 110px;

    height: 270px;

    display: flex;

    align-items: center;
    justify-content: center;

    flex-direction: column;

    gap: 12px;

    box-sizing: border-box;
}


/* POSISI */

.advertisement-nautical-left {
    grid-column: 1;
}

.advertisement-nautical-right {
    grid-column: 4;
}


/* =========================================================
   UKURAN KOMPAS
========================================================= */

.nautical-compass {
    width: 96px;

    height: 96px;
}


/* GARIS KOMPAS */

.compass-cross.horizontal {
    width: 64px;
}

.compass-cross.vertical {
    height: 64px;
}


/* BINTANG */

.compass-star {
    font-size: 30px;
}


/* HURUF KOMPAS */

.compass-n,
.compass-e,
.compass-s,
.compass-w {
    font-size: 8px;
}


/* CAPTION */

.nautical-caption {
    margin: 0;

    font-family: 'Montserrat', sans-serif;

    font-size: 8px;

    font-weight: 600;

    letter-spacing: 2px;

    color: rgba(255,255,255,.62);

    text-align: center;

    white-space: nowrap;
}


/* =========================================================
   PREMIUM HORIZONTAL ADVERTISEMENT
========================================================= */

.advertisement-running {
    position: relative;

    overflow: hidden;

    border-radius: 999px;

    border: 1px solid rgba(255,255,255,.14);

    background: #02080c;

    box-shadow:
        0 12px 35px rgba(0,0,0,.28),
        inset 0 1px 0 rgba(255,255,255,.08);
}

/* =========================================================
   DARK PREMIUM OVERLAY
========================================================= */

.advertisement-running::before {
    content: '';

    position: absolute;

    inset: 0;

    z-index: 2;

    pointer-events: none;

    background:
        linear-gradient(
            90deg,
            rgba(0,5,9,.88) 0%,
            rgba(0,8,13,.58) 25%,
            rgba(0,217,255,.08) 50%,
            rgba(0,8,13,.58) 75%,
            rgba(0,5,9,.88) 100%
        );
}

/* =========================================================
   SOFT LIGHT EFFECT
========================================================= */

.advertisement-running::after {
    content: '';

    position: absolute;

    top: 0;
    left: -20%;

    width: 40%;
    height: 100%;

    z-index: 3;

    pointer-events: none;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(0,217,255,.12),
            transparent
        );

    transform: skewX(-20deg);

    animation: advertisementLight 5s ease-in-out infinite;
}

@keyframes advertisementLight {

    0% {
        left: -40%;
    }

    100% {
        left: 120%;
    }
}

/* =========================================================
   RUNNING TEXT
========================================================= */

.advertisement-running-track {
    position: relative;

    z-index: 4;

    display: flex;

    width: max-content;

    align-items: center;

    white-space: nowrap;

    animation:
        nyanyianHujanRunning 22s linear infinite;

    will-change: transform;
}

/* =========================================================
   TEXT
========================================================= */

.advertisement-running-content {
    display: flex;

    align-items: center;

    gap: 0;

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;

    font-weight: 500;

    letter-spacing: 2px;

    text-transform: uppercase;

    color: rgba(255,255,255,.78);
}

.advertisement-running-content b {
    margin: 0 12px;

    font-size: 10px;

    font-weight: 600;

    color: #00d9ff;

    text-shadow:
        0 0 10px rgba(0,217,255,.35);
}

/* =========================================================
   IMPORTANT:
   MOUSE TIDAK MENGHENTIKAN ANIMASI
========================================================= */

.advertisement-running:hover
.advertisement-running-track {
    animation-play-state: running !important;
}

/* Jangan gunakan:
   animation-play-state: paused;
*/

/* =========================================================
   HOVER — HANYA VISUAL, BUKAN STOP ANIMASI
========================================================= */

.advertisement-running:hover {
    border-color: rgba(0,217,255,.35);

    box-shadow:
        0 14px 40px rgba(0,0,0,.35),
        0 0 25px rgba(0,217,255,.08),
        inset 0 1px 0 rgba(255,255,255,.10);
}

.advertisement-running:hover
.advertisement-running-content {
    color: #ffffff;
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .advertisement-running {
        border-radius: 18px;
    }

    .advertisement-running-content {
        font-size: 8px;
        letter-spacing: 1.4px;
    }

    .advertisement-running-content b {
        margin: 0 9px;
        font-size: 8px;
    }
}

/* RUNNING TRACK */

.advertisement-running-track {
    display: flex;

    align-items: center;

    width: max-content;

    height: 100%;

    flex-shrink: 0;

    animation:
        nyanyianHujanRunning
        25s
        linear
        infinite;

    will-change: transform;
}


/* RUNNING CONTENT */

.advertisement-running-content {
    height: 100%;

    display: flex;

    align-items: center;

    flex-shrink: 0;

    white-space: nowrap;

    box-sizing: border-box;

    padding-right: 30px;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;

    font-weight: 600;

    letter-spacing: 1.8px;

    text-transform: uppercase;

    color: rgba(255,255,255,.90);
}


/* PEMISAH */

.advertisement-running-content b {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    margin: 0 22px;

    color: #00d9ff;

    font-size: 15px;

    font-weight: 700;

    text-shadow:
        0 0 12px rgba(0,217,255,.55);
}


/* =========================================================
   ANIMASI RUNNING
========================================================= */

@keyframes nyanyianHujanRunning {

    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }

}


/* =========================================================
   HOVER RUNNING BAR
========================================================= */

.advertisement-running:hover
.advertisement-running-track {
    animation-play-state: paused;
}

.advertisement-running:hover
.advertisement-running-content span {
    color: #ffffff;

    text-shadow:
        0 0 14px rgba(0,217,255,.20);
}


/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media (max-width: 900px) {

    .advertisement-running {
        height: 54px;

        margin-bottom: 18px;

        border-radius: 12px;
    }

    .advertisement-running-content {
        height: 54px;

        font-size: 11px;

        letter-spacing: 1.5px;
    }

    .advertisement-running-content b {
        margin: 0 16px;

        font-size: 13px;
    }

    .advertisement-running-track {
        animation-duration: 24s;
    }

}


/* =========================================================
   RESPONSIVE HP
========================================================= */

@media (max-width: 650px) {

    .advertisement-main {
        width: 100%;
    }

    .advertisement-running {
        height: 50px;

        margin-bottom: 16px;

        border-radius: 10px;
    }

    .advertisement-running-content {
        height: 50px;

        font-size: 9px;

        letter-spacing: 1.2px;

        padding-right: 40px;
    }

    .advertisement-running-content b {
        margin: 0 12px;

        font-size: 11px;
    }

    .advertisement-running::before,
    .advertisement-running::after {
        width: 45px;
    }

    .advertisement-running-track {
        animation-duration: 20s;
    }

    .advertisement-cards {
        grid-template-columns: 1fr;

        row-gap: 18px;
    }

}


/* =========================================================
   Nyanyian Hujan - IKLAN HOMEPAGE
   KOMPAS KIRI | IKLAN 1 | IKLAN 2 | KOMPAS KANAN
========================================================= */


/* =========================================================
   SECTION
========================================================= */

.advertisement-section {
    position: relative;
    width: 100%;
    padding: 80px 24px;
    overflow: hidden;

    background:
        linear-gradient(
            rgba(4, 20, 35, 0.22),
            rgba(4, 20, 35, 0.30)
        ),
        url('/images/laut-cinematic.jpg')
        center center / cover no-repeat;
}

.advertisement-section::before {
    content: "";

    position: absolute;
    inset: 0;

    background: rgba(4, 20, 35, 0.30);

    z-index: 1;
    pointer-events: none;
}

.advertisement-section .section-title {
    position: relative;
    z-index: 2;

    margin-bottom: 36px;

    color: #ffffff;
}


/* =========================================================
   WRAPPER UTAMA
========================================================= */

.advertisement-wrapper {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1400px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        130px
        minmax(0, 1fr)
        minmax(0, 1fr)
        130px;

    column-gap: 32px;

    align-items: center;

    box-sizing: border-box;
}


/* =========================================================
   AREA DUA IKLAN
========================================================= */

.advertisement-cards {
    grid-column: 2 / 4;

    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    column-gap: 28px;

    align-items: stretch;
}


/* =========================================================
   KOTAK IKLAN
========================================================= */

.advertisement-slider {
    position: relative;

    width: 100%;
    height: 260px;
    min-height: 260px;

    overflow: hidden;

    border-radius: 20px;

    background: #071827;
    isolation: isolate;

    box-sizing: border-box;

    transition:
        box-shadow 0.45s ease;
}


/* =========================================================
   HOVER IKLAN
========================================================= */

.advertisement-slider:hover {
    transform: none;

    box-shadow:
        0 14px 32px rgba(0, 0, 0, .20),
        0 0 0 1px rgba(255, 255, 255, .10);
}

.advertisement-slider:hover .advertisement-image {
    transform: scale(1.015);
    filter: brightness(1.03);
}

/* =========================================================
   KOMPAS KIRI
========================================================= */

.advertisement-nautical-left {
    grid-column: 1;

    width: 130px;
    height: 300px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 14px;

    text-align: center;
}


/* =========================================================
   KOMPAS KANAN
========================================================= */

.advertisement-nautical-right {
    grid-column: 4;

    width: 130px;
    height: 300px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 14px;

    text-align: center;

    transform: none;
}


/* =========================================================
   BENTUK KOMPAS
========================================================= */

.nautical-compass {
    position: relative;

    width: 112px;
    height: 112px;

    flex-shrink: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    border: 1px solid rgba(212, 175, 55, .58);

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,.08),
            rgba(255,255,255,.02) 60%,
            transparent 75%
        );

    box-shadow:
        0 0 0 7px rgba(212,175,55,.035),
        0 0 30px rgba(0,217,255,.08);

    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);

    box-sizing: border-box;
}

.nautical-compass::before {
    content: "";

    position: absolute;
    inset: 11px;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.20);
}

.nautical-compass::after {
    content: "";

    position: absolute;
    inset: -7px;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.08);
}


/* =========================================================
   ARAH KOMPAS
========================================================= */

.compass-n,
.compass-e,
.compass-s,
.compass-w {
    position: absolute;

    font-size: 9px;
    font-weight: 600;

    letter-spacing: 1px;

    color: rgba(255,255,255,.8);
}

.compass-n {
    top: 5px;
    left: 50%;

    transform: translateX(-50%);
}

.compass-e {
    top: 50%;
    right: 6px;

    transform: translateY(-50%);
}

.compass-s {
    bottom: 5px;
    left: 50%;

    transform: translateX(-50%);
}

.compass-w {
    top: 50%;
    left: 6px;

    transform: translateY(-50%);
}


/* =========================================================
   GARIS KOMPAS
========================================================= */

.compass-cross.horizontal {
    position: absolute;

    width: 78px;
    height: 1px;

    background: rgba(255,255,255,.22);
}

.compass-cross.vertical {
    position: absolute;

    width: 1px;
    height: 78px;

    background: rgba(255,255,255,.22);
}


/* =========================================================
   BINTANG KOMPAS
========================================================= */

.compass-star {
    position: relative;

    z-index: 2;

    font-size: 34px;

    color: #d4af37;

    text-shadow:
        0 0 8px rgba(212,175,55,.45),
        0 0 18px rgba(212,175,55,.18);
}


/* =========================================================
   TEKS KOMPAS
========================================================= */

.nautical-caption {
    margin: 0;

    font-family: 'Montserrat', sans-serif;

    font-size: 8px;
    font-weight: 600;

    letter-spacing: 2px;

    color: rgba(255,255,255,.62);

    text-align: center;

    white-space: nowrap;
}
/* =========================================================
   RUNNING ADVERTISEMENT
   BERJALAN DI ATAS IKLAN 1 & IKLAN 2
========================================================= */

.advertisement-running {
    grid-column: 2 / 4;
    position: relative;
    width: 100%;
    height: 54px;
    margin-bottom: 22px;
    overflow: hidden;
    display: flex;
    align-items: center;
    border-radius: 14px;
    box-sizing: border-box;

    background:
        linear-gradient(
            90deg,
            rgba(4, 18, 30, .98),
            rgba(8, 35, 54, .96),
            rgba(4, 18, 30, .98)
        );

    border: 1px solid rgba(255,255,255,.14);

    box-shadow:
        0 10px 30px rgba(0,0,0,.20),
        inset 0 0 30px rgba(0,217,255,.04);

    z-index: 5;
}

.advertisement-running-track {
    display: flex;
    align-items: center;
    width: max-content;
    height: 100%;
    flex-shrink: 0;

    animation:
        nyanyianHujanMarquee
        25s
        linear
        infinite;

    will-change: transform;
}

.advertisement-running-content {
    height: 100%;
    display: flex;
    align-items: center;
    flex-shrink: 0;

    white-space: nowrap;
    box-sizing: border-box;

    padding-right: 30px;

    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.8px;
    text-transform: uppercase;

    color: rgba(255,255,255,.90);
}

.advertisement-running-content b {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    margin: 0 20px;

    color: #00d9ff;
    font-size: 14px;

    text-shadow:
        0 0 12px rgba(0,217,255,.55);
}

@keyframes nyanyianHujanMarquee {

    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }

}
/* =====================================================
   FIX BAGIAN PUTIH DI RUNNING ADVERTISEMENT
===================================================== */

.advertisement-running {
    margin: 0 !important;
    padding: 0 !important;

    width: 100% !important;
    height: 58px !important;

    background:
        linear-gradient(
            90deg,
            #061522 0%,
            #0a3048 50%,
            #061522 100%
        ) !important;

    border: none !important;

    box-shadow:
        0 8px 25px rgba(0, 0, 0, .30) !important;

    overflow: hidden !important;
}

/* Hilangkan kemungkinan lapisan putih dari elemen pseudo */
.advertisement-running::before,
.advertisement-running::after {
    background: transparent !important;
}

/* Track harus memenuhi seluruh tinggi bar */
.advertisement-running-track {
    height: 100% !important;
}

/* Isi teks */
.advertisement-running-content {
    height: 100% !important;
    background: transparent !important;
}
/* =====================================================
   RUNNING ADVERTISEMENT FULL WIDTH
   HILANGKAN PUTIH DI UJUNG KIRI & KANAN
===================================================== */

.advertisement-running {
    position: relative !important;

    width: 100vw !important;
    max-width: none !important;

    margin-left: calc(50% - 50vw) !important;
    margin-right: calc(50% - 50vw) !important;

    padding-left: 0 !important;
    padding-right: 0 !important;

    box-sizing: border-box !important;

    border-left: none !important;
    border-right: none !important;

    border-radius: 0 !important;

    overflow: hidden !important;
}

/* Pastikan track juga tidak memiliki jarak */
.advertisement-running-track {
    margin: 0 !important;
    padding: 0 !important;
}

/* Hilangkan efek putih dari pseudo-element */
.advertisement-running::before,
.advertisement-running::after {
    pointer-events: none !important;
}
/* =====================================================
   RESPONSIVE — NYANYIAN HUJAN
   PATOKAN ZOOM 90% & 100%
===================================================== */

html,
body {
    width: 100%;
    max-width: 100%;
    overflow-x: hidden;
}

/* RUNNING ADVERTISEMENT */
.advertisement-running {
    width: 100vw !important;
    max-width: 100vw !important;
    min-width: 100vw !important;

    margin-left: calc(50% - 50vw) !important;
    margin-right: calc(50% - 50vw) !important;

    box-sizing: border-box !important;
}

/* DESKTOP / ZOOM 100% */
@media (min-width: 1200px) {
    .advertisement-running {
        height: 58px !important;
    }

    .advertisement-running-content {
        font-size: 12px !important;
        letter-spacing: 1.8px !important;
    }
}

/* DESKTOP / ZOOM 90% atau layar sedikit lebih kecil */
@media (min-width: 1000px) and (max-width: 1199px) {
    .advertisement-running {
        height: 56px !important;
    }

    .advertisement-running-content {
        font-size: 11px !important;
        letter-spacing: 1.6px !important;
    }
}

/* TABLET */
@media (max-width: 999px) {
    .advertisement-running {
        height: 54px !important;
    }

    .advertisement-running-content {
        font-size: 10px !important;
        letter-spacing: 1.4px !important;
    }
}

/* HP */
@media (max-width: 650px) {
    .advertisement-running {
        height: 50px !important;
    }

    .advertisement-running-content {
        font-size: 9px !important;
        letter-spacing: 1.2px !important;
    }
}
/* =========================================================
   FINAL FIX IKLAN NYANYIAN HUJAN
   OPTIMASI ZOOM BROWSER 90% - 100%
========================================================= */

/* SECTION IKLAN */
.advertisement-section {
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
}

/* WRAPPER UTAMA */
.advertisement-wrapper {
    position: relative;
    z-index: 2;

    width: min(1360px, 94vw) !important;
    max-width: 1360px !important;

    margin: 0 auto !important;

    display: grid !important;

    grid-template-columns:
        110px
        minmax(0, 1fr)
        minmax(0, 1fr)
        110px !important;

    column-gap: 28px !important;

    align-items: center !important;

    box-sizing: border-box;
}

/* =========================================================
   AREA IKLAN UTAMA
========================================================= */

.advertisement-main {
    grid-column: 2 / 4 !important;
    width: 100% !important;
    min-width: 0 !important;
}

/* DUA KARTU */
.advertisement-cards {
    width: 100% !important;

    display: grid !important;

    grid-template-columns:
        minmax(0, 1fr)
        minmax(0, 1fr) !important;

    gap: 24px !important;

    align-items: stretch !important;
}

/* =========================================================
   KARTU IKLAN
========================================================= */

.advertisement-slider {
    width: 100% !important;
    min-width: 0 !important;

    height: 270px !important;
    min-height: 270px !important;

    border-radius: 20px !important;

    overflow: hidden !important;
}

/* =========================================================
   TEKS IKLAN
========================================================= */

.advertisement-info {
    padding:
        80px
        28px
        24px !important;
}

.advertisement-info h2 {
    font-size: 23px !important;
    line-height: 1.2 !important;
}

.advertisement-info p {
    font-size: 12px !important;
    line-height: 1.5 !important;
    margin-bottom: 15px !important;
}

.advertisement-label {
    font-size: 8px !important;
    padding: 6px 11px !important;
}

/* BUTTON */
.advertisement-button {
    font-size: 10px !important;
    padding: 9px 16px !important;
}

/* =========================================================
   KOMPAS
========================================================= */

.advertisement-nautical-left,
.advertisement-nautical-right {
    width: 110px !important;
    height: 270px !important;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    flex-direction: column !important;

    gap: 12px !important;

    box-sizing: border-box;
}

/* UKURAN KOMPAS */
.nautical-compass {
    width: 96px !important;
    height: 96px !important;
}

/* GARIS KOMPAS */
.compass-cross.horizontal {
    width: 64px !important;
}

.compass-cross.vertical {
    height: 64px !important;
}

/* BINTANG */
.compass-star {
    font-size: 30px !important;
}

/* HURUF */
.compass-n,
.compass-e,
.compass-s,
.compass-w {
    font-size: 8px !important;
}

/* CAPTION */
.nautical-caption {
    font-size: 7px !important;
    letter-spacing: 1.6px !important;
}

/* =========================================================
   PANAH IKLAN
========================================================= */

.advertisement-prev,
.advertisement-next {
    width: 40px !important;
    height: 40px !important;

    font-size: 20px !important;
}

/* =========================================================
   ZOOM / LAYAR DESKTOP 90–100%
========================================================= */

@media (min-width: 1000px) {

    .advertisement-wrapper {
        width: min(1360px, 94vw) !important;

        grid-template-columns:
            105px
            minmax(0, 1fr)
            minmax(0, 1fr)
            105px !important;

        column-gap: 26px !important;
    }

    .advertisement-nautical-left,
    .advertisement-nautical-right {
        width: 105px !important;
    }

    .advertisement-slider {
        height: 270px !important;
        min-height: 270px !important;
    }
}

/* =========================================================
   LAPTOP / LAYAR LEBIH KECIL
========================================================= */

@media (max-width: 1100px) and (min-width: 801px) {

    .advertisement-wrapper {
        width: 94vw !important;

        grid-template-columns:
            90px
            minmax(0, 1fr)
            minmax(0, 1fr)
            90px !important;

        column-gap: 18px !important;
    }

    .advertisement-nautical-left,
    .advertisement-nautical-right {
        width: 90px !important;
    }

    .nautical-compass {
        width: 82px !important;
        height: 82px !important;
    }

    .compass-cross.horizontal {
        width: 54px !important;
    }

    .compass-cross.vertical {
        height: 54px !important;
    }

    .compass-star {
        font-size: 26px !important;
    }

    .advertisement-cards {
        gap: 18px !important;
    }

    .advertisement-slider {
        height: 255px !important;
        min-height: 255px !important;
    }

    .advertisement-info {
        padding: 70px 22px 20px !important;
    }

    .advertisement-info h2 {
        font-size: 20px !important;
    }
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 800px) {

    .advertisement-wrapper {
        display: block !important;
        width: 100% !important;
    }

    .advertisement-main {
        width: 100% !important;
    }

    .advertisement-nautical-left,
    .advertisement-nautical-right {
        display: none !important;
    }

    .advertisement-cards {
        width: 100% !important;

        display: grid !important;

        grid-template-columns: 1fr !important;

        gap: 18px !important;
    }

    .advertisement-slider {
        width: 100% !important;

        height: 280px !important;
        min-height: 280px !important;
    }
}

/* Efek fade kiri dan kanan */

.advertisement-running::before,
.advertisement-running::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;

    width: 70px;

    z-index: 3;
    pointer-events: none;
}

.advertisement-running::before {
    left: 0;

    background:
        linear-gradient(
            90deg,
            rgba(4,18,30,1),
            rgba(4,18,30,0)
        );
}

.advertisement-running::after {
    right: 0;

    background:
        linear-gradient(
            270deg,
            rgba(4,18,30,1),
            rgba(4,18,30,0)
        );
}


/* =========================================================
   SLIDE
========================================================= */

.advertisement-slide {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    padding: 0;

    opacity: 0;
    visibility: hidden;

    pointer-events: none;

    transition:
        opacity 0.55s ease,
        visibility 0.55s ease;
}

.advertisement-slide.active {
    opacity: 1;
    visibility: visible;

    pointer-events: auto;

    z-index: 2;
}


/* =========================================================
   CONTENT
========================================================= */

.advertisement-content {
    position: relative;

    width: 100%;
    height: 100%;

    display: block;

    background: transparent;
}


/* =========================================================
   LINK FOTO
========================================================= */

.advertisement-image-link {
    position: absolute;

    inset: 0;

    width: 100%;
    height: 100%;

    display: block;

    overflow: hidden;

    border-radius: 22px;

    background: #071827;
}


/* =========================================================
   FOTO IKLAN
========================================================= */

.advertisement-image {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;
    object-position: center;

    transform: scale(1);

    transition:
        transform 0.7s cubic-bezier(.22, 1, .36, 1),
        filter 0.5s ease;

    will-change: transform;
}

.advertisement-slider:hover .advertisement-image {
    transform: scale(1.02);
    filter: brightness(1.03);
}

/* =========================================================
   OVERLAY TEXT
========================================================= */

.advertisement-info {
    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;

    z-index: 5;

    padding: 90px 32px 30px;

    color: #ffffff;

    background:
        linear-gradient(
            to top,
            rgba(4, 22, 38, 0.92) 0%,
            rgba(4, 22, 38, 0.64) 38%,
            rgba(4, 22, 38, 0.20) 72%,
            rgba(4, 22, 38, 0) 100%
        );

    text-align: left;

     transform: none;
    transition: opacity 0.45s ease;
}

.advertisement-slider:hover .advertisement-info {
    transform: none;
}


/* =========================================================
   LABEL
========================================================= */

.advertisement-label {
    display: inline-flex;

    align-items: center;

    margin-bottom: 10px;
    padding: 7px 13px;

    border-radius: 999px;

    background: rgba(255,255,255,.14);

    border: 1px solid rgba(255,255,255,.28);

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    font-size: 9px;
    font-weight: 700;

    letter-spacing: 1.8px;

    color: rgba(255,255,255,.95);
}


/* =========================================================
   JUDUL
========================================================= */

.advertisement-info h2 {
    margin: 0 0 8px;

    font-size: 25px;
    line-height: 1.2;

    font-weight: 600;
    letter-spacing: -0.3px;

    color: #ffffff;
}


/* =========================================================
   DESKRIPSI
========================================================= */

.advertisement-info p {
    max-width: 560px;

    margin: 0 0 18px;

    font-size: 13px;
    line-height: 1.55;

    color: rgba(255,255,255,.88);
}


/* =========================================================
   BUTTON
========================================================= */

.advertisement-button {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    padding: 10px 18px;

    border-radius: 999px;

    background: rgba(255,255,255,.94);

    color: #103b66;

    font-size: 11px;
    font-weight: 700;

    text-decoration: none;

    box-shadow:
        0 8px 25px rgba(0,0,0,.15);

    transition:
        transform 0.25s ease,
        background 0.25s ease,
        box-shadow 0.25s ease;
}

.advertisement-button:hover {
    background: #ffffff;

    transform: translateY(-2px);

    box-shadow:
        0 12px 30px rgba(0,0,0,.20);
}


/* =========================================================
   PANAH
========================================================= */

.advertisement-prev,
.advertisement-next {
    position: absolute;

    top: 50%;

    z-index: 20;

    width: 44px;
    height: 44px;

    display: flex;

    align-items: center;
    justify-content: center;

    transform: translateY(-50%);

    color: #ffffff;

    background: rgba(255,255,255,.12);

    border: 1px solid rgba(255,255,255,.45);

    border-radius: 50%;

    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

    box-shadow:
        0 8px 25px rgba(0,0,0,.18);

    cursor: pointer;

    transition:
        background 0.25s ease,
        transform 0.25s ease,
        border-color 0.25s ease;
}

.advertisement-prev {
    left: 18px;
}

.advertisement-next {
    right: 18px;
}

.advertisement-prev:hover,
.advertisement-next:hover {
    background: rgba(255,255,255,.25);

    border-color: rgba(255,255,255,.75);

    transform:
        translateY(-50%)
        scale(1.08);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

    .advertisement-wrapper {
        grid-template-columns:
            100px
            minmax(0, 1fr)
            minmax(0, 1fr)
            100px;

        column-gap: 24px;
    }

    .advertisement-nautical-left,
    .advertisement-nautical-right {
        width: 100px;
    }

    .advertisement-cards {
        column-gap: 20px;
    }

    .nautical-compass {
        width: 100px;
        height: 100px;
    }

    .compass-cross.horizontal {
        width: 68px;
    }

    .compass-cross.vertical {
        height: 68px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 800px) {

    .advertisement-wrapper {
        display: block;
    }

    .advertisement-nautical-left,
    .advertisement-nautical-right {
        display: none;
    }

    .advertisement-cards {
        width: 100%;

        display: grid;

        grid-template-columns: 1fr;

        gap: 18px;
    }

    .advertisement-slider {
        height: 280px;
        min-height: 280px;
    }
}


/* =========================================================
   HP KECIL
========================================================= */

@media (max-width: 650px) {

    .advertisement-section {
        padding: 60px 18px;

        background-position:
            center -60px;
    }

    .advertisement-slider {
        height: 290px;
        min-height: 290px;

        border-radius: 20px;
    }

    .advertisement-image-link {
        border-radius: 20px;
    }

    .advertisement-info {
        padding: 80px 20px 22px;
    }

    .advertisement-info h2 {
        font-size: 21px;
    }

    .advertisement-info p {
        font-size: 12px;
    }

    .advertisement-prev,
    .advertisement-next {
        width: 36px;
        height: 36px;
    }

    .advertisement-prev {
        left: 12px;
    }

    .advertisement-next {
        right: 12px;
    }
}

/* =========================================================
   PREMIUM BOOKING SCHEDULE
========================================================= */

.calendar-section {
    position: relative;

    width: 100vw;
    max-width: 100vw;

    left: 50%;
    transform: translateX(-50%);

    padding: 90px 24px 110px;

    overflow: hidden;

    background:
        linear-gradient(
            rgba(4, 18, 32, 0.46),
            rgba(4, 18, 32, 0.58)
        ),
        url('/images/calendar-background.jpg')
        center center / cover no-repeat;
}

/* =========================================================
   BACKGROUND FOTO
========================================================= */

.calendar-background {
    position: absolute;

    top: 0;
    bottom: 0;

    left: 50%;

    width: 100vw;

    transform: translateX(-50%);

    background:
        linear-gradient(
            rgba(4, 18, 32, 0.46),
            rgba(4, 18, 32, 0.58)
        ),
        url('/images/calendar-background.jpg')
        center center / cover no-repeat;

    z-index: 0;
}


/* cahaya ambient */

.calendar-background::after {
    content: "";

    position: absolute;

    inset: 0;

    background:
        radial-gradient(
            circle at 15% 50%,
            rgba(0, 217, 255, 0.16),
            transparent 25%
        ),
        radial-gradient(
            circle at 85% 50%,
            rgba(212, 175, 55, 0.13),
            transparent 25%
        );

    pointer-events: none;
}

/* =========================================================
   PREMIUM CALENDAR - ISI
========================================================= */

/* Area kiri - kalender - kanan */
.calendar-stage {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1380px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        minmax(190px, 1fr)
        minmax(560px, 760px)
        minmax(190px, 1fr);

    column-gap: 60px;

    align-items: start;
}


/* =========================================================
   TEKS SAMPING
========================================================= */

.calendar-decor {
    padding-top: 145px;

    color: #ffffff;
}

.calendar-decor-left {
    text-align: right;
}

.calendar-decor-right {
    text-align: left;
}

.calendar-decor-small {
    margin-bottom: 10px;

    font-family: 'Montserrat', sans-serif;
    font-size: 9px;
    font-weight: 700;

    letter-spacing: 2.5px;
    text-transform: uppercase;

    color: rgba(255,255,255,.62);
}

.calendar-decor-title {
    margin: 0;

    font-family: 'Playfair Display', serif;

    font-size: clamp(48px, 4.4vw, 70px);

    line-height: .95;
    font-weight: 500;

    letter-spacing: -1px;

    color: #ffffff;

    text-shadow:
        0 0 10px rgba(255,255,255,.32),
        0 0 26px rgba(0,217,255,.18);
}

.calendar-decor-line {
    display: none !important;
}

.calendar-decor-description {
    margin-top: 16px;

    font-family: 'Montserrat', sans-serif;

    font-size: 15px;

    line-height: 1.55;

    font-weight: 600;

    letter-spacing: .15px;

    color: rgba(255,255,255,.84);

    text-shadow:
        0 0 8px rgba(255,255,255,.12);
}


/* =========================================================
   KOTAK KALENDER
========================================================= */

.calendar-box {
    position: relative;

    width: 100%;

    padding: 26px;

    border-radius: 28px;

    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.16),
            rgba(255,255,255,.06)
        );

    border: 1px solid rgba(255,255,255,.20);

    box-shadow:
        0 24px 70px rgba(0,0,0,.28),
        0 0 45px rgba(0,217,255,.08),
        inset 0 1px 0 rgba(255,255,255,.14);

    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);

    box-sizing: border-box;
}


/* Garis cahaya tipis di atas box */
.calendar-box::before {
    content: "";

    position: absolute;

    top: 0;
    left: 7%;

    width: 86%;
    height: 1px;

    background:
        linear-gradient(
            to right,
            transparent,
            rgba(255,255,255,.45),
            transparent
        );
}


/* =========================================================
   PILIH KAPAL
========================================================= */

.calendar-top {
    display: flex;
    align-items: center;

    margin-bottom: 24px;
}

.calendar-filter {
    width: 100%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;
}

.calendar-filter label {
    font-family: 'Montserrat', sans-serif;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.5px;
    text-transform: uppercase;

    color: rgba(255,255,255,.78);

    white-space: nowrap;
}

.calendar-filter select {
    width: 240px;
    height: 44px;

    padding: 0 15px;

    border: 1px solid rgba(255,255,255,.24);

    border-radius: 14px;

    outline: none;

    background: rgba(255,255,255,.12);

    color: #ffffff;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;
    font-weight: 500;

    box-shadow:
        0 8px 22px rgba(0,0,0,.12);

    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);

    cursor: pointer;

    transition:
        border-color .25s ease,
        background .25s ease,
        box-shadow .25s ease;
}

.calendar-filter select:hover,
.calendar-filter select:focus {
    background: rgba(255,255,255,.16);

    border-color: rgba(0,217,255,.65);

    box-shadow:
        0 0 0 3px rgba(0,217,255,.08);
}

.calendar-filter select option {
    background: #075985;
    color: #ffffff;
}


/* =========================================================
   HEADER BULAN
========================================================= */

.calendar-header {
    display: flex;

    align-items: center;
    justify-content: space-between;

    margin-bottom: 18px;
    padding-bottom: 16px;

    border-bottom:
        1px solid rgba(255,255,255,.10);
}

.calendar-header h3 {
    margin: 0;

    font-family: 'Playfair Display', serif;

    font-size: 24px;
    font-weight: 500;

    color: #ffffff;

    text-shadow:
        0 0 8px rgba(255,255,255,.30),
        0 0 18px rgba(0,217,255,.14);
}

.calendar-nav {
    display: flex;
    gap: 8px;
}

.calendar-nav button {
    width: 42px;
    height: 42px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    border: 1px solid rgba(255,255,255,.22);

    background: rgba(255,255,255,.10);

    color: #ffffff;

    font-size: 20px;

    cursor: pointer;

    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

    transition:
        background .25s ease,
        border-color .25s ease,
        transform .25s ease;
}

.calendar-nav button:hover {
    background: rgba(0,217,255,.16);

    border-color: rgba(0,217,255,.58);

    transform: translateY(-2px);
}


/* =========================================================
   NAMA HARI
   GRID 7 KOLOM TETAP
========================================================= */

.calendar-weekdays {
    width: 100%;

    display: grid !important;

    grid-template-columns:
        repeat(7, minmax(0, 1fr)) !important;

    gap: 8px;

    margin: 0 0 8px !important;

    padding: 0;

    box-sizing: border-box;
}

.calendar-weekdays div {
    min-width: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 9px 0;

    text-align: center;

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.4px;
    text-transform: uppercase;

    color: rgba(255,255,255,.58);

    box-sizing: border-box;
}


/* =========================================================
   TANGGAL
   GRID 7 KOLOM TETAP
========================================================= */

.calendar-days {
    width: 100%;

    display: grid !important;

    grid-template-columns:
        repeat(7, minmax(0, 1fr)) !important;

    grid-template-rows:
        repeat(6, minmax(60px, 1fr)) !important;

    gap: 8px;

    margin: 0 !important;
    padding: 0;

    position: relative;

    z-index: 1;

    box-sizing: border-box;
}

.calendar-day {
    min-width: 0;
    min-height: 60px;

    display: flex;

    flex-direction: column;

    align-items: center;
    justify-content: center;

    text-align: center;

    position: relative;

    border-radius: 15px;

    border: 1px solid rgba(255,255,255,.10);

    background:
        rgba(255,255,255,.055);

    color: rgba(255,255,255,.92);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.05);

    transition:
        transform .25s ease,
        background .25s ease,
        border-color .25s ease,
        box-shadow .25s ease;

    box-sizing: border-box;

    overflow: hidden;
}


/* Hover tanggal */
.calendar-day:hover {
    transform: translateY(-2px);

    background:
        rgba(0,217,255,.11);

    border-color:
        rgba(0,217,255,.38);

    box-shadow:
        0 10px 24px rgba(0,0,0,.16),
        0 0 18px rgba(0,217,255,.08);
}


/* Nomor tanggal */
.calendar-day-number {
    font-family: 'Montserrat', sans-serif;

    font-size: 15px;
    font-weight: 600;

    color: #ffffff;
}


/* =========================================================
   HARI INI
========================================================= */

.calendar-day.today {
    border: 2px solid #00d9ff;

    background:
        linear-gradient(
            145deg,
            rgba(0,217,255,.35),
            rgba(0,168,232,.18)
        );

    box-shadow:
        0 0 0 3px rgba(0,217,255,.12),
        0 10px 28px rgba(0,217,255,.25);
}

.calendar-day.today .calendar-day-number {
    color: #00e5ff;

    font-weight: 800;

    text-shadow:
        0 0 8px rgba(0,217,255,.45);
}


/* =========================================================
   TANGGAL DIBOOKING
========================================================= */

.calendar-day.booked {
    background:
        linear-gradient(
            145deg,
            rgba(255,255,255,.09),
            rgba(14,89,130,.18)
        );

    border-color:
        rgba(255,255,255,.18);
}

.calendar-day.booked::after {
    content: "";

    position: absolute;

    bottom: 7px;

    width: 5px;
    height: 5px;

    border-radius: 50%;

    background: #00d9ff;

    box-shadow:
        0 0 8px rgba(0,217,255,.75);
}


/* =========================================================
   LEGEND
========================================================= */

.calendar-legend {
    display: flex;

    align-items: center;
    justify-content: center;

    gap: 24px;

    margin-top: 20px;
    padding-top: 18px;

    border-top:
        1px solid rgba(255,255,255,.10);
}

.legend-item {
    display: flex;
    align-items: center;

    gap: 8px;

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;

    color: rgba(255,255,255,.70);
}

.legend-box {
    width: 11px;
    height: 11px;

    border-radius: 4px;

    border: 1px solid rgba(255,255,255,.25);
}

.legend-available {
    background:
        rgba(255,255,255,.08);
}

.legend-booked {
    background:
        rgba(0,217,255,.22);

    border-color:
        rgba(0,217,255,.55);
}


/* =========================================================
   JUDUL SECTION
========================================================= */

.calendar-section-title {
    position: relative;

    z-index: 5;

    max-width: 900px;

    margin: 0 auto 55px;

    text-align: center;
}

.calendar-section .section-title .section-label {
    color: #ffffff !important;

    font-family: 'Montserrat', sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 3px;

    text-transform: uppercase;

    text-shadow:
        0 0 6px rgba(255,255,255,.45),
        0 0 14px rgba(0,217,255,.35);
}

.calendar-section .section-title h2 {
    margin: 10px 0 14px;

    color: #ffffff !important;

    font-family: 'Playfair Display', serif;

    font-size: clamp(42px, 4.3vw, 62px);

    line-height: 1.05;

    font-weight: 500;

    text-shadow:
        0 0 8px rgba(255,255,255,.55),
        0 0 20px rgba(0,217,255,.30);
}

.calendar-section-title p {
    color: rgba(255, 255, 255, 0.92) !important;

    text-shadow:
        0 0 7px rgba(255, 255, 255, 0.30);
}


/* =========================================================
   STAGE
========================================================= */

.calendar-stage {
    position: relative;

    z-index: 5;

    width: 100%;

    max-width: 1500px;

    min-height: 520px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        minmax(280px, 1fr)
        minmax(600px, 820px)
        minmax(280px, 1fr);

    align-items: start;

    gap: 45px;
}


/* =========================================================
   TEXT KIRI / KANAN
========================================================= */

.calendar-decor {
    position: relative;

    z-index: 6;

    width: 100%;

    padding-top: 145px;

    font-family: 'Montserrat', sans-serif;
}

.calendar-decor-left {
    text-align: right;
    padding-right: 10px;
}

.calendar-decor-right {
    text-align: left;
    padding-left: 10px;
}


/* label kecil */

.calendar-decor-small {
    margin-bottom: 14px;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 3px;

    color:
        rgba(255, 255, 255, 0.62);
}


/* JUDUL BESAR */

.calendar-decor-title {
    margin: 0;

    font-family: 'Playfair Display', serif;

    font-size: clamp(42px, 3.5vw, 58px);

    line-height: .96;
    font-weight: 500;

    letter-spacing: -0.8px;

    color: #ffffff;

    text-shadow:
        0 0 10px rgba(255,255,255,.32),
        0 0 24px rgba(0,217,255,.18);
}

/* garis aksen */

.calendar-decor-line {
    width: 58px;

    height: 1px;

    margin-top: 22px;

    background:
        linear-gradient(
            90deg,
            #00d9ff,
            rgba(212, 175, 55, 0.80)
        );
}

.calendar-decor-left .calendar-decor-line {
    margin-left: auto;
}


/* deskripsi */

.calendar-decor-description {
    margin-top: 18px;

    font-family: 'Montserrat', sans-serif;

    font-size: 17px;

    line-height: 1.6;

    font-weight: 600;

    letter-spacing: 0.2px;

    color: rgba(255, 255, 255, 0.85);

    text-shadow:
        0 0 8px rgba(255, 255, 255, 0.12);
}

/* =========================================================
   CALENDAR BOX
========================================================= */

.calendar-box {
    position: relative;

    z-index: 10;

    width: 100%;

    max-width: 820px;

    margin: 0 auto;

    padding: 30px;

    border-radius: 28px;

    background:
        rgba(255, 255, 255, 0.12);

    border:
        1px solid
        rgba(255, 255, 255, 0.28);

    box-shadow:
        0 30px 80px rgba(0, 10, 25, 0.30),

        inset 0 1px 0
        rgba(255, 255, 255, 0.18);

    backdrop-filter: blur(22px);

    -webkit-backdrop-filter: blur(22px);
}


/* =========================================================
   FILTER KAPAL
========================================================= */

.calendar-top {
    display: flex;

    width: 100%;

    margin-bottom: 26px;
}

.calendar-filter {
    width: 100%;
}

.calendar-filter label {
    display: block;

    margin-bottom: 9px;

    color:
        rgba(255, 255, 255, 0.80);

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1px;

    text-transform: uppercase;
}

.calendar-filter select {
    width: 100%;

    padding: 13px 15px;

    border:
        1px solid
        rgba(255, 255, 255, 0.30);

    border-radius: 13px;

    background:
        rgba(255, 255, 255, 0.14);

    color: #ffffff;

    outline: none;

    font-family: 'Montserrat', sans-serif;

    font-size: 12px;

    font-weight: 500;

    letter-spacing: 0.2px;

    cursor: pointer;

    backdrop-filter: blur(10px);

    -webkit-backdrop-filter: blur(10px);

    transition:
        border-color 0.25s ease,
        background 0.25s ease,
        box-shadow 0.25s ease;
}

.calendar-filter select:hover {
    border-color:
        rgba(255, 255, 255, 0.55);

    background:
        rgba(255, 255, 255, 0.20);
}

.calendar-filter select:focus {
    border-color:
        rgba(255, 255, 255, 0.75);

    box-shadow:
        0 0 0 4px
        rgba(255, 255, 255, 0.08);
}

.calendar-filter select option {
    background: #075985;

    color: #ffffff;
}


/* =========================================================
   HEADER KALENDER
========================================================= */

.calendar-header {
    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 18px;
}

.calendar-header h3 {
    margin: 0;

    color: #ffffff;

    font-family: 'Montserrat', sans-serif;

    font-size: 24px;

    font-weight: 700;
}


/* =========================================================
   NAVIGASI BULAN
========================================================= */

.calendar-nav {
    display: flex;

    gap: 8px;
}

.calendar-nav button {
    width: 38px;
    height: 38px;

    display: flex;

    align-items: center;
    justify-content: center;

    border:
        1px solid
        rgba(255, 255, 255, 0.30);

    border-radius: 11px;

    background:
        rgba(255, 255, 255, 0.12);

    color: #ffffff;

    cursor: pointer;

    backdrop-filter: blur(10px);

    -webkit-backdrop-filter: blur(10px);

    transition:
        background 0.25s ease,
        transform 0.25s ease;
}

.calendar-nav button:hover {
    background:
        rgba(255, 255, 255, 0.24);

    transform: translateY(-2px);
}


/* =========================================================
   WEEKDAYS
========================================================= */

/* =========================================================
   FIX BAR TANGGAL KALENDER
========================================================= */

.calendar-header {
    margin-bottom: 12px !important;
}

.calendar-weekdays {
    width: 100%;

    display: grid !important;
    grid-template-columns: repeat(7, minmax(0, 1fr)) !important;

    gap: 8px;

    margin: 0 0 8px !important;
    padding: 0;

    box-sizing: border-box;
}

.calendar-weekdays div {
    min-width: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;

    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;

    color: rgba(255,255,255,.78);

    box-sizing: border-box;
}
.calendar-days {
    width: 100%;

    display: grid !important;

    grid-template-columns:
        repeat(7, minmax(0, 1fr)) !important;

    grid-template-rows:
        repeat(6, minmax(60px, 1fr)) !important;

    gap: 8px;

    margin-top: 0 !important;
    margin-bottom: 0 !important;

    padding: 0;

    position: relative;
    z-index: 1;

    box-sizing: border-box;
}
.calendar-day {
    min-width: 0;
    min-height: 60px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    text-align: center;

    box-sizing: border-box;
}


/* =========================================================
   HARI / TANGGAL
========================================================= */

.calendar-day {
    min-width: 0;
    min-height: 60px;

    box-sizing: border-box;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    text-align: center;
}

.calendar-day:hover {
    transform: translateY(-2px);

    border-color:
        rgba(255, 255, 255, 0.45);

    background:
        rgba(255, 255, 255, 0.18);

    box-shadow:
        0 10px 25px rgba(0, 30, 50, 0.16);
}

.calendar-day.empty {
    background: transparent;

    border-color: transparent;

    box-shadow: none;

    pointer-events: none;
}


/* =========================================================
   HARI INI
========================================================= */

.calendar-day.today {
    border:
        2px solid
        #00d9ff;

    background:
        linear-gradient(
            145deg,
            rgba(0, 217, 255, 0.35),
            rgba(0, 168, 232, 0.18)
        );

    box-shadow:
        0 0 0 3px
        rgba(0, 217, 255, 0.12),

        0 10px 28px
        rgba(0, 217, 255, 0.25);

    color: #ffffff;
}

.calendar-day.today .calendar-day-number {
    color: #00e5ff;

    font-weight: 800;
}


/* =========================================================
   BOOKED
========================================================= */

.calendar-day.booked {
    background:
        linear-gradient(
            145deg,
            rgba(239, 68, 68, 0.42),
            rgba(185, 28, 28, 0.26)
        );

    border-color:
        rgba(254, 202, 202, 0.45);

    color: #ffffff;
}

.calendar-day.booked .calendar-day-number {
    color: #ffffff;
}


/* =========================================================
   NOMOR TANGGAL
========================================================= */

.calendar-day-number {
    display: block;

    margin-bottom: 6px;

    color: #ffffff;

    font-size: 13px;

    font-weight: 700;
}


/* =========================================================
   STATUS
========================================================= */

.calendar-status {
    font-size: 8px;

    font-weight: 700;

    letter-spacing: 0.5px;

    text-transform: uppercase;

    color:
        rgba(255, 255, 255, 0.84);
}


/* =========================================================
   LEGEND
========================================================= */

.calendar-legend {
    display: flex;

    justify-content: center;

    align-items: center;

    flex-wrap: wrap;

    gap: 24px;

    margin-top: 24px;
}

.legend-item {
    display: flex;

    align-items: center;

    gap: 7px;

    color:
        rgba(255, 255, 255, 0.80);

    font-size: 10px;
}

.legend-box {
    width: 12px;
    height: 12px;

    border-radius: 4px;
}

.legend-available {
    background:
        rgba(255, 255, 255, 0.16);

    border:
        1px solid
        rgba(255, 255, 255, 0.42);
}

.legend-booked {
    background:
        rgba(239, 68, 68, 0.42);

    border:
        1px solid
        rgba(254, 202, 202, 0.60);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1200px) {

    .calendar-stage {
        grid-template-columns:
            220px
            minmax(0, 760px)
            220px;

        gap: 25px;
    }

    .calendar-decor-title {
        font-size: 54px;
        letter-spacing: -2px;
    }
}


@media (max-width: 1000px) {

    .calendar-stage {
        display: block;

        max-width: 820px;

        min-height: auto;
    }

    .calendar-decor {
        display: none;
    }

    .calendar-box {
        max-width: 820px;
    }
}


@media (max-width: 700px) {

    .calendar-section {
        padding: 65px 18px 80px;
    }

    .calendar-section-title {
        margin-bottom: 35px;
    }

    .calendar-box {
        padding: 22px 16px;

        border-radius: 22px;
    }

    .calendar-day {
        min-height: 58px;

        padding: 8px;
    }

    .calendar-header h3 {
        font-size: 18px;
    }

    .calendar-weekdays,
    .calendar-days {
        gap: 5px;
    }
}
.calendar-decor-line {
    display: none !important;
}

/* =========================================
   WHY Nyanyian Hujan - PREMIUM
========================================= */

.features {
    width: 100%;
    max-width: 1180px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 24px;

    box-sizing: border-box;
}


/* =========================================
   FEATURE CARD
========================================= */

.feature {
    position: relative;

    min-height: 300px;

    padding: 34px 30px;

    overflow: hidden;

    border-radius: 24px;

    background:
        linear-gradient(
            145deg,
            rgba(8, 35, 55, 0.96),
            rgba(5, 24, 40, 0.94)
        );

    border: 1px solid rgba(120, 220, 245, 0.16);

    box-shadow:
        0 18px 50px rgba(0,0,0,.28),
        inset 0 1px 0 rgba(255,255,255,.07);

    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);

    box-sizing: border-box;

    transition:
        transform .45s cubic-bezier(.22,1,.36,1),
        border-color .35s ease,
        box-shadow .45s ease,
        background .35s ease;
}


/* garis cahaya atas */
.feature::before {
    content: "";

    position: absolute;

    top: 0;
    left: 12%;

    width: 76%;
    height: 1px;

    background:
        linear-gradient(
            to right,
            transparent,
            rgba(255,255,255,.45),
            transparent
        );
}


/* cahaya dekorasi */
.feature::after {
    content: "";

    position: absolute;

    top: -80px;
    right: -80px;

    width: 190px;
    height: 190px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,174,239,.10),
            transparent 70%
        );

    pointer-events: none;

    transform: none;
}


/* hover card */
.feature {
    transition:
        transform .45s cubic-bezier(.22,1,.36,1),
        box-shadow .45s ease,
        border-color .35s ease;
}

.feature:hover {
    transform: scale(1.018);

    background:
        linear-gradient(
            145deg,
            rgba(8, 35, 55, 0.96),
            rgba(5, 24, 40, 0.94)
        );

    border-color:
        rgba(120, 220, 245, 0.22);

    box-shadow:
        0 22px 55px rgba(0,0,0,.24),
        0 0 24px rgba(0,217,255,.06),
        inset 0 1px 0 rgba(255,255,255,.07);
}

.feature-icon {
    position: relative;
    z-index: 2;

    width: 62px;
    height: 62px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin-bottom: 26px;

    border-radius: 18px;

    background:
        linear-gradient(
            145deg,
            rgba(0,217,255,.14),
            rgba(255,255,255,.045)
        );

    border: 1px solid rgba(0,217,255,.24);

    box-shadow:
        0 10px 30px rgba(0,0,0,.14),
        inset 0 1px 0 rgba(255,255,255,.10);

    box-sizing: border-box;
}
.feature-icon-symbol {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 38px;
    height: 38px;

    border-radius: 11px;

    background:
        rgba(255,255,255,.08);

    border: 1px solid rgba(255,255,255,.10);

    font-size: 22px;

    line-height: 1;

    box-shadow:
        0 5px 16px rgba(0,0,0,.12);
}

/* =========================================
   FEATURE TITLE
========================================= */

.feature h3 {
    position: relative;
    z-index: 2;

    margin: 0 0 12px;

    font-family: 'Playfair Display', serif;

    font-size: 25px;

    line-height: 1.15;

    font-weight: 500;

    letter-spacing: -.2px;

    color: #ffffff;

    text-shadow:
        0 0 10px rgba(255,255,255,.10);
}


/* =========================================
   FEATURE DESCRIPTION
========================================= */

.feature p {
    position: relative;
    z-index: 2;

    max-width: 300px;

    margin: 0;

    font-family: 'Montserrat', sans-serif;

    font-size: 13px;

    line-height: 1.75;

    color: rgba(225,240,247,.78);
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 850px) {

    .features {
        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 18px;
    }
}


@media (max-width: 700px) {

    .features {
        grid-template-columns: 1fr;

        gap: 16px;
    }

    .feature {
        min-height: 250px;

        padding: 28px 24px;
    }

    .feature h3 {
        font-size: 22px;
    }

    .feature p {
        max-width: 100%;

        font-size: 12px;

        line-height: 1.7;
    }
}

/* =========================================================
   WHY Nyanyian Hujan TITLE
   STYLE SAMA DENGAN "CEK JADWAL KAPAL"
========================================================= */

.why-Nyanyian Hujan-title {
    margin-bottom: 54px;
    text-align: center;
}


/* LABEL */
.why-Nyanyian Hujan-title .section-label {
    color: #087da8 !important;

    font-family: 'Montserrat', sans-serif;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 3px;

    text-transform: uppercase;

    text-shadow: none;
}


/* JUDUL */
.why-Nyanyian Hujan-title h2 {
    margin: 10px 0 14px;

    color: #082f49 !important;

    font-family: 'Playfair Display', serif;

    font-size: clamp(42px, 4.3vw, 62px);

    line-height: 1.05;

    font-weight: 500;

    letter-spacing: -1px;

    text-shadow: none;
}


/* DESKRIPSI */
.why-Nyanyian Hujan-title p {
    margin: 0 auto;

    max-width: 700px;

    color: #607d8b !important;

    font-family: 'Montserrat', sans-serif;

    font-size: 15px;

    line-height: 1.7;

    text-shadow: none;
}

/* =========================================
   CTA — START YOUR JOURNEY
========================================= */

.cta {
    position: relative;

    overflow: hidden;

    padding: 105px 20px;

    text-align: center;

    background:
        radial-gradient(
            circle at 20% 20%,
            rgba(0,198,255,.20),
            transparent 30%
        ),
        radial-gradient(
            circle at 80% 80%,
            rgba(0,119,182,.30),
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #061b2b,
            #073b56,
            #05283e
        );
}


/* decorative glow */

.cta::before {
    content: "";

    position: absolute;

    width: 450px;
    height: 450px;

    top: -280px;
    left: 50%;

    transform: translateX(-50%);

    border-radius: 50%;

    background:
        rgba(0,198,255,.14);

    filter: blur(80px);

    pointer-events: none;
}


/* CTA TITLE */

.cta h2 {
    position: relative;

    margin-bottom: 14px;

    color: white;

    font-family: 'Montserrat', sans-serif;

    font-size: 38px;
    font-weight: 800;

    letter-spacing: -1px;
}


/* CTA TEXT */

.cta p {
    position: relative;

    margin-bottom: 30px;

    color: #a9cfdf;

    font-family: 'Montserrat', sans-serif;

    font-size: 14px;

    line-height: 1.8;
}


/* CTA BUTTON */

.cta .btn-primary {
    position: relative;

    display: inline-flex;

    min-width: 190px;
}


/* =========================================
   FOOTER
========================================= */

footer {
    padding: 30px 20px;

    text-align: center;

    background:
        linear-gradient(
            180deg,
            #041a2a,
            #020f19
        );

    color: #78909f;

    border-top:
        1px solid rgba(255,255,255,.06);

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;

    letter-spacing: .3px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 850px) {

    .features {
        grid-template-columns:
            repeat(2, 1fr);
    }
}


@media (max-width: 700px) {

    .section {
        padding: 70px 20px;
    }

    .section-title h2 {
        font-size: 31px;
    }

    .advertisement-section {
        padding: 60px 5%;
    }

    .advertisement-slider {
        height: 210px;
        border-radius: 20px;
    }

    .advertisement-overlay {
        padding: 25px 25px 20px;
    }

    .advertisement-overlay h2,
    .advertisement-overlay h3 {
        font-size: 17px;
    }

    .advertisement-overlay p {
        max-width: 90%;
        font-size: 11px;
    }

    .calendar-box {
        padding: 22px 18px;
        border-radius: 21px;
    }

    .calendar-top {
        flex-direction: column;
        align-items: stretch;
    }

    .calendar-weekdays,
    .calendar-days {
        gap: 5px;
    }

    .calendar-day {
        min-height: 55px;
        padding: 7px;
        border-radius: 9px;
    }

    .calendar-day-number {
        font-size: 11px;
    }

    .calendar-status {
        font-size: 7px;
    }

    .features {
        grid-template-columns: 1fr;
        gap: 16px;
        padding: 15px;
    }

    .feature {
        min-height: auto;
        padding: 25px;
    }

    .cta {
        padding: 80px 20px;
    }

    .cta h2 {
        font-size: 30px;
    }
}


@media (max-width: 480px) {

    .section-title h2 {
        font-size: 27px;
    }

    .advertisement-slider {
        height: 190px;
    }

    .advertisement-overlay {
        padding: 20px;
    }

    .advertisement-overlay h2,
    .advertisement-overlay h3 {
        font-size: 15px;
    }

    .advertisement-overlay p {
        display: none;
    }

    .advertisement-prev,
    .advertisement-next {
        width: 32px;
        height: 32px;
        font-size: 19px;
    }

    .advertisement-prev {
        left: 10px;
    }

    .advertisement-next {
        right: 10px;
    }

    .calendar-box {
        padding: 18px 12px;
    }

    .calendar-weekdays,
    .calendar-days {
        gap: 4px;
    }

    .calendar-day {
        min-height: 48px;
        padding: 6px;
    }

    .calendar-status {
        font-size: 6px;
    }

    .calendar-day-number {
        font-size: 10px;
    }

    .calendar-nav button {
    width: 42px;
    height: 42px;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 20px;

    border:
        1px solid
        rgba(255, 255, 255, 0.30);

    border-radius: 12px;

    background:
        rgba(255, 255, 255, 0.12);

    color: #ffffff;

    cursor: pointer;

    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

    .cta h2 {
        font-size: 27px;
    }
}
/* IKLAN 1 FULL FOTO */
.advertisement-slider-one .advertisement-slide,
.advertisement-slider-one .advertisement-content,
.advertisement-slider-one .advertisement-image-link,
.advertisement-slider-one .advertisement-image {
    width: 100% !important;
    height: 100% !important;
}

.advertisement-slider-one .advertisement-content {
    position: relative;
    background: transparent !important;
}

.advertisement-slider-one .advertisement-image-link {
    position: absolute !important;
    inset: 0 !important;
}

.advertisement-slider-one .advertisement-image {
    display: block;
    object-fit: cover !important;
}

.advertisement-slider-one .advertisement-info {
    position: absolute !important;
    left: 0;
    right: 0;
    bottom: 0;

    background: linear-gradient(
        to top,
        rgba(0, 25, 45, 0.85),
        rgba(0, 25, 45, 0.25),
        transparent
    ) !important;

    padding: 70px 30px 24px;
    color: #ffffff;
}
.advertisement-section {
    position: relative;
    overflow: hidden;
}


.advertisement-wrapper {
    position: relative;
    z-index: 2;
}
/* =========================================================
   NAUTICAL COMPASS LAYOUT
========================================================= */

.advertisement-wrapper {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1450px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        170px
        minmax(0, 920px)
        170px;

    align-items: center;

    gap: 28px;
}


/* =========================================================
   DUA KARTU
========================================================= */

.advertisement-cards {
    grid-column: 2 / 4;

    width: 100%;
    max-width: 860px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    column-gap: 22px;

    align-items: stretch;
}
/* =========================================================
   ORNAMEN NAUTICAL
========================================================= */

.advertisement-nautical {
    width: 160px;
    height: 340px;

    display: flex;

    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 16px;

    align-self: center;

    color: rgba(255, 255, 255, 0.75);

    font-family: 'Montserrat', sans-serif;
}

/* =========================================
   KOMPAS KIRI
========================================= */

.advertisement-nautical-left {
    grid-column: 1;
    grid-row: 1;

    width: 130px;
    height: 260px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 14px;

    text-align: center;

    justify-self: center;

    z-index: 10;
}

/* =========================================
   KOMPAS KANAN
========================================= */

.advertisement-nautical-right {
    grid-column: 4;
    grid-row: 1;

    width: 130px;
    height: 260px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 14px;

    text-align: center;

    justify-self: center;

    transform: none;

    z-index: 10;
}
/* =========================================================
   KOMPAS
========================================================= */

.nautical-compass {
    position: relative;

    width: 120px;
    height: 120px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    border-radius: 50%;

    border: 1px solid rgba(212,175,55,.58);

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,.08),
            rgba(255,255,255,.02) 60%,
            transparent 75%
        );

    box-shadow:
        0 0 0 8px rgba(212,175,55,.035),
        0 0 35px rgba(0,217,255,.09);

    box-sizing: border-box;
}


/* lingkaran dalam */

.nautical-compass::before {
    content: "";

    position: absolute;
    inset: 12px;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.20);
}


/* lingkaran luar */

.nautical-compass::after {
    content: "";

    position: absolute;
    inset: -8px;

    border-radius: 50%;

    border: 1px solid rgba(255,255,255,.08);
}


/* =========================================================
   ARAH KOMPAS
========================================================= */

.compass-n,
.compass-e,
.compass-s,
.compass-w {
    position: absolute;

    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1px;

    color: rgba(255,255,255,.8);
}

.compass-n {
    top: 6px;
    left: 50%;
    transform: translateX(-50%);
}

.compass-e {
    top: 50%;
    right: 7px;
    transform: translateY(-50%);
}

.compass-s {
    bottom: 6px;
    left: 50%;
    transform: translateX(-50%);
}

.compass-w {
    top: 50%;
    left: 7px;
    transform: translateY(-50%);
}

/* GARIS */
.compass-cross.horizontal {
    position: absolute;

    width: 84px;
    height: 1px;

    background: rgba(255,255,255,.22);
}

.compass-cross.vertical {
    position: absolute;

    width: 1px;
    height: 84px;

    background: rgba(255,255,255,.22);
}

/* BINTANG */
.compass-star {
    position: relative;
    z-index: 2;

    font-size: 36px;

    color: #d4af37;

    text-shadow:
        0 0 8px rgba(212,175,55,.45),
        0 0 20px rgba(212,175,55,.18);
}

/* =========================================================
   GARIS KOMPAS
========================================================= */

.compass-cross {
    position: absolute;

    left: 50%;
    top: 50%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.35),
            transparent
        );
}

.compass-cross.horizontal {
    width: 88px;
    height: 1px;

    transform: translate(-50%, -50%);
}

.compass-cross.vertical {
    width: 1px;
    height: 88px;

    transform: translate(-50%, -50%);

    background:
        linear-gradient(
            180deg,
            transparent,
            rgba(255, 255, 255, 0.35),
            transparent
        );
}


/* =========================================================
   BINTANG KOMPAS
========================================================= */

.compass-star {
    position: relative;

    z-index: 5;

    font-size: 38px;

    line-height: 1;

    color:
        #d4af37;

    text-shadow:
        0 0 8px rgba(212, 175, 55, 0.35),
        0 0 18px rgba(212, 175, 55, 0.14);
}


/* =========================================================
   CAPTION
========================================================= */

.nautical-caption {
    margin-top: 14px;

    font-family: 'Montserrat', sans-serif;

    font-size: 9px;
    font-weight: 600;

    letter-spacing: 2px;

    color: rgba(255,255,255,.65);

    white-space: nowrap;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1150px) {

    /* =========================================
   FIX POSISI KOMPAS IKLAN Nyanyian Hujan
   ========================================= */

.advertisement-section {
    position: relative;
}

.advertisement-wrapper {
    position: relative !important;
    width: 100% !important;
    max-width: 1450px !important;
    margin: 0 auto !important;
    min-height: 340px !important;
    display: block !important;
    padding: 0 !important;
}

/* Dua iklan tetap di tengah */
.advertisement-cards {
    width: 920px !important;
    max-width: calc(100% - 320px) !important;
    margin: 0 auto !important;

    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 24px !important;
}

/* Ukuran kedua iklan */
.advertisement-slider {
    position: relative;

    width: 100%;
    height: 260px;
    min-height: 260px;

    overflow: hidden;

    border-radius: 20px;

    box-sizing: border-box;

    transition:
        transform 0.45s cubic-bezier(.22, 1, .36, 1),
        box-shadow 0.45s ease;

    will-change: transform;
}

/* =========================================
   TABLET
========================================= */

@media (max-width: 1100px) {

    .advertisement-wrapper {
        grid-template-columns: 110px 1fr 1fr 110px;
        gap: 15px;
    }

    .advertisement-nautical-left,
    .advertisement-nautical-right {
        width: 110px;
    }

    .advertisement-cards {
        gap: 18px;
    }
}


/* =========================================
   HP
========================================= */

@media (max-width: 800px) {

    .advertisement-wrapper {
        display: block;
    }

    .advertisement-cards {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr;
    }

    .advertisement-nautical {
        display: none;
    }

    .advertisement-slider {
        height: 340px;
    }
}
/* =========================================
   KOMPAS
   ========================================= */

.advertisement-nautical {
    position: absolute !important;

    top: 170px !important;
    transform: translateY(-50%) !important;

    width: 140px !important;
    height: 180px !important;

    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;

    gap: 14px !important;

    z-index: 20 !important;
}

/* Kompas kiri */
.advertisement-nautical-left {
    left: 0 !important;
}

/* Kompas kanan */
.advertisement-nautical-right {
    right: 0 !important;
}

/* Bentuk lingkaran kompas */
.nautical-compass {
    width: 120px !important;
    height: 120px !important;

    position: relative !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    border-radius: 50% !important;

    border: 1px solid rgba(212,175,55,.58) !important;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,.08),
            rgba(255,255,255,.02) 60%,
            transparent 75%
        ) !important;
}

/* Caption */
.nautical-caption {
    margin: 0 !important;
    text-align: center !important;
    white-space: nowrap !important;

    font-size: 9px !important;
    letter-spacing: 2px !important;
}

/* =========================================
   MOBILE
   ========================================= */

@media (max-width: 1000px) {

    .advertisement-wrapper {
        min-height: auto !important;
    }

    .advertisement-cards {
        width: 100% !important;
        max-width: none !important;
    }

    .advertisement-nautical {
        display: none !important;
    }
}
/* =========================================================
   NYANYIAN HUJAN — CORPORATE PREMIUM FOOTER
========================================================= */

.nyanyian-footer {
    position: relative;
    width: 100%;
    background:
        linear-gradient(
            180deg,
            #071d2d 0%,
            #041421 55%,
            #020b12 100%
        );
    color: rgba(255,255,255,.68);
    font-family: 'Montserrat', sans-serif;
    border-top: 1px solid rgba(255,255,255,.08);
    overflow: hidden;
}


/* =========================================================
   CAHAYA DEKORASI
========================================================= */

.nyanyian-footer::before {
    content: "";
    position: absolute;

    width: 520px;
    height: 520px;

    top: -400px;
    left: 50%;

    transform: translateX(-50%);

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(0,217,255,.10),
            transparent 68%
        );

    pointer-events: none;
}


/* =========================================================
   BAGIAN UTAMA
========================================================= */

.nyanyian-footer-main {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1250px;

    margin: 0 auto;

    padding: 70px 35px 55px;

    display: grid;

    grid-template-columns:
        1.4fr
        1.1fr
        1.1fr
        .8fr;

    gap: 60px;

    box-sizing: border-box;
}


/* =========================================================
   BRAND
========================================================= */

.nyanyian-footer-brand {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}


.nyanyian-footer-logo {
    margin-bottom: 18px;

    font-family: 'Cormorant Garamond', serif;

    font-size: 28px;

    font-weight: 600;

    letter-spacing: 3px;

    line-height: 1;

    color: #ffffff;
}


.nyanyian-footer-logo span {
    color: #36dcfa;
}


.nyanyian-footer-tagline {
    max-width: 290px;

    margin: 0;

    font-size: 12px;

    line-height: 1.9;

    color: rgba(255,255,255,.50);
}


/* =========================================================
   KOLOM
========================================================= */

.nyanyian-footer-column {
    display: flex;

    flex-direction: column;

    align-items: flex-start;

    gap: 10px;
}


.nyanyian-footer-column h3 {
    margin: 0 0 12px;

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 2px;

    text-transform: uppercase;

    color: #ffffff;
}


/* =========================================================
   ALAMAT
========================================================= */

.nyanyian-footer-address {
    margin: 0;

    font-size: 11px;

    line-height: 1.9;

    color: rgba(255,255,255,.50);
}


/* =========================================================
   LINK
========================================================= */

.nyanyian-footer-link {
    width: fit-content;

    color: rgba(255,255,255,.58);

    font-size: 10px;

    line-height: 1.6;

    text-decoration: none;

    transition:
        color .25s ease,
        transform .25s ease;
}


.nyanyian-footer-link:hover {
    color: #4fe5ff;

    transform: translateX(3px);
}


/* =========================================================
   CONTACT
========================================================= */

.nyanyian-footer-contact {
    display: flex;

    flex-direction: column;

    gap: 3px;

    color: rgba(255,255,255,.60);

    font-size: 11px;

    line-height: 1.5;

    text-decoration: none;

    transition:
        color .25s ease,
        transform .25s ease;
}


.nyanyian-footer-contact span {
    font-size: 8px;

    font-weight: 600;

    letter-spacing: 1.2px;

    text-transform: uppercase;

    color: rgba(255,255,255,.32);
}


.nyanyian-footer-contact:hover {
    color: #4fe5ff;

    transform: translateX(3px);
}


/* =========================================================
   MEDIA SOSIAL
========================================================= */

.nyanyian-footer-social {
    display: flex;

    flex-direction: column;

    gap: 9px;
}


.nyanyian-footer-social a {
    color: rgba(255,255,255,.55);

    font-size: 10px;

    text-decoration: none;

    transition:
        color .25s ease,
        transform .25s ease;
}


.nyanyian-footer-social a:hover {
    color: #4fe5ff;

    transform: translateX(3px);
}


/* =========================================================
   INFORMASI
========================================================= */

.nyanyian-footer-information {
    position: relative;

    z-index: 2;

    width: 100%;

    max-width: 1250px;

    margin: 0 auto;

    padding: 26px 35px;

    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 60px;

    border-top:
        1px solid rgba(255,255,255,.07);

    border-bottom:
        1px solid rgba(255,255,255,.07);

    box-sizing: border-box;
}


.nyanyian-footer-info-block strong {
    display: block;

    margin-bottom: 8px;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: 1.8px;

    text-transform: uppercase;

    color: rgba(255,255,255,.80);
}


.nyanyian-footer-info-block p {
    max-width: 520px;

    margin: 0;

    font-size: 10px;

    line-height: 1.8;

    color: rgba(255,255,255,.40);
}


/* =========================================================
   BAGIAN PALING BAWAH
========================================================= */

.nyanyian-footer-bottom {
    position: relative;

    z-index: 2;

    width: 100%;

    max-width: 1250px;

    margin: 0 auto;

    padding: 22px 35px 27px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 25px;

    box-sizing: border-box;

    font-size: 9px;

    color: rgba(255,255,255,.30);
}


.nyanyian-footer-legal {
    display: flex;

    align-items: center;

    gap: 10px;
}


.nyanyian-footer-legal a {
    color: rgba(255,255,255,.36);

    text-decoration: none;

    transition: color .25s ease;
}


.nyanyian-footer-legal a:hover {
    color: #4fe5ff;
}


.nyanyian-footer-legal span {
    color: rgba(255,255,255,.18);
}


/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media (max-width: 950px) {

    .nyanyian-footer-main {
        grid-template-columns: repeat(2, 1fr);

        gap: 45px;
    }
}


/* =========================================================
   RESPONSIVE HP
========================================================= */

@media (max-width: 650px) {

    .nyanyian-footer-main {
        grid-template-columns: 1fr;

        padding: 55px 22px 40px;

        gap: 35px;
    }


    .nyanyian-footer-information {
        grid-template-columns: 1fr;

        padding: 24px 22px;

        gap: 25px;
    }


    .nyanyian-footer-bottom {
        flex-direction: column;

        align-items: flex-start;

        padding: 20px 22px 25px;
    }


    .nyanyian-footer-legal {
        flex-wrap: wrap;
    }
}



/* =========================================
   PENGGUNA YANG MEMATIKAN ANIMASI
========================================= */

@media (prefers-reduced-motion: reduce) {

    .hero,
    .hero-content,
    .hero-title,
    .hero-subtitle,
    .hero-actions {
        animation: none !important;
        transition: none !important;
    }
}
/* =========================================
   NYANYIAN HUJAN FOOTER
========================================= */

.nyanyian-footer {
    margin-top: 100px;
    padding: 70px 6% 25px;

    background:
        radial-gradient(
            circle at top left,
            rgba(0, 217, 255, 0.08),
            transparent 30%
        ),
        linear-gradient(
            145deg,
            #031018,
            #061b28 55%,
            #020b11
        );

    border-top: 1px solid rgba(255, 255, 255, 0.08);
}


.nyanyian-footer-main {
    max-width: 1250px;
    margin: 0 auto;

    display: grid;
    grid-template-columns:
        1.4fr
        1fr
        1fr
        0.8fr;

    gap: 55px;
}


.nyanyian-footer-brand {
    max-width: 300px;
}


.nyanyian-footer-logo {
    display: inline-block;

    font-family: 'Cormorant Garamond', serif;
    font-size: 30px;
    font-weight: 600;

    letter-spacing: 4px;
    line-height: 1;

    color: #f5fdff;

    margin-bottom: 18px;
}


.nyanyian-footer-logo span {
    color: #00d9ff;
}


.nyanyian-footer-tagline {
    color: #86aab7;

    font-size: 13px;
    line-height: 1.8;
}


.nyanyian-footer-column h3 {
    margin-bottom: 18px;

    color: #f5fdff;

    font-size: 13px;
    font-weight: 600;

    letter-spacing: 1.5px;
    text-transform: uppercase;
}


.nyanyian-footer-address {
    color: #86aab7;

    font-size: 13px;
    line-height: 1.9;
}


.nyanyian-footer-location {
    display: inline-block;

    margin-top: 18px;

    color: #00d9ff;

    font-size: 13px;
    text-decoration: none;

    transition: 0.3s ease;
}


.nyanyian-footer-location:hover {
    transform: translateX(4px);
}


.nyanyian-footer-contact {
    display: block;

    margin-bottom: 17px;

    color: #86aab7;

    text-decoration: none;

    transition: 0.3s ease;
}


.nyanyian-footer-contact:hover {
    transform: translateX(3px);
}


.nyanyian-footer-contact-label {
    display: block;

    margin-bottom: 3px;

    color: #f5fdff;

    font-size: 12px;
    font-weight: 600;
}


.nyanyian-footer-contact-value {
    display: block;

    color: #86aab7;

    font-size: 12px;
}


.nyanyian-footer-social a {
    display: block;

    margin-bottom: 13px;

    color: #86aab7;

    font-size: 13px;

    text-decoration: none;

    transition: 0.3s ease;
}


.nyanyian-footer-social a:hover {
    color: #00d9ff;
    transform: translateX(3px);
}


.nyanyian-footer-information {
    max-width: 1250px;

    margin: 55px auto 0;
    padding-top: 30px;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 60px;

    border-top: 1px solid rgba(255, 255, 255, 0.07);
}


.nyanyian-footer-info-block strong {
    display: block;

    margin-bottom: 12px;

    color: #f5fdff;

    font-size: 13px;
    font-weight: 600;

    letter-spacing: 1px;
}


.nyanyian-footer-info-block p {
    max-width: 500px;

    color: #6f929f;

    font-size: 12px;
    line-height: 1.8;
}


.nyanyian-footer-bottom {
    max-width: 1250px;

    margin: 35px auto 0;
    padding-top: 22px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-top: 1px solid rgba(255, 255, 255, 0.06);
}


.nyanyian-footer-copy {
    color: #587783;

    font-size: 11px;
}


.nyanyian-footer-legal {
    display: flex;
    align-items: center;
}


.nyanyian-footer-legal a,
.nyanyian-footer-legal span {
    color: #587783;

    font-size: 11px;

    text-decoration: none;

    transition: 0.3s ease;
}


.nyanyian-footer-legal a:hover {
    color: #00d9ff;
}


.nyanyian-footer-legal span {
    margin: 0 10px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 850px) {

    .nyanyian-footer-main {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .nyanyian-footer-brand {
        grid-column: 1 / -1;
    }

    .nyanyian-footer-information {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .nyanyian-footer-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
}


@media (max-width: 550px) {

    .nyanyian-footer {
        padding: 55px 7% 22px;
    }

    .nyanyian-footer-main {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .nyanyian-footer-brand {
        grid-column: auto;
    }

    .nyanyian-footer-logo {
        font-size: 27px;
    }

    .nyanyian-footer-information {
        margin-top: 40px;
    }

    .nyanyian-footer-bottom {
        margin-top: 30px;
    }
}
/* =========================================================
   RUNNING ADVERTISEMENT NYANYIAN HUJAN
   Berjalan horizontal di atas Iklan 1 & Iklan 2
========================================================= */

.advertisement-main {
    grid-column: 2 / 4;
    width: 100%;
    min-width: 0;
}


/* =========================================================
   KOTAK RUNNING ADVERTISEMENT
========================================================= */

.advertisement-running {
    position: absolute;
    left: 50%;
    top: 0;
    transform: translate(-50%, -50%);

    width: 100vw;
    height: 58px;

    overflow: hidden;
    display: flex;
    align-items: center;

    box-sizing: border-box;

    border-top: 1px solid rgba(255,255,255,.20);
    border-bottom: 1px solid rgba(255,255,255,.20);

    border-radius: 0;

    background:
        linear-gradient(
            90deg,
            rgba(4,18,30,.98),
            rgba(8,35,54,.98),
            rgba(4,18,30,.98)
        );

    box-shadow:
        0 12px 30px rgba(0,0,0,.25),
        0 0 30px rgba(0,217,255,.06);

    z-index: 20;
}

/* =========================================================
   EFEK CAHAYA DI SISI RUNNING BAR
========================================================= */

.advertisement-running::before {
    content: "";

    position: absolute;

    left: 0;
    top: 0;

    width: 90px;
    height: 100%;

    z-index: 3;

    pointer-events: none;

    background:
        linear-gradient(
            90deg,
            rgba(5, 19, 32, 1),
            rgba(5, 19, 32, 0)
        );
}


.advertisement-running::after {
    content: "";

    position: absolute;

    right: 0;
    top: 0;

    width: 90px;
    height: 100%;

    z-index: 3;

    pointer-events: none;

    background:
        linear-gradient(
            270deg,
            rgba(5, 19, 32, 1),
            rgba(5, 19, 32, 0)
        );
}


/* =========================================================
   TRACK
========================================================= */

.advertisement-running-track {
    display: flex;

    width: max-content;

    flex-shrink: 0;

    animation:
        nyanyianHujanRunning
        28s
        linear
        infinite;

    will-change: transform;
}


/* =========================================================
   ISI RUNNING TEXT
========================================================= */

.advertisement-running-content {
    display: flex;

    align-items: center;

    flex-shrink: 0;

    white-space: nowrap;

    height: 58px;

    padding-right: 55px;

    font-family:
        'Montserrat',
        sans-serif;

    font-size: 13px;

    font-weight: 600;

    letter-spacing: 2px;

    text-transform: uppercase;

    color: rgba(246, 253, 255, .88);
}


/* =========================================================
   TEKS UTAMA
========================================================= */

.advertisement-running-content span {
    display: inline-flex;

    align-items: center;

    color: rgba(246, 253, 255, .88);

    transition:
        color .3s ease,
        text-shadow .3s ease;
}


/* =========================================================
   PEMISAH •
========================================================= */

.advertisement-running-content b {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    margin:
        0 22px;

    color: #00d9ff;

    font-size: 15px;

    font-weight: 700;

    text-shadow:
        0 0 12px rgba(0, 217, 255, .55);
}


/* =========================================================
   ANIMASI HORIZONTAL
========================================================= */

@keyframes nyanyianHujanRunning {

    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-50%);
    }

}


/* =========================================================
   HOVER — RUNNING BAR BERHENTI SEJENAK
========================================================= */

.advertisement-running:hover
.advertisement-running-track {
    animation-play-state: paused;
}


.advertisement-running:hover
.advertisement-running-content span {
    color: #ffffff;

    text-shadow:
        0 0 14px rgba(0, 217, 255, .20);
}


/* =========================================================
   KARTU IKLAN TETAP DI BAWAH RUNNING BAR
========================================================= */

.advertisement-main
.advertisement-cards {
    grid-column: auto;

    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    column-gap: 28px;

    align-items: stretch;
}


/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media (max-width: 900px) {

    .advertisement-running {
        height: 54px;

        margin-bottom: 18px;

        border-radius: 12px;
    }


    .advertisement-running-content {
        height: 54px;

        font-size: 11px;

        letter-spacing: 1.5px;
    }


    .advertisement-running-content b {
        margin:
            0 16px;

        font-size: 13px;
    }


    .advertisement-running-track {
        animation-duration: 24s;
    }

}


/* =========================================================
   RESPONSIVE HP
========================================================= */

@media (max-width: 650px) {

    .advertisement-main {
        width: 100%;
    }


    .advertisement-running {
        height: 50px;

        margin-bottom: 16px;

        border-radius: 10px;
    }


    .advertisement-running-content {
        height: 50px;

        font-size: 9px;

        letter-spacing: 1.2px;

        padding-right: 40px;
    }


    .advertisement-running-content b {
        margin:
            0 12px;

        font-size: 11px;
    }


    .advertisement-running::before,
    .advertisement-running::after {
        width: 45px;
    }


    .advertisement-running-track {
        animation-duration: 20s;
    }


    .advertisement-main,
.advertisement-cards {
    grid-template-columns: 1fr;
    row-gap: 18px;
}

}
    </style>
<style>

/* =========================================================
   NYANYIAN HUJAN
   PREMIUM HERO
   ========================================================= */

.hero {
    position: relative;
    width: 100%;
    min-height: 100vh;

    display: flex;
    align-items: center;

    overflow: hidden;

    background: #020609;
}


/* VIDEO */

.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
    transform: none !important;
}


/* DARK OVERLAY */

.hero-overlay {
    position: absolute;

    inset: 0;

    z-index: 1;

    background:
        linear-gradient(
            90deg,
            rgba(0, 0, 0, .88) 0%,
            rgba(0, 0, 0, .68) 45%,
            rgba(0, 0, 0, .35) 100%
        );
}


/* LIGHT EFFECT */

.hero-glow {
    position: absolute;

    width: 650px;
    height: 650px;

    right: -250px;
    top: 50%;

    transform: translateY(-50%);

    z-index: 2;

    background:
        radial-gradient(
            circle,
            rgba(0, 217, 255, .18),
            rgba(0, 217, 255, .05) 40%,
            transparent 70%
        );

    pointer-events: none;
}


/* CONTENT */

.hero-content {
    position: relative;
    z-index: 3;

    width: min(1100px, 90%);
    margin: 0 auto;

    padding: 160px 0 80px;

    text-align: center;

    display: flex;
    flex-direction: column;
    align-items: center;
}



/* LABEL */

.hero-label {
    margin-bottom: 25px;

    font-family: 'Montserrat', sans-serif;

    font-size: 11px;

    font-weight: 600;

    letter-spacing: 4px;

    color: #00d9ff;

    text-transform: uppercase;
}


/* TITLE */

.hero h1 {
    margin: 0;

    font-family: 'Cormorant Garamond', serif;

    font-size: clamp(80px, 10vw, 155px);

    font-weight: 400;

    line-height: .78;

    letter-spacing: -5px;

    color: #fff;
}


.hero h1 span {
    font-style: italic;

    color: #fff;
}


/* DESCRIPTION */

.hero p {
    max-width: 560px;
    margin: 42px auto 34px;

    font-family: 'Montserrat', sans-serif;

    font-size: 14px;

    line-height: 1.8;

    color: rgba(255,255,255,.72);
}


/* =========================================================
   PREMIUM HERO BUTTONS
========================================================= */

.hero-buttons {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
    margin-top: 8px;
}

.hero-buttons a {
    position: relative;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    min-width: 190px;
    height: 56px;

    padding: 0 30px;

    border-radius: 999px;

    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    font-weight: 600;

    letter-spacing: 2px;
    text-transform: uppercase;

    text-decoration: none;

    overflow: hidden;

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        background .35s ease,
        border-color .35s ease,
        color .35s ease;
}

/* =========================================================
   PRIMARY — EXPLORE SHIPS
========================================================= */

.btn-primary {
    color: #00151b;

    background:
        linear-gradient(
            135deg,
            #ffffff 0%,
            #dffaff 45%,
            #00d9ff 100%
        );

    border: 1px solid rgba(255,255,255,.8);

    box-shadow:
        0 10px 30px rgba(0,217,255,.18),
        inset 0 1px 0 rgba(255,255,255,.9);
}

.btn-primary::after {
    content: '';

    position: absolute;

    top: 0;
    left: -100%;

    width: 60%;
    height: 100%;

    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.65),
        transparent
    );

    transform: skewX(-20deg);

    transition: left .7s ease;
}

.btn-primary:hover {
    transform: translateY(-4px);

    color: #00151b;

    box-shadow:
        0 16px 40px rgba(0,217,255,.35),
        0 0 25px rgba(0,217,255,.12);
}

.btn-primary:hover::after {
    left: 140%;
}

/* =========================================================
   SECONDARY — VIEW SCHEDULE
========================================================= */

.btn-secondary {
    color: #ffffff;

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(255,255,255,.35);

    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.08),
        0 8px 25px rgba(0,0,0,.15);
}

.btn-secondary:hover {
    transform: translateY(-4px);

    color: #ffffff;

    background: rgba(255,255,255,.10);

    border-color: rgba(0,217,255,.65);

    box-shadow:
        0 14px 35px rgba(0,0,0,.25),
        0 0 20px rgba(0,217,255,.12);
}



/* =========================================================
   PREMIUM HERO INFORMATION
========================================================= */

.hero-info {
    display: grid;
    grid-template-columns: repeat(3, 1fr);

    width: min(1050px, 100%);

    margin: 85px auto 0;
    padding-top: 30px;

    border-top: 1px solid rgba(255,255,255,.14);
}

/* =========================================================
   ITEM
========================================================= */

.hero-info-item {
    position: relative;

    display: flex;
    align-items: flex-start;

    gap: 18px;

    padding: 8px 35px;

    text-align: left;

    border-right: 1px solid rgba(255,255,255,.10);

    transition:
        transform .35s ease,
        border-color .35s ease;
}

.hero-info-item:first-child {
    padding-left: 0;
}

.hero-info-item:last-child {
    padding-right: 0;
    border-right: none;
}

.hero-info-item:hover {
    transform: translateY(-4px);
}

/* =========================================================
   NUMBER
========================================================= */

.hero-info-number {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;

    width: 38px;
    height: 38px;

    flex: 0 0 38px;

    border: 1px solid rgba(0,217,255,.45);

    border-radius: 50%;

    font-family: 'Montserrat', sans-serif;
    font-size: 9px;
    font-weight: 600;

    letter-spacing: 1px;

    color: #00d9ff;

    background: rgba(0,217,255,.035);

    box-shadow:
        0 0 20px rgba(0,217,255,.08),
        inset 0 0 15px rgba(0,217,255,.04);
}

/* titik kecil di luar lingkaran */

.hero-info-number::after {
    content: '';

    position: absolute;

    width: 4px;
    height: 4px;

    top: 3px;
    right: 3px;

    border-radius: 50%;

    background: #00d9ff;

    box-shadow: 0 0 8px rgba(0,217,255,.8);
}

/* =========================================================
   TEXT
========================================================= */

.hero-info-item strong {
    display: block;

    margin-bottom: 7px;

    font-family: 'Montserrat', sans-serif;

    font-size: 11px;
    font-weight: 600;

    letter-spacing: 2px;

    text-transform: uppercase;

    color: #ffffff;
}

.hero-info-item small {
    display: block;

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;

    font-weight: 400;

    letter-spacing: .5px;

    line-height: 1.6;

    color: rgba(255,255,255,.48);
}

/* =========================================================
   PREMIUM GLOW LINE
========================================================= */

.hero-info-item:hover .hero-info-number {
    border-color: rgba(0,217,255,.9);

    box-shadow:
        0 0 25px rgba(0,217,255,.18),
        inset 0 0 18px rgba(0,217,255,.08);
}

.hero-info-item:hover strong {
    color: #00d9ff;
}

.hero-info-item:hover small {
    color: rgba(255,255,255,.7);
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .hero-info {
        display: flex;

        flex-direction: column;

        gap: 20px;

        margin-top: 55px;

        padding-top: 25px;
    }

    .hero-info-item,
    .hero-info-item:first-child,
    .hero-info-item:last-child {
        width: 100%;

        margin: 0;

        padding: 0 0 18px;

        border-right: none;

        border-bottom: 1px solid rgba(255,255,255,.10);
    }

    .hero-info-item:last-child {
        padding-bottom: 0;
        border-bottom: none;
    }
}


/* =========================================================
   TABLET
   ========================================================= */

@media (max-width: 900px) {

    .hero-content {
        width: 88%;
    }

    .hero h1 {
        font-size: clamp(70px, 12vw, 120px);
    }

}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 650px) {

    .hero {
        min-height: 850px;
    }

    .hero-content {
        width: 88%;

        padding: 130px 0 60px;
    }

    .hero-label {
        font-size: 9px;

        letter-spacing: 2.5px;
    }

    .hero h1 {
        font-size: 64px;

        line-height: .86;

        letter-spacing: -2px;
    }

    .hero p {
        margin: 30px 0;

        font-size: 12px;
    }

    .hero-buttons {
        flex-direction: column;

        align-items: stretch;
    }

    .hero-buttons a {
        width: 100%;
    }

    .hero-info {
        flex-direction: column;

        gap: 18px;

        margin-top: 55px;
    }

    .hero-info-item {
        margin: 0;

        padding: 0 0 15px;

        border-right: none;

        border-bottom: 1px solid rgba(255,255,255,.1);
    }

    .hero-info-item:last-child {
        padding-bottom: 0;

        border-bottom: none;
    }

}

/* =========================================================
   PREMIUM HERO ANIMATION
========================================================= */

/* HERO CONTENT */

.hero-content {
    animation: heroContentReveal 1.4s cubic-bezier(.16,1,.3,1) both;
}

@keyframes heroContentReveal {
    from {
        opacity: 0;
        transform: translateY(35px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* LABEL */

.hero-label {
    animation:
        heroLabelReveal 1s .15s cubic-bezier(.16,1,.3,1) both;

    opacity: 0;
}

@keyframes heroLabelReveal {
    from {
        opacity: 0;
        transform: translateY(18px);
        letter-spacing: 7px;
    }

    to {
        opacity: 1;
        transform: translateY(0);
        letter-spacing: 4px;
    }
}


/* TITLE */

.hero h1 {
    animation:
        heroTitleReveal 1.3s .3s cubic-bezier(.16,1,.3,1) both;

    opacity: 0;
}

@keyframes heroTitleReveal {
    from {
        opacity: 0;
        transform: translateY(45px);
        filter: blur(8px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
        filter: blur(0);
    }
}


/* TITLE — THE OCEAN */

.hero h1 span {
    display: inline-block;

    animation:
        oceanReveal 1.2s .55s cubic-bezier(.16,1,.3,1) both;

    opacity: 0;
}

@keyframes oceanReveal {
    from {
        opacity: 0;
        transform: translateX(35px);
        filter: blur(5px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
        filter: blur(0);
    }
}


/* DESCRIPTION */

.hero p {
    animation:
        heroParagraphReveal 1s .75s cubic-bezier(.16,1,.3,1) both;

    opacity: 0;
}

@keyframes heroParagraphReveal {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* BUTTONS */

.hero-buttons {
    animation:
        heroButtonsReveal 1s .95s cubic-bezier(.16,1,.3,1) both;

    opacity: 0;
}

@keyframes heroButtonsReveal {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* PREMIUM BUTTON FLOAT */

.hero-buttons a {
    position: relative;
}

.hero-buttons a::after {
    pointer-events: none;
}


/* INFO */

.hero-info {
    animation:
        heroInfoReveal 1.1s 1.15s cubic-bezier(.16,1,.3,1) both;

    opacity: 0;
}

@keyframes heroInfoReveal {
    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* INFO ITEM SATU PER SATU */

.hero-info-item:nth-child(1) {
    animation: infoItemReveal .8s 1.25s both;
}

.hero-info-item:nth-child(2) {
    animation: infoItemReveal .8s 1.4s both;
}

.hero-info-item:nth-child(3) {
    animation: infoItemReveal .8s 1.55s both;
}

@keyframes infoItemReveal {
    from {
        opacity: 0;
        transform: translateY(15px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}


/* =========================================================
   SUBTLE OCEAN GLOW
========================================================= */

.hero-glow {
    animation:
        heroGlowFloat 8s ease-in-out infinite alternate;
}

@keyframes heroGlowFloat {
    from {
        opacity: .55;
        transform: translateY(-50%) scale(.95);
    }

    to {
        opacity: 1;
        transform: translateY(-50%) scale(1.08);
    }
}


/* =========================================================
   PREMIUM VIDEO MOTION
========================================================= */

.hero-video {
    transform: scale(1.03);

    animation:
        heroVideoZoom 18s ease-in-out infinite alternate;
}

@keyframes heroVideoZoom {
    from {
        transform: scale(1.03);
    }

    to {
        transform: scale(1.08);
    }
}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .hero *,
    .hero {
        animation: none !important;
        transition: none !important;
    }
}


</style>
</head>

<body>


    <!-- =========================================
     NAVBAR
========================================= -->

<nav>
    <a href="{{ url('/') }}" class="logo">
        NYANYIAN<span>HUJAN</span>
    </a>

    <div class="nav-menu">

        <a href="{{ url('/') }}">
            Beranda
        </a>

        <a href="{{ route('ships.index') }}">
            Kapal
        </a>

        <a href="{{ route('bookings.check') }}">
            Cek Booking
        </a>

        <a href="{{ url('/layanan') }}">
            Layanan
        </a>

        <a href="{{ route('admin.login') }}" class="nav-login">Login Admin / Karyawan</a>

        <a href="{{ route('ships.index') }}" class="nav-booking">
            Booking
        </a>

    </div>
</nav>


    <!-- =========================================
         HERO
    ========================================= -->

    <!-- =========================================
     PREMIUM HERO
========================================= -->

<section class="hero">

    <!-- VIDEO BACKGROUND -->
    <video
        class="hero-video"
        autoplay
        muted
        loop
        playsinline
    >
        <source
            src="{{ asset('videos/ocean-hero.mp4') }}"
            type="video/mp4"
        >
    </video>

    <!-- DARK OVERLAY -->
    <div class="hero-overlay"></div>

    <!-- LIGHT EFFECT -->
    <div class="hero-glow"></div>

    <!-- CONTENT -->
    <div class="hero-content">

        <div class="hero-label">
    ✦ PREMIUM MARITIME EXPERIENCE
</div>

<h1>
    Discover<br>
    <span>The Ocean</span>
</h1>

<p>
    Jelajahi laut. Nikmati perjalanan yang tak terlupakan
    bersama Nyanyian Hujan.
</p>

<div class="hero-buttons">

    <a
        href="{{ route('ships.index') }}"
        class="btn-primary"
    >
        Explore Ships →
    </a>

    <a
    href="#jadwal"
    class="btn-secondary"
>
    View Schedule
</a>

</div>

    <!-- PREMIUM HERO INFO -->
    <div class="hero-info">

    <div class="hero-info-item">
        <span class="hero-info-number">
            01
        </span>

        <div>
            <strong>
                Premium Ships
            </strong>

            <small>
                Kapal nyaman & modern
            </small>
        </div>
    </div>

    <div class="hero-info-item">
        <span class="hero-info-number">
            02
        </span>

        <div>
            <strong>
                Easy Booking
            </strong>

            <small>
                Booking cepat & praktis
            </small>
        </div>
    </div>

    <div class="hero-info-item">
        <span class="hero-info-number">
            03
        </span>

        <div>
            <strong>
                Ocean Experience
            </strong>

            <small>
                Perjalanan laut berkesan
            </small>
        </div>
    </div>

</div>
</section>



{{-- =====================================================
     SLIDER IKLAN Nyanyian Hujan
===================================================== --}}

@if(isset($advertisements) && $advertisements->count())

{{-- =====================================================
     RUNNING ADVERTISEMENT PEMBATAS
===================================================== --}}

<div class="advertisement-running">

    <div class="advertisement-running-track">

        <div class="advertisement-running-content">

            <span>{{ __('messages.promo_nyanyian_hujan') }}</span>
            <b>•</b>

            <span>{{ __('messages.ship_booking') }}</span>
            <b>•</b>

            <span>{{ __('messages.sea_journey') }}</span>
            <b>•</b>

            <span>{{ __('messages.enjoy_journey') }}</span>
            <b>•</b>

            <span>{{ __('messages.check_ship_schedule') }}</span>
            <b>•</b>

            <span>{{ __('messages.easier_booking') }}</span>
            <b>•</b>

        </div>

        {{-- DUPLIKAT UNTUK LOOPING --}}
        <div class="advertisement-running-content">

            <span>PROMO NYANYIAN HUJAN</span>
            <b>•</b>

            <span>BOOKING KAPAL</span>
            <b>•</b>

            <span>PERJALANAN LAUT</span>
            <b>•</b>

            <span>NIKMATI PERJALANAN BERSAMA NYANYIAN HUJAN</span>
            <b>•</b>

            <span>CEK JADWAL KAPAL SEKARANG</span>
            <b>•</b>

            <span>BOOKING LEBIH MUDAH</span>
            <b>•</b>

        </div>

    </div>

</div>


{{-- =====================================================
     SECTION IKLAN
===================================================== --}}

<section class="advertisement-section">

    <div class="advertisement-wrapper">


        {{-- =================================================
             KOMPAS KIRI
        ================================================== --}}

        <div class="advertisement-nautical advertisement-nautical-left">

            <div class="nautical-compass">

                <span class="compass-n">N</span>
                <span class="compass-e">E</span>
                <span class="compass-s">S</span>
                <span class="compass-w">W</span>

                <div class="compass-cross vertical"></div>
                <div class="compass-cross horizontal"></div>

                <div class="compass-star">
                    ✦
                </div>

            </div>

            <div class="nautical-caption">
                Nyanyian Hujan
            </div>

        </div>


        {{-- =================================================
             AREA UTAMA IKLAN
        ================================================== --}}

        <div class="advertisement-main">


            {{-- =================================================
                 KARTU IKLAN 1 & IKLAN 2
            ================================================== --}}

            <div class="advertisement-cards">


                {{-- =================================================
                     IKLAN 1
                ================================================== --}}

                <div class="advertisement-slider advertisement-slider-one">

                    @foreach($advertisements->values() as $index => $advertisement)

                        @if($index % 2 === 0)

                            <div class="advertisement-slide {{ $index === 0 ? 'active' : '' }}">

                                <div class="advertisement-content">

                                    @if($advertisement->image)

                                        @if($advertisement->link)

                                            <a
                                                href="{{ $advertisement->link }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="advertisement-image-link"
                                            >
                                                <img
                                                    src="{{ asset('storage/' . $advertisement->image) }}"
                                                    alt="{{ $advertisement->title }}"
                                                    class="advertisement-image"
                                                >
                                            </a>

                                        @else

                                            <img
                                                src="{{ asset('storage/' . $advertisement->image) }}"
                                                alt="{{ $advertisement->title }}"
                                                class="advertisement-image"
                                            >

                                        @endif

                                    @endif


                                    <div class="advertisement-info">

                                        <span class="advertisement-label">
                                            PROMO Nyanyian Hujan
                                        </span>

                                        <h2>
                                            {{ $advertisement->title }}
                                        </h2>

                                        @if($advertisement->description)

                                            <p>
                                                {{ $advertisement->description }}
                                            </p>

                                        @endif

                                        @if($advertisement->link)

                                            <a
                                                href="{{ $advertisement->link }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="advertisement-button"
                                            >
                                                Lihat Promo →
                                            </a>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        @endif

                    @endforeach


                    {{-- PANAH IKLAN 1 --}}

                    <button
                        type="button"
                        class="advertisement-prev advertisement-prev-one"
                        aria-label="Iklan sebelumnya"
                    >
                        ‹
                    </button>

                    <button
                        type="button"
                        class="advertisement-next advertisement-next-one"
                        aria-label="Iklan berikutnya"
                    >
                        ›
                    </button>

                </div>


                {{-- =================================================
                     IKLAN 2
                ================================================== --}}

                <div class="advertisement-slider advertisement-slider-two">

                    @foreach($advertisements->values() as $index => $advertisement)

                        @if($index % 2 === 1)

                            <div class="advertisement-slide {{ $index === 1 ? 'active' : '' }}">

                                <div class="advertisement-content">

                                    @if($advertisement->image)

                                        @if($advertisement->link)

                                            <a
                                                href="{{ $advertisement->link }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="advertisement-image-link"
                                            >
                                                <img
                                                    src="{{ asset('storage/' . $advertisement->image) }}"
                                                    alt="{{ $advertisement->title }}"
                                                    class="advertisement-image"
                                                >
                                            </a>

                                        @else

                                            <img
                                                src="{{ asset('storage/' . $advertisement->image) }}"
                                                alt="{{ $advertisement->title }}"
                                                class="advertisement-image"
                                            >

                                        @endif

                                    @endif


                                    <div class="advertisement-info">

                                        <span class="advertisement-label">
                                            PROMO Nyanyian Hujan
                                        </span>

                                        <h2>
                                            {{ $advertisement->title }}
                                        </h2>

                                        @if($advertisement->description)

                                            <p>
                                                {{ $advertisement->description }}
                                            </p>

                                        @endif

                                        @if($advertisement->link)

                                            <a
                                                href="{{ $advertisement->link }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="advertisement-button"
                                            >
                                                Lihat Promo →
                                            </a>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        @endif

                    @endforeach


                    {{-- PANAH IKLAN 2 --}}

                    <button
                        type="button"
                        class="advertisement-prev advertisement-prev-two"
                        aria-label="Iklan sebelumnya"
                    >
                        ‹
                    </button>

                    <button
                        type="button"
                        class="advertisement-next advertisement-next-two"
                        aria-label="Iklan berikutnya"
                    >
                        ›
                    </button>

                </div>


            </div>

        </div>


        {{-- =================================================
             KOMPAS KANAN
        ================================================== --}}

        <div class="advertisement-nautical advertisement-nautical-right">

            <div class="nautical-compass">

                <span class="compass-n">N</span>
                <span class="compass-e">E</span>
                <span class="compass-s">S</span>
                <span class="compass-w">W</span>

                <div class="compass-cross vertical"></div>
                <div class="compass-cross horizontal"></div>

                <div class="compass-star">
                    ✦
                </div>

            </div>

            <div class="nautical-caption">
                YOUR JOURNEY
            </div>

        </div>


    </div>

</section>

@endif

    <!-- =========================================
         CALENDAR
    ========================================= -->

   <section
    class="section calendar-section"
    id="jadwal"
>
    <!-- JUDUL SECTION -->
    <div class="section-title calendar-section-title">

        <div class="section-label">
            BOOKING SCHEDULE
        </div>

        <h2>
            Cek Jadwal Kapal
        </h2>

        <p>
            Lihat tanggal yang sudah dibooking sebelum menentukan perjalananmu.
        </p>

    </div>


    <!-- AREA KALENDER -->
    <div class="calendar-stage">


        <!-- TEKS KIRI -->
        <div class="calendar-decor calendar-decor-left">

            <div class="calendar-decor-small">
                Nyanyian Hujan
            </div>

            <div class="calendar-decor-title">
                EXPLORE
                <br>
                THE SEA
            </div>

            <div class="calendar-decor-line"></div>

            <div class="calendar-decor-description">
                Plan your journey
                <br>
                with confidence.
            </div>

        </div>


        <!-- KALENDER UTAMA -->
        <div class="calendar-box">

            <!-- PILIH KAPAL -->
            <div class="calendar-top">

                <div class="calendar-filter">

                    <label for="calendarShip">
                        Pilih Kapal
                    </label>

                    <select id="calendarShip">

                        @forelse($ships as $ship)

                            <option value="{{ $ship->id }}">
                                {{ $ship->name }}
                            </option>

                        @empty

                            <option value="">
                                Belum ada kapal tersedia
                            </option>

                        @endforelse

                    </select>

                </div>

            </div>


            <!-- HEADER BULAN -->
            <div class="calendar-header">

                <h3 id="calendarMonth">
                    September 2026
                </h3>

                <div class="calendar-nav">

                    <button
                        type="button"
                        id="prevMonth"
                        aria-label="Bulan sebelumnya"
                    >
                        ‹
                    </button>

                    <button
                        type="button"
                        id="nextMonth"
                        aria-label="Bulan berikutnya"
                    >
                        ›
                    </button>

                </div>

            </div>


            <!-- NAMA HARI -->
            <div class="calendar-weekdays">

                <div>Min</div>
                <div>Sen</div>
                <div>Sel</div>
                <div>Rab</div>
                <div>Kam</div>
                <div>Jum</div>
                <div>Sab</div>

            </div>


            <!-- TANGGAL -->
            <div
                class="calendar-days"
                id="calendarDays"
            ></div>


            <!-- KETERANGAN -->
            <div class="calendar-legend">

                <div class="legend-item">

                    <span class="legend-box legend-available"></span>

                    <span>
                        Tersedia
                    </span>

                </div>


                <div class="legend-item">

                    <span class="legend-box legend-booked"></span>

                    <span>
                        Terbooking
                    </span>

                </div>

            </div>

        </div>


        <!-- TEKS KANAN -->
        <div class="calendar-decor calendar-decor-right">

            <div class="calendar-decor-small">
                YOUR JOURNEY
            </div>

            <div class="calendar-decor-title">
                DISCOVER
                <br>
                THE OCEAN
            </div>

            <div class="calendar-decor-line"></div>

            <div class="calendar-decor-description">
                Find the perfect
                <br>
                time to sail.
            </div>

        </div>

    </div>

</section>


    <!-- =========================================
         FEATURES
    ========================================= -->

    <section class="section">

        <div class="section-title why-Nyanyian Hujan-title">

    <div class="section-label">
        WHY Nyanyian Hujan
    </div>

    <h2>
        Perjalanan Lebih Sederhana
    </h2>

    <p>
        Semua yang kamu butuhkan untuk booking kapal
        ada di satu tempat.
    </p>

</div>

        <div class="features">


            <div class="feature">

               <div class="feature-icon">
    <span class="feature-icon-symbol">🚢</span>
</div>

                <h3>
                    Pilihan Kapal
                </h3>

                <p>
                    Temukan berbagai pilihan kapal
                    yang tersedia untuk perjalananmu.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
    <span class="feature-icon-symbol">📅</span>
</div>

                <h3>
                    Jadwal Transparan
                </h3>

                <p>
                    Lihat tanggal yang sudah dibooking
                    sebelum menentukan jadwal perjalanan.
                </p>

            </div>


            <div class="feature">

                <div class="feature-icon">
    <span class="feature-icon-symbol">🔎</span>
</div>
                <h3>
                    Cek Booking
                </h3>

                <p>
                    Pantau status pemesanan menggunakan
                    kode booking yang kamu miliki.
                </p>

            </div>


        </div>

    </section>


    <!-- =========================================
         CTA
    ========================================= -->

    <section class="cta">

        <div class="section-label">
            START YOUR JOURNEY
        </div>

        <h2>
            Siap Memulai Perjalanan?
        </h2>

        <p>
            Pilih kapal yang sesuai dan
            buat booking perjalananmu.
        </p>


<a
    href="{{ route('ships.index') }}"
    class="cta-button"
>
    Booking Sekarang
    <span>→</span>
</a>


    </section>


    <!-- =========================================
     Nyanyian Hujan PREMIUM FOOTER
========================================= -->

<style>
/* =========================================================
   Nyanyian Hujan FOOTER FINAL
   ========================================================= */

.Nyanyian Hujan-footer {
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;

    background: #061522 !important;
    color: #ffffff !important;

    font-family: Arial, sans-serif !important;

    border-top: 1px solid rgba(255,255,255,.08);

    box-sizing: border-box;

    overflow: hidden;
}

.Nyanyian Hujan-footer *,
.Nyanyian Hujan-footer *::before,
.Nyanyian Hujan-footer *::after {
    box-sizing: border-box;
}


/* =========================
   FOOTER MAIN
   ========================= */

.Nyanyian Hujan-footer-main {
    width: 100% !important;
    max-width: 1250px !important;

    margin: 0 auto !important;

    padding: 70px 40px 55px !important;

    display: grid !important;

    grid-template-columns:
        1.4fr
        1fr
        1fr
        .8fr !important;

    gap: 55px !important;

    align-items: start !important;
}


/* =========================
   BRAND
   ========================= */

.Nyanyian Hujan-footer-brand {
    display: block !important;
}

.Nyanyian Hujan-footer-logo {
    display: block !important;

    margin: 0 0 18px 0 !important;

    color: #ffffff !important;

    font-size: 26px !important;
    font-weight: 800 !important;

    letter-spacing: 3px !important;
    line-height: 1.2 !important;
}

.Nyanyian Hujan-footer-logo span {
    color: #22d3ee !important;
}

.Nyanyian Hujan-footer-tagline {
    display: block !important;

    max-width: 290px !important;

    margin: 0 !important;

    color: rgba(255,255,255,.55) !important;

    font-size: 12px !important;

    line-height: 1.8 !important;
}


/* =========================
   COLUMN
   ========================= */

.Nyanyian Hujan-footer-column {
    display: flex !important;

    flex-direction: column !important;

    align-items: flex-start !important;

    gap: 10px !important;

    margin: 0 !important;
}

.Nyanyian Hujan-footer-column h3 {
    display: block !important;

    margin: 0 0 12px 0 !important;

    color: #ffffff !important;

    font-size: 11px !important;

    font-weight: 700 !important;

    letter-spacing: 2px !important;

    line-height: 1.4 !important;

    text-transform: uppercase !important;
}


/* =========================
   ADDRESS
   ========================= */

.Nyanyian Hujan-footer-address {
    display: block !important;

    margin: 0 !important;

    color: rgba(255,255,255,.55) !important;

    font-size: 11px !important;

    line-height: 1.8 !important;
}


/* =========================
   LINK
   ========================= */

.Nyanyian Hujan-footer-link {
    display: inline-block !important;

    margin: 0 !important;

    color: rgba(255,255,255,.62) !important;

    font-size: 11px !important;

    line-height: 1.6 !important;

    text-decoration: none !important;

    white-space: nowrap;
}

.Nyanyian Hujan-footer-link:hover {
    color: #22d3ee !important;
}


/* =========================
   CONTACT
   ========================= */

.Nyanyian Hujan-footer-contact {
    display: flex !important;

    flex-direction: column !important;

    align-items: flex-start !important;

    gap: 3px !important;

    margin: 0 !important;

    color: rgba(255,255,255,.65) !important;

    font-size: 11px !important;

    line-height: 1.5 !important;

    text-decoration: none !important;
}

.Nyanyian Hujan-footer-contact span {
    display: block !important;

    color: rgba(255,255,255,.35) !important;

    font-size: 8px !important;

    font-weight: 600 !important;

    letter-spacing: 1.3px !important;

    line-height: 1.4 !important;

    text-transform: uppercase !important;
}

.Nyanyian Hujan-footer-contact:hover {
    color: #22d3ee !important;
}


/* =========================
   INFORMATION
   ========================= */

.Nyanyian Hujan-footer-information {
    width: 100% !important;

    max-width: 1250px !important;

    margin: 0 auto !important;

    padding: 25px 40px !important;

    display: grid !important;

    grid-template-columns: 1fr 1fr !important;

    gap: 60px !important;

    border-top: 1px solid rgba(255,255,255,.08);

    border-bottom: 1px solid rgba(255,255,255,.08);
}

.Nyanyian Hujan-footer-info-block {
    display: block !important;

    margin: 0 !important;
}

.Nyanyian Hujan-footer-info-block strong {
    display: block !important;

    margin: 0 0 8px 0 !important;

    color: rgba(255,255,255,.85) !important;

    font-size: 9px !important;

    font-weight: 700 !important;

    letter-spacing: 1.8px !important;

    text-transform: uppercase !important;
}

.Nyanyian Hujan-footer-info-block p {
    display: block !important;

    max-width: 520px !important;

    margin: 0 !important;

    color: rgba(255,255,255,.42) !important;

    font-size: 10px !important;

    line-height: 1.8 !important;
}


/* =========================
   BOTTOM
   ========================= */

.Nyanyian Hujan-footer-bottom {
    width: 100% !important;

    max-width: 1250px !important;

    margin: 0 auto !important;

    padding: 22px 40px 28px !important;

    display: flex !important;

    align-items: center !important;

    justify-content: space-between !important;

    gap: 20px !important;
}

.Nyanyian Hujan-footer-bottom-left {
    color: rgba(255,255,255,.32) !important;

    font-size: 9px !important;

    line-height: 1.5 !important;
}

.Nyanyian Hujan-footer-bottom-right {
    display: flex !important;

    align-items: center !important;

    gap: 10px !important;
}

.Nyanyian Hujan-footer-bottom-right a {
    color: rgba(255,255,255,.38) !important;

    font-size: 9px !important;

    line-height: 1.5 !important;

    text-decoration: none !important;
}

.Nyanyian Hujan-footer-bottom-right a:hover {
    color: #22d3ee !important;
}

.Nyanyian Hujan-footer-bottom-right span {
    color: rgba(255,255,255,.2) !important;
}


/* =========================
   TABLET
   ========================= */

@media (max-width: 900px) {

    .Nyanyian Hujan-footer-main {
        grid-template-columns: 1fr 1fr !important;
        gap: 40px !important;
    }

}


/* =========================
   MOBILE
   ========================= */

@media (max-width: 600px) {

    .Nyanyian Hujan-footer-main {
        grid-template-columns: 1fr !important;

        padding: 50px 22px 40px !important;

        gap: 35px !important;
    }

    .Nyanyian Hujan-footer-information {
        grid-template-columns: 1fr !important;

        padding: 25px 22px !important;

        gap: 25px !important;
    }

    .Nyanyian Hujan-footer-bottom {
        flex-direction: column !important;

        align-items: flex-start !important;

        padding: 20px 22px 25px !important;
    }

    .Nyanyian Hujan-footer-bottom-right {
        flex-wrap: wrap !important;
    }

}



</style>


<style>

/* =========================================================
   NYANYIAN HUJAN FOOTER
========================================================= */

.nh-footer {
    width: 100%;
    background: linear-gradient(
        180deg,
        #071d2d 0%,
        #041421 55%,
        #020b12 100%
    );
    color: rgba(255,255,255,.65);
    font-family: 'Montserrat', sans-serif;
    border-top: 1px solid rgba(255,255,255,.08);
    box-sizing: border-box;
    overflow: hidden;
}

.nh-footer-main {
    width: min(1250px, 92%);
    margin: 0 auto;
    padding: 70px 0 55px;

    display: grid;
    grid-template-columns: 1.5fr 1.1fr 1.1fr .8fr;
    gap: 60px;
}

.nh-footer-brand,
.nh-footer-column {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
    min-width: 0;
}

.nh-footer-logo {
    margin: 0 0 18px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 30px;
    font-weight: 600;
    letter-spacing: 4px;
    line-height: 1;
    color: #fff;
}

.nh-footer-logo span {
    color: #36dcfa;
}

.nh-footer-brand p {
    max-width: 290px;
    margin: 0;
    font-size: 12px;
    line-height: 1.9;
    color: rgba(255,255,255,.48);
}

.nh-footer-column {
    gap: 10px;
}

.nh-footer-column h3 {
    margin: 0 0 12px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #fff;
}

.nh-footer-column p,
.nh-footer-address {
    margin: 0;
    font-size: 11px;
    line-height: 1.9;
    color: rgba(255,255,255,.50);
}

.nh-footer-column a,
.nh-social a {
    color: rgba(255,255,255,.58);
    font-size: 11px;
    line-height: 1.6;
    text-decoration: none;
    transition: color .25s ease, transform .25s ease;
}

.nh-footer-column a:hover,
.nh-social a:hover {
    color: #4fe5ff;
    transform: translateX(3px);
}

.nh-social {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 9px;
}

.nh-footer-info {
    width: min(1250px, 92%);
    margin: 0 auto;
    padding: 26px 0;

    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;

    border-top: 1px solid rgba(255,255,255,.07);
    border-bottom: 1px solid rgba(255,255,255,.07);
}

.nh-footer-info strong {
    display: block;
    margin-bottom: 8px;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1.8px;
    text-transform: uppercase;
    color: rgba(255,255,255,.80);
}

.nh-footer-info p {
    max-width: 520px;
    margin: 0;
    font-size: 10px;
    line-height: 1.8;
    color: rgba(255,255,255,.40);
}

.nh-footer-bottom {
    width: min(1250px, 92%);
    margin: 0 auto;
    padding: 22px 0 27px;

    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;

    font-size: 9px;
    color: rgba(255,255,255,.30);
}

.nh-footer-bottom p {
    margin: 0;
}

.nh-footer-bottom > div {
    display: flex;
    align-items: center;
    gap: 10px;
}

.nh-footer-bottom a {
    color: rgba(255,255,255,.36);
    text-decoration: none;
}

.nh-footer-bottom a:hover {
    color: #4fe5ff;
}

.nh-footer-bottom span {
    color: rgba(255,255,255,.18);
}

@media (max-width: 950px) {

    .nh-footer-main {
        grid-template-columns: repeat(2, 1fr);
        gap: 45px;
    }

}

@media (max-width: 650px) {

    .nh-footer-main {
        grid-template-columns: 1fr;
        padding: 55px 0 40px;
        gap: 35px;
    }

    .nh-footer-info {
        grid-template-columns: 1fr;
        gap: 25px;
        padding: 24px 0;
    }

    .nh-footer-bottom {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 20px 0 25px;
    }

    .nh-footer-bottom > div {
        flex-wrap: wrap;
    }

}

/* =========================================================
   CTA — DARK PREMIUM BUTTON
========================================================= */

.cta-button {
    position: relative;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 14px;

    min-width: 210px;
    height: 56px;

    padding: 0 28px;

    margin-top: 18px;

    border: 1px solid rgba(0,217,255,.35);

    border-radius: 999px;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.07),
            rgba(0,217,255,.06)
        );

    color: rgba(255,255,255,.88);

    font-family: 'Montserrat', sans-serif;

    font-size: 10px;
    font-weight: 600;

    letter-spacing: 2px;

    text-transform: uppercase;

    text-decoration: none;

    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);

    box-shadow:
        0 10px 30px rgba(0,0,0,.25),
        inset 0 1px 0 rgba(255,255,255,.08);

    transition:
        transform .35s ease,
        background .35s ease,
        border-color .35s ease,
        box-shadow .35s ease;
}

/* PANAH */

.cta-button span {
    font-size: 15px;

    color: #00d9ff;

    transition: transform .35s ease;
}



/* HOVER */

.cta-button:hover {
    transform: translateY(-3px);

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.10),
            rgba(0,217,255,.09)
        );

    border-color: rgba(0,217,255,.65);

    color: #ffffff;

    box-shadow:
        0 14px 35px rgba(0,0,0,.35),
        0 0 20px rgba(0,217,255,.08),
        inset 0 1px 0 rgba(255,255,255,.10);
}

.cta-button:hover::before {
    left: 140%;
}

.cta-button:hover span {
    transform: translateX(5px);
}

/* KLIK */

.cta-button:active {
    transform: translateY(-1px);
}

/* MOBILE */

@media (max-width: 650px) {

    .cta-button {
        width: min(100%, 280px);

        min-width: 0;

        height: 54px;

        font-size: 9px;

        letter-spacing: 1.5px;
    }
}
```css
/* =========================================================
   INFORMASI NYANYIAN HUJAN — CENTER
========================================================= */

.nh-footer-info {
    display: flex;
    justify-content: center;
    text-align: center;
}

.nh-footer-info > div {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.nh-footer-info h3 {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

.nh-footer-info p {
    max-width: 560px;
    margin-left: auto;
    margin-right: auto;

    text-align: center;
}
```


</style>


<footer class="nh-footer">

    <div class="nh-footer-main">

        <div class="nh-footer-brand">

            <div class="nh-footer-logo">
                NYANYIAN<span>HUJAN</span>
            </div>

            <p>
                Perjalanan laut yang lebih sederhana,
                nyaman, dan mudah dipesan.
            </p>

        </div>


        <div class="nh-footer-column">

            <h3>Kantor Pusat</h3>

            <p>
                Nyanyian Hujan Office<br>
                Jl. Contoh No. 10<br>
                Padang, Sumatera Barat<br>
                Indonesia
            </p>

            <a href="#">
                Lihat Lokasi Nyanyian Hujan
            </a>

        </div>


        <div class="nh-footer-column">

            <h3>Hubungi Kami</h3>

            <a href="tel:+6281212345678">
                <small>Customer Service</small>
                +62 812 1234 5678
            </a>

            <a href="mailto:hello@nyanyianhujan.com">
                <small>Email</small>
                hello@nyanyianhujan.com
            </a>

            <a href="https://wa.me/6281212345678"
               target="_blank"
               rel="noopener noreferrer">

                <small>WhatsApp</small>
                WhatsApp Nyanyian Hujan

            </a>

        </div>


        <div class="nh-footer-column">

            <h3>Media Sosial</h3>

            <div class="nh-social">

                <a href="#">Instagram</a>
                <a href="#">TikTok</a>
                <a href="#">Facebook</a>
                <a href="#">YouTube</a>

            </div>

        </div>

    </div>


    <div class="nh-footer-info">

        <div>
            <strong>Informasi Nyanyian Hujan</strong>

            <p>
                Pastikan data pemesanan dan informasi perjalanan
                diperiksa kembali sebelum melakukan keberangkatan.
            </p>
        </div>

        <div>
            <strong>Layanan</strong>

            <p>
                Booking kapal · Jadwal perjalanan ·
                Cek booking · Informasi kapal
            </p>
        </div>

    </div>


    <div class="nh-footer-bottom">

        <p>
            © {{ date('Y') }} Nyanyian Hujan.
            All rights reserved.
        </p>

        <div>
            <a href="#">Kebijakan Privasi</a>
            <span>|</span>
            <a href="#">Syarat &amp; Ketentuan</a>
        </div>

    </div>

</footer>


    <!-- =========================================
         CALENDAR JAVASCRIPT
    ========================================= -->

    <script>

        /*
        |--------------------------------------------------------------------------
        | DATA BOOKING DARI LARAVEL
        |--------------------------------------------------------------------------
        */

        const bookings = @json($bookings);


        /*
        |--------------------------------------------------------------------------
        | ELEMENT
        |--------------------------------------------------------------------------
        */

        const calendarShip =
            document.getElementById('calendarShip');

        const calendarDays =
            document.getElementById('calendarDays');

        const calendarMonth =
            document.getElementById('calendarMonth');

        const prevMonth =
            document.getElementById('prevMonth');

        const nextMonth =
            document.getElementById('nextMonth');


        /*
        |--------------------------------------------------------------------------
        | TANGGAL SAAT INI
        |--------------------------------------------------------------------------
        */

        let currentDate = new Date();


        /*
        |--------------------------------------------------------------------------
        | NAMA BULAN
        |--------------------------------------------------------------------------
        */

        const monthNames = [

            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'

        ];


        /*
        |--------------------------------------------------------------------------
        | RENDER CALENDAR
        |--------------------------------------------------------------------------
        */

        function renderCalendar() {

            const year =
                currentDate.getFullYear();

            const month =
                currentDate.getMonth();


            calendarMonth.textContent =
                monthNames[month] +
                ' ' +
                year;


            calendarDays.innerHTML = '';


            /*
            |--------------------------------------------------------------------------
            | HARI PERTAMA BULAN
            |--------------------------------------------------------------------------
            */

            const firstDay =
                new Date(
                    year,
                    month,
                    1
                ).getDay();


            /*
            |--------------------------------------------------------------------------
            | JUMLAH HARI
            |--------------------------------------------------------------------------
            */

            const totalDays =
                new Date(
                    year,
                    month + 1,
                    0
                ).getDate();


            /*
            |--------------------------------------------------------------------------
            | KOTAK KOSONG SEBELUM TANGGAL 1
            |--------------------------------------------------------------------------
            */

            for (
                let i = 0;
                i < firstDay;
                i++
            ) {

                const emptyDay =
                    document.createElement('div');

                emptyDay.className =
                    'calendar-day empty';

                calendarDays.appendChild(
                    emptyDay
                );

            }


            /*
            |--------------------------------------------------------------------------
            | KAPAL YANG DIPILIH
            |--------------------------------------------------------------------------
            */

            const selectedShip =
                parseInt(calendarShip.value);


            /*
            |--------------------------------------------------------------------------
            | MEMBUAT TANGGAL
            |--------------------------------------------------------------------------
            */

            for (
                let day = 1;
                day <= totalDays;
                day++
            ) {

                const dayElement =
                    document.createElement('div');


                dayElement.className =
                    'calendar-day';


                /*
                |--------------------------------------------------------------------------
                | FORMAT YYYY-MM-DD
                |--------------------------------------------------------------------------
                */

                const dateString =
                    year +
                    '-' +
                    String(month + 1).padStart(2, '0') +
                    '-' +
                    String(day).padStart(2, '0');


                /*
                |--------------------------------------------------------------------------
                | CEK APAKAH SUDAH DIBOOKING
                |--------------------------------------------------------------------------
                */

                const isBooked =
                    bookings.some(
                        booking => {

                            return (
                                parseInt(
                                    booking.ship_id
                                ) === selectedShip
                                &&
                                booking.booking_date ===
                                dateString
                            );

                        }
                    );


                /*
                |--------------------------------------------------------------------------
                | CEK HARI INI
                |--------------------------------------------------------------------------
                */

                const today =
                    new Date();


                if (

                    day === today.getDate()
                    &&
                    month === today.getMonth()
                    &&
                    year === today.getFullYear()

                ) {

                    dayElement.classList.add(
                        'today'
                    );

                }


                /*
                |--------------------------------------------------------------------------
                | TAMPILKAN STATUS
                |--------------------------------------------------------------------------
                */

                if (isBooked) {

                    dayElement.classList.add(
                        'booked'
                    );


                    dayElement.innerHTML = `

                        <span
                            class="calendar-day-number"
                        >
                            ${day}
                        </span>

                        <span
                            class="calendar-status"
                        >
                            Dibooking
                        </span>

                    `;

                } else {

                    dayElement.innerHTML = `

                        <span
                            class="calendar-day-number"
                        >
                            ${day}
                        </span>

                    `;

                }


                calendarDays.appendChild(
                    dayElement
                );

            }

        }


        /*
        |--------------------------------------------------------------------------
        | BULAN SEBELUMNYA
        |--------------------------------------------------------------------------
        */

        prevMonth.addEventListener(
            'click',
            function () {

                currentDate.setMonth(
                    currentDate.getMonth() - 1
                );

                renderCalendar();

            }
        );


        /*
        |--------------------------------------------------------------------------
        | BULAN BERIKUTNYA
        |--------------------------------------------------------------------------
        */

        nextMonth.addEventListener(
            'click',
            function () {

                currentDate.setMonth(
                    currentDate.getMonth() + 1
                );

                renderCalendar();

            }
        );


        /*
        |--------------------------------------------------------------------------
        | GANTI KAPAL
        |--------------------------------------------------------------------------
        */

        calendarShip.addEventListener(
            'change',
            function () {

                renderCalendar();

            }
        );


        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN KALENDER
        |--------------------------------------------------------------------------
        */

        renderCalendar();

    </script>

<script>

document.addEventListener('DOMContentLoaded', function () {

    console.log('SLIDER NYANYIAN HUJAN AKTIF');


    /* =====================================================
       IKLAN 1
    ===================================================== */

    let currentAdvertisementOne = 0;

    const advertisementSlidesOne =
        document.querySelectorAll(
            '.advertisement-slider-one .advertisement-slide'
        );

    const advertisementPrevOne =
        document.querySelector('.advertisement-prev-one');

    const advertisementNextOne =
        document.querySelector('.advertisement-next-one');


    function showAdvertisementOne(index) {

        if (advertisementSlidesOne.length === 0) {
            return;
        }

        advertisementSlidesOne.forEach(function (slide) {
            slide.classList.remove('active');
        });

        currentAdvertisementOne = index;

        advertisementSlidesOne[currentAdvertisementOne]
            .classList.add('active');
    }


    function changeAdvertisementOne(direction) {

        if (advertisementSlidesOne.length === 0) {
            return;
        }

        currentAdvertisementOne += direction;

        if (
            currentAdvertisementOne >=
            advertisementSlidesOne.length
        ) {
            currentAdvertisementOne = 0;
        }

        if (currentAdvertisementOne < 0) {
            currentAdvertisementOne =
                advertisementSlidesOne.length - 1;
        }

        showAdvertisementOne(currentAdvertisementOne);
    }


    /* TOMBOL IKLAN 1 */

    if (advertisementPrevOne) {

        advertisementPrevOne.addEventListener(
            'click',
            function () {
                changeAdvertisementOne(-1);
            }
        );

    }

    if (advertisementNextOne) {

        advertisementNextOne.addEventListener(
            'click',
            function () {
                changeAdvertisementOne(1);
            }
        );

    }


    /* =====================================================
       IKLAN 2
    ===================================================== */

    let currentAdvertisementTwo = 0;

    const advertisementSlidesTwo =
        document.querySelectorAll(
            '.advertisement-slider-two .advertisement-slide'
        );

    const advertisementPrevTwo =
        document.querySelector('.advertisement-prev-two');

    const advertisementNextTwo =
        document.querySelector('.advertisement-next-two');


    function showAdvertisementTwo(index) {

        if (advertisementSlidesTwo.length === 0) {
            return;
        }

        advertisementSlidesTwo.forEach(function (slide) {
            slide.classList.remove('active');
        });

        currentAdvertisementTwo = index;

        advertisementSlidesTwo[currentAdvertisementTwo]
            .classList.add('active');
    }


    function changeAdvertisementTwo(direction) {

        if (advertisementSlidesTwo.length === 0) {
            return;
        }

        currentAdvertisementTwo += direction;

        if (
            currentAdvertisementTwo >=
            advertisementSlidesTwo.length
        ) {
            currentAdvertisementTwo = 0;
        }

        if (currentAdvertisementTwo < 0) {
            currentAdvertisementTwo =
                advertisementSlidesTwo.length - 1;
        }

        showAdvertisementTwo(currentAdvertisementTwo);
    }


    /* TOMBOL IKLAN 2 */

    if (advertisementPrevTwo) {

        advertisementPrevTwo.addEventListener(
            'click',
            function () {
                changeAdvertisementTwo(-1);
            }
        );

    }

    if (advertisementNextTwo) {

        advertisementNextTwo.addEventListener(
            'click',
            function () {
                changeAdvertisementTwo(1);
            }
        );

    }


    /* =====================================================
       AUTO SLIDER
    ===================================================== */

    if (advertisementSlidesOne.length > 1) {

        setInterval(function () {
            changeAdvertisementOne(1);
        }, 5000);

    }


    if (advertisementSlidesTwo.length > 1) {

        setInterval(function () {
            changeAdvertisementTwo(1);
        }, 5000);

    }

});


</script>