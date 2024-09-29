<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'brand',
        'model',
        'engine',
        'price_per_day',
        'currency_id',
        'quantity',
        'status',
        'short_description',
        'long_description',
        'manual_or_auto',
        'category_id',
        'unique_number',
        'number_of_seats',
    ];
}
