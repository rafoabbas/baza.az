<?php

namespace Database\Seeders\Common\Car;

use App\Models\Common\Car\CarBrand;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CarBrandAndModelTableSeeder extends Seeder
{
    /**
     * @throws FileNotFoundException
     */
    public function run(): void
    {
        if (CarBrand::query()->count()) {
            return;
        }

        $brands = File::json(database_path('seeders/data/car_brands_and_models.json'));

        foreach ($brands as $item) {

            $brand = CarBrand::factory()->name($item['brand'])->create();

            foreach ($item['models'] as $model) {
                $brand->models()->create([
                    'name_az' => $model,
                    'name_ru' => $model,
                ]);
            }
        }
    }
}
