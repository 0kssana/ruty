<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Class Category
 * @package App\Models
 * @mixin Builder
 */
class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_category');
    }
}
