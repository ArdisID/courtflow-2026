<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

use App\Livewire\HomePage;
use App\Livewire\CourtPage;
use App\Livewire\BookingPage;
use App\Livewire\ContactPage;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/*
/ END
*/

Route::get('/', HomePage::class)->name('home');

Route::get('/courts', CourtPage::class)->name('courts');

Route::get('/booking', BookingPage::class)->name('booking');

Route::get('/contact', ContactPage::class)->name('contact');