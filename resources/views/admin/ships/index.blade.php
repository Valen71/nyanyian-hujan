<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Kapal - Nyanyian Hujan</title>

    <link rel="stylesheet" href="{{ asset('css/admin-ships.css') }}">

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
                    <h1>Nyanyian Hujan</h1>
                    <p>Panel Administrator</p>
                </div>

            </div>

            <a
                href="{{ route('admin.dashboard') }}"
                class="back-btn"
            >
                ← Kembali ke Dashboard
            </a>

        </div>


        {{-- PAGE HEADER --}}

        <div class="page-header">

            <div>

                <h2>Kelola Kapal</h2>

                <p>
                    Kelola informasi kapal yang tersedia untuk pelanggan Nyanyian Hujan.
                </p>

            </div>

            <a
                href="{{ route('admin.ships.create') }}"
                class="add-btn"
            >
                + Tambah Kapal
            </a>

        </div>


        {{-- SUCCESS MESSAGE --}}

        @if(session('success'))

            <div class="success-message">

                <div class="success-icon">
                    ✓
                </div>

                {{ session('success') }}

            </div>

        @endif

        @if(session('error'))

    <div class="error-message">

        <div class="error-icon">
            !
        </div>

        {{ session('error') }}

    </div>

@endif


        {{-- TABLE --}}

        <div class="table-card">

            <div class="table-header">

                <h3>Daftar Kapal</h3>

                <span>
                    {{ $ships->count() }} kapal terdaftar
                </span>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>Gambar</th>

                            <th>Nama Kapal</th>

                            <th>Harga</th>

                            <th>Kapasitas</th>

                            <th>Status</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse($ships as $ship)

                            <tr>

                                {{-- GAMBAR --}}

                                <td>

                                    @if($ship->image)

                                        @if(\Illuminate\Support\Str::startsWith(
                                            $ship->image,
                                            ['http://', 'https://']
                                        ))

                                            {{-- GAMBAR DARI URL --}}

                                            <img
                                                src="{{ $ship->image }}"
                                                alt="{{ $ship->name }}"
                                                class="ship-image"
                                            >

                                        @else

                                            {{-- GAMBAR UPLOAD --}}

                                            <img
                                                src="{{ asset('storage/' . $ship->image) }}"
                                                alt="{{ $ship->name }}"
                                                class="ship-image"
                                            >

                                        @endif

                                    @else

                                        <div class="no-image">
                                            Tidak ada gambar
                                        </div>

                                    @endif

                                </td>


                                {{-- NAMA KAPAL --}}

                                <td>

                                    <div class="ship-name">
                                        {{ $ship->name }}
                                    </div>

                                    <div class="ship-id">
                                        ID Kapal #{{ $ship->id }}
                                    </div>

                                </td>


                                {{-- HARGA --}}

                                <td>

                                    <div class="price">
                                        Rp {{ number_format($ship->price, 0, ',', '.') }}
                                    </div>

                                    <div class="price-label">
                                        Harga perjalanan
                                    </div>

                                </td>


                                {{-- KAPASITAS --}}

                                <td>

                                    <span class="capacity">
                                        👥 {{ $ship->capacity }} orang
                                    </span>

                                </td>


                                {{-- STATUS --}}

                                <td>

                                    @if($ship->status)

                                        <span class="status active">

                                            <span class="status-dot"></span>

                                            Aktif

                                        </span>

                                    @else

                                        <span class="status inactive">

                                            <span class="status-dot"></span>

                                            Tidak Aktif

                                        </span>

                                    @endif

                                </td>


                                {{-- AKSI --}}

                                <td>

                                    <div class="actions">

                                        <a
                                            href="{{ route('admin.ships.edit', $ship) }}"
                                            class="action edit"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('admin.ships.destroy', $ship) }}"
                                            method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Yakin ingin menghapus kapal ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action delete"
                                            >
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="6"
                                    class="empty"
                                >

                                    <div class="empty-icon">
                                        🚢
                                    </div>

                                    <h3>Belum ada kapal</h3>

                                    <p>
                                        Silakan tambahkan data kapal pertama Nyanyian Hujan.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>