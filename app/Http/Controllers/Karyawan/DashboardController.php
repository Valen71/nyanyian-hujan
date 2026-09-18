<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooking = Booking::count();

        $pending = Booking::where('status', 'pending')->count();

        $confirmed = Booking::where('status', 'confirmed')->count();

        $completed = Booking::where('status', 'completed')->count();

        // Mengambil 5 booking terbaru
        $latestBookings = Booking::with('ship')
            ->latest()
            ->take(5)
            ->get();

        return view('karyawan.dashboard', compact(
            'totalBooking',
            'pending',
            'confirmed',
            'completed',
            'latestBookings'
        ));
    }
}