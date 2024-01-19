<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeSetting;

class HomeSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSetting::create([
            'meta_title' => 'Your Meta Title',
            'meta_description' => 'Your Meta Description',
            'fun_title' => 'Fun Title',
            'fun_description' => 'Fun Description',
            'count_number1' => 100,
            'count_description1' => 'Count Description 1',
            'count_number2' => 200,
            'count_description2' => 'Count Description 2',
            'count_number3' => 300,
            'count_description3' => 'Count Description 3',
            'count_number4' => 400,
            'count_description4' => 'Count Description 4',
            'about_subtitle' => 'About Subtitle',
            'about_title' => 'About Title',
            'about_description' => 'About Description',
            'about_buttontext' => 'Read More',
            'about_buttonlink' => '/about',
            'about_image1' => 'about_image1.jpg',
            'about_image2' => 'about_image2.jpg',
            'about_yearstitle' => 'Years Title',
            'about_yearstext' => 'Years Text',
            'services_title' => 'Services Title',
            'projects_title' => 'Projects Title',
            'projects_subtitle' => 'Projects Subtitle',
            'blog_title' => 'Blog Title',
            'blog_subtitle' => 'Blog Subtitle',
            // Add other fields here
        ]);}
}

