<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
