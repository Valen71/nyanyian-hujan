<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Kapal · Nyanyian Hujan</title>

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
                rgba(0,0,0,.5),
                transparent
            );
        }

        /* PAGE */

        .page {
            min-height: 100vh;
            padding: 35px 20px 60px;
        }

        .container {
            width: min(850px, 100%);
            margin: auto;
            position: relative;
            z-index: 1;
        }

        /* TOP BAR */

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 45px;
        }

        .brand-area {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-icon {
            width: 46px;
            height: 46px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 14px;

            background:
                linear-gradient(
                    145deg,
                    rgba(0,217,255,.13),
                    rgba(0,217,255,.035)
                );

            border: 1px solid rgba(0,217,255,.22);

            color: #00d9ff;
            font-size: 21px;

            box-shadow:
                0 0 25px rgba(0,217,255,.05);
        }

        .brand-text h1 {
            color: #f1fbff;
            font-size: 21px;
            font-weight: 700;
            letter-spacing: .4px;
        }

        .brand-text p {
            margin-top: 4px;

            color: #668896;

            font-size: 9px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* BACK BUTTON */

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 9px;

            padding: 11px 17px;

            color: #a8c6d0;

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 999px;

            text-decoration: none;

            font-size: 11px;
            font-weight: 600;

            transition:
                .25s ease;

            backdrop-filter: blur(10px);
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

        /* PAGE HEADING */

        .page-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .page-label {
            margin-bottom: 9px;

            color: #00d9ff;

            font-size: 9px;
            font-weight: 700;
            letter-spacing: 3px;

            text-transform: uppercase;
        }

        .page-heading h2 {
            color: #f3fcff;

            font-family: 'Playfair Display', serif;

            font-size: clamp(30px, 5vw, 42px);

            font-weight: 600;

            letter-spacing: -.5px;
        }

        .page-heading p {
            max-width: 560px;

            margin: 10px auto 0;

            color: #7595a1;

            font-size: 12px;

            line-height: 1.7;
        }

        /* CARD */

        .card {
            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    rgba(9,32,45,.82),
                    rgba(4,20,29,.92)
                );

            border: 1px solid rgba(255,255,255,.075);

            border-radius: 24px;

            box-shadow:
                0 25px 70px rgba(0,0,0,.30),
                0 0 50px rgba(0,217,255,.025);

            backdrop-filter: blur(18px);
        }

        .card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;
            right: 0;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(0,217,255,.35),
                    transparent
                );
        }

        /* FORM */

        .form {
            padding: 34px;
        }

        /* ERROR */

        .error {
            margin-bottom: 25px;

            padding: 16px 18px;

            border-radius: 14px;

            background: rgba(255,80,100,.07);

            border: 1px solid rgba(255,100,120,.20);

            color: #ff9ca8;

            font-size: 12px;

            line-height: 1.6;
        }

        .error strong {
            display: block;

            margin-bottom: 8px;

            color: #ff7e8d;

            font-size: 12px;
        }

        .error ul {
            margin-left: 18px;
        }

        .error li {
            margin-bottom: 3px;
        }

        /* FORM GROUP */

        .form-group {
            margin-bottom: 24px;
        }

        label {
            display: block;

            margin-bottom: 9px;

            color: #a9c4ce;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1.4px;

            text-transform: uppercase;
        }

        .required {
            color: #00d9ff;
        }

        /* INPUT */

        input,
        textarea,
        select {
            width: 100%;

            padding: 13px 15px;

            border: 1px solid rgba(255,255,255,.09);

            border-radius: 12px;

            outline: none;

            background: rgba(255,255,255,.035);

            color: #eafaff;

            font-family: 'Montserrat', sans-serif;

            font-size: 12px;

            transition:
                border-color .25s ease,
                background .25s ease,
                box-shadow .25s ease;
        }

        input::placeholder,
        textarea::placeholder {
            color: #496975;
        }

        input:hover,
        textarea:hover,
        select:hover {
            border-color: rgba(0,217,255,.15);
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: rgba(0,217,255,.45);

            background: rgba(0,217,255,.035);

            box-shadow:
                0 0 0 3px rgba(0,217,255,.055),
                0 0 25px rgba(0,217,255,.025);
        }

        textarea {
            min-height: 130px;

            resize: vertical;

            line-height: 1.7;
        }

        /* HELP TEXT */

        .form-help {
            display: block;

            margin-top: 8px;

            color: #557682;

            font-size: 9px;

            line-height: 1.6;
        }

        /* TWO COLUMNS */

        .form-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 18px;
        }

        /* IMAGE BOX */

        .image-box {
            padding: 20px;

            border-radius: 16px;

            background: rgba(255,255,255,.025);

            border: 1px solid rgba(255,255,255,.07);
        }

        .upload-title {
            display: flex;

            align-items: center;

            gap: 8px;

            margin-bottom: 11px;

            color: #b5d2db;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: .8px;

            text-transform: uppercase;
        }

        input[type="file"] {
            padding: 9px;

            background: rgba(0,0,0,.12);

            cursor: pointer;
        }

        input[type="file"]::file-selector-button {
            margin-right: 10px;

            padding: 7px 11px;

            border: 1px solid rgba(0,217,255,.20);

            border-radius: 8px;

            background: rgba(0,217,255,.06);

            color: #00d9ff;

            font-family: 'Montserrat', sans-serif;

            font-size: 10px;

            font-weight: 600;

            cursor: pointer;
        }

        .or-divider {
            display: flex;

            align-items: center;

            gap: 12px;

            margin: 20px 0;

            color: #466875;

            font-size: 9px;

            font-weight: 700;

            letter-spacing: 2px;
        }

        .or-divider div {
            height: 1px;

            flex: 1;

            background: rgba(255,255,255,.07);
        }

        /* STATUS */

        .status-box {
            padding: 3px;

            border-radius: 13px;

            background: rgba(255,255,255,.025);

            border: 1px solid rgba(255,255,255,.08);
        }

        .status-box select {
            border: none;

            background: #061923;

            color: #e9faff;

            box-shadow: none;

            cursor: pointer;
        }

        .status-box select option {
            background: #061923;

            color: #e9faff;
        }

        .status-box select option:checked {
            background: #0b3443;

            color: #00d9ff;
        }

        /* BUTTONS */

        .form-actions {
            display: flex;

            gap: 12px;

            padding-top: 8px;

            margin-top: 5px;
        }

        .cancel-btn,
        .submit-btn {
            flex: 1;

            display: flex;

            align-items: center;
            justify-content: center;

            min-height: 46px;

            padding: 13px 18px;

            border-radius: 999px;

            font-family: 'Montserrat', sans-serif;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1px;

            text-transform: uppercase;

            text-decoration: none;

            cursor: pointer;

            transition:
                transform .25s ease,
                box-shadow .25s ease,
                background .25s ease,
                border-color .25s ease;
        }

        /* CANCEL */

        .cancel-btn {
            color: #9db8c2;

            background: rgba(255,255,255,.035);

            border: 1px solid rgba(255,255,255,.09);
        }

        .cancel-btn:hover {
            color: #ffffff;

            background: rgba(255,255,255,.06);

            border-color: rgba(255,255,255,.15);

            transform: translateY(-2px);
        }

        /* SUBMIT */

        .submit-btn {
            color: #02131b;

            background: #00d9ff;

            border: 1px solid #00d9ff;

            box-shadow:
                0 10px 30px rgba(0,217,255,.12);
        }

        .submit-btn:hover {
            background: #35e1ff;

            box-shadow:
                0 14px 35px rgba(0,217,255,.22);

            transform: translateY(-2px);
        }

        .submit-btn:active,
        .cancel-btn:active {
            transform: translateY(0);
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .page {
                padding: 22px 15px 40px;
            }

            .topbar {
                flex-direction: column;

                align-items: stretch;

                margin-bottom: 35px;
            }

            .back-btn {
                justify-content: center;
            }

            .page-heading {
                margin-bottom: 25px;
            }

            .form {
                padding: 23px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;

                gap: 0;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .cancel-btn,
            .submit-btn {
                width: 100%;
            }
        }

        @media (max-width: 420px) {

            .brand-text h1 {
                font-size: 19px;
            }

            .brand-icon {
                width: 42px;
                height: 42px;
            }

            .page-heading h2 {
                font-size: 30px;
            }

            .image-box {
                padding: 15px;
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
                    <h1>NYANYIAN HUJAN</h1>

                    <p>
                        Panel Administrator
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


        {{-- PAGE HEADING --}}

        <div class="page-heading">

            <div class="page-label">
                MANAGE SHIP
            </div>

            <h2>
                Tambah Kapal
            </h2>

            <p>
                Masukkan informasi kapal yang akan tersedia
                untuk pelanggan Nyanyian Hujan.
            </p>

        </div>


        {{-- CARD --}}

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
                    action="{{ route('admin.ships.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    {{-- NAMA KAPAL --}}

                    <div class="form-group">

                        <label for="name">

                            Nama Kapal

                            <span class="required">*</span>

                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Contoh: Ocean Paradise"
                            required
                        >

                        <small class="form-help">
                            Masukkan nama kapal yang akan ditampilkan kepada pelanggan.
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
                            placeholder="Contoh: Kapal nyaman dengan fasilitas lengkap untuk perjalanan wisata laut."
                        >{{ old('description') }}</textarea>

                        <small class="form-help">
                            Jelaskan fasilitas, kenyamanan, atau informasi penting tentang kapal.
                        </small>

                    </div>


                    {{-- HARGA + KAPASITAS --}}

                    <div class="form-row">

                        <div class="form-group">

                            <label for="price">

                                Harga

                                <span class="required">*</span>

                            </label>

                            <input
                                type="number"
                                id="price"
                                name="price"
                                value="{{ old('price') }}"
                                placeholder="1500000"
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

                                <span class="required">*</span>

                            </label>

                            <input
                                type="number"
                                id="capacity"
                                name="capacity"
                                value="{{ old('capacity') }}"
                                placeholder="20"
                                min="1"
                                required
                            >

                            <small class="form-help">
                                Jumlah maksimal penumpang.
                            </small>

                        </div>

                    </div>


                    {{-- FOTO KAPAL --}}

                    <div class="form-group">

                        <label>
                            Foto Kapal
                        </label>

                        <div class="image-box">

                            <div class="upload-title">
                                📷 Upload dari Komputer
                            </div>

                            <input
                                type="file"
                                id="image"
                                name="image"
                                accept="image/jpeg,image/png,image/jpg,image/webp"
                            >

                            <small class="form-help">
                                Format JPG, JPEG, PNG, atau WEBP.
                                Maksimal ukuran file 30 MB.
                            </small>


                            <div class="or-divider">

                                <div></div>

                                ATAU

                                <div></div>

                            </div>


                            <div class="upload-title">
                                🌐 Gunakan URL Gambar
                            </div>

                            <input
                                type="url"
                                id="image_url"
                                name="image_url"
                                value="{{ old('image_url') }}"
                                placeholder="https://example.com/kapal.jpg"
                            >

                            <small class="form-help">
                                Masukkan alamat URL gambar dari internet.
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
                                    {{ old('status', '1') == '1' ? 'selected' : '' }}
                                >
                                    Aktif — tampil dan dapat dipesan
                                </option>

                                <option
                                    value="0"
                                    {{ old('status') == '0' ? 'selected' : '' }}
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
                            Simpan Kapal
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>
