<?php

namespace Database\Factories\Common\Location;

use App\Enums\Common\Status;
use App\Traits\Factory\NameLangFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    use NameLangFactory;

    public function definition(): array
    {
        return [
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
        ];
    }
}
