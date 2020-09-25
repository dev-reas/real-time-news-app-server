<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register','registerAppController@index');

Route::post('login','loginAppController@index');

Route::get('covid','apiAppController@index');

Route::get('news','apiNewsAppController@index');

Route::get('headnews','apiHeadNewsAppController@index');

Route::get('all-news','apiNewsAppController@all');

Route::get('all-headnews','apiHeadNewsAppController@all');

Route::get('category','categoryAppController@viewCateg');

Route::middleware('auth:api')->post('posting','postAppController@addPost');

Route::middleware('auth:api')->post('logout','loginAppController@logout');

Route::middleware('auth:api')->get('profile','profileAppController@index');

Route::middleware('auth:api')->get('post-repository','postAppController@postRepository');

Route::middleware('auth:api')->get('post-view/{post}','postAppController@postView');

Route::middleware('auth:api')->post('post-comment/{post}','postAppController@comment');

Route::middleware('auth:api')->get('category/{id}','categoryAppController@viewCategPost');

Route::middleware('auth:api')->get('/edit/{id}', 'postAppController@editView');

Route::middleware('auth:api')->post('/editPost/{id}', 'postAppController@editPost');

Route::middleware('auth:api')->post('/deletePost/{id}', 'postAppController@deletePost');

Route::middleware('auth:api')->get('/profile/{profile}', 'userpageController@updateprofile');

Route::middleware('auth:api')->post('/update/{user_id}', 'userpageController@update');

Route::middleware('auth:api')->post('/post-like/{id}', 'postAppController@postLike');

Route::middleware('auth:api')->post('/post-dislike/{id}', 'postAppController@postDisLike');

Route::middleware('auth:api')->get('/user-page/{profile}', 'userpageController@display');