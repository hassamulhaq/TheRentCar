<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'brand_id' => ['nullable'],
            'model' => ['nullable'],
            'engine' => ['nullable'],
            'price_per_day' => ['required'],
            'currency_id' => ['nullable', 'integer'],
            'quantity' => ['nullable'],
            'status' => ['required'],
            'short_description' => ['nullable'],
            'long_description' => ['nullable'],
            'manual_or_auto' => ['nullable'],
            'category_id' => ['nullable', 'integer'],
            'unique_number' => ['required'],
            'number_of_seats' => ['nullable'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
