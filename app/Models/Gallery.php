<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'is_active',
        'image',
        'G_images',
    ];
    protected $casts = [
        'G_images' => 'array',
    ];
}
