<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', \App\Livewire\VehicleList::class)
    ->name('app.home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::group([
    'name' => 'vehicles.',
    'as' => 'vehicles.',
], function () {
    Route::get('/vehicles', \App\Livewire\VehicleListPage::class)
        ->name('list');

    Route::get('vehicles/{vehicle:slug}', \App\Livewire\VehicleView::class)
        ->name('view');

    Route::get('vehicles/{vehicle:slug}/reservation', function () {
        // Implementation will be added soon
    })->name('reservation');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
