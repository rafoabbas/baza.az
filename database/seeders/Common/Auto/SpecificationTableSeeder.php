<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\Specification;
use Illuminate\Database\Seeder;

class SpecificationTableSeeder extends Seeder
{
    public function run(): void
    {
        if (Specification::query()->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            Specification::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Зона ожидания',
            'Wi — fi',
            'Оплата по безналу',
            'Свой автосервис',
            'Свой автосервис',
            'Тест драйв автомобиля',
            'Возможность покупки в кредит',
            'Оформление прямо в салоне',
            'Полное юридическое сопровождение',
            'Полное юридическое сопровождение',
        ];
    }
}
