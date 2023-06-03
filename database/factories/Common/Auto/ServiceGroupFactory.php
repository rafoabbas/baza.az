<?php

namespace Database\Factories\Common\Auto;

use App\Enums\Common\Status;
use App\Traits\Factory\NameLangFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceGroupFactory extends Factory
{
    use NameLangFactory;

    public function definition(): array
    {
        return [
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'icon' => null,
            'order' => 0,
            'status' => Status::published(),
        ];
    }

    public function icon($icon): self
    {
        return $this->state(fn() => [
            'icon' => $icon,
        ]);
    }
}
