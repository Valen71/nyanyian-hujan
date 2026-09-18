<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
    protected $fillable = [
    'customer_name',
    'customer_email',
    'customer_phone',
    'message',
    'admin_reply',
    'replied_at',
    'status',
];
protected $casts = [
    'replied_at' => 'datetime',
];
}