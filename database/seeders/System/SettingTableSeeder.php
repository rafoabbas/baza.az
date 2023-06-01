<?php

namespace Database\Seeders\System;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    public function run(): void
    {
        if (DB::table(config('setting.database.table'))->count()){
            return;
        }

        $settings = [
            'usd_rate' => 1,
            'eur_rate' => 1.2,
            'azn_rate' => 1.7,
        ];

        setting($settings)->save();
    }
}
