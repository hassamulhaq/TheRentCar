<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['title' => 'Sedan', 'slug' => 'sedan', 'count' => 0],
            ['title' => 'SUV', 'slug' => 'suv', 'count' => 0],
            ['title' => 'Truck', 'slug' => 'truck', 'count' => 0],
            ['title' => 'Van', 'slug' => 'van', 'count' => 0],
            ['title' => 'Coupe', 'slug' => 'coupe', 'count' => 0],
            ['title' => 'Convertible', 'slug' => 'convertible', 'count' => 0],
            ['title' => 'Wagon', 'slug' => 'wagon', 'count' => 0],
            ['title' => 'Hatchback', 'slug' => 'hatchback', 'count' => 0],
            ['title' => 'Crossover', 'slug' => 'crossover', 'count' => 0],
            ['title' => 'Minivan', 'slug' => 'minivan', 'count' => 0],
            ['title' => 'Sports Car', 'slug' => 'sports-car', 'count' => 0],
            ['title' => 'Luxury Car', 'slug' => 'luxury-car', 'count' => 0],
            ['title' => 'Electric Car', 'slug' => 'electric-car', 'count' => 0],
            ['title' => 'Hybrid Car', 'slug' => 'hybrid-car', 'count' => 0],
            ['title' => 'Diesel Car', 'slug' => 'diesel-car', 'count' => 0],
            ['title' => 'CNG Car', 'slug' => 'cng-car', 'count' => 0],
            ['title' => 'Petrol Car', 'slug' => 'petrol-car', 'count' => 0],
            ['title' => 'LPG Car', 'slug' => 'lpg-car', 'count' => 0],
            ['title' => 'Manual Car', 'slug' => 'manual-car', 'count' => 0],
            ['title' => 'Automatic Car', 'slug' => 'automatic-car', 'count' => 0],
        ];

        Category::insert($categories);
    }
}
