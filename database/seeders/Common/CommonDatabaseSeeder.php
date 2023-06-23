<?php

namespace Database\Seeders\Common;

use Database\Seeders\Common\Auto\BodyTypeTableSeeder;
use Database\Seeders\Common\Auto\ClassTypeTableSeeder;
use Database\Seeders\Common\Auto\ColorTypeTableSeeder;
use Database\Seeders\Common\Auto\FuelTypeTableSeeder;
use Database\Seeders\Common\Auto\GearTableSeeder;
use Database\Seeders\Common\Auto\MarketTableSeeder;
use Database\Seeders\Common\Auto\ServiceGroupTableSeeder;
use Database\Seeders\Common\Auto\SpecificationTableSeeder;
use Database\Seeders\Common\Auto\StoreTypeTableSeeder;
use Database\Seeders\Common\Auto\TransmissionTableSeeder;
use Database\Seeders\Common\Car\CarBrandAndModelTableSeeder;
use Database\Seeders\Common\Location\NumberRegionTableSeeder;
use Database\Seeders\Common\Location\RegionTableSeeder;
use Database\Seeders\Common\Number\NumberFrameTableSeeder;
use Illuminate\Database\Seeder;

class CommonDatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            CarBrandAndModelTableSeeder::class,
            BodyTypeTableSeeder::class,
            ColorTypeTableSeeder::class,
            FuelTypeTableSeeder::class,
            GearTableSeeder::class,
            MarketTableSeeder::class,
            TransmissionTableSeeder::class,
            NumberRegionTableSeeder::class,
            RegionTableSeeder::class,
            ClassTypeTableSeeder::class,
            StoreTypeTableSeeder::class,
            SpecificationTableSeeder::class,
            ServiceGroupTableSeeder::class,
            NumberFrameTableSeeder::class
        ]);
    }
}
