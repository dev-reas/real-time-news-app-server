<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Profile;
use App\user;
use App\Post;
use App\Category;
use App\Likes;
use Auth;


class Display extends Controller
{
    public function newsthreads(){
        $posts = Post::orderByDesc('created_at')->paginate();
        $categories = Category::all();
   
         return View('NewsThreads')->with([
                                'posts' => $posts, 
                                'categories' => $categories,
                                            ]);
    }
    

   

}
