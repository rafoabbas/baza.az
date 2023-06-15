<?php

namespace Database\Seeders\User;

use App\Models\User\Advertisement\AdvertisementNumber;
use Database\Seeders\User\Advertisement\AdvertisementNumberTableSeeder;
use Database\Seeders\User\Auto\ServiceTableSeeder;
use Illuminate\Database\Seeder;

class AdvertisementDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdvertisementNumberTableSeeder::class,
            ServiceTableSeeder::class
        ]);
    }
}
