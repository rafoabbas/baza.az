<?php

namespace Database\Factories\Common\Auto;

use App\Enums\Common\Status;
use App\Models\Common\Auto\ServiceGroup;
use App\Traits\Factory\NameLangFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceGroupItemFactory extends Factory
{
    use NameLangFactory;

    public function definition(): array
    {
        return [
            'service_group_id' => ServiceGroup::factory(),
            'name_az' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'order' => 0,
            'status' => Status::published(),
        ];
    }

    public function serviceGroup($service_group_id): self
    {
        return $this->state(fn() => [
            'service_group_id' => $service_group_id,
        ]);
    }
}
