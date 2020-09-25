<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Profile;
use app\user;
use Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   
}
