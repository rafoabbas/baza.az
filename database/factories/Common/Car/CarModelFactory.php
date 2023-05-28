<?php

namespace Database\Factories\Common\Car;

use App\Enums\Common\Status;
use App\Models\Common\Car\CarBrand;
use App\Traits\Factory\NameFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarModelFactory extends Factory
{
    use NameFactory;

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
}
