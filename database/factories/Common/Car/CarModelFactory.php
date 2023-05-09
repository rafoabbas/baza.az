<?php

namespace Database\Factories\Common\Car;

use App\Enums\Common\Status;
use App\Models\Common\Car\CarBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'car_brand_id' => CarBrand::query()->inRandomOrder()->value('id'),
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
        ];
    }

    public function setCardBrandId(int $cardBrandId): self
    {
        return $this->state([
            'car_brand_id' => $cardBrandId,
        ]);
    }

    public function setName(string $name): self
    {
        return $this->state([
            'name_az' => $name,
            'name_ru' => $name,
        ]);
    }
}
