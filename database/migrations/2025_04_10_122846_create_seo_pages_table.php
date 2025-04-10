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
        Schema::create('seo_pages', function (Blueprint $table) {
            $table->id();
            $table->string('home_meta_title')->nullable();
            $table->longText('home_meta_description')->nullable();
            $table->string('about_meta_title')->nullable();
            $table->longText('about_meta_description')->nullable();
            $table->string('gallery_meta_title')->nullable();
            $table->longText('gallery_meta_description')->nullable();
            $table->string('news_meta_title')->nullable();
            $table->longText('news_meta_description')->nullable();
            $table->string('whatwedo_meta_title')->nullable();
            $table->longText('whatwedo_meta_description')->nullable();
            $table->string('testimonials_meta_title')->nullable();
            $table->longText('testimonials_meta_description')->nullable();
            $table->string('services_meta_title')->nullable();
            $table->longText('services_meta_description')->nullable();
            $table->string('contact_meta_title')->nullable();
            $table->longText('contact_meta_description')->nullable();
            $table->string('terms_meta_title')->nullable();
            $table->longText('terms_meta_description')->nullable();
            $table->string('policy_meta_title')->nullable();
            $table->longText('policy_meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_pages');
    }
};
