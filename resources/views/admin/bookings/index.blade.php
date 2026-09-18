<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking - Nyanyian Hujan</title>

<link rel="stylesheet" href="{{ asset('css/admin-bookings.css') }}">
    
</head>

<body>

<div class="container">

    <div class="page-header">
    <div>
        <h1>Data Booking</h1>
        <p>Kelola dan pantau seluruh data booking pelanggan Nyanyian Hujan.</p>
    </div>

    <a href="{{ route('admin.dashboard') }}" class="dashboard-btn">
        ← Dashboard
    </a>
</div>

    <div class="table-box">
    <div class="table-wrapper">

    <div class="booking-summary">
        <div>
            <span class="summary-label">Total Booking</span>
            <strong>{{ $bookings->count() }}</strong>
        </div>

        <div class="summary-icon">
            📋
        </div>
    </div>

        <table>
            <thead>
                <tr>
                    <th>Kode Booking</th>
                    <th>Nama</th>
                    <th>Kapal</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Penumpang</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($bookings as $booking)

                    <tr>
                        <td>
    <span class="booking-code">
        {{ $booking->booking_code }}
    </span>
</td>

                        <td>
    <strong class="customer-name">
        {{ $booking->customer_name }}
    </strong>
</td>

<td>
    <span class="ship-name">
        {{ $booking->ship->name }}
    </span>
</td>

                        <td>
    <span class="date-info">
        {{ $booking->booking_date->format('d M Y') }}
    </span>
</td>

<td>
    <span class="time-info">
        {{ $booking->booking_time->format('H:i') }}
    </span>
</td>

                        <td>
    <span class="passenger-info">
        {{ $booking->passengers }} orang
    </span>
</td>

<td>
    <span class="destination-info">
        {{ $booking->destination }}
    </span>
</td>

                        <td>
                            <span class="status {{ $booking->status }}">
    {{ ucfirst($booking->status) }}
</span>
                        </td>

                        <td>
                            <a href="{{ route('admin.bookings.show', $booking) }}"
                               class="detail-btn">
                                Detail
                            </a>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="9" class="empty">
                            Belum ada booking.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>