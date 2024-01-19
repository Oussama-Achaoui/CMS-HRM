<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeaderFooterSetting;

class HeaderFooterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderFooterSetting::create([
            'sidebar_title' => 'Your Sidebar Title',
            'sidebar_description' => 'Your Sidebar Description',

            'typed_title' => 'Your Typed Title',
            'typed_text' => 'Your Typed Text',
            'typed_buttontext' => 'Typed Button Text',
            'typed_buttonlink' => 'Typed Button Link',

            'footer_col1_subtitle' => 'Footer Column 1 Subtitle',
            'footer_col1_title' => 'Footer Column 1 Title',
            'footer_col1_buttontext' => 'Footer Column 1 Button Text',
            'footer_col1_buttonlink' => 'Footer Column 1 Button Link',

            'footer_col2_title1' => 'Footer Column 2 Title 1',
            'footer_col2_title2' => 'Footer Column 2 Title 2',
            'footer_col2_html1' => 'Footer Column 2 HTML Content 1',
            'footer_col2_html2' => 'Footer Column 2 HTML Content 2',
            'footer_copyright' => 'Your Copyright Text',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
