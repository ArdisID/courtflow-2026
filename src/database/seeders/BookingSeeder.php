<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        Payment::create([
            'booking_id' => 1,
            'amount' => 300000,
            'payment_date' => now(),
            'payment_method' => 'qris',
            'status' => 'paid',
        ]);
    }
}