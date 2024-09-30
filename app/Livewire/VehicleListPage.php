<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class VehicleListPage extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $vehicles = Vehicle::searchVehicles($this->search)
            ->paginate(30);

        return view('livewire.vehicle-list-page', [
            'vehicles' => $vehicles,
        ])->layout('layouts.app');
    }
}
