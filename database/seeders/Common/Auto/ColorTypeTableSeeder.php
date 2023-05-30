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

        foreach ($this->data() as $key => $datum)
        {
            Color::factory()->name($key)
                ->color($datum)
                ->create();
        }
    }

    public function data(): array
    {
        return [
            'Qara' => '#000000',
            'Yaş Asfalt' => '#505050',
            'Boz' => '#808080',
            'Gümüşü' => '#c0c0c0',
            'Ağ' => '#ffffff',
            'Bej' => '#f5f5dc',
            'Tünd qırmızı' => '#9b2d30',
            'Qırmızı' => '#ff0000',
            'Çəhrayı' => '#ffc0cb',
            'Narıncı' => '#ffa500',
            'Qızılı' => '#ffd700',
            'Sarı' => '#ffff00',
            'Yaşıl' => '#00ff00',
            'Mavi' => '#42aaff',
            'Göy' => '#0000ff',
            'Bənövşəyi' => '#8b00ff',
            'Qəhvəyi' => '#964b00',
        ];
    }
}
