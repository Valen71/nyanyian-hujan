<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function create(Ship $ship)
{
    if (!$ship->status) {
        abort(404);
    }

    // Mengambil tanggal yang sudah dibooking
    $bookedDates = Booking::where('ship_id', $ship->id)
        ->whereIn('status', ['pending', 'confirmed'])
        ->pluck('booking_date')
        ->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('Y-m-d');
        })
        ->values();

    return view('bookings.create', compact(
        'ship',
        'bookedDates'
    ));
}
    public function store(Request $request, Ship $ship)
{
    // Kalau kapal tidak aktif, tidak boleh booking
    if (!$ship->status) {
        abort(404);
    }

    // Validasi data booking
    $validated = $request->validate([
        'customer_name' => 'required|string|max:255',
        'customer_email' => 'required|email|max:255',
        'customer_phone' => 'required|string|max:30',
        'booking_date' => 'required|date',
        'booking_hour' => 'required|integer|min:0|max:23',
        'booking_minute' => 'required|integer|min:0|max:59',
        'passengers' => 'required|integer|min:1|max:' . $ship->capacity,
        'destination' => 'required|string|max:255',
        'notes' => 'nullable|string',
    ]);

    // ==================================================
    // CEK APAKAH TANGGAL SUDAH DIBOOKING
    // ==================================================

    $alreadyBooked = Booking::where('ship_id', $ship->id)
        ->where('booking_date', $validated['booking_date'])
        ->whereIn('status', ['pending', 'confirmed'])
        ->exists();

    if ($alreadyBooked) {
        return back()
            ->withErrors([
                'booking_date' => 'Tanggal tersebut sudah dibooking untuk kapal ini. Silakan pilih tanggal lain.'
            ])
            ->withInput();
    }

    // ==================================================
    // MEMBUAT DATA BOOKING
    // ==================================================

    $validated['booking_code'] = 'OT-' . strtoupper(Str::random(8));

    $validated['ship_id'] = $ship->id;

    $validated['booking_time'] =
        $validated['booking_hour'] . ':' . $validated['booking_minute'];

    // Hapus data jam dan menit karena database hanya membutuhkan booking_time
    unset(
        $validated['booking_hour'],
        $validated['booking_minute']
    );

    // Harga booking mengikuti harga kapal
    $validated['total_price'] = $ship->price;

    // Status awal booking
    $validated['status'] = 'pending';

    // Simpan booking
    $booking = Booking::create($validated);

    // Arahkan ke halaman detail booking
    return redirect()
        ->route('bookings.show', $booking);
}

    public function show(Booking $booking)
    {
        $booking->load('ship');

        return view('bookings.show', compact('booking'));
    }
    public function check()
{
    return view('bookings.check');
}

public function search(Request $request)
{
    $request->validate([
        'booking_code' => 'required|string',
    ]);

    $booking = Booking::where('booking_code', $request->booking_code)
        ->with('ship')
        ->first();

    if (!$booking) {
        return back()->withErrors([
            'booking_code' => 'Kode booking tidak ditemukan.'
        ])->withInput();
    }

    return view('bookings.check', compact('booking'));
}
}