<?php

namespace App\Models;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_code',
        'customer_id',
        'court_id',
        'booking_date',
        'start_time',
        'duration',
        'total_price',
        'status',
    ];

    protected static function booted(): void
    {
        static::created(function (Booking $booking) {

            Payment::create([
                'booking_id' => $booking->id,
                'amount' => $booking->total_price,
                'status' => 'unpaid',
            ]);

        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function getEndTimeAttribute(): string
    {
        return date(
            'H:i:s',
            strtotime($this->start_time . " +{$this->duration} hours")
        );
    }
}