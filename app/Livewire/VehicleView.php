<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Livewire\Component;

class VehicleView extends Component
{

    public Vehicle $vehicle;

    public function render()
    {
        return view('livewire.vehicle-view')->layout('layouts.app');
    }
}
