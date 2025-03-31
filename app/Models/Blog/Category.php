<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'slug', 'image', 'is_active'];

    public function post()
    {
       return  $this->hasMany(Post::class);
    }

}
