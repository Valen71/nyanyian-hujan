<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ShipController as AdminShipController;
use App\Http\Controllers\Karyawan\DashboardController as KaryawanDashboardController;
use App\Http\Controllers\Karyawan\BookingController as KaryawanBookingController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Booking;
use App\Models\Ship;
use App\Models\Advertisement;
use App\Http\Controllers\CustomerMessageController;
use App\Http\Controllers\Admin\CustomerMessageController as AdminCustomerMessageController;


// ======================================================
// HOMEPAGE
// ======================================================
Route::get('/layanan', function () {
    return view('layanan.index');
});

Route::post('/layanan/kirim-pesan', [CustomerMessageController::class, 'store'])
    ->name('customer.message.store');

Route::get('/layanan/cek-pesan', [CustomerMessageController::class, 'check'])
    ->name('customer.message.check');

Route::get('/', function () {

    // Ambil kapal yang masih aktif
    $ships = Ship::where('status', true)->get();

    // Ambil jadwal booking
    $bookings = Booking::whereIn('status', ['pending', 'confirmed'])
        ->get([
            'ship_id',
            'booking_date'
        ])
        ->map(function ($booking) {
            return [
                'ship_id' => $booking->ship_id,
                'booking_date' => \Carbon\Carbon::parse($booking->booking_date)->format('Y-m-d'),
            ];
        });

    // Ambil iklan yang aktif dan masih berada dalam periode tampil
    $advertisements = Advertisement::where('is_active', true)
        ->where(function ($query) {
            $query->whereNull('start_date')
                ->orWhereDate('start_date', '<=', now());
        })
        ->where(function ($query) {
            $query->whereNull('end_date')
                ->orWhereDate('end_date', '>=', now());
        })
        ->latest()
        ->get();

    return view('welcome', compact(
        'ships',
        'bookings',
        'advertisements'
    ));
});


// ======================================================
// PUBLIC - KAPAL
// ======================================================

Route::get('/ships', [ShipController::class, 'index'])
    ->name('ships.index');

Route::get('/ships/{ship}', [ShipController::class, 'show'])
    ->name('ships.show');


// ======================================================
// PUBLIC - BOOKING
// ======================================================

Route::get('/ships/{ship}/booking', [BookingController::class, 'create'])
    ->name('bookings.create');

Route::post('/ships/{ship}/booking', [BookingController::class, 'store'])
    ->name('bookings.store');

Route::get('/booking/{booking}', [BookingController::class, 'show'])
    ->name('bookings.show');


// ======================================================
// PUBLIC - CEK BOOKING
// ======================================================

Route::get('/cek-booking', [BookingController::class, 'check'])
    ->name('bookings.check');

Route::post('/cek-booking', [BookingController::class, 'search'])
    ->name('bookings.search');


// ======================================================
// AUTH
// ======================================================

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.process');

Route::get('/admin/register', [AuthController::class, 'showRegister'])
    ->name('admin.register');

Route::post('/admin/register', [AuthController::class, 'register'])
    ->name('admin.register.process');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');


// ======================================================
// ADMIN SAJA
// ======================================================

Route::middleware(['auth', 'role:admin'])->group(function () {

    // Dashboard Admin
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::resource('/admin/advertisements', \App\Http\Controllers\Admin\AdvertisementController::class)
    ->names('admin.advertisements');
    
  
    Route::get('/admin/customer-messages', [AdminCustomerMessageController::class, 'index'])
    ->name('admin.customer_messages.index');

    Route::get('/admin/customer-messages/{customerMessage}', [AdminCustomerMessageController::class, 'show'])
    ->name('admin.customer_messages.show');

    Route::post('/admin/customer-messages/{customerMessage}/reply', [AdminCustomerMessageController::class, 'reply'])
    ->name('admin.customer_messages.reply');
    // =========================
    // KELOLA USER
    // =========================

    Route::get('/admin/users', [UserController::class, 'index'])
        ->name('admin.users.index');

    Route::get('/admin/users/create', [UserController::class, 'create'])
        ->name('admin.users.create');

    Route::post('/admin/users', [UserController::class, 'store'])
        ->name('admin.users.store');

    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])
        ->name('admin.users.edit');

    Route::put('/admin/users/{user}', [UserController::class, 'update'])
        ->name('admin.users.update');

    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])
        ->name('admin.users.destroy');


    // =========================
    // KELOLA KAPAL
    // =========================

    Route::resource('/admin/ships', AdminShipController::class)
        ->names('admin.ships');

});


// ======================================================
// ADMIN + KARYAWAN
// ======================================================

Route::middleware(['auth', 'role:admin,karyawan'])->group(function () {

    // =========================
    // KELOLA BOOKING
    // =========================

    Route::get('/admin/bookings', [AdminBookingController::class, 'index'])
        ->name('admin.bookings.index');

    Route::get('/admin/bookings/{booking}', [AdminBookingController::class, 'show'])
        ->name('admin.bookings.show');

    Route::put('/admin/bookings/{booking}', [AdminBookingController::class, 'update'])
        ->name('admin.bookings.update');

});


// ======================================================
// KARYAWAN SAJA
// ======================================================

Route::middleware(['auth', 'role:karyawan'])->group(function () {

    // Dashboard Karyawan
    Route::get('/karyawan/dashboard', [KaryawanDashboardController::class, 'index'])
        ->name('karyawan.dashboard');


    // Booking Karyawan
    Route::get('/karyawan/bookings', [KaryawanBookingController::class, 'index'])
        ->name('karyawan.bookings.index');

    Route::get('/karyawan/bookings/{booking}', [KaryawanBookingController::class, 'show'])
        ->name('karyawan.bookings.show');

    Route::put('/karyawan/bookings/{booking}', [KaryawanBookingController::class, 'update'])
        ->name('karyawan.bookings.update');

});


Route::get('/test-language', function () {
    return response()->json([
        'session_locale' => session('locale'),
        'app_locale' => app()->getLocale(),
    ]);
});