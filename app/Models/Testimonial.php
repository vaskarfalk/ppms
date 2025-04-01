<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //

    protected $fillable = [
        'name',
        'company_name',
        'profile_image',
        'is_active',
        'star_rating',
        'description',
    ];
}
