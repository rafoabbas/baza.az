<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Common\Car\CarBrandAndModelTableSeeder;
use Database\Seeders\Common\CommonDatabaseSeeder;
use Database\Seeders\Guard\AdminTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminTableSeeder::class,
            CommonDatabaseSeeder::class
        ]);
    }
}
