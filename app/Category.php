<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Post;

class Category extends Model
{
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class)->with('user', 'comments', 'likes', 'dislikes');
    }
}
