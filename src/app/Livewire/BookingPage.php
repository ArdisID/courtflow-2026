<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Court;
use App\Models\Customer;
use Livewire\Component;

class BookingPage extends Component
{
    public $name;
    public $email;
    public $phone;

    public $court_id;
    public $booking_date;
    public $start_time;
    public $duration = 1;

    public $courts = [];

    public function mount()
    {
        $this->courts = Court::where('is_active', true)->get();

        $courtId = request()->query('court');

        if ($courtId) {
            $this->court_id = $courtId;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'court_id' => ['required', 'exists:courts,id'],
            'booking_date' => ['required', 'date'],
            'start_time' => ['required'],
            'duration' => ['required', 'numeric', 'min:1'],
        ]);

        $customer = Customer::firstOrCreate(
            [
                'email' => $this->email,
            ],
            [
                'name' => $this->name,
                'phone' => $this->phone,
            ]
        );

        $court = Court::findOrFail($this->court_id);

        Booking::create([
            'booking_code' => 'BK-' . now()->format('YmdHis'),
            'customer_id' => $customer->id,
            'court_id' => $court->id,
            'booking_date' => $this->booking_date,
            'start_time' => $this->start_time,
            'duration' => $this->duration,
            'total_price' => $court->price_per_hour * $this->duration,
            'status' => 'pending',
        ]);

        session()->flash(
            'success',
            'Booking berhasil dibuat.'
        );

        $selectedCourt = $this->court_id;

        $this->reset([
            'name',
            'email',
            'phone',
            'booking_date',
            'start_time',
        ]);

        $this->court_id = $selectedCourt;
        $this->duration = 1;
    }

    public function render()
    {
        return view('livewire.booking-page')
            ->layout('layouts.app');
    }

    
}