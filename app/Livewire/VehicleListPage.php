<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class VehicleListPage extends Component
{
    use WithPagination;

    public $search = '';
    public $model = '';
    public $brand = '';
    public $category = '';
    public $noOfSeat = '';
    public $perDayPrice = '';
    public $manualOrAuto = '';

    protected $updatesQueryString = ['search', 'model', 'brand', 'category', 'noOfSeat', 'perDayPrice', 'manualOrAuto'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // Apply the filters when the button is clicked
    public function applyFilters()
    {
        $this->resetPage();
    }

    public function render()
    {
        $filters = [
            'search' => $this->search,
            'model' => $this->model,
            'brand' => $this->brand,
            'category' => $this->category,
            'noOfSeat' => $this->noOfSeat,
            'perDayPrice' => $this->perDayPrice,
            'manualOrAuto' => $this->manualOrAuto,
        ];

        $brands = Brand::all();
        $categories = Category::all();
        $models = Vehicle::distinct()->pluck('model');
        $manualOrAutoOptions = [
            [
                'label' => 'manual',
                'value' => 'Manual'
            ],
            [
                'label' => 'auto',
                'value' => 'Automatic'
            ]
        ];


        $vehicles = Vehicle::searchVehicles(filters: $filters)
            ->paginate(30);

        return view('livewire.vehicle-list-page', [
            'vehicles' => $vehicles,
            'brands' => $brands,
            'categories' => $categories,
            'models' => $models,
            'manualOrAutoOptions' => $manualOrAutoOptions
        ])->layout('layouts.app');
    }
}
