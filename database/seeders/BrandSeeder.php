<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class BrandSeeder extends Seeder
{
    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function run(): void
    {
        // car brands list
        $brands = [
            [
                'name' => 'Toyota',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Honda',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Ford',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Chevrolet',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Nissan',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Hyundai',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Mercedes',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Audi',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Volkswagen',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Mazda',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Subaru',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Jeep',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Buick',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Cadillac',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Lexus',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Acura',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Infiniti',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Porsche',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Volvo',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Lincoln',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Land',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Jaguar',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Mitsubishi',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Mini',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Fiat',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Tesla',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Bentley',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Rolls',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Maserati',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Ferrari',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Lamborghini',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'McLaren',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Bugatti',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Lotus',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Alfa',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Genesis',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Karma',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Rivian',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Lucid',
                'is_active' => true,
                'thumbnail' => ''
            ],
            [
                'name' => 'Polestar',
                'is_active' => true,
                'thumbnail' => ''
            ],
        ];

        foreach ($brands as $brand) {
            $record = Brand::create([
                'name' => $brand['name'],
                'is_active' => $brand['is_active'],
            ]);
            if ($brand['thumbnail'] && $brand['thumbnail'] !== '') {
                $record->addMedia($brand['thumbnail'])->toMediaCollection('thumbnail');
            }
        }
    }
}
