<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // kode booking unik
            $table->string('booking_code')->unique();

            // relasi customer
            $table->foreignId('customer_id')
                ->constrained('customers')
                ->cascadeOnDelete();

            // relasi court
            $table->foreignId('court_id')
                ->constrained('courts')
                ->cascadeOnDelete();

            // jadwal booking
            $table->date('booking_date');
            $table->time('start_time');

            // durasi jam
            $table->unsignedInteger('duration');

            // total harga
            $table->decimal('total_price', 12, 2)->default(0);

            // status booking
            $table->enum('status', [
                'pending',
                'confirmed',
                'completed',
                'cancelled',
            ])->default('pending');

            $table->timestamps();

            // index biar query Filament kenceng
            $table->index(['booking_date', 'court_id']);
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};