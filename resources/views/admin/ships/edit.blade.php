<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kapal · Nyanyian Hujan</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap');


        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* =========================
           BODY
        ========================= */

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
                    rgba(0,0,0,.45),
                    transparent
                );
        }


        /* =========================
           PAGE
        ========================= */

        .page {
            min-height: 100vh;

            padding: 25px 6% 80px;

            position: relative;

            z-index: 2;
        }


        .container {
            width: min(1000px, 100%);

            margin: auto;
        }


        /* =========================
           TOP BAR
        ========================= */

        .topbar {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 45px;
        }


        .brand-area {

            display: flex;

            align-items: center;

            gap: 14px;
        }


        .brand-icon {

            width: 45px;

            height: 45px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 13px;

            color: #00d9ff;

            background: rgba(0,217,255,.07);

            border: 1px solid rgba(0,217,255,.18);

            font-size: 20px;

            box-shadow:
                0 0 25px rgba(0,217,255,.05);
        }


        .brand-text h1 {

            color: #ffffff;

            font-size: 19px;

            font-weight: 700;

            letter-spacing: 3px;
        }


        .brand-text p {

            margin-top: 4px;

            color: #7199a8;

            font-size: 10px;

            letter-spacing: 1px;
        }


        .back-btn {

            display: inline-flex;

            align-items: center;

            gap: 9px;

            padding: 10px 16px;

            border-radius: 999px;

            color: #b8dce8;

            text-decoration: none;

            font-size: 11px;

            font-weight: 600;

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.09);

            transition: .3s ease;
        }


        .back-btn span {

            color: #00d9ff;

            font-size: 15px;
        }


        .back-btn:hover {

            color: #ffffff;

            border-color: rgba(0,217,255,.28);

            background: rgba(0,217,255,.06);

            transform: translateX(-2px);
        }


        /* =========================
           HEADER
        ========================= */

        .page-heading {

            text-align: center;

            margin-bottom: 35px;
        }


        .page-label {

            color: #00d9ff;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 4px;

            margin-bottom: 13px;
        }


        .page-heading h2 {

            font-family: 'Playfair Display', serif;

            color: #f6fdff;

            font-size: clamp(40px, 6vw, 58px);

            font-weight: 500;

            line-height: 1;

            margin-bottom: 15px;
        }


        .page-heading p {

            color: #8fb5c2;

            font-size: 13px;

            line-height: 1.8;

            max-width: 600px;

            margin: auto;
        }


        /* =========================
           MAIN CARD
        ========================= */

        .card {

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 22px;

            overflow: hidden;

            box-shadow:
                0 20px 55px rgba(0,0,0,.22),
                0 0 35px rgba(0,217,255,.025);
        }


        .form {

            padding: 34px;
        }


        /* =========================
           ERROR
        ========================= */

        .error {

            background: rgba(255,90,110,.06);

            color: #ff9eaa;

            padding: 17px 19px;

            border-radius: 13px;

            margin-bottom: 28px;

            font-size: 12px;

            border: 1px solid rgba(255,90,110,.18);
        }


        .error strong {

            display: block;

            margin-bottom: 8px;

            color: #ff7f91;
        }


        .error ul {

            margin-left: 18px;
        }


        .error li {

            margin-bottom: 4px;
        }


        /* =========================
           FORM GROUP
        ========================= */

        .form-group {

            margin-bottom: 27px;
        }


        label {

            display: block;

            margin-bottom: 9px;

            color: #c8e5ed;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;
        }


        .required {

            color: #00d9ff;

            margin-left: 2px;
        }


        input,
        textarea,
        select {

            width: 100%;

            padding: 14px 16px;

            border-radius: 12px;

            color: #e9faff;

            background: rgba(0,0,0,.18);

            border: 1px solid rgba(255,255,255,.09);

            outline: none;

            font-family: 'Montserrat', sans-serif;

            font-size: 13px;

            transition: .3s ease;
        }


        input::placeholder,
        textarea::placeholder {

            color: #547887;
        }


        input:focus,
        textarea:focus,
        select:focus {

            border-color: rgba(0,217,255,.40);

            background: rgba(0,217,255,.025);

            box-shadow:
                0 0 0 3px rgba(0,217,255,.055);
        }


        textarea {

            min-height: 135px;

            resize: vertical;

            line-height: 1.7;
        }


        .form-help {

            display: block;

            margin-top: 7px;

            color: #5f8593;

            font-size: 10px;

            line-height: 1.6;
        }


        /* =========================
           TWO COLUMNS
        ========================= */

        .form-row {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;
        }


        /* =========================
           IMAGE BOX
        ========================= */

        .image-box {

            padding: 23px;

            border-radius: 17px;

            background: rgba(0,0,0,.15);

            border: 1px solid rgba(255,255,255,.07);
        }


        .current-image {

            margin-bottom: 23px;
        }


        .current-title,
        .upload-title {

            display: flex;

            align-items: center;

            gap: 8px;

            color: #c8e5ed;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: .4px;

            margin-bottom: 12px;
        }


        .current-image img {

            width: 260px;

            height: 155px;

            object-fit: cover;

            display: block;

            border-radius: 14px;

            border: 1px solid rgba(0,217,255,.14);

            background: #061923;

            box-shadow:
                0 12px 30px rgba(0,0,0,.25);
        }


        .no-current-image {

            width: 260px;

            height: 155px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 14px;

            color: #5f8593;

            background: rgba(0,0,0,.20);

            border: 1px dashed rgba(255,255,255,.12);

            font-size: 11px;

            font-weight: 600;
        }


        input[type="file"] {

            padding: 10px;

            background: rgba(255,255,255,.025);

            cursor: pointer;
        }


        input[type="file"]::file-selector-button {

            padding: 8px 12px;

            margin-right: 10px;

            border: 1px solid rgba(0,217,255,.18);

            border-radius: 8px;

            color: #00d9ff;

            background: rgba(0,217,255,.06);

            font-family: 'Montserrat', sans-serif;

            font-size: 10px;

            font-weight: 600;

            cursor: pointer;
        }


        /* =========================
           DIVIDER
        ========================= */

        .or-divider {

            display: flex;

            align-items: center;

            gap: 12px;

            margin: 22px 0;

            color: #547887;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 1px;
        }


        .or-divider div {

            height: 1px;

            flex: 1;

            background: rgba(255,255,255,.07);
        }


        /* =========================
           STATUS
        ========================= */

        .status-box {

            padding: 3px;

            border-radius: 13px;

            background: rgba(0,0,0,.16);

            border: 1px solid rgba(255,255,255,.08);
        }


        .status-box select {
    border: none;

    background: #061923;

    color: #e9faff;

    box-shadow: none;

    cursor: pointer;
}


/* WARNA PILIHAN DROPDOWN */

.status-box select option {
    background: #061923;

    color: #e9faff;
}


/* PILIHAN YANG SEDANG AKTIF */

.status-box select option:checked {
    background: #0b3443;

    color: #00d9ff;
}


        /* =========================
           FORM ACTIONS
        ========================= */

        .form-actions {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 14px;

            padding-top: 8px;

            margin-top: 10px;
        }


        .cancel-btn,
        .submit-btn {

            min-height: 48px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 999px;

            font-family: 'Montserrat', sans-serif;

            font-size: 11px;

            font-weight: 700;

            letter-spacing: .5px;

            text-decoration: none;

            cursor: pointer;

            transition: .3s ease;
        }


        .cancel-btn {

            color: #8fb5c2;

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.09);
        }


        .cancel-btn:hover {

            color: #ffffff;

            background: rgba(255,255,255,.06);

            border-color: rgba(255,255,255,.16);

            transform: translateY(-2px);
        }


        .submit-btn {

            color: #00141c;

            background: #00d9ff;

            border: 1px solid rgba(0,217,255,.30);
        }


        .submit-btn:hover {

            background: #54e6ff;

            transform: translateY(-2px);

            box-shadow:
                0 12px 28px rgba(0,217,255,.17);
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 700px) {

            .page {

                padding: 20px 5% 60px;
            }


            .topbar {

                flex-direction: column;

                align-items: stretch;

                gap: 15px;

                margin-bottom: 35px;
            }


            .back-btn {

                justify-content: center;
            }


            .page-heading h2 {

                font-size: 40px;
            }


            .form {

                padding: 23px;
            }


            .form-row {

                grid-template-columns: 1fr;

                gap: 0;
            }


            .form-actions {

                grid-template-columns: 1fr;
            }


            .current-image img,
            .no-current-image {

                width: 100%;

                max-width: 320px;

                height: 190px;
            }
        }


        @media (max-width: 450px) {

            .brand-text h1 {

                font-size: 17px;

                letter-spacing: 2px;
            }


            .page-heading h2 {

                font-size: 35px;
            }


            .image-box {

                padding: 17px;
            }
        }
    </style>
</head>


<body>

<div class="page">

    <div class="container">


        {{-- TOP BAR --}}

        <div class="topbar">

            <div class="brand-area">

                <div class="brand-icon">
                    ⚓
                </div>

                <div class="brand-text">

                    <h1>
                        NYANYIAN HUJAN
                    </h1>

                    <p>
                        PANEL ADMINISTRATOR
                    </p>

                </div>

            </div>


            <a
                href="{{ route('admin.ships.index') }}"
                class="back-btn"
            >
                <span>←</span>
                Kembali ke Data Kapal
            </a>

        </div>


        {{-- PAGE HEADER --}}

        <div class="page-heading">

            <div class="page-label">
                MANAGE SHIP
            </div>

            <h2>
                Edit Kapal
            </h2>

            <p>
                Perbarui informasi kapal yang sudah terdaftar
                di Nyanyian Hujan.
            </p>

        </div>


        {{-- MAIN CARD --}}

        <div class="card">

            <div class="form">


                {{-- ERROR --}}

                @if($errors->any())

                    <div class="error">

                        <strong>
                            Terjadi kesalahan:
                        </strong>

                        <ul>

                            @foreach($errors->all() as $error)

                                <li>
                                    {{ $error }}
                                </li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                <form
                    action="{{ route('admin.ships.update', $ship) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    @method('PUT')


                    {{-- NAMA KAPAL --}}

                    <div class="form-group">

                        <label for="name">

                            Nama Kapal

                            <span class="required">
                                *
                            </span>

                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $ship->name) }}"
                            required
                        >

                        <small class="form-help">
                            Nama kapal yang ditampilkan kepada pelanggan.
                        </small>

                    </div>


                    {{-- DESKRIPSI --}}

                    <div class="form-group">

                        <label for="description">
                            Deskripsi Kapal
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            placeholder="Masukkan deskripsi kapal..."
                        >{{ old('description', $ship->description) }}</textarea>

                        <small class="form-help">
                            Perbarui fasilitas atau informasi penting mengenai kapal.
                        </small>

                    </div>


                    {{-- HARGA + KAPASITAS --}}

                    <div class="form-row">

                        <div class="form-group">

                            <label for="price">

                                Harga

                                <span class="required">
                                    *
                                </span>

                            </label>

                            <input
                                type="number"
                                id="price"
                                name="price"
                                value="{{ old('price', $ship->price) }}"
                                min="0"
                                required
                            >

                            <small class="form-help">
                                Contoh: 1500000
                            </small>

                        </div>


                        <div class="form-group">

                            <label for="capacity">

                                Kapasitas Penumpang

                                <span class="required">
                                    *
                                </span>

                            </label>

                            <input
                                type="number"
                                id="capacity"
                                name="capacity"
                                value="{{ old('capacity', $ship->capacity) }}"
                                min="1"
                                required
                            >

                            <small class="form-help">
                                Jumlah maksimal penumpang.
                            </small>

                        </div>

                    </div>


                    {{-- FOTO --}}

                    <div class="form-group">

                        <label>
                            Foto Kapal
                        </label>


                        <div class="image-box">


                            {{-- FOTO SAAT INI --}}

                            <div class="current-image">

                                <div class="current-title">
                                    🖼️ Foto Saat Ini
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

                                    <div class="no-current-image">
                                        Belum ada foto
                                    </div>

                                @endif

                            </div>


                            {{-- UPLOAD BARU --}}

                            <div class="upload-title">
                                📷 Ganti dengan Upload dari Komputer
                            </div>


                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept="image/jpeg,image/png,image/jpg,image/webp"
                            >


                            <small class="form-help">

                                Pilih foto baru jika ingin mengganti foto saat ini.

                                Format JPG, JPEG, PNG, atau WEBP.

                                Maksimal ukuran file 30 MB.

                            </small>


                            <div class="or-divider">

                                <div></div>

                                ATAU

                                <div></div>

                            </div>


                            {{-- URL BARU --}}

                            <div class="upload-title">
                                🌐 Ganti dengan URL Gambar
                            </div>


                            <input
                                type="url"
                                id="image_url"
                                name="image_url"
                                value="{{ old('image_url') }}"
                                placeholder="https://example.com/kapal.jpg"
                            >


                            <small class="form-help">
                                Isi URL jika ingin mengganti foto dengan gambar dari internet.
                            </small>

                        </div>

                    </div>


                    {{-- STATUS --}}

                    <div class="form-group">

                        <label for="status">
                            Status Kapal
                        </label>


                        <div class="status-box">

                            <select
                                id="status"
                                name="status"
                            >

                                <option
                                    value="1"
                                    {{ old('status', $ship->status ? '1' : '0') == '1' ? 'selected' : '' }}
                                >
                                    Aktif — tampil dan dapat dipesan
                                </option>


                                <option
                                    value="0"
                                    {{ old('status', $ship->status ? '1' : '0') == '0' ? 'selected' : '' }}
                                >
                                    Tidak Aktif — tidak ditampilkan
                                </option>

                            </select>

                        </div>

                    </div>


                    {{-- BUTTON --}}

                    <div class="form-actions">

                        <a
                            href="{{ route('admin.ships.index') }}"
                            class="cancel-btn"
                        >
                            Batal
                        </a>


                        <button
                            type="submit"
                            class="submit-btn"
                        >
                            Simpan Perubahan
                        </button>

                    </div>


                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>
