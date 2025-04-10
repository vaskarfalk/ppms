<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class TermsAndConditions extends Model
{
    //
    protected $fillable = [
        'title',
        'subtitle',
        'content',
    ];
}
