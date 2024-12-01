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
        'brand_id',
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

    public function brand(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public static function searchVehicles(array $filters)
    {
        $query = self::query()->with(['media', 'brand', 'category', 'currency']);

        $query->where(function (Builder $query) use ($filters) {
            $query->when($filters['model'], function (Builder $query, $model) {
                $query->where('model', '=', $model);
            });

            $query->when($filters['brand'], function (Builder $query, $brand) {
                $query->whereHas('brand', function (Builder $query) use ($brand) {
                    $query->where('id', '=', $brand);
                });
            });

            $query->when($filters['category'], function (Builder $query, $category) {
                $query->whereHas('category', function (Builder $query) use ($category) {
                    $query->where('id', '=', $category);
                });
            });

            $query->when($filters['noOfSeat'], function (Builder $query, $noOfSeat) {
                $query->where('number_of_seats', '<=', $noOfSeat);
            });

            $query->when($filters['perDayPrice'], function (Builder $query, $perDayPrice) {
                $query->where('price_per_day', '=', $perDayPrice);
            });

            $query->when($filters['manualOrAuto'], function (Builder $query, $manualOrAuto) {
                $query->where('manual_or_auto', '=', $manualOrAuto);
            });

            // Global search filter
            $query->when($filters['search'], function (Builder $query, $search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('model', 'like', '%' . $search . '%')
                    ->orWhere('price_per_day', 'like', '%' . $search . '%')
                    ->orWhere('manual_or_auto', 'like', '%' . $search . '%')
                    ->orWhere('unique_number', 'like', '%' . $search . '%')
                    ->orWhere('number_of_seats', 'like', '%' . $search . '%');
            });
        });

        return $query;
    }
}
