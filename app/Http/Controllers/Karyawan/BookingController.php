<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;
    $status = $request->status;

    $bookings = Booking::with('ship')
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('booking_code', 'like', '%' . $search . '%')
                  ->orWhere('customer_name', 'like', '%' . $search . '%')
                  ->orWhere('customer_email', 'like', '%' . $search . '%');
            });
        })
        ->when($status, function ($query) use ($status) {
            $query->where('status', $status);
        })
        ->latest()
->paginate(10)
->withQueryString();

    return view('karyawan.bookings.index', compact(
        'bookings',
        'search',
        'status'
    ));
}

    public function show(Booking $booking)
    {
        $booking->load('ship');

        return view('karyawan.bookings.show', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
{
    $request->validate([
        'status' => 'required|in:pending,confirmed,completed,cancelled',
    ]);

    $currentStatus = $booking->status;
    $newStatus = $request->status;

    // Aturan perubahan status booking
    $allowedTransitions = [
        'pending' => ['confirmed', 'cancelled'],
        'confirmed' => ['completed', 'cancelled'],
        'completed' => [],
        'cancelled' => [],
    ];

    // Jika status tidak berubah, tetap diperbolehkan
    if ($currentStatus !== $newStatus) {
        if (!in_array($newStatus, $allowedTransitions[$currentStatus])) {
            return back()->withErrors([
                'status' => 'Status booking tidak dapat diubah dari '
                    . ucfirst($currentStatus)
                    . ' menjadi '
                    . ucfirst($newStatus)
                    . '.'
            ]);
        }
    }

    $booking->update([
        'status' => $newStatus,
    ]);

    return redirect()
        ->route('karyawan.bookings.show', $booking)
        ->with('success', 'Status booking berhasil diperbarui.');
}
}