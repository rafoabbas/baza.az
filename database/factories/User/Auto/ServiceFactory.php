<?php

namespace Database\Factories\User\Auto;

use App\Enums\Advertisement\AdvertisementStatus;
use App\Models\Common\Location\Region;
use App\Models\Guard\User;
use App\Traits\Factory\CommonFactory;
use App\Traits\Factory\UserIdFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    use UserIdFactory;
    use CommonFactory;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'region_id' => Region::query()->inRandomOrder()->value('id'),
            'name' => $this->faker->word,
            'slug' => Str::slug($this->faker->word),
            'address' => 'Hello world',
            'email' => $this->faker->email,
            'web_site' => $this->faker->url,
            'working_hours' => [
                'weekdays' => '08:00 — 20:00',
                'saturday' => '08:00 — 20:00',
                'sunday' => '08:00 — 20:00',
            ],
            'phones' => [
                $this->faker->phoneNumber,
                $this->faker->phoneNumber,
                $this->faker->phoneNumber
            ],
            'image' => $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
            'images' => [
                $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
                $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
                $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
            ],
            'description' => $this->faker->paragraph,
            'banners' => [
                $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
                $this->faker->pictureSaveDatabase('uploads/' . date('y/m')),
            ],
            'addresses' => [
                [
                    'address' => $this->faker->address,
                    'latitude' => '40.4093',
                    'longitude' => '49.8671',
                ],

                [
                    'address' => $this->faker->address,
                    'latitude' => '40.4093',
                    'longitude' => '49.8671',
                ]
            ],
            'published' => AdvertisementStatus::published(),
            'order' => rand(1, 100),
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
