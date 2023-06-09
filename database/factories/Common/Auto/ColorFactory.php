<?php

namespace Database\Factories\Common\Auto;

use App\Enums\Common\Status;
use App\Traits\Factory\NameLangFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColorFactory extends Factory
{
    use NameLangFactory;

    public function definition(): array
    {
        return [
            'color' => $this->faker->hexColor(), // '#ffffff
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
        ];
    }

    public function color($color): self
    {
        return $this->state(fn () => [
            'color' => $color,
        ]);
    }
}
