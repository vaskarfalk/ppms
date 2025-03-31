<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'slug',
        'is_active',
        'categories',
        'image',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'categories' => 'array', 
    ];

    protected function categories(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => is_null($value) ? [] : (is_array($value) ? $value : json_decode($value, true)),
            set: fn ($value) => json_encode(is_array($value) ? $value : [$value])
        );
    }


    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    public function categoryModels()
    {
        return $this->hasMany(Category::class, 'id', 'categories');
    }

}
