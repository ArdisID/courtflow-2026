<?php

namespace Database\Seeders;

use App\Models\Court;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    public function run(): void
    {
        Court::insert([
            [
                'name' => 'Court A',
                'price_per_hour' => 150000,
                'description' => 'Indoor Padel Court',
                'is_active' => true,
            ],
            [
                'name' => 'Court B',
                'price_per_hour' => 175000,
                'description' => 'Premium Court',
                'is_active' => true,
            ],
            [
                'name' => 'Court C',
                'price_per_hour' => 200000,
                'description' => 'VIP Court',
                'is_active' => true,
            ],
        ]);
    }
}