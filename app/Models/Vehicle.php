<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Vehicle extends Model implements HasMedia
{
    use SoftDeletes, HasFactory, InteractsWithMedia, HasSEO;

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

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function currency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public static function searchVehicles($search)
    {
        $query = self::query()->with('media');

        if (!empty($search)) {
            $query->where(function (Builder $query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('brand', 'like', '%' . $search . '%')
                    ->orWhere('model', 'like', '%' . $search . '%')
                    ->orWhere('price_per_day', 'like', '%' . $search . '%')
                    ->orWhere('manual_or_auto', 'like', '%' . $search . '%')
                    ->orWhere('unique_number', 'like', '%' . $search . '%')
                    ->orWhere('number_of_seats', 'like', '%' . $search . '%');
            });
        }

        return $query;
    }
}
