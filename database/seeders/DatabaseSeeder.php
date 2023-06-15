<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\Advertisement\AdvertisementStatus;
use App\Models\User\Advertisement\AdvertisementNumber;
use App\Services\Front\Advertisement\AdvertisementNumberService;
use Database\Seeders\Common\Car\CarBrandAndModelTableSeeder;
use Database\Seeders\Common\CommonDatabaseSeeder;
use Database\Seeders\Guard\AdminTableSeeder;
use Database\Seeders\Guard\UserTableSeeder;
use Database\Seeders\System\SystemDatabaseSeeder;
use Database\Seeders\User\AdvertisementDatabaseSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminTableSeeder::class,
            UserTableSeeder::class,
            CommonDatabaseSeeder::class,
            SystemDatabaseSeeder::class,
            AdvertisementDatabaseSeeder::class,
        ]);
    }
}
