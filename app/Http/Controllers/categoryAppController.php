<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Likes;
use App\Dislikes;
use App\Comment;
use App\Profile;
use App\User;
use Auth;
use DB;
use Carbon\Carbon;

class categoryAppController extends Controller
{
    public function viewCategPost($id) 
    {
        $category = Category::find($id);
        $categPost = $category->posts()->latest()->with('comments', 'likes')->get();

        $revisedPosts = [];

		foreach($categPost as $posts)
		{
			if(count($categPost) > 0)
			{
				$revisedPosts[] = [
                    'id' => $posts['id'],
					'post_title' => $posts['post_title'],
                    'post_body' => $posts['post_body'],
                    'post_image' => $posts['post_image'],
                    'updated_at' => Carbon::parse($posts['created_at'])->diffForHumans(),
					'user_id' => $posts['user']['profile']['id'],
                    'name' => $posts['user']['profile']['name'],
                    'designation' => $posts['user']['profile']['designation'],
                    'profile_pic' => $posts['user']['profile']['profile_pic'],
                    'commentCount' => count($posts['comments']),
                    'LikeCount' => count($posts['likes']),
                    'DisLikeCount' => count($posts['dislikes']),
                ];
			}
		}

        return response()->json($revisedPosts);
    }

    public function viewCateg()
    {   
        $array = array();
        $categories =Category::all();
				
        foreach($categories->all() as $categories)
        {
            $id[] = $categories['id'];
            $category[] = $categories['categories'];
        }

        for($i = 0; $i < 5; $i++)
        {
            $array[$i] = [
                'id' => $id[$i],
                'category' => $category[$i]
            ];
        }

        return response()->json([
            'array1' => $array[0],
            'array2' => $array[1],
            'array3' => $array[2],
            'array4' => $array[3],
            'array5' => $array[4],
        ]);
    }
}
