<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        return Vehicle::all();
    }

    public function store(VehicleRequest $request)
    {
        return Vehicle::create($request->validated());
    }

    public function show(Vehicle $vehicle)
    {
        return $vehicle;
    }

    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->validated());

        return $vehicle;
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return response()->json();
    }
}
