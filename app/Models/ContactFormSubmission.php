<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    //
    
protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'services',
        'message',
    ];
}
