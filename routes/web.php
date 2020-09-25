<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Home Routes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app/{post}', 'HomeController@show');

// Post Routes
Route::get('/post', 'PostController@post');

Route:: get('/view/{id}', 'PostController@view')->name('post.view');

Route:: get('/edit/{id}', 'PostController@edit');

Route:: get('/editprofile/{id}', 'PostController@editprofile');

Route::get('/delete/{id}', 'PostController@deletePost');

Route::get('/category/{id}', 'PostController@category');

Route::get('/categ/{id}', 'PostController@categ');

Route::get('/like/{id}', 'PostController@like');

Route::get('/dislike/{id}', 'PostController@dislike');

Route:: post('/addPost', 'PostController@addPost');

Route:: post('/editPost/{id}' , 'PostController@editPost');

Route:: post('/comment/{id}' , 'PostController@comment');

// Categories Routes
Route::get('/categories', 'CategoriesController@categories');

Route:: post('/addCategory', 'CategoriesController@addCategory');

Route::get('category', 'CategoriesController@categ');

Route::get('category/{categories}', 'CategoriesController@show');

// Profile Routes
Route::get('/profile', 'ProfileController@profile');

Route::post('/addProfile', 'ProfileController@addProfile');


// Display Routes
Route::get('/NewsThreads', 'Display@newsthreads');

Route::get('/newsrticledisplay', 'Display@newsarticle');


// UserProfile Routes
Route::get('/showprofile', 'userpageController@show');

Route::get('/showprofile/{profiles}', 'userpageController@display');



// About Routes
Route::get('/about', 'AboutController@about')->name('about');
