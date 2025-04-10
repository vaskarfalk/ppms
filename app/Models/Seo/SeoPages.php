<?php

namespace App\Models\Seo;

use Illuminate\Database\Eloquent\Model;

class SeoPages extends Model
{
    //
    protected $fillable = [

        'home_meta_title',
        'home_meta_description',
        'about_meta_title',
        'about_meta_description',
        'gallery_meta_title',
        'gallery_meta_description',
        'news_meta_title',
        'news_meta_description',
        'whatwedo_meta_title',
        'whatwedo_meta_description',
        'testimonials_meta_title',
        'testimonials_meta_description',
        'services_meta_title',
        'services_meta_description',
        'contact_meta_title',
        'contact_meta_description',
        'terms_meta_title',
        'terms_meta_description',
        'policy_meta_title',
        'policy_meta_description'
    ];
}
