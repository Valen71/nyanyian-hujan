<?php

namespace App\Http\Controllers;

use App\Models\CustomerMessage;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'customer_phone' => 'nullable|string|max:30',
            'message' => 'required|string|max:5000',
        ]);
            $phone = $validated['customer_phone'] ?? null;

            if ($phone) {
                $phone = preg_replace('/[^0-9]/', '', $phone);

                if (str_starts_with($phone, '0')) {
                    $phone = '62' . substr($phone, 1);
                }
            }
        CustomerMessage::create([
            'customer_name' => $validated['customer_name'],
            'customer_email' => $validated['customer_email'] ?? null,
            'customer_phone' => $phone,
            'message' => $validated['message'],
            'status' => 'unread',
        ]);

        return back()->with(
            'success',
            'Pesan berhasil dikirim. Admin akan segera menghubungi kamu.'
        );
    }
    public function check(Request $request)
{
    $request->validate([
        'customer_email' => 'nullable|email',
        'customer_phone' => 'nullable|string|max:30',
    ]);

    $query = CustomerMessage::query();

    if ($request->filled('customer_email')) {
        $query->where('customer_email', $request->customer_email);
    }

    if ($request->filled('customer_phone')) {

        $phone = preg_replace('/[^0-9]/', '', $request->customer_phone);

        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        $query->where('customer_phone', $phone);
    }

    $messages = $query
        ->latest()
        ->get();

    $unreadReplies = $messages
        ->where('status', 'replied')
        ->count();

    return view('layanan.check', compact('messages', 'unreadReplies'));
}
}