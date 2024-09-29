<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['nullable'],
            'slug' => ['required'],
            'count' => ['nullable', 'integer'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
