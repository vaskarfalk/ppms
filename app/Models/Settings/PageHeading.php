<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class PageHeading extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'web_banner',
        'mob_banner',
        'btn_1',
        'btn_1_url',
        'G_rating_image',
        'why_title',
        'who_image',
        'who_title',
        'who_subtitle',
        'who_description',
        'btn_2',
        'btn_2_url',
        'service_title',
        'service_subtitle',
        'service_description',
        'covered_image',
        'covered_title',
        'covered_description',
        'btn_3',
        'btn_3_url',
        'review_title',
        'review_subtitle',
        'review_description',
        'btn_4',
        'btn_4_url',
        'help_title',
        'btn_5',
        'btn_5_url'
        ,
      
    ];
    protected $casts = [
      'web_banner' => 'array',
      'mob_banner' => 'array',
    ];
}
