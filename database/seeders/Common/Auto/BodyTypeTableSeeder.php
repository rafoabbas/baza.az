<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\BodyType;
use Illuminate\Database\Seeder;

class BodyTypeTableSeeder extends Seeder
{
    public function run(): void
    {
        if (BodyType::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            BodyType::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Avtobus',
            'Dartqı',
            'Furqon',
            'Hetçbek',
            'Kabriolet',
            'Karvan',
            'Kupe',
            'Kvadrosikl',
            'Liftbek',
            'Mikroavtobus',
            'Minivan',
            'Moped',
            'Motosiklet',
            'Offroader / SUV',
            'Pikap',
            'Qolfkar',
            'Rodster',
            'Sedan',
            'Universal',
            'Van',
            'Yük maşını',
            'Digər'
        ];
    }
}
