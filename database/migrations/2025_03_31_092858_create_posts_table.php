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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->constrained('categories')->nullable();  
            // $table->json('categories')->nullable(); 
     
            $table->json('categories')->nullable();
            $table->string('title')->nullable();
            $table->longText('content')->nullable(); 
            $table->longText('excerpt')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
