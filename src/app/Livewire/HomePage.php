<?php

namespace App\Livewire;

use App\Models\Court;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'courts' => Court::where('is_active', true)
                ->latest()
                ->take(3)
                ->get(),
        ])->layout('layouts.app');
    }
}