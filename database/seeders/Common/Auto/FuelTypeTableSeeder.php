<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\FuelType;
use Illuminate\Database\Seeder;

class FuelTypeTableSeeder extends Seeder
{
    public function run(): void
    {
        if (FuelType::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            FuelType::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Benzin',
            'Dizel',
            'Qaz',
            'Elektrik',
            'Hibrid',
            'Plug-in Hibrid',
            'Digər'
        ];
    }
}
