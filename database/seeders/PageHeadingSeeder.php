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

            
            'about_bg_image'=>'1.png',
            'about_title'=>'abot',
            'about_subtitle' => 'subtitle',
            'ourstory_image'=>'1.png',
            'ourstory_title'=>'title',
            'ourstory_subtitle'=>'subtitle',
            'ourstory_description'=>'description',
            'btn_6'=>'btn',
            'btn_6_url'=>'btn',
            'whychoose_title'=>'title',
            'whychoose_subtitle'=>'subtitle',
            'whychoose_description'=>'description',
            'whychoose_image'=>'1.png',
            'btn_7'=>'btn',
            'btn_7_url'=>'btn',
            'gallery_bg_image'=>'1.png',
            'gallery_title'=>'title',
            'gallery_subtitle'=>'subtitle',

            'news_title'=>'title',
            'news_subtitle'=>'subtitle',
            'news_description'=>'description',

            'what_we_do_title'=>'title',
            'what_we_do_subtitle'=>'subtitle',
            'what_we_do_description'=>'description',

            'contact_form_title'=>'title',
            'contact_form_subtitle'=>'subtitle',
            'contact_bg_image'=>'1.png',
            'contact_title'=>'title',
            'contact_subtitle'=>'subtitle',
            'contact_heading'=>'heading',
            'contact_subheading'=>'subheading',
            'contact_number'=>'number',
            'contact_email'=>'email',
            'whatsapp_number'=>'number',
            'contact_address'=>'address',
            'contact_maps'=>'map',
            'facebook_link'=>'link',
            'twitter_link'=>'link',
            'instagram_link'=>'link',
    
        ]);

    }
}
