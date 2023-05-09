<?php

namespace Database\Seeders\Guard;

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (\App\Models\Guard\Admin::query()->count()) {
            return;
        }

        \App\Models\Guard\Admin::factory()->create([
            'username' => 'admin',
            'name' => 'Test User',
            'email' => 'admin@baza.test',
        ]);
    }
}
