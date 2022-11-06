<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'name' => 'الإدارة العامة للجوازات والهجرة',

            'key' => 'Sudan, khartoum',

            'description' => 'Passport',

            'address' => 'Sudan, khartoum',
            
            'image' => 'favicon.png',

            'contact_number' => '249 99183323',

            'email' => 'info@passport.gov.sd.com',

            'image' => 'icon.png',

            'facebook' => '#',

            'twitter' => '#',

            'youtube' => '#',
        ]);
    }
}
