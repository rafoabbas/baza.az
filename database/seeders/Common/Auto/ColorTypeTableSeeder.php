<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\Color;
use Illuminate\Database\Seeder;

class ColorTypeTableSeeder extends Seeder
{
    public function run(): void
    {
        if (Color::query()->count())
        {
            return;
        }

        foreach ($this->data() as $datum)
        {
            Color::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Qara',
            'Yaş Asfalt',
            'Boz',
            'Gümüşü',
            'Ağ',
            'Bej',
            'Tünd qırmızı',
            'Qırmızı',
            'Çəhrayı',
            'Narıncı',
            'Qızılı',
            'Sarı',
            'Yaşıl',
            'Mavi',
            'Göy',
            'Bənövşəyi',
            'Qəhvəyi',
        ];
    }
}
