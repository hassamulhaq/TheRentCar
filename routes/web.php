<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', \App\Livewire\VehicleList::class)
    ->name('app.home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::group([
    'middleware' => ['guest']
], function () {
    Route::get('vehicles', \App\Livewire\VehicleListPage::class)
        ->name('vehicle-list');

    Route::get('vehicles/{vehicle:slug}', \App\Livewire\VehicleView::class)
        ->name('vehicles.view');

    Route::get('reservation/{vehicle}', function () {
        dd('will be implemented soon');
    })->name('vehicle.reservation');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
