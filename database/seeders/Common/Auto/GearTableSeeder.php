<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\Gear;
use Illuminate\Database\Seeder;

class GearTableSeeder extends Seeder
{
    public function run(): void
    {
        if (Gear::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            Gear::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Arxa',
            'Ön',
            'Tam',
        ];
    }
}
