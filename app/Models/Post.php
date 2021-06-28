<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'posts_category');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
