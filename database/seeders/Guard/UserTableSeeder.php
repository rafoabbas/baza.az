<?php

namespace Database\Seeders\Guard;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run(): void
    {
        if (\App\Models\Guard\User::query()->count()) {
            return;
        }

        \App\Models\Guard\User::factory()
            ->business(false)
            ->email('personal@baza.test')
            ->phone('994101001010')
            ->create();

        \App\Models\Guard\User::factory()
            ->business(true)
            ->email('business@baza.test')
            ->phone('994102002020')
            ->create();
    }
}
