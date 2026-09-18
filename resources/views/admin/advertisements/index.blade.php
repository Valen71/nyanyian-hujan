<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen Iklan - Nyanyian Hujan</title>

    <link rel="stylesheet" href="{{ asset('css/admin-advertisements.css') }}">
</head>

<body>

<div class="dashboard">


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
    
<div class="topbar">

    <div class="page-heading">

        <h1>Manajemen Iklan</h1>

        <p>
            Kelola banner dan iklan yang akan ditampilkan di halaman Nyanyian Hujan.
        </p>

    </div>

    <a
        href="{{ route('admin.dashboard') }}"
        class="back-dashboard"
    >
        ← Kembali ke Dashboard
    </a>

</div>



        <!-- CONTENT -->
        <div class="content-card">

            <div class="content-header">

                <div>
                    <h2>Daftar Iklan</h2>

                    <p>
                        Tambahkan dan kelola banner promosi Nyanyian Hujan.
                    </p>
                </div>

                <a
                    href="{{ route('admin.advertisements.create') }}"
                    class="add-btn"
                >
                    + Tambah Iklan
                </a>

            </div>


            <!-- SUCCESS -->
            @if(session('success'))

                <div class="alert alert-success">
                    ✓ {{ session('success') }}
                </div>

            @endif


            <!-- ERROR -->
            @if(session('error'))

                <div class="alert alert-error">
                    ⚠ {{ session('error') }}
                </div>

            @endif


            @if($advertisements->count() > 0)

                <div class="table-wrapper">

                    <table class="advertisement-table">

                        <thead>

                            <tr>
                                <th>Gambar</th>
                                <th>Informasi Iklan</th>
                                <th>Periode</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($advertisements as $advertisement)

                                <tr>

                                    <!-- GAMBAR -->
                                    <td>

                                        @if($advertisement->image)

                                            <img
                                                src="{{ asset('storage/' . $advertisement->image) }}"
                                                alt="{{ $advertisement->title }}"
                                                class="ad-image"
                                            >

                                        @else

                                            <div class="no-image">
                                                Tidak ada gambar
                                            </div>

                                        @endif

                                    </td>


                                    <!-- INFORMASI -->
                                    <td>

                                        <div class="ad-title">
                                            {{ $advertisement->title }}
                                        </div>

                                        @if($advertisement->description)

                                            <div class="ad-description">
                                                {{ \Illuminate\Support\Str::limit($advertisement->description, 80) }}
                                            </div>

                                        @endif

                                    </td>


                                    <!-- PERIODE -->
                                    <td>

                                        @if($advertisement->start_date || $advertisement->end_date)

                                            <div style="font-size: 12px; color: #4b5563;">

                                                @if($advertisement->start_date)
                                                    {{ $advertisement->start_date->format('d-m-Y') }}
                                                @else
                                                    Tanpa batas awal
                                                @endif

                                                <br>

                                                sampai

                                                <br>

                                                @if($advertisement->end_date)
                                                    {{ $advertisement->end_date->format('d-m-Y') }}
                                                @else
                                                    Tanpa batas akhir
                                                @endif

                                            </div>

                                        @else

                                            <span style="color: #9ca3af;">
                                                Selalu tampil
                                            </span>

                                        @endif

                                    </td>


                                    <!-- STATUS -->
                                    <td>

                                        @if($advertisement->is_active)

                                            <span class="status active">
                                                Aktif
                                            </span>

                                        @else

                                            <span class="status inactive">
                                                Tidak Aktif
                                            </span>

                                        @endif

                                    </td>


                                    <!-- AKSI -->
                                    <td>

                                        <div class="action-buttons">

                                            <a
                                                href="{{ route('admin.advertisements.show', $advertisement) }}"
                                                class="btn btn-view"
                                            >
                                                Lihat
                                            </a>

                                            <a
                                                href="{{ route('admin.advertisements.edit', $advertisement) }}"
                                                class="btn btn-edit"
                                            >
                                                Edit
                                            </a>

                                            <form
                                                action="{{ route('admin.advertisements.destroy', $advertisement) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus iklan ini?');"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-delete"
                                                >
                                                    Hapus
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->
                <div class="pagination">
                    {{ $advertisements->links() }}
                </div>


            @else

                <!-- EMPTY STATE -->
                <div class="empty-state">

                    <div class="empty-icon">
                        📢
                    </div>

                    <h3>
                        Belum Ada Iklan
                    </h3>

                    <p>
                        Belum ada banner atau iklan yang dibuat.
                        Silakan tambahkan iklan pertama Anda.
                    </p>

                    <a
                        href="{{ route('admin.advertisements.create') }}"
                        class="add-btn"
                    >
                        + Tambah Iklan
                    </a>

                </div>

            @endif

        </div>

    </main>

</div>

</body>

</html>