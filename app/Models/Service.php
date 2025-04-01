<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'slug',
        'is_active',
        'image',
        'meta_title',
        'meta_description',
    ];
}
