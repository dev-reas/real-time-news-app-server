<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use App\Post;
use App\Likes;
use Auth;
use Carbon\Carbon;

class userpageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function display($profile)
    {
        $user = User::find($profile);
        $userProfile = User::find($profile)->profile;

        $profilePosts =  Post::latest()->with('user', 'comments', 'category', 'likes', 'dislikes')
                                        ->where('user_id', $user->id)->get();
        $revisedPost = [];

        foreach($profilePosts as $posts)
        {
            if(count($profilePosts) > 0)
            {
                $revisedPost[] = array(
					'id' => $posts['id'],
                    'post_title' => $posts['post_title'],
					'post_body' => $posts['post_body'],
					'post_image' => $posts['post_image'],
                    'updated_at' => Carbon::parse($posts['created_at'])->diffForHumans(),
                    'first_name' => $posts['user']['first_name'],
                    'last_name' => $posts['user']['last_name'],
                    'user_id' => $posts['user']['profile']['id'],
                    'designation' => $posts['user']['profile']['designation'],
                    'name' => $posts['user']['profile']['name'],
                    'category' => $posts['category']['categories'],
                    'profile_pic' => $posts['user']['profile']['profile_pic'],
                    'commentCount' => count($posts['comments']),
                    'LikeCount' => count($posts['likes']),
					'DisLikeCount' => count($posts['dislikes']),
				);
            }
        }

        return response()->json([
            'user'      =>      $user,
            'profile'   =>      $userProfile,
            'posts'     =>      $revisedPost
        ]);
    }


   public function updateprofile($profile)
   {
        $prof = Profile::where('id', $profile)->firstOrFail();
        return response($prof);
   }

      
   public function update(Request $request, $user_id)
   {
        $this->validate($request,
        [
            'name'          =>  'required',
            'designation'   =>  'required',
            'profile_pic'   =>  'required',
        ]);

        $profiles = Profile::find($user_id);
        $profiles->name         = $request->input('name');
        $profiles->user_id      = auth()->guard('api')->user()->id;
        $profiles->designation  = $request->input('designation');

        if(Input::hasFile('profile_pic'))
        {
            $file = Input::file('profile_pic');
            $file->move(public_path(). '/uploads/', $file->getClientOriginalName());
            $url = URL::to("/").'/uploads/'. $file->getClientOriginalName();
        }
        
        $profiles->profile_pic= $url;
        $data = array(
            'name'         => $profiles->name,
            'user_id'      => $profiles->user_id,
            'designation'  => $profiles->designation,
            'profile_pic'  => $profiles->profile_pic
        );
        
        $profiles->save();
    }
}
