<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurrencyRequest;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        return Currency::all();
    }

    public function store(CurrencyRequest $request)
    {
        return Currency::create($request->validated());
    }

    public function show(Currency $currency)
    {
        return $currency;
    }

    public function update(CurrencyRequest $request, Currency $currency)
    {
        $currency->update($request->validated());

        return $currency;
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();

        return response()->json();
    }
}
