<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\Market;
use Illuminate\Database\Seeder;

class MarketTableSeeder extends Seeder
{
    public function run(): void
    {
        if (Market::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            Market::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Amerika',
            'Avropa',
            'Digər',
            'Dubay',
            'Koreya',
            'Rəsmi diler',
            'Rusiya',
            'Yaponiya',
        ];
    }
}
