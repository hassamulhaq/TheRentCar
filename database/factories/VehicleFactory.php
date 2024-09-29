<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'brand' => $this->faker->word(),
            'model' => $this->faker->word(),
            'engine' => $this->faker->word(),
            'price_per_day' => $this->faker->word(),
            'currency_id' => $this->faker->randomNumber(),
            'quantity' => $this->faker->word(),
            'status' => $this->faker->word(),
            'short_description' => $this->faker->text(),
            'long_description' => $this->faker->text(),
            'manual_or_auto' => $this->faker->word(),
            'category_id' => $this->faker->randomNumber(),
            'unique_number' => $this->faker->word(),
            'number_of_seats' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
