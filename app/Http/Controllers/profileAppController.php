<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Post;
use Auth;
use DB;
use Carbon\Carbon;

class profileAppController extends Controller
{
    public function index()
    {
        $profiles = auth()->guard('api')->user()->profile;
        $id = auth()->guard('api')->user()->id;
        $revisedPost = [];
        $profilePosts =  Post::latest()->with('user','comments', 'category', 'likes', 'dislikes')
                                        ->where('user_id', $id)->get();

        foreach($profilePosts as $posts)
        {
            if(count($profilePosts) > 0)
            {
                $revisedPost[] = [
					'id' => $posts['id'],
					'post_title' => $posts['post_title'],
					'post_body' => $posts['post_body'],
					'post_image' => $posts['post_image'],
					'updated_at' => Carbon::parse($posts['created_at'])->diffForHumans(),
                    'user_id' => $posts['user']['profile']['id'],
                    'category' => $posts['category']['categories'],
                    'name' => $posts['user']['profile']['name'],
                    'designation' => $posts['user']['profile']['designation'],
                    'profile_pic' => $posts['user']['profile']['profile_pic'],
                    'commentCount' => count($posts['comments']),
                    'LikeCount' => count($posts['likes']),
					'DisLikeCount' => count($posts['dislikes']),
                ];
            }
        }

        return response()->json([
            'profile' => $profiles,
            'posts' => $revisedPost,
        ]);
    }
}
