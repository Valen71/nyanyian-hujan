<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Nyanyian Hujan</title>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
</head>

<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <h2>Nyanyian Hujan</h2>
            <span>Admin Dashboard</span>
        </div>

        <div class="menu-title">
            Menu
        </div>

        <ul class="menu">

            <li>
                <a href="{{ route('admin.dashboard') }}" class="active">
                    <span class="menu-icon">⌂</span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.bookings.index') }}">
                    <span class="menu-icon">▣</span>
                    <span class="menu-text">Data Booking</span>
                </a>
            </li>

            <li>
    <a href="{{ route('admin.ships.index') }}">
        <span class="menu-icon">⚓</span>
        <span class="menu-text">Data Kapal</span>
    </a>
</li>

<li>
    <a href="{{ route('admin.users.index') }}">
        <span class="menu-icon">👤</span>
        <span class="menu-text">Kelola Akun</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.advertisements.index') }}">
        <span class="menu-icon">📢</span>
        <span class="menu-text">Advertisement</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.customer_messages.index') }}">
        <span class="menu-icon">💬</span>

        <span class="menu-text">
            Pesan Customer

            @if($unreadMessages > 0)
                <span style="
                    display: inline-block;
                    margin-left: 6px;
                    padding: 2px 7px;
                    border-radius: 20px;
                    background: #ef4444;
                    color: white;
                    font-size: 11px;
                    font-weight: bold;
                ">
                    {{ $unreadMessages }}
                </span>
            @endif
        </span>
    </a>
</li>

        </ul>

    </aside>


    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">

            <div>
                <h1>Dashboard</h1>

                <p>
                    Selamat datang kembali di dashboard Nyanyian Hujan.
                </p>
                @if($unreadMessages > 0)
    <div style="
        margin-top: 15px;
        padding: 12px 16px;
        background: #fef2f2;
        border: 1px solid #fecaca;
        border-radius: 10px;
        color: #991b1b;
        font-size: 14px;
    ">
        🔔 Kamu memiliki
        <strong>{{ $unreadMessages }} pesan customer</strong>
        yang belum dibaca.

        <a
            href="{{ route('admin.customer_messages.index') }}"
            style="
                margin-left: 8px;
                color: #dc2626;
                font-weight: bold;
                text-decoration: none;
            "
        >
            Lihat Pesan →
        </a>
    </div>
@endif
            </div>

            <div class="admin-profile">

                <div class="avatar">
                    A
                </div>

                <div class="admin-info">
                    <strong>Administrator</strong>
                    <span>Admin Nyanyian Hujan</span>
                </div>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-btn">
                        Logout
                    </button>
                </form>

            </div>

        </div>


        <!-- STATISTICS -->
        <div class="stats">

            <!-- TOTAL KAPAL -->
            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Total Kapal
                    </span>

                    <div class="stat-icon">
                        ⚓
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalShips }}
                </div>

                <div class="stat-description">
                    Kapal yang aktif
                </div>

            </div>


            <!-- TOTAL BOOKING -->
            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Total Booking
                    </span>

                    <div class="stat-icon">
                        ◉
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalBooking }}
                </div>

                <div class="stat-description">
                    Semua data booking
                </div>

            </div>


            <!-- PENDING -->
            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Pending
                    </span>

                    <div class="stat-icon status-pending">
                        ◷
                    </div>

                </div>

                <div class="stat-number">
                    {{ $pending }}
                </div>

                <div class="stat-description">
                    Menunggu konfirmasi
                </div>

            </div>


            <!-- CONFIRMED -->
            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Confirmed
                    </span>

                    <div class="stat-icon status-confirmed">
                        ✓
                    </div>

                </div>

                <div class="stat-number">
                    {{ $confirmed }}
                </div>

                <div class="stat-description">
                    Booking telah dikonfirmasi
                </div>

            </div>


            <!-- COMPLETED -->
            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Completed
                    </span>

                    <div class="stat-icon status-completed">
                        ★
                    </div>

                </div>

                <div class="stat-number">
                    {{ $completed }}
                </div>

                <div class="stat-description">
                    Booking selesai
                </div>

            </div>


            <!-- CANCELLED -->
            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Cancelled
                    </span>

                    <div class="stat-icon status-cancelled">
                        ✕
                    </div>

                </div>

                <div class="stat-number">
                    {{ $cancelled }}
                </div>

                <div class="stat-description">
                    Booking dibatalkan
                </div>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="content-grid">

            <!-- WELCOME -->
            <div class="content-card">

                <h2>
                    Ringkasan Nyanyian Hujan
                </h2>

                <p>
                    Gunakan dashboard ini untuk memantau aktivitas
                    booking kapal dan mengelola data pelanggan
                    Nyanyian Hujan dengan lebih mudah.
                </p>

                <div class="quick-menu">

                    <a href="{{ route('admin.bookings.index') }}">

                        <span>
                            Lihat Semua Data Booking
                        </span>

                        <span class="arrow">
                            →
                        </span>

                    </a>

                </div>

            </div>


            <!-- STATUS -->
            <div class="content-card">

                <h2>
                    Status Booking
                </h2>

                <div class="status-list">

                    <div class="status-item">

                        <span class="status-name">
                            Pending
                        </span>

                        <span class="status-number">
                            {{ $pending }}
                        </span>

                    </div>


                    <div class="status-item">

                        <span class="status-name">
                            Confirmed
                        </span>

                        <span class="status-number">
                            {{ $confirmed }}
                        </span>

                    </div>


                    <div class="status-item">

                        <span class="status-name">
                            Completed
                        </span>

                        <span class="status-number">
                            {{ $completed }}
                        </span>

                    </div>
                    <div class="status-item">

                        <span class="status-name">
                            Cancelled
                        </span>

                        <span class="status-number">
                            {{ $cancelled }}
                        </span>

                    </div>


                    <div class="status-item">

                        <span class="status-name">
                            Total
                        </span>

                        <span class="status-number">
                            {{ $totalBooking }}
                        </span>

                    </div>

                </div>

            </div>

        </div>


        <!-- BOOKING TERBARU -->
        <div class="latest-bookings">

            <div class="latest-header">

                <h2>
                    Booking Terbaru
                </h2>

                <a href="{{ route('admin.bookings.index') }}">
                    Lihat Semua →
                </a>

            </div>

            @if($latestBookings->count() > 0)

                <div class="table-wrapper">

                    <table class="booking-table">

                        <thead>

                            <tr>
                                <th>Kode Booking</th>
                                <th>Pelanggan</th>
                                <th>Kapal</th>
                                <th>Tanggal</th>
                                <th>Penumpang</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($latestBookings as $booking)

                                <tr>

                                    <td>
                                        <span class="booking-code">
                                            {{ $booking->booking_code }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $booking->customer_name }}
                                    </td>

                                    <td>
                                        {{ $booking->ship->name }}
                                    </td>

                                    <td>
                                        {{ $booking->booking_date->format('d-m-Y') }}
                                    </td>

                                    <td>
                                        {{ $booking->passengers }} orang
                                    </td>

                                    <td>

                                        <span class="booking-status {{ $booking->status }}">
                                            {{ ucfirst($booking->status) }}
                                        </span>

                                    </td>

                                    <td>

                                        <a
                                            href="{{ route('admin.bookings.show', $booking) }}"
                                            class="detail-btn"
                                        >
                                            Detail
                                        </a>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="empty-booking">
                    Belum ada data booking.
                </div>

            @endif

        </div>

    </main>

</div>
<script>
   
</body>
</html>
