<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function categories() {

		$categories = Category::all();
		return view('categories.categories',
									[
										'categories' => $categories,
									]);
    }

    public function addCategory(){

		$data = request()->validate ([
									'categories' => 'required',
								]);
    	$categories = Category::create($data);
    	return back();
    }
}
