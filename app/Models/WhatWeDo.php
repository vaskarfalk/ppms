<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatWeDo extends Model
{
    //
protected $fillable = [
        'title',
        'sub_title',
        'description',
        'button_name',
        'url',
        'image',
    ];
}
