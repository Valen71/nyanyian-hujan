<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Booking {{ $ship->name }} - Nyanyian Hujan
    </title>

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
            rgba(0,217,255,.10),
            transparent 28%
        ),
        radial-gradient(
            circle at bottom right,
            rgba(0,128,170,.16),
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

/* =========================
   NAVBAR
========================= */

nav {
    width: 100%;
    height: auto;

    padding: 22px 6%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    position: relative;
    z-index: 10;

    background: transparent;

    border-bottom: 1px solid rgba(255,255,255,.05);
}

.logo {
    color: #ffffff;

    font-family: 'Montserrat', sans-serif;

    font-size: 20px;
    font-weight: 700;

    letter-spacing: 3px;
}

.logo span {
    color: #00d9ff;
}

.nav-right {
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,255,255,.72);
}

/* =========================
   CONTAINER
========================= */

.container {
    width: min(1050px, 92%);
    margin: 35px auto 90px;

    position: relative;
    z-index: 2;
}

/* =========================
   BACK BUTTON
========================= */

.back {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    margin-bottom: 20px;
    padding: 10px 16px;

    border-radius: 999px;

    color: #b8dce8;
    text-decoration: none;

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(255,255,255,.09);

    box-shadow:
        0 8px 22px rgba(0,0,0,.14),
        inset 0 1px 0 rgba(255,255,255,.05);

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

    background: rgba(0,217,255,.08);

    border: 1px solid rgba(0,217,255,.16);

    font-size: 14px;

    transition:
        transform .35s cubic-bezier(.22,1,.36,1),
        background .3s ease;
}

.back:hover {
    color: #ffffff;

    border-color: rgba(0,217,255,.28);

    background: rgba(0,217,255,.06);

    transform: scale(1.018);

    box-shadow:
        0 12px 28px rgba(0,0,0,.20),
        0 0 20px rgba(0,217,255,.06);
}

.back:hover .back-icon {
    transform: translateX(-2px);
    background: rgba(0,217,255,.14);
}

/* =========================
   MAIN CARD
========================= */

.card {
    width: 100%;

    padding: 42px;

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

/* =========================
   HEADER
========================= */

.card-header {
    margin-bottom: 30px;
    padding-bottom: 25px;

    border-bottom:
        1px solid rgba(255,255,255,.08);
}

.card-header h1 {
    color: #f6fdff;

    font-family: 'Playfair Display', serif;

    font-size: clamp(30px, 5vw, 50px);

    font-weight: 500;

    line-height: 1.05;

    letter-spacing: -1px;

    margin-bottom: 12px;
}

.subtitle {
    color: #8faab4;

    font-size: 13px;

    line-height: 1.8;

    margin-bottom: 16px;
}

.ship-name {
    display: inline-flex;
    align-items: center;

    width: fit-content;

    padding: 8px 13px;

    border-radius: 999px;

    color: #7eeaff;

    background: rgba(0,217,255,.07);

    border:
        1px solid rgba(0,217,255,.15);

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.2px;

    text-transform: uppercase;
}

/* =========================
   ERROR
========================= */

.error {
    margin-bottom: 25px;

    padding: 17px 18px;

    border-radius: 16px;

    background:
        rgba(255,76,76,.07);

    border:
        1px solid rgba(255,76,76,.18);

    color: #ffb0b0;

    font-size: 12px;

    line-height: 1.7;
}

.error strong {
    display: block;

    margin-bottom: 7px;

    color: #ff8e8e;
}

.error ul {
    padding-left: 20px;
}

/* =========================
   FORM
========================= */

.form-group {
    margin-bottom: 23px;
}

label {
    display: block;

    margin-bottom: 9px;

    color: #c8e2ea;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.4px;

    text-transform: uppercase;
}

input,
textarea,
select {
    width: 100%;

    padding: 14px 15px;

    border-radius: 13px;

    border:
        1px solid rgba(255,255,255,.09);

    background:
        rgba(0,0,0,.18);

    color: #f0fbff;

    font-family: 'Montserrat', sans-serif;

    font-size: 13px;

    outline: none;

    transition:
        border-color .3s ease,
        box-shadow .3s ease,
        background .3s ease;
}

input::placeholder,
textarea::placeholder {
    color: #6e8d99;
}

input:focus,
textarea:focus,
select:focus {
    border-color:
        rgba(0,217,255,.50);

    background:
        rgba(0,0,0,.23);

    box-shadow:
        0 0 0 4px rgba(0,217,255,.07);
}

textarea {
    min-height: 120px;
    resize: vertical;
}

select {
    appearance: auto;
}

small {
    display: block;

    margin-top: 7px;

    color: #688792;

    font-size: 10px;

    line-height: 1.6;
}

/* =========================
   ROW
========================= */

.row {
    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 18px;
}

/* =========================
   TIME
========================= */

.time-select {
    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 10px;
}

/* =========================
   CALENDAR
========================= */

.calendar-wrapper {
    padding: 18px;

    border-radius: 20px;

    background:
        rgba(255,255,255,.025);

    border:
        1px solid rgba(255,255,255,.08);

    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.04);
}

.calendar-header {
    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 15px;

    margin-bottom: 18px;
}

.calendar-title {
    color: #edfaff;

    font-family: 'Playfair Display', serif;

    font-size: 20px;

    font-weight: 500;
}

.calendar-buttons {
    display: flex;

    gap: 7px;
}

.calendar-buttons button {
    width: 36px;
    height: 36px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(255,255,255,.08);

    border-radius: 10px;

    background:
        rgba(255,255,255,.045);

    color: #bfeaf4;

    font-size: 19px;

    cursor: pointer;

    transition:
        transform .3s ease,
        background .3s ease,
        border-color .3s ease;
}

.calendar-buttons button:hover {
    background:
        rgba(0,217,255,.10);

    border-color:
        rgba(0,217,255,.22);

    transform: scale(1.03);
}

.calendar-weekdays {
    width: 100%;

    display: grid !important;

    grid-template-columns:
        repeat(7, minmax(0, 1fr)) !important;

    gap: 5px;

    margin-bottom: 5px;
}

.calendar-weekdays div {
    text-align: center;

    padding: 8px 2px;

    color: #6f909d;

    font-size: 9px;

    font-weight: 700;

    letter-spacing: .8px;

    text-transform: uppercase;
}

.calendar-days {
    width: 100%;

    display: grid !important;

    grid-template-columns:
        repeat(7, minmax(0, 1fr)) !important;

    grid-template-rows:
        repeat(6, minmax(60px, 1fr)) !important;

    gap: 5px;
}

.calendar-day {
    min-width: 0;

    min-height: 60px;

    display: flex;

    align-items: center;
    justify-content: center;

    position: relative;

    border-radius: 12px;

    border:
        1px solid rgba(255,255,255,.07);

    background:
        rgba(255,255,255,.025);

    color: #aec7d0;

    font-size: 12px;

    font-weight: 600;

    cursor: pointer;

    transition:
        transform .3s cubic-bezier(.22,1,.36,1),
        background .3s ease,
        border-color .3s ease;
}

.calendar-day:hover {
    transform: scale(1.015);

    border-color:
        rgba(0,217,255,.20);

    background:
        rgba(0,217,255,.045);
}

.calendar-day.empty {
    background: transparent;
    border-color: transparent;
    cursor: default;
}

.calendar-day.empty:hover {
    transform: none;
}

/* TODAY */

.calendar-day.today {
    border:
        2px solid #00d9ff;

    background:
        linear-gradient(
            145deg,
            rgba(0,217,255,.35),
            rgba(0,168,232,.18)
        );

    box-shadow:
        0 0 0 3px rgba(0,217,255,.12),
        0 10px 28px rgba(0,217,255,.20);

    color: #ffffff;
}

/* BOOKED */

.calendar-day.booked {
    background:
        rgba(255,76,76,.08);

    border:
        1px solid rgba(255,76,76,.28);

    color: #ff9696;

    cursor: not-allowed;
}

.calendar-day.booked:hover {
    transform: none;

    background:
        rgba(255,76,76,.10);

    border-color:
        rgba(255,76,76,.34);
}

.calendar-day.booked::after {
    content: "BOOKED";

    position: absolute;

    bottom: 5px;

    font-size: 5px;

    font-weight: 800;

    letter-spacing: .5px;

    color: #ff7f7f;
}

/* SELECTED */

.calendar-day.selected {
    background:
        linear-gradient(
            135deg,
            #00e2ff,
            #00a9d7
        );

    border-color:
        #00d9ff;

    color: #031018;

    box-shadow:
        0 10px 25px rgba(0,217,255,.20);
}

.calendar-day.selected::after {
    content: "PILIH";

    position: absolute;

    bottom: 5px;

    font-size: 5px;

    font-weight: 800;

    letter-spacing: .5px;

    color: #031018;
}

/* PAST */

.calendar-day.past {
    background:
        rgba(255,255,255,.012);

    color: #49626c;

    border-color:
        rgba(255,255,255,.035);

    cursor: not-allowed;
}

.calendar-day.past:hover {
    transform: none;
}

/* =========================
   LEGEND
========================= */

.calendar-legend {
    display: flex;

    gap: 17px;

    margin-top: 16px;

    flex-wrap: wrap;
}

.legend-item {
    display: flex;

    align-items: center;

    gap: 7px;

    color: #72919d;

    font-size: 9px;

    font-weight: 600;
}

.legend-box {
    width: 12px;
    height: 12px;

    border-radius: 4px;
}

.legend-available {
    background:
        rgba(255,255,255,.025);

    border:
        1px solid rgba(255,255,255,.10);
}

.legend-booked {
    background:
        rgba(255,76,76,.15);

    border:
        1px solid rgba(255,76,76,.28);
}

.legend-selected {
    background:
        #00d9ff;
}

/* =========================
   DATE SELECTED
========================= */

.selected-date-display {
    margin-top: 13px;

    padding: 12px 13px;

    border-radius: 12px;

    background:
        rgba(0,217,255,.05);

    border:
        1px solid rgba(0,217,255,.13);

    color: #8feaff;

    font-size: 11px;

    font-weight: 600;
}

.date-warning {
    display: none;

    margin-top: 10px;

    padding: 11px 13px;

    border-radius: 12px;

    background:
        rgba(255,76,76,.07);

    border:
        1px solid rgba(255,76,76,.18);

    color: #ffaaa9;

    font-size: 11px;

    font-weight: 600;
}

.date-warning.show {
    display: block;
}

/* =========================
   SUBMIT BUTTON
========================= */

.btn {
    width: 100%;

    min-height: 56px;

    border: none;

    border-radius: 15px;

    background:
        linear-gradient(
            135deg,
            #00e2ff,
            #00a9d7
        );

    color: #031018;

    font-family: 'Montserrat', sans-serif;

    font-size: 13px;

    font-weight: 700;

    letter-spacing: .5px;

    cursor: pointer;

    box-shadow:
        0 14px 30px rgba(0,217,255,.16);

    transition:
        transform .35s cubic-bezier(.22,1,.36,1),
        filter .35s ease,
        box-shadow .35s ease;
}

.btn:hover {
    transform: scale(1.012);

    filter: brightness(1.04);

    box-shadow:
        0 18px 36px rgba(0,217,255,.22);
}

.btn:disabled {
    background:
        rgba(255,255,255,.08);

    color: #66808a;

    cursor: not-allowed;

    box-shadow: none;
}

/* =========================
   MOBILE
========================= */

@media (max-width: 800px) {

    nav {
        padding: 20px 5%;
    }

    .nav-right {
        display: none;
    }

    .container {
        width: 92%;

        margin-top: 27px;
    }

    .card {
        padding: 28px 22px;

        border-radius: 24px;
    }

    .card-header h1 {
        font-size: 39px;
    }

    .row {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .calendar-wrapper {
        padding: 13px;
    }

    .calendar-day {
        min-height: 48px;
        font-size: 11px;
    }

    .calendar-weekdays div {
        font-size: 8px;
    }
}

@media (max-width: 520px) {

    .back {
        width: fit-content;
    }

    .back span:last-child {
        display: inline;
    }

    .card {
        padding: 23px 17px;
    }

    .card-header h1 {
        font-size: 34px;
    }

    .calendar-title {
        font-size: 18px;
    }

    .calendar-days {
        grid-template-rows:
            repeat(6, minmax(43px, 1fr)) !important;
    }

    .calendar-day {
        min-height: 43px;
        border-radius: 9px;
    }

    .calendar-day.booked::after,
    .calendar-day.selected::after {
        font-size: 4px;
    }

    .calendar-legend {
        gap: 10px;
    }
}
/* =========================
   SPACING LEBIH LEGA
========================= */

.container {
    margin-top: 70px;
    margin-bottom: 80px;
}

.card {
    padding: 52px;
}

.card-header {
    margin-bottom: 38px;
    padding-bottom: 30px;
}

.form-group {
    margin-bottom: 30px;
}

.row {
    gap: 26px;
}

.time-select {
    gap: 16px;
}

.calendar-wrapper {
    padding: 24px;
}

.calendar-header {
    margin-bottom: 24px;
}

.calendar-legend {
    margin-top: 24px;
}

.selected-date-display {
    margin-top: 16px;
}

.date-warning {
    margin-top: 14px;
}

/* Tombol supaya tidak terlalu menempel */
.btn {
    margin-top: 8px;
}
/* =========================
   JARAK INFO KAPAL BOOKING
========================= */

.ship-name {
    margin-top: 22px !important;
    margin-bottom: 22px !important;
    padding: 18px 20px !important;
}

.ship-name + * {
    margin-top: 20px !important;
}

.card-header > * {
    margin-bottom: 20px;
}

.card-header > *:last-child {
    margin-bottom: 0;
}
/* =========================
   JARAK DATA PEMESAN
========================= */

.form-section-title {
    margin-bottom: 28px !important;
}

.form-section-title + .form-group {
    margin-top: 8px !important;
}

.form-group {
    margin-bottom: 30px !important;
}

.form-group label {
    margin-bottom: 12px !important;
}
/* Jarak judul section ke field pertama */
.form-group:first-of-type {
    margin-top: 0px !important;
}
.section-title {
    margin-bottom: 22px;
    font-weight: 700;
}

.nav-right {
    font-family: 'Montserrat', sans-serif;
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 1.8px;
    color: rgba(255,255,255,.72);
    text-transform: uppercase;
}

.nav-text {
    font-family: 'Montserrat', sans-serif;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 2.2px;
    color: rgba(255,255,255,.55);
    text-transform: uppercase;
}

/* =========================
   DROPDOWN JAM & MENIT
========================= */

.time-select select {
    background: #0b1728 !important;
    color: #ffffff !important;
    border: 1px solid rgba(0, 217, 255, .25) !important;
    color-scheme: dark;
}

.time-select select option {
    background: #0b1728;
    color: #ffffff;
}

.time-select select:focus {
    border-color: #00d9ff !important;
    box-shadow: 0 0 0 3px rgba(0, 217, 255, .10) !important;
}

</style>

</head>


<body>


{{-- =========================
     NAVBAR
========================= --}}

<nav>

    <nav>
    <a href="/" class="logo">
        NYANYIAN HUJAN
    </a>

    <div class="nav-right">
        Booking Reservation
    </div>
</nav>

    <div class="nav-text">
        BOOKING PERJALANAN LAUT
    </div>

</nav>


<div class="container">


    {{-- =========================
         BACK
    ========================= --}}

    <a href="{{ route('ships.show', $ship) }}" class="back">
    <span class="back-icon">←</span>
    <span>Kembali ke Detail</span>
</a>


    {{-- =========================
         CARD
    ========================= --}}

    <div class="card">


        {{-- HEADER --}}

        <div class="card-header">

            <span class="eyebrow">
                Nyanyian Hujan BOOKING
            </span>

            <h1>
                Booking Kapal
            </h1>

            <div class="subtitle">
                Lengkapi data di bawah ini untuk melakukan
                pemesanan perjalanan bersama Nyanyian Hujan.
            </div>


            {{-- SHIP SUMMARY --}}

            <div class="ship-summary">


                <div class="ship-info">

                    <div class="ship-icon">
                        
                    </div>

                    <div>

                        <div class="ship-name">
                            {{ $ship->name }}
                        </div>

                        <div class="ship-capacity">
                            👥 Kapasitas {{ $ship->capacity }} orang
                        </div>

                    </div>

                </div>


                <div class="ship-price">

                    Rp {{ number_format($ship->price, 0, ',', '.') }}

                    <span>
                        / booking
                    </span>

                </div>


            </div>

        </div>


        {{-- FORM --}}

        <div class="form">


            {{-- ERROR --}}

            @if ($errors->any())

                <div class="error">

                    <strong>
                        Periksa kembali data berikut:
                    </strong>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('bookings.store', $ship) }}"
                method="POST"
                id="bookingForm"
            >

                @csrf


                {{-- =========================
                     DATA PEMESAN
                ========================= --}}

                <div class="section-title">
                    Data Pemesan
                </div>


                <div class="form-group">

                    <label for="customer_name">
                        Nama Lengkap
                        <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="customer_name"
                        name="customer_name"
                        value="{{ old('customer_name') }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                </div>


                <div class="row">


                    <div class="form-group">

                        <label for="customer_email">
                            Email
                            <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            id="customer_email"
                            name="customer_email"
                            value="{{ old('customer_email') }}"
                            placeholder="contoh@email.com"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="customer_phone">
                            Nomor Telepon
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="customer_phone"
                            name="customer_phone"
                            value="{{ old('customer_phone') }}"
                            placeholder="08xxxxxxxxxx"
                            required
                        >

                    </div>


                </div>


                {{-- =========================
                     JADWAL
                ========================= --}}

                <div class="section-title">
                    Jadwal Perjalanan
                </div>


                <div class="row">


                    {{-- KALENDER --}}

                    <div class="form-group">

                        <label>
                            Tanggal Booking
                            <span class="required">*</span>
                        </label>


                        <div class="calendar-wrapper">


                            <div class="calendar-header">

                                <div
                                    class="calendar-title"
                                    id="calendarTitle"
                                >
                                    -
                                </div>


                                <div class="calendar-buttons">

                                    <button
                                        type="button"
                                        id="previousMonth"
                                    >
                                        ‹
                                    </button>

                                    <button
                                        type="button"
                                        id="nextMonth"
                                    >
                                        ›
                                    </button>

                                </div>

                            </div>


                            <div class="calendar-weekdays">

                                <div>Min</div>
                                <div>Sen</div>
                                <div>Sel</div>
                                <div>Rab</div>
                                <div>Kam</div>
                                <div>Jum</div>
                                <div>Sab</div>

                            </div>


                            <div
                                class="calendar-days"
                                id="calendarDays"
                            ></div>


                            <div class="calendar-legend">

                                <div class="legend-item">

                                    <span
                                        class="legend-box legend-available"
                                    ></span>

                                    Tersedia

                                </div>


                                <div class="legend-item">

                                    <span
                                        class="legend-box legend-booked"
                                    ></span>

                                    Sudah dibooking

                                </div>


                                <div class="legend-item">

                                    <span
                                        class="legend-box legend-selected"
                                    ></span>

                                    Dipilih

                                </div>

                            </div>


                            <div
                                class="selected-date-display"
                                id="selectedDateDisplay"
                            >
                                Silakan pilih tanggal booking.
                            </div>


                            <div
                                class="date-warning"
                                id="dateWarning"
                            >
                                ⚠️ Tanggal tersebut sudah dibooking.
                                Silakan pilih tanggal lain.
                            </div>


                        </div>


                        {{-- INPUT TANGGAL --}}

                        <input
                            type="hidden"
                            name="booking_date"
                            id="bookingDate"
                            value="{{ old('booking_date') }}"
                            required
                        >

                        <small class="help">
                            Tanggal merah berarti kapal sudah dibooking.
                        </small>

                    </div>


                    {{-- JAM --}}

                    <div class="form-group">

                        <label>
                            Jam Booking
                            <span class="required">*</span>
                        </label>


                        <div class="time-select">


                            <select
                                name="booking_hour"
                                required
                            >

                                <option value="">
                                    Jam
                                </option>


                                @for ($hour = 0; $hour <= 23; $hour++)

                                    <option
                                        value="{{ $hour }}"
                                        {{ old('booking_hour') == $hour ? 'selected' : '' }}
                                    >
                                        {{ sprintf('%02d', $hour) }}
                                    </option>

                                @endfor

                            </select>


                            <select
                                name="booking_minute"
                                required
                            >

                                <option value="">
                                    Menit
                                </option>


                                @for ($minute = 0; $minute <= 59; $minute++)

                                    <option
                                        value="{{ $minute }}"
                                        {{ old('booking_minute') == $minute ? 'selected' : '' }}
                                    >
                                        {{ sprintf('%02d', $minute) }}
                                    </option>

                                @endfor

                            </select>


                        </div>

                    </div>


                </div>


                {{-- =========================
                     DETAIL PERJALANAN
                ========================= --}}

                <div class="section-title">
                    Detail Perjalanan
                </div>


                <div class="row">


                    <div class="form-group">

                        <label for="passengers">
                            Jumlah Penumpang
                            <span class="required">*</span>
                        </label>

                        <input
                            type="number"
                            id="passengers"
                            name="passengers"
                            value="{{ old('passengers') }}"
                            min="1"
                            max="{{ $ship->capacity }}"
                            placeholder="Jumlah penumpang"
                            required
                        >

                        <small class="help">
                            Maksimal {{ $ship->capacity }} orang.
                        </small>

                    </div>


                    <div class="form-group">

                        <label for="destination">
                            Tujuan
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="destination"
                            name="destination"
                            value="{{ old('destination') }}"
                            placeholder="Contoh: Mentawai"
                            required
                        >

                    </div>


                </div>


                {{-- CATATAN --}}

                <div class="form-group">

                    <label for="notes">
                        Catatan
                    </label>

                    <textarea
                        id="notes"
                        name="notes"
                        placeholder="Tambahkan catatan jika diperlukan..."
                    >{{ old('notes') }}</textarea>

                    <small class="help">
                        Catatan tambahan bersifat opsional.
                    </small>

                </div>


                {{-- SUBMIT --}}

                <div class="submit-area">

                    <button
                        type="submit"
                        class="btn"
                        id="submitButton"
                    >
                        Kirim Booking →
                    </button>

                    <div class="secure-text">
                        Data booking akan diproses oleh sistem Nyanyian Hujan.
                    </div>

                </div>


            </form>

        </div>

    </div>

</div>


<script>

/* =====================================================
   DATA BOOKING DARI LARAVEL
===================================================== */

const bookedDates = @json($bookedDates);


/* =====================================================
   ELEMENT
===================================================== */

const calendarDays =
    document.getElementById('calendarDays');

const calendarTitle =
    document.getElementById('calendarTitle');

const bookingDate =
    document.getElementById('bookingDate');

const selectedDateDisplay =
    document.getElementById('selectedDateDisplay');

const dateWarning =
    document.getElementById('dateWarning');

const previousMonth =
    document.getElementById('previousMonth');

const nextMonth =
    document.getElementById('nextMonth');

const bookingForm =
    document.getElementById('bookingForm');


/* =====================================================
   NAMA BULAN
===================================================== */

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


/* =====================================================
   HARI INI
===================================================== */

const today = new Date();

today.setHours(
    0,
    0,
    0,
    0
);


/* =====================================================
   BULAN AKTIF
===================================================== */

let currentDate = new Date();

currentDate.setDate(1);


/* =====================================================
   FORMAT TANGGAL
===================================================== */

function formatDate(
    year,
    month,
    day
) {

    return (
        year +
        '-' +
        String(month + 1).padStart(2, '0') +
        '-' +
        String(day).padStart(2, '0')
    );

}


/* =====================================================
   CEK BOOKING
===================================================== */

function isBooked(dateString) {

    return bookedDates.includes(
        dateString
    );

}


/* =====================================================
   CEK TANGGAL LEWAT
===================================================== */

function isPast(
    year,
    month,
    day
) {

    const date =
        new Date(
            year,
            month,
            day
        );

    date.setHours(
        0,
        0,
        0,
        0
    );

    return date < today;

}


/* =====================================================
   RENDER CALENDAR
===================================================== */

function renderCalendar() {

    const year =
        currentDate.getFullYear();

    const month =
        currentDate.getMonth();


    calendarTitle.textContent =
        monthNames[month] +
        ' ' +
        year;


    calendarDays.innerHTML = '';


    const firstDay =
        new Date(
            year,
            month,
            1
        ).getDay();


    const totalDays =
        new Date(
            year,
            month + 1,
            0
        ).getDate();


    /* KOTAK KOSONG */

    for (
        let i = 0;
        i < firstDay;
        i++
    ) {

        const empty =
            document.createElement(
                'div'
            );

        empty.className =
            'calendar-day empty';

        calendarDays.appendChild(
            empty
        );

    }


    /* TANGGAL */

    for (
        let day = 1;
        day <= totalDays;
        day++
    ) {

        const dateString =
            formatDate(
                year,
                month,
                day
            );


        const dayElement =
            document.createElement(
                'div'
            );


        dayElement.className =
            'calendar-day';


        dayElement.textContent =
            day;


        /* BOOKED */

        if (
            isBooked(
                dateString
            )
        ) {

            dayElement.classList.add(
                'booked'
            );

        }


        /* PAST */

        if (
            isPast(
                year,
                month,
                day
            )
        ) {

            dayElement.classList.add(
                'past'
            );

        }


        /* SELECTED */

        if (
            bookingDate.value ===
            dateString
        ) {

            dayElement.classList.add(
                'selected'
            );

        }


        /* TODAY */

        const dateObject =
            new Date(
                year,
                month,
                day
            );

        dateObject.setHours(
            0,
            0,
            0,
            0
        );


        if (
            dateObject.getTime() ===
            today.getTime()
        ) {

            dayElement.classList.add(
                'today'
            );

        }


        /* CLICK */

        dayElement.addEventListener(
            'click',
            function () {


                /* SUDAH BOOKING */

                if (
                    isBooked(
                        dateString
                    )
                ) {

                    dateWarning.classList.add(
                        'show'
                    );

                    return;

                }


                /* SUDAH LEWAT */

                if (
                    isPast(
                        year,
                        month,
                        day
                    )
                ) {

                    return;

                }


                /* SIMPAN */

                bookingDate.value =
                    dateString;


                /* HILANGKAN WARNING */

                dateWarning.classList.remove(
                    'show'
                );


                /* TAMPILKAN */

                const displayDate =
                    new Date(
                        year,
                        month,
                        day
                    );


                selectedDateDisplay.textContent =
                    '📅 Tanggal dipilih: ' +
                    displayDate.toLocaleDateString(
                        'id-ID',
                        {
                            day: 'numeric',
                            month: 'long',
                            year: 'numeric'
                        }
                    );


                renderCalendar();

            }
        );


        calendarDays.appendChild(
            dayElement
        );

    }

}


/* =====================================================
   BULAN SEBELUMNYA
===================================================== */

previousMonth.addEventListener(
    'click',
    function () {

        currentDate.setMonth(
            currentDate.getMonth() - 1
        );

        renderCalendar();

    }
);


/* =====================================================
   BULAN BERIKUTNYA
===================================================== */

nextMonth.addEventListener(
    'click',
    function () {

        currentDate.setMonth(
            currentDate.getMonth() + 1
        );

        renderCalendar();

    }
);


/* =====================================================
   CEGAH BOOKING TANPA TANGGAL
===================================================== */

bookingForm.addEventListener(
    'submit',
    function (event) {

        if (
            !bookingDate.value
        ) {

            event.preventDefault();

            alert(
                'Silakan pilih tanggal booking terlebih dahulu.'
            );

            return;

        }


        if (
            isBooked(
                bookingDate.value
            )
        ) {

            event.preventDefault();

            alert(
                'Tanggal tersebut sudah dibooking. Silakan pilih tanggal lain.'
            );

        }

    }
);


/* =====================================================
   TAMPILKAN OLD DATE
===================================================== */

function showOldDate() {

    if (
        !bookingDate.value
    ) {

        return;

    }


    const parts =
        bookingDate.value.split('-');


    const year =
        parseInt(
            parts[0]
        );


    const month =
        parseInt(
            parts[1]
        ) - 1;


    const day =
        parseInt(
            parts[2]
        );


    const oldDate =
        new Date(
            year,
            month,
            day
        );


    selectedDateDisplay.textContent =
        '📅 Tanggal dipilih: ' +
        oldDate.toLocaleDateString(
            'id-ID',
            {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            }
        );


    currentDate =
        new Date(
            year,
            month,
            1
        );

}


/* =====================================================
   JALANKAN
===================================================== */

showOldDate();

renderCalendar();

</script>


</body>

</html>

