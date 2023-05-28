<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\Transmission;
use Illuminate\Database\Seeder;

class TransmissionTableSeeder extends Seeder
{
    public function run(): void
    {
        if (Transmission::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            Transmission::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Mexaniki',
            'Avtomat',
            'Avtomat-Tiptronik',
            'Robotlaşdırılmış',
            'Variator'
        ];
    }
}
