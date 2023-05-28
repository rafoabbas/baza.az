<?php

namespace Database\Factories\Common\Auto;

use App\Enums\Common\Status;
use App\Traits\Factory\NameFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    use NameFactory;

    public function definition(): array
    {
        return [
            'code' => rand(1, 99),
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
            'type' => 1,
        ];
    }
}
