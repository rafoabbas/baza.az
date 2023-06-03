<?php

namespace Database\Factories\User\Advertisement;

use App\Enums\Advertisement\AdvertisementStatus;
use App\Models\Common\Location\NumberRegion;
use App\Models\Common\Location\Region;
use App\Models\User\Advertisement\AdvertisementNumber;
use App\Models\User\Advertisement\AdvertisementOtp;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use App\Traits\Factory\UserIdFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementNumberFactory extends Factory
{
    use UserIdFactory;

    public function definition(): array
    {
        $service = app(AdvertisementNumberService::class);

        $numberRegion = $this->numberRegion();
        $region = $this->region();

        $phone = $this->faker->randomElement(['50','70','77','99']) . $this->faker->randomNumber(7);

        return [
            'uuid' => AdvertisementOtp::factory()
                ->phone($phone)
                ->create()->getAttribute('uuid'),
            'user_id' => null,
            'region_id' => $region->getAttribute('id'),
            'number_region_id' => $numberRegion->getAttribute('id'),
            'region_prefix' => $numberRegion->getAttribute('region_code'),
            ... $service->splitSeries($series = strtoupper($this->faker->randomLetter() . $this->faker->randomLetter())),
            ... $service->splitNumber($number = rand(100, 999)),
            'full'         => $numberRegion->getAttribute('region_code') . $series . $number,
            'description' => $this->faker->text(100),
            ... $service->price(rand(100, 1000), $mainCurrency = $this->faker->randomElement(['AZN', 'USD', 'EUR'])),
            'main_currency' => $mainCurrency,
            'witch_auto_type' => 'porsche',
            'status' => $this->faker->randomElement(array_keys(AdvertisementStatus::toArray())),
            'is_mirror_numbers' => $this->faker->boolean(),
            'is_three_numbers_in_a_row' => $this->faker->boolean(),
            'is_five_numbers_in_a_row' => $this->faker->boolean(),
            'is_two_zeros_and_a_number' => $this->faker->boolean(),
            'is_vip' => $this->faker->boolean(),
            'is_top' => $this->faker->boolean(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $phone,
            'expired_at' => $this->faker->dateTimeBetween('now', '+1 month')
        ];
    }

    public function region(): Model|Builder|null
    {
        return Region::query()->inRandomOrder()->first();
    }

    public function numberRegion(): Model|Builder|null
    {
        return NumberRegion::query()->inRandomOrder()->first();
    }
}
