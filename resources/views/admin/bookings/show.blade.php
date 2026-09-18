<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Booking · Nyanyian Hujan</title>

    <link rel="stylesheet" href="{{ asset('css/admin-booking-detail.css') }}">
</head>

<body>

    {{-- TOP NAV --}}
    <nav class="top-nav">

        <a href="{{ route('admin.dashboard') }}" class="logo">
            NYANYIAN HUJAN
        </a>

        <a href="{{ route('admin.bookings.index') }}" class="home-link">
            <span>←</span>
            Kembali
        </a>

    </nav>


    <main class="booking-container">

        {{-- HEADER --}}
        <section class="booking-header">

            <div class="small-title">
                DETAIL BOOKING
            </div>

            <h1>
                Informasi Booking
            </h1>

            <p>
                Detail lengkap pemesanan perjalanan kapal Nyanyian Hujan.
            </p>


            {{-- KODE + STATUS --}}
            <div class="booking-highlight">

                <div class="booking-number">

                    <span>KODE BOOKING</span>

                    <strong>
                        {{ $booking->booking_code }}
                    </strong>

                </div>


                <div class="booking-status">

                    <span>STATUS BOOKING</span>

                    <strong class="status-{{ $booking->status }}">
                        {{ ucfirst($booking->status) }}
                    </strong>

                </div>

            </div>

        </section>


        {{-- CONTENT --}}
        <section class="booking-content">


            {{-- INFORMASI PENUMPANG --}}
            <div class="info-section">

                <div class="section-title">

                    <span class="section-number">
                        01
                    </span>

                    <h2>
                        Informasi Penumpang
                    </h2>

                </div>


                <div class="info-grid">

                    <div class="info-item">

                        <span class="info-label">
                            NAMA
                        </span>

                        <strong>
                            {{ $booking->customer_name }}
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            JUMLAH PENUMPANG
                        </span>

                        <strong>
                            {{ $booking->passengers }} Orang
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            EMAIL
                        </span>

                        <strong>
                            {{ $booking->customer_email }}
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            NOMOR TELEPON
                        </span>

                        <strong>
                            {{ $booking->customer_phone }}
                        </strong>

                    </div>

                </div>

            </div>



            {{-- INFORMASI PERJALANAN --}}
            <div class="info-section">

                <div class="section-title">

                    <span class="section-number">
                        02
                    </span>

                    <h2>
                        Informasi Perjalanan
                    </h2>

                </div>


                <div class="info-grid">

                    <div class="info-item">

                        <span class="info-label">
                            KAPAL
                        </span>

                        <strong>
                            {{ $booking->ship->name }}
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            TUJUAN
                        </span>

                        <strong>
                            {{ $booking->destination }}
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            TANGGAL
                        </span>

                        <strong>
                            {{ \Carbon\Carbon::parse($booking->booking_date)->format('d F Y') }}
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            JAM
                        </span>

                        <strong>
                            {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }} WIB
                        </strong>

                    </div>


                    <div class="info-item">

                        <span class="info-label">
                            TOTAL HARGA
                        </span>

                        <strong class="price">
                            Rp {{ number_format($booking->total_price, 0, ',', '.') }}
                        </strong>

                    </div>


                    @if($booking->notes)

                        <div class="info-item info-full">

                            <span class="info-label">
                                CATATAN
                            </span>

                            <strong>
                                {{ $booking->notes }}
                            </strong>

                        </div>

                    @endif

                </div>

            </div>



            {{-- UBAH STATUS --}}
            <div class="status-section">

                <div class="section-title">

                    <span class="section-number">
                        03
                    </span>

                    <h2>
                        Ubah Status Booking
                    </h2>

                </div>


                <div class="status-card">

                    <form
                        action="{{ route('admin.bookings.update', $booking) }}"
                        method="POST"
                    >

                        @csrf
                        @method('PUT')


                        <div class="status-form-group">

                            <label for="status">
                                STATUS BARU
                            </label>


                            <select name="status" id="status">

                                <option
                                    value="pending"
                                    {{ $booking->status === 'pending' ? 'selected' : '' }}
                                >
                                    Pending
                                </option>

                                <option
                                    value="confirmed"
                                    {{ $booking->status === 'confirmed' ? 'selected' : '' }}
                                >
                                    Confirmed
                                </option>

                                <option
                                    value="completed"
                                    {{ $booking->status === 'completed' ? 'selected' : '' }}
                                >
                                    Completed
                                </option>

                                <option
                                    value="cancelled"
                                    {{ $booking->status === 'cancelled' ? 'selected' : '' }}
                                >
                                    Cancelled
                                </option>

                            </select>

                        </div>


                        <button type="submit" class="save-status">
                            Simpan Status
                        </button>

                    </form>

                </div>

            </div>


        

            </div>

        </section>

    </main>

</body>

</html>
