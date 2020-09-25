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
use DB;
use Auth;



class PostController extends Controller
{
    public function post()
    {
		$categories = Category::all();
    	return view('post.post'  , [
									'categories' => $categories
									]);
    }

    public function addPost(Request $request)
    { 
    	$this -> validate($request, [
    		'post_title'	=> 'required',
    		'post_body' 	=> 'required',
			'category_id' 	=> 'required',
			]);
		
			$posts = new Post;
			$posts -> post_title =$request->input('post_title');
			$posts -> user_id =Auth::user()->id;
			$posts -> post_body =$request->input('post_body');
			$posts -> category_id =$request->input('category_id');

	    	if(Input::hasFile('post_image')) {

    		$file = Input::file('post_image');
    		$file->move(public_path(). '/posts/',
    		$file-> getClientOriginalName());
    		$url = URL::to("/"). '/posts/'.
    		$file->getClientOriginalName();
		}
    	$posts->post_image= $url;
		$posts->save();
    	return redirect('NewsThreads')->
    	with('response', 'Post added successfully');
	}

			public function view($post_id)
			{
				$posts = Post::where('id', '=', $post_id)->get();
				$likePost = Post::find($post_id);
				$likeCtr = Likes::where(['post_id' => $likePost->id])->count();
				$dislikeCtr = DisLikes::where(['post_id' => $likePost->id])->count();
				$categories = Category::all();
				$user_id = Auth::user()->first_name;
				$profiles = Profile::where('id', '=', $post_id)->get();
				$comments = DB::table('users')
						->join('comments', 'users.id', '=', 'comments.user_id')
						->join('posts', 'comments.post_id', '=', 'posts.id')
						->join('profiles', 'users.id', '=', 'profiles.id')
           			 ->select('users.first_name','comments.*', 'profiles.*')
					->where(['posts.id' => $post_id])
					->get();
				
				return view('post.view', [
					'posts'		 	=> $posts, 
					'categories' 	=> $categories,
					'likeCtr'		=> $likeCtr,
					'dislikeCtr' 	=> $dislikeCtr, 
					'profiles' 		=> $profiles,
					'comments' 		=> $comments, 
				]);
			}

			public function edit($post_id)
			{
				$categories =Category::all();
				$posts = Post::find($post_id);
				$category = Category::find($posts->category_id);
				return view('post.edit', [
											'posts' => $posts, 
											'categories' => $categories,
											'category' => $category]);
			}

			public function editPost(Request $request, $post_id){

				$this -> validate($request, ['post_title' => 'required',
											'post_body' => 'required',
											'category_id' => 'required',
											'post_image' => 'required']);
				
					$posts = new Post;
					$posts -> post_title =$request->input('post_title');
					$posts -> user_id =Auth::user()->id;
					$posts -> post_body =$request->input('post_body');
					$posts -> category_id =$request->input('category_id');
		
					if(Input::hasFile('post_image')) {
					$file = Input::file('post_image');
					$file->move(public_path(). '/post_image',
					$file-> getClientOriginalName());
					$url = URL::to("/post_image"). '/posts'.
					$file->getClientOriginalName();
				}
		
				$posts->post_image= $url;
				$data = array(
					'post_title' => $posts-> post_title,
					'user_id' => $posts-> user_id,
					'post_body' => $posts-> post_body,
					'category_id' => $posts-> category_id,
					'post_image' => $posts-> post_image
				);
				Post::where('id', $post_id)
				->update($data);
				$posts->update();
				return redirect('post')->
				with('response', 'Post Updated successfully');	
			}
			

			public function deletePost($post_id)
			{
				Post::where('id', $post_id)
				->delete();
				return redirect('/display')->with('response','Post Delete Succesfully'); 
			}

			public function category($cat_id)
			{
				$categories =Category::all();
				$profiles = Profile::all();
				$like = Likes::all();
				$posts = DB::table('posts')
						->join('categories', 'posts.category_id', '=', 'categories.id')
						->join('profiles', 'posts.user_id', '=', 'profiles.id')
						->select('posts.*','categories.*', 'profiles.*')
						->where(['categories.id' => $cat_id])
						->get();
					
				return view('categories.categoriesposts', ['categories' => $categories,
				'profiles' => $profiles, 'posts' => $posts]);
				 
			}

			public function categ()
			{
				$categories = Category::all();
				return view('layouts.app', [
											'categories' => $categories,
											]);
			}

			public function like($id)
			{
				$loggedin_user = Auth::user()->id;
				$like_user = Likes::where(['user_id'=> $loggedin_user, 'post_id' => $id])->first();
				if(empty($like_user->user_id))
			 {
					$user_id =Auth::user()->id;
					$email = Auth::user()->email;
					$post_id = $id;
					$like = new Likes;
					$like -> user_id = $user_id;
					$like -> email = $email;
					$like -> post_id = $post_id;
					$like -> save();
					return redirect("/view/{$id}");

			}else{
				return redirect("/view/{$id}");
			}

			} 	


			public function dislike($id)
			{
				$loggedin_user = Auth::user()->id;
				$like_user = Dislikes::where(['user_id'=> $loggedin_user, 'post_id' => $id])->first();
				if(empty($like_user->user_id))
			 {
					$user_id =Auth::user()->id;
					$email = Auth::user()->email;
					$post_id = $id;
					$like = new Dislikes;
					$like -> user_id = $user_id;
					$like -> email = $email;
					$like -> post_id = $post_id;
					$like -> save();
					return redirect("/view/{$id}");

			}else{
				return redirect("/view/{$id}");
			}
			}

			
			public function comment(Request $request,$post_id){

				$this -> validate($request, [
						'comment' => 'required',
											]);

				$comment = new Comment;
				$comment ->user_id = Auth::user()->id;
				$comment -> post_id = $post_id;
				$comment-> comment = $request->input('comment');
				$comment ->save();
				return redirect("/view/{$post_id}")->with('response','Comment Added Succesfully');
				
				
			} 	
	
}
