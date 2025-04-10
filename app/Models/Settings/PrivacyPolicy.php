<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    //
    protected $fillable = [
        'title',
        'subtitle',
        'content',
    ];
}
