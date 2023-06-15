<?php

namespace Database\Factories\User\Auto;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image' => $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
        ];
    }
}
