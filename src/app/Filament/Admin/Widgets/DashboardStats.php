<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Booking;
use App\Models\Court;
use App\Models\Customer;
use App\Models\Payment;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Customers',
                Customer::count()
            ),

            Stat::make(
                'Courts',
                Court::count()
            ),

            Stat::make(
                'Bookings',
                Booking::count()
            ),

            Stat::make(
                'Revenue',
                'Rp ' . number_format(
                    Payment::where('status', 'paid')
                        ->sum('amount'),
                    0,
                    ',',
                    '.'
                )
            ),
        ];
    }
}