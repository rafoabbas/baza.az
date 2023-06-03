<?php

namespace Database\Seeders\User\Advertisement;

use App\Models\User\Advertisement\AdvertisementNumber;
use Illuminate\Database\Seeder;

class AdvertisementNumberTableSeeder extends Seeder
{
    public function run(): void
    {
        if (AdvertisementNumber::query()->count()) {
            return;
        }

        AdvertisementNumber::factory()->count(100)->create();
    }
}
