<?php

namespace Database\Seeders\Guard;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Guard\Admin::factory()->create([
            'username' => 'admin',
            'name' => 'Test User',
            'email' => 'admin@admin.test',
        ]);
    }
}
