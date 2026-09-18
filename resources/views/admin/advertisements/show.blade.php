@extends('layouts.admin')

@section('content')

<div class="advertisement-detail-page">

<div class="advertisement-container">

    {{-- HEADER --}}
    <div class="page-header">

        <div class="header-text">
            <div class="eyebrow">
                Nyanyian Hujan ADMIN
            </div>

            <h1>Detail Iklan</h1>

            <p>
                Informasi lengkap mengenai iklan yang dipasang di Nyanyian Hujan.
            </p>
        </div>

        <a
            href="{{ route('admin.advertisements.index') }}"
            class="btn-back"
        >
            <span>←</span>
            Kembali
        </a>

    </div>


    {{-- CARD UTAMA --}}
    <div class="advertisement-card">


        {{-- GAMBAR --}}
        @if($advertisement->image)

            <div class="image-section">

                <div class="image-label">
                    PREVIEW IKLAN
                </div>

                <div class="image-wrapper">

                    <img
                        src="{{ asset('storage/' . $advertisement->image) }}"
                        alt="{{ $advertisement->title }}"
                    >

                </div>

            </div>

        @endif


        {{-- INFORMASI --}}
        <div class="detail-section">


            {{-- JUDUL --}}
            <div class="detail-item detail-title">

                <span class="label">
                    Judul Iklan
                </span>

                <strong>
                    {{ $advertisement->title }}
                </strong>

            </div>


            {{-- DESKRIPSI --}}
            <div class="detail-item">

                <span class="label">
                    Deskripsi
                </span>

                <div class="description">
                    {{ $advertisement->description ?: '-' }}
                </div>

            </div>


            {{-- LINK --}}
            <div class="detail-item">

                <span class="label">
                    Link Iklan
                </span>

                @if($advertisement->link)

                    <a
                        href="{{ $advertisement->link }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="advertisement-link"
                    >
                        {{ $advertisement->link }}
                    </a>

                @else

                    <span class="empty-value">
                        -
                    </span>

                @endif

            </div>


            {{-- TANGGAL --}}
            <div class="date-grid">

                <div class="detail-item">

                    <span class="label">
                        Tanggal Mulai
                    </span>

                    <strong class="normal-value">

                        {{ $advertisement->start_date
                            ? $advertisement->start_date->format('d M Y')
                            : '-' }}

                    </strong>

                </div>


                <div class="detail-item">

                    <span class="label">
                        Tanggal Berakhir
                    </span>

                    <strong class="normal-value">

                        {{ $advertisement->end_date
                            ? $advertisement->end_date->format('d M Y')
                            : '-' }}

                    </strong>

                </div>

            </div>


            {{-- STATUS --}}
            <div class="detail-item">

                <span class="label">
                    Status Iklan
                </span>

                @if($advertisement->is_active)

                    <span class="status active">
                        <span class="status-dot"></span>
                        Aktif
                    </span>

                @else

                    <span class="status inactive">
                        <span class="status-dot"></span>
                        Nonaktif
                    </span>

                @endif

            </div>


            {{-- DIBUAT --}}
            <div class="detail-item">

                <span class="label">
                    Dibuat
                </span>

                <span class="date-value">
                    {{ $advertisement->created_at->format('d M Y H:i') }}
                </span>

            </div>


            {{-- UPDATE --}}
            <div class="detail-item last-detail">

                <span class="label">
                    Terakhir Diperbarui
                </span>

                <span class="date-value">
                    {{ $advertisement->updated_at->format('d M Y H:i') }}
                </span>

            </div>


        </div>


        {{-- ACTION --}}
        <div class="actions">

            <a
                href="{{ route('admin.advertisements.edit', $advertisement) }}"
                class="btn-edit"
            >
                <span>✎</span>
                Edit Iklan
            </a>


            <form
                action="{{ route('admin.advertisements.destroy', $advertisement) }}"
                method="POST"
                onsubmit="return confirm('Yakin ingin menghapus iklan ini?')"
            >

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="btn-delete"
                >
                    <span>⌫</span>
                    Hapus Iklan
                </button>

            </form>

        </div>


    </div>

</div>
```

</div>

<style>

/* =========================================================
   RESET
========================================================= */

html,
body {
    margin: 0 !important;
    padding: 0 !important;
    background: #031018 !important;
}

body {
    min-height: 100vh;
    font-family: Arial, Helvetica, sans-serif;
}


/* =========================================================
   ADMIN
========================================================= */

.admin-layout {
    min-height: 100vh !important;
    background: #031018 !important;
}

.admin-main {
    min-height: 100vh !important;
    margin: 0 !important;
    padding: 0 !important;
    background: #031018 !important;
}


/* =========================================================
   BACKGROUND
========================================================= */

.advertisement-detail-page {
    position: relative;
    min-height: 100vh;
    color: #edfaff;

    background:
        radial-gradient(
            circle at 10% 0%,
            rgba(0, 217, 255, .08),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 100%,
            rgba(0, 128, 170, .10),
            transparent 30%
        ),
        linear-gradient(
            145deg,
            #04141f,
            #061d2a 55%,
            #031018
        );
}

.advertisement-detail-page::before {
    content: "";
    position: fixed;
    inset: 0;
    pointer-events: none;

    background:
        linear-gradient(
            rgba(255,255,255,.012) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.012) 1px,
            transparent 1px
        );

    background-size: 45px 45px;
}


/* =========================================================
   CONTAINER
========================================================= */

.advertisement-container {
    position: relative;
    z-index: 1;

    width: 100%;
    max-width: 980px;

    margin: 0 auto;
    padding: 40px 30px 70px;

    box-sizing: border-box;
}


/* =========================================================
   HEADER
========================================================= */

.page-header {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;
    margin-bottom: 25px;
}

.header-text {
    min-width: 0;
}

.eyebrow {
    margin-bottom: 8px;

    color: #00d9ff;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 2px;
}

.page-header h1 {
    margin: 0 0 7px;

    color: #ffffff;

    font-size: 30px;
    font-weight: 700;

    line-height: 1.2;
}

.page-header p {
    margin: 0;

    color: #8eaeb8;

    font-size: 13px;
    font-weight: 400;

    line-height: 1.6;
}


/* =========================================================
   BACK
========================================================= */

.btn-back {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    flex-shrink: 0;

    height: 42px;
    padding: 0 17px;

    color: #c9e5eb;

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(255,255,255,.10);
    border-radius: 10px;

    text-decoration: none;

    font-size: 12px;
    font-weight: 600;

    transition: .2s ease;
}

.btn-back span {
    font-size: 16px;
}

.btn-back:hover {
    color: #00d9ff;

    border-color: rgba(0,217,255,.30);

    background: rgba(0,217,255,.05);
}


/* =========================================================
   CARD
========================================================= */

.advertisement-card {
    width: 100%;

    padding: 30px;

    box-sizing: border-box;

    background: rgba(7, 28, 40, .82);

    border: 1px solid rgba(0,217,255,.13);

    border-radius: 20px;

    box-shadow:
        0 20px 60px rgba(0,0,0,.30);
}


/* =========================================================
   IMAGE
========================================================= */

.image-section {
    margin-bottom: 28px;
}

.image-label {
    margin-bottom: 10px;

    color: #8caab3;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: 1.6px;
}

.image-wrapper {
    width: 100%;
    height: 350px;

    overflow: hidden;

    background: #020b10;

    border: 1px solid rgba(255,255,255,.08);

    border-radius: 14px;
}

.image-wrapper img {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;
}


/* =========================================================
   DETAIL
========================================================= */

.detail-section {
    width: 100%;
}

.detail-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;

    width: 100%;

    gap: 8px;

    padding: 20px 0;

    box-sizing: border-box;

    border-bottom: 1px solid rgba(255,255,255,.07);
}

.detail-title {
    padding-top: 5px;
}


/* =========================================================
   LABEL
========================================================= */

.label {
    display: block;

    color: #8eabb4;

    font-size: 11px;
    font-weight: 700;

    line-height: 1.4;

    letter-spacing: 1.2px;

    text-transform: uppercase;
}


/* =========================================================
   JUDUL
========================================================= */

.detail-title strong {
    display: block;

    color: #ffffff;

    font-size: 21px;
    font-weight: 700;

    line-height: 1.5;

    word-break: break-word;
}


/* =========================================================
   DESKRIPSI
========================================================= */

.description {
    display: block;

    color: #d3e4e9;

    font-size: 14px;
    font-weight: 400;

    line-height: 1.8;

    white-space: pre-line;
    word-break: break-word;
}


/* =========================================================
   LINK
========================================================= */

.advertisement-link {
    display: block;

    max-width: 100%;

    color: #2bdcff;

    font-size: 13px;
    font-weight: 500;

    line-height: 1.7;

    text-decoration: none;

    word-break: break-all;
}

.advertisement-link:hover {
    color: #8cefff;
    text-decoration: underline;
}

.empty-value {
    color: #c4d5da;

    font-size: 14px;
    font-weight: 500;
}


/* =========================================================
   TANGGAL
========================================================= */

.date-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    width: 100%;

    border-bottom: 1px solid rgba(255,255,255,.07);
}

.date-grid .detail-item {
    border-bottom: none;
}

.date-grid .detail-item:first-child {
    padding-right: 25px;

    border-right: 1px solid rgba(255,255,255,.07);
}

.date-grid .detail-item:last-child {
    padding-left: 25px;
}

.normal-value {
    color: #f0faff;

    font-size: 14px;
    font-weight: 600;

    line-height: 1.5;
}


/* =========================================================
   STATUS
========================================================= */

.status {
    display: inline-flex;
    align-items: center;

    gap: 8px;

    padding: 7px 13px;

    border-radius: 999px;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: .8px;

    text-transform: uppercase;
}

.status-dot {
    width: 6px;
    height: 6px;

    border-radius: 50%;
}


/* AKTIF */

.status.active {
    color: #7cffc4;

    background: rgba(124,255,196,.07);

    border: 1px solid rgba(124,255,196,.20);
}

.status.active .status-dot {
    background: #7cffc4;

    box-shadow: 0 0 8px rgba(124,255,196,.7);
}


/* NONAKTIF */

.status.inactive {
    color: #a9bbc0;

    background: rgba(255,255,255,.035);

    border: 1px solid rgba(255,255,255,.08);
}

.status.inactive .status-dot {
    background: #687d83;
}


/* =========================================================
   TANGGAL DIBUAT / UPDATE
========================================================= */

.date-value {
    color: #d2e3e8;

    font-size: 13px;
    font-weight: 500;

    line-height: 1.6;
}

.last-detail {
    border-bottom: none;
}


/* =========================================================
   BUTTON AREA
========================================================= */

.actions {
    display: flex;
    align-items: center;

    gap: 10px;

    margin-top: 25px;
    padding-top: 24px;

    border-top: 1px solid rgba(255,255,255,.07);
}

.actions form {
    margin: 0;
}


/* =========================================================
   EDIT
========================================================= */

.btn-edit {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    min-height: 42px;

    padding: 0 19px;

    box-sizing: border-box;

    color: #02141c;

    background: #00d9ff;

    border: 1px solid #00d9ff;
    border-radius: 10px;

    text-decoration: none;

    font-size: 12px;
    font-weight: 700;

    cursor: pointer;

    transition: .2s ease;
}

.btn-edit:hover {
    background: #42e2ff;
    border-color: #42e2ff;

    transform: translateY(-1px);

    box-shadow:
        0 8px 25px rgba(0,217,255,.18);
}


/* =========================================================
   DELETE
========================================================= */

.btn-delete {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 8px;

    min-height: 42px;

    padding: 0 19px;

    box-sizing: border-box;

    color: #ffabb5;

    background: rgba(255,92,110,.05);

    border: 1px solid rgba(255,92,110,.20);
    border-radius: 10px;

    font-family: Arial, Helvetica, sans-serif;

    font-size: 12px;
    font-weight: 700;

    cursor: pointer;

    transition: .2s ease;
}

.btn-delete:hover {
    color: #ffc0c7;

    background: rgba(255,92,110,.10);

    border-color: rgba(255,92,110,.30);

    transform: translateY(-1px);
}


/* =========================================================
   TABLET / HP
========================================================= */

@media (max-width: 700px) {

    .advertisement-container {
        padding: 25px 15px 50px;
    }

    .page-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .page-header h1 {
        font-size: 27px;
    }

    .btn-back {
        width: 100%;
    }

    .advertisement-card {
        padding: 22px 18px;
        border-radius: 17px;
    }

    .image-wrapper {
        height: 230px;
    }

    .date-grid {
        grid-template-columns: 1fr;
    }

    .date-grid .detail-item:first-child {
        padding-right: 0;

        border-right: none;

        border-bottom: 1px solid rgba(255,255,255,.07);
    }

    .date-grid .detail-item:last-child {
        padding-left: 0;
    }

    .actions {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-edit,
    .btn-delete {
        width: 100%;
    }

    .actions form {
        width: 100%;
    }

}


/* =========================================================
   HP KECIL
========================================================= */

@media (max-width: 450px) {

    .advertisement-container {
        padding-left: 12px;
        padding-right: 12px;
    }

    .advertisement-card {
        padding: 20px 16px;
    }

    .page-header h1 {
        font-size: 24px;
    }

    .image-wrapper {
        height: 190px;
    }

    .detail-item {
        padding: 17px 0;
    }

    .detail-title strong {
        font-size: 18px;
    }

    .description {
        font-size: 14px;
    }

    .normal-value {
        font-size: 14px;
    }

    .date-value {
        font-size: 13px;
    }

}

</style>
