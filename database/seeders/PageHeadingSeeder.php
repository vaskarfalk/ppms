<?php

namespace Database\Seeders;

use App\Models\Settings\PageHeading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageHeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PageHeading::firstOrCreate([
            'id' => 1, // Ensure only one record exists
        ], [
            'title' => 'Default Title',
            'description' => 'Default description.',
            'web_banner' => json_encode([
                'image' => '1.png', // Assign the correct image name
                'alt' => 'Web Banner Alt Text', // Add alt text
            ]),
            'mob_banner' => json_encode([
                'image' => '2.png', // Assign the correct image name
                'alt' => 'Mobile Banner Alt Text', // Add alt text
            ]),
            'btn_1' => 'btn 1',
            'btn_1_url' => 'http::btn',
            'G_rating_image' => '1.png',
            'why_title' => 'tit',
            'who_image' => '5.png',
            'who_title' => 'til1',
            'who_subtitle' => 'sub title',
            'who_description' => 'btn 1',
            'btn_2' => 'btn 1',
            'btn_2_url' => 'http::btn 1',
            'service_title' => 'btn 1',
            'service_subtitle' => 'btn 1',
            'service_description' => 'btn 1',
            'covered_image' => '2.png',
            'covered_title' => 'btn 1',
            'covered_description' => 'btn 1',
            'btn_3' => 'btn 1',
            'btn_3_url' => 'http::btn',
            'review_title' => 'btn 1',
            'review_subtitle' => 'btn 1',
            'review_description' => 'btn 1',
            'btn_4' => 'btn 1',
            'btn_4_url' => 'http::btn',
            'help_title' => 'btn 1',
            'btn_5' => 'btn 1',
            'btn_5_url' => 'http::btn',
    
        ]);

    }
}
