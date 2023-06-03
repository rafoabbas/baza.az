<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\StoreType;
use Illuminate\Database\Seeder;

class StoreTypeTableSeeder extends Seeder
{
    public function run(): void
    {
        if (StoreType::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            StoreType::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Автозапчасти',
            'Аудио и видеотехника',
            'Автокосметика и автохимия',
            'Видеорегистаторы',
            'Шины',
            'Противоугонные стредства',
            'Другое',
        ];
    }
}
