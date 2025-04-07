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
            $table->json('web_banner')->nullable()->default(json_encode([
                'image' => null,
                'alt' => null,
            ]));
            $table->json('mob_banner')->nullable()->default(json_encode([
                'image' => null,
                'alt' => null,
            ]));
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
