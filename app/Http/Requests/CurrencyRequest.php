<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrencyRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['nullable'],
            'name' => ['required'],
            'code' => ['required'],
            'symbol' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
