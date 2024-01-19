<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title' => 'Your Site Title',
            'favicon' => 'favicon.ico',
            'keywords' => 'Amazing',
            'facebook_pixel' => 'Your Facebook Pixel Code',
            'facebook_pixel_switch' => 1, // 1 for ON, 0 for OFF
            'analytics' => 'Your Analytics Code',
            'analytics_switch' => 1, // 1 for ON, 0 for OFF
            'SchmeaORG' => 'Your SchemaORG Code',
            'SchmeaORG_switch' => 1, // 1 for ON, 0 for OFF
            'OGgraph' => 'Your OG Graph Code',
            'OGgraph_switch' => 1, // 1 for ON, 0 for OFF
            'photo_id' => 1, // Your default photo_id
        ]);
    }
}
