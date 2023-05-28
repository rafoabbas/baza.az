<?php

namespace Database\Factories\Common\Car;

use App\Enums\Common\Status;
use App\Traits\Factory\NameFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarBrandFactory extends Factory
{
    use NameFactory;

    public function definition(): array
    {
        return [
            'logo' => null,
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
        ];
    }
}
