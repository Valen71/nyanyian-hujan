@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{ asset('css/admin-advertisement-edit.css') }}">

<div class="edit-ad-page">

    <div class="bg-glow bg-glow-one"></div>
    <div class="bg-glow bg-glow-two"></div>

    <div class="edit-ad-container">

        {{-- HEADER --}}
        <div class="page-header">

            <div class="header-left">

                <div class="header-icon">
                    ✦
                </div>

                <div>
                    <span class="eyebrow">
                        Nyanyian Hujan ADMIN
                    </span>

                    <h1>
                        Edit Iklan
                    </h1>

                    <p>
                        Perbarui informasi dan pengaturan iklan Nyanyian Hujan.
                    </p>
                </div>

            </div>

            <a
                href="{{ route('admin.advertisements.index') }}"
                class="btn-back"
            >
                <span>←</span>
                Kembali
            </a>

        </div>


        {{-- ERROR --}}
        @if($errors->any())

            <div class="alert-error">

                <div class="alert-icon">
                    !
                </div>

                <div>

                    <strong>
                        Periksa kembali data berikut
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        @endif


        {{-- CARD --}}
        <div class="card">

            <div class="card-header">

                <div>

                    <span class="card-label">
                        ADVERTISEMENT
                    </span>

                    <h2>
                        Informasi Iklan
                    </h2>

                    <p>
                        Kelola konten banner yang akan ditampilkan kepada pengunjung.
                    </p>

                </div>

            </div>


            <form
                action="{{ route('admin.advertisements.update', $advertisement) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')


                {{-- JUDUL --}}
                <div class="form-group">

                    <label for="title">
                        Judul Iklan
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title', $advertisement->title) }}"
                        placeholder="Masukkan judul iklan"
                        required
                    >

                </div>


                {{-- DESKRIPSI --}}
                <div class="form-group">

                    <label for="description">
                        Deskripsi
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Masukkan deskripsi iklan..."
                    >{{ old('description', $advertisement->description) }}</textarea>

                </div>


                {{-- GAMBAR SAAT INI --}}
                <div class="form-group">

                    <label>
                        Gambar Saat Ini
                    </label>

                    @if($advertisement->image)

                        <div class="current-image-card">

                            <div class="image-preview">

                                <img
                                    src="{{ asset('storage/' . $advertisement->image) }}"
                                    alt="{{ $advertisement->title }}"
                                >

                                <div class="image-overlay">

                                    <span>
                                        CURRENT BANNER
                                    </span>

                                </div>

                            </div>

                        </div>

                    @else

                        <div class="no-image">

                            <div class="no-image-icon">
                                ◫
                            </div>

                            <span>
                                Belum ada gambar
                            </span>

                        </div>

                    @endif

                </div>


                {{-- UPLOAD GAMBAR --}}
                <div class="form-group">

                    <label for="image">
                        Ganti Gambar / Banner
                    </label>

                    <div class="file-upload">

                        <input
                            type="file"
                            id="image"
                            name="image"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        <div class="file-content">

                            <div class="upload-icon">
                                ↑
                            </div>

                            <div>

                                <strong>
                                    Pilih gambar baru
                                </strong>

                                <span>
                                    JPG, JPEG, PNG atau WEBP
                                </span>

                            </div>

                        </div>

                    </div>

                    <small>
                        Kosongkan jika tidak ingin mengganti gambar.
                        Maksimal 30 MB.
                    </small>

                </div>


                {{-- LINK --}}
                <div class="form-group">

                    <label for="link">
                        Link Iklan
                    </label>

                    <input
                        type="url"
                        id="link"
                        name="link"
                        value="{{ old('link', $advertisement->link) }}"
                        placeholder="https://contoh.com"
                    >

                    <small>
                        Opsional. Isi jika banner ingin diarahkan ke halaman tertentu.
                    </small>

                </div>


                {{-- TANGGAL --}}
                <div class="date-grid">

                    <div class="form-group">

                        <label for="start_date">
                            Tanggal Mulai
                        </label>

                        <input
                            type="date"
                            id="start_date"
                            name="start_date"
                            value="{{ old(
                                'start_date',
                                $advertisement->start_date
                                    ? $advertisement->start_date->format('Y-m-d')
                                    : ''
                            ) }}"
                        >

                    </div>


                    <div class="form-group">

                        <label for="end_date">
                            Tanggal Berakhir
                        </label>

                        <input
                            type="date"
                            id="end_date"
                            name="end_date"
                            value="{{ old(
                                'end_date',
                                $advertisement->end_date
                                    ? $advertisement->end_date->format('Y-m-d')
                                    : ''
                            ) }}"
                        >

                    </div>

                </div>


                {{-- STATUS AKTIF --}}
                <div class="active-box">

                    <div class="active-left">

                        <div class="active-icon">
                            ✓
                        </div>

                        <div>

                            <label
                                for="is_active"
                                class="active-title"
                            >
                                Aktifkan iklan
                            </label>

                            <p>
                                Iklan aktif dapat tampil di homepage
                                sesuai periode yang ditentukan.
                            </p>

                        </div>

                    </div>


                    <label class="switch">

                        <input
                            type="checkbox"
                            id="is_active"
                            name="is_active"
                            value="1"
                            {{ old('is_active', $advertisement->is_active) ? 'checked' : '' }}
                        >

                        <span class="slider"></span>

                    </label>

                </div>


                {{-- BUTTON --}}
                <div class="form-actions">

                    <a
                        href="{{ route('admin.advertisements.index') }}"
                        class="btn-cancel"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="btn-primary"
                    >
                        <span>✓</span>
                        Simpan Perubahan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection