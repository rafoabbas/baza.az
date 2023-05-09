<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Common\Car\CarBrandAndModelTableSeeder;
use Database\Seeders\Guard\AdminTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            AdminTableSeeder::class,
            CarBrandAndModelTableSeeder::class,
        ]);

        //         \App\Models\Guard\User::factory(10)->create();

        //         \App\Models\Guard\Admin::factory()->create([
        //             'name' => 'Test User',
        //             'email' => 'test@example.com',
        //         ]);
    }
}
