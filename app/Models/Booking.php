<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Ship;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_code',
        'ship_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'booking_date',
        'booking_time',
        'passengers',
        'destination',
        'notes',
        'total_price',
        'status',
    ];

    protected $casts = [
        'booking_date' => 'date',
        'booking_time' => 'datetime:H:i',
        'passengers' => 'integer',
        'total_price' => 'decimal:2',
    ];

    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }
}