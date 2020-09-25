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
use Carbon\Carbon;
use Str;

class postAppController extends Controller
{
    public function addPost(Request $request, Post $posts)
    {
        $this -> validate($request, [
    		'post_title'	=> 'required',
    		'post_body' 	=> 'required',
			'category_id' 	=> 'required',
			'post_image' 	=> 'required'
		]);

		$posts -> post_title 	=	$request->input('post_title');
		$posts -> user_id 		= 	auth()->guard('api')->user()->id;
		$posts -> post_body 	=	$request->input('post_body');
		$posts -> category_id 	=	$request->input('category_id');

		if(Input::hasFile('post_image')) 
		{
    		$file = Input::file('post_image');
    		$file->move(public_path(). '/posts/',
    		$file-> getClientOriginalName());
    		$url = URL::to("/"). '/posts/'.
    		$file->getClientOriginalName();
		}

    	$posts->post_image= $url;
        $posts->save();
		return response($posts);
	}
	
	public function postRepository()
	{
		$allPost = Post::latest()->with('user', 'category','comments', 'likes', 'dislikes')->get();

		$revisedPost = [];
		foreach($allPost as $posts)
		{
			if(count($allPost) > 0)
			{
				$revisedPost[] = [
					'id' => $posts['id'],
					'post_title' => $posts['post_title'],
					'post_body' => $posts['post_body'],
					'post_image' => $posts['post_image'],
					'updated_at' => Carbon::parse($posts['created_at'])->diffForHumans(),
					'user_id' => $posts['user']['profile']['id'],
					'name' => $posts['user']['profile']['name'],
					'designation' => $posts['user']['profile']['designation'],
					'profile_pic' => $posts['user']['profile']['profile_pic'],
					'category' => $posts['category']['categories'],
					'commentCount' => count($posts['comments']),
					'LikeCount' => count($posts['likes']),
					'DisLikeCount' => count($posts['dislikes']),
				];
			}
		}
		
    	return response()->json($revisedPost);
	}

	public function postView(Post $post)
	{
		$profiles = $post->user()->first()->profile;
		$allCommentsInfo = $post->comments()->latest()->with('user')->get();
		$revisedComment = array();
		$withLikes = count($post->likes()->get());
		$withDislikes = count($post->dislikes()->get());
		$withComments = count($post->comments()->get());
		$post_time = Carbon::parse($post->created_at)->diffForHumans();
		$category = $post->category->categories;
		foreach($allCommentsInfo as $comments)
		{
			if(count($allCommentsInfo) > 0)
			{
				$revisedComment[] = array(
					'id' => $comments['id'],
					'comment' => $comments['comment'],
					'updated_at' => Carbon::parse($comments['created_at'])->diffForHumans(),
					'user_id' => $comments['user']['profile']['id'],
					'name' => $comments['user']['profile']['name'],
					'profile_pic' => $comments['user']['profile']['profile_pic'],
				);
			}
		}

		if(count($revisedComment) > 0)
		{
			$finalOutput = $revisedComment;
		}
		else
		{
			$finalOutput = 'No comment yet';
		}
		
		return response()->json(['comments' => $finalOutput,
								 'profile' => $profiles,
								 'post' => $post,
								 'likeCounts' => $withLikes,
								 'DislikeCounts' => $withDislikes,
								 'commentCounts' => $withComments,
								 'post_time' => $post_time,
								 'category' => $category
								 ]);
	}

	public function comment(Request $request,$post_id)
	{
		$this -> validate($request, ['comment' => 'required']);

		$comment = new Comment;
		$comment ->user_id =  auth()->guard('api')->user()->id;
		$comment -> post_id = $post_id;
		$comment-> comment = $request->input('comment');
		$comment ->save();
		return response('Comment done');
	}

	public function editView($post_id)
	{
		$post = Post::find($post_id);	
		$category = $post->category;

		return response()->json([
			'posts' => $post,
		]);
	}

	public function editPost(Request $request, $post_id)
	{
		$posts = Post::find($post_id); 

		$this -> validate($request, [
    		'post_title'	=> 'required',
    		'post_body' 	=> 'required',
			'category_id' 	=> 'required',
			'post_image' 	=> 'required'
		]);

		$posts -> post_title 	=	$request->input('post_title');
		$posts -> user_id 		= 	auth()->guard('api')->user()->id;
		$posts -> post_body 	=	$request->input('post_body');
		$posts -> category_id 	=	$request->input('category_id');

		if(Input::hasFile('post_image')) 
		{
    		$file = Input::file('post_image');
    		$file->move(public_path(). '/posts/',
    		$file-> getClientOriginalName());
    		$url = URL::to("/"). '/posts/'.
    		$file->getClientOriginalName();
		}

    	$posts->post_image= $url;
        $posts->save();
		return response($posts);
	}

	public function deletePost($post_id)
	{
		Post::where('id', $post_id)
				->delete();
		
		return response('Post deleted');
	}

	public function postLike($id)
	{
		$like_user = Likes::where(['user_id'=> auth()->guard('api')->user()->id, 'post_id' => $id])->first();
		if(empty($like_user->user_id))
		{
			$like = new Likes;
			$like -> user_id = auth()->guard('api')->user()->id;
			$like -> email = auth()->guard('api')->user()->email;
			$like -> post_id = $id;
			$like -> save();
			return response()->json(['data' => $like]);
		}
		else
		{
			$like = Likes::find($id);
			Likes::where('user_id', auth()->guard('api')->user()->id)->delete();
			return response($like);
		}
	}

	public function postDisLike($id)
	{
		$like_user = Dislikes::where(['user_id'=> auth()->guard('api')->user()->id, 'post_id' => $id])->first();
		if(empty($like_user->user_id))
		{
			$like = new Dislikes;
			$like -> user_id = auth()->guard('api')->user()->id;
			$like -> email = auth()->guard('api')->user()->email;
			$like -> post_id = $id;
			$like -> save();
			return response($like);
		}
		else
		{
			$like = Dislikes::find($id);
			Dislikes::where('user_id', auth()->guard('api')->user()->id)->delete();
			return response($like);
		}
	}
}
