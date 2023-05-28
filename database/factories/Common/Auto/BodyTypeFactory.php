<?php

namespace Database\Factories\Common\Auto;

use App\Enums\Common\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class BodyTypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
            'type' => 1,
        ];
    }

    public function name(string $name): self
    {
        return $this->state([
            'name_az' => $name,
            'name_ru' => $name,
        ]);
    }
}
