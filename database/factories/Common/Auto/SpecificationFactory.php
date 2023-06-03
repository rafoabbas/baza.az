<?php

namespace Database\Factories\Common\Auto;

use App\Enums\Common\Status;
use App\Traits\Factory\NameLangFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Common\Auto\Specification>
 */
class SpecificationFactory extends Factory
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
