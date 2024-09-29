<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', function () {
    return view('vehicles.index');
})->name('vehicles.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::group([
    'middleware' => ['auth', 'verified']
], function () {
    Route::get('vehicles', \App\Livewire\VehicleList::class)
        ->name('vehicles');

    Route::get('vehicles/{vehicle:slug}', [\App\Http\Controllers\VehicleController::class, 'show'])
        ->name('vehicles.view');

    Route::get('reservation/{vehicle}', function () {
        dd('oooo');
    })->name('vehicle.reservation');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
