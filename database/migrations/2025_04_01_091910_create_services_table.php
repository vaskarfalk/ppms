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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('image')->nullable();
            $table->json('images')->nullable();
            $table->string('icon')->nullable();
            $table->longText('excerpt')->nullable();
            $table->longText('short_content')->nullable();
            $table->longText('content')->nullable(); 
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
