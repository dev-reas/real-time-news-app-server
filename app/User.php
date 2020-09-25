<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Profile;
use App\Post;
use App\Comment;
use App\Likes;
use App\Dislikes;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $guarded = [];
    
    protected $fillable = [
        'first_name','middle_name','last_name', 'email', 'password','ratings',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function like()
    {
        return $this->hasOne(Likes::class);
    }

    public function dislike()
    {
        return $this->hasOne(Dislikes::class);
    }
}
