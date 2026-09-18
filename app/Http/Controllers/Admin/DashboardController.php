<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Ship;
use App\Models\CustomerMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooking = Booking::count();

        $totalShips = Ship::where('status', true)->count();

        $unreadMessages = CustomerMessage::where('status', 'unread')->count();

        $pending = Booking::where('status', 'pending')->count();

        $confirmed = Booking::where('status', 'confirmed')->count();

        $completed = Booking::where('status', 'completed')->count();

        $cancelled = Booking::where('status', 'cancelled')->count();

        $latestBookings = Booking::with('ship')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard.index', compact(
            'totalBooking',
            'totalShips',
            'unreadMessages',
            'pending',
            'confirmed',
            'completed',
            'cancelled',
            'latestBookings'
        ));
    }
}