<?php

namespace App\Livewire;

use App\Models\Court;
use Livewire\Component;

class CourtPage extends Component
{
    public function render()
    {
        return view('livewire.court-page', [
            'courts' => Court::where('is_active', true)->get(),
        ])->layout('layouts.app');
    }
}