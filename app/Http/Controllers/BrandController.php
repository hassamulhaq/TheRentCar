<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function store(BrandRequest $request)
    {
        return Brand::create($request->validated());
    }

    public function show(Brand $brand)
    {
        return $brand;
    }

    public function update(BrandRequest $request, Brand $brand)
    {
        $brand->update($request->validated());

        return $brand;
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return response()->json();
    }
}
