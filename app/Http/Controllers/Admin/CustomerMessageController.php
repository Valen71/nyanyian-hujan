<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
   public function index(Request $request)
{
    $search = $request->search;
    $status = $request->status;

    $messages = CustomerMessage::query()
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('customer_name', 'like', '%' . $search . '%')
                    ->orWhere('customer_email', 'like', '%' . $search . '%')
                    ->orWhere('customer_phone', 'like', '%' . $search . '%');
            });
        })
        ->when($status, function ($query) use ($status) {
            $query->where('status', $status);
        })
        ->latest()
->paginate(10)
->withQueryString();

    return view(
        'admin.customer_messages.index',
        compact('messages', 'search', 'status')
    );
}

    public function show(CustomerMessage $customerMessage)
    {
        if ($customerMessage->status === 'unread') {
            $customerMessage->update([
                'status' => 'read',
            ]);
        }

        return view('admin.customer_messages.show', compact('customerMessage'));
    }
    public function reply(Request $request, CustomerMessage $customerMessage)
{
    $validated = $request->validate([
        'admin_reply' => 'required|string|max:5000',
    ]);

    $customerMessage->update([
        'admin_reply' => $validated['admin_reply'],
        'replied_at' => now(),
        'status' => 'replied',
    ]);

    return back()->with(
        'success',
        'Balasan berhasil disimpan.'
    );
}
}