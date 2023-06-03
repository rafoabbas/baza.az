<?php

namespace Database\Factories\User\Advertisement;

use App\Enums\Advertisement\OtpStatus;
use App\Traits\Factory\UserIdFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertisementOtpFactory extends Factory
{
    use UserIdFactory;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'user_id' => null,
            'advertisement_id' => null,
            'phone' => $this->faker->randomElement(['50','70','77','99']) . $this->faker->randomNumber(7),
            'otp_code' => $this->faker->randomNumber(4),
            'advertisement_type' => $this->faker->randomElement(['number', 'auto']),
            'status' => $this->faker->randomElement(array_keys(OtpStatus::toArray())),
        ];
    }



    public function phone(string $phone): self
    {
        return $this->state([
            'phone' => $phone
        ]);
    }

    public function advertisement(int $advertisementId): self
    {
        return $this->state([
            'advertisement_id' => $advertisementId
        ]);
    }
}
