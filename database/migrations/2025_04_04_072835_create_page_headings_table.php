<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_headings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->json('web_banner')->nullable();
            $table->json('mob_banner')->nullable();
            $table->string('btn_1')->nullable();
            $table->string('btn_1_url')->nullable();

            $table->string('G_rating_image')->nullable();
            $table->string('why_title')->nullable();


            $table->string('who_image')->nullable();
            $table->string('who_title')->nullable();
            $table->string('who_subtitle')->nullable();
            $table->longText('who_description')->nullable();
            $table->string('btn_2')->nullable();
            $table->string('btn_2_url')->nullable();



            $table->string('service_title')->nullable();
            $table->string('service_subtitle')->nullable();
            $table->longText('service_description')->nullable();


            $table->string('covered_image')->nullable();
            $table->string('covered_title')->nullable();
            $table->longText('covered_description')->nullable();
            $table->string('btn_3')->nullable();
            $table->string('btn_3_url')->nullable();

            $table->string('review_title')->nullable();
            $table->string('review_subtitle')->nullable();
            $table->longText('review_description')->nullable();
            $table->string('btn_4')->nullable();
            $table->string('btn_4_url')->nullable();

            $table->string('help_title')->nullable();
            $table->string('btn_5')->nullable();
            $table->string('btn_5_url')->nullable();




            $table->string('about_bg_image')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->string('ourstory_image')->nullable();
            $table->string('ourstory_title')->nullable();
            $table->string('ourstory_subtitle')->nullable();
            $table->longText('ourstory_description')->nullable();
            $table->string('btn_6')->nullable();
            $table->string('btn_6_url')->nullable();


            $table->string('whychoose_title')->nullable();         
            $table->string('whychoose_subtitle')->nullable();
            $table->string('whychoose_image')->nullable();        
            $table->longText('whychoose_description')->nullable();
            $table->string('btn_7')->nullable();
            $table->string('btn_7_url')->nullable();


            $table->string('gallery_bg_image')->nullable();
            $table->string('gallery_title')->nullable();
            $table->string('gallery_subtitle')->nullable();


            $table->string('news_title')->nullable();
            $table->string('news_subtitle')->nullable();
            $table->longText('news_description')->nullable();

            $table->string('what_we_do_title')->nullable();
            $table->string('what_we_do_subtitle')->nullable();
            $table->longText('what_we_do_description')->nullable();

            $table->string('contact_form_title')->nullable();
            $table->string('contact_form_subtitle')->nullable();

            $table->string('contact_bg_image')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_subtitle')->nullable();
            $table->string('contact_heading')->nullable();
            $table->string('contact_subheading')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->longText('contact_address')->nullable();
            $table->longText('contact_maps')->nullable();

            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_headings');
    }
};
