<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
@include('layouts.navbar')
<body>
<div class="content">
    @if (Route::has('login'))
    <div class="topnav" id="myTopnav">
        @auth
        <div class="topnav" id="myTopnav">
        
                            <a  href="{{ url('/') }}"><img src="/images/rlt_logo.png" alt="Logo" style="width:20px;">
                            Real Time News</a>  
                            <a  href="{{ url('/') }}"> Covid Updates</a>
                            <a href="{{ route('about') }}">About Us</a>
                          
     
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                <div class="topnav-right">       
                        <div class="dropdown" >
                            <button class="dropbtn" id="wala1">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                             <a href="{{ url('/NewsThreads') }}">Display Profile</a>
                            <a href="/showprofile/{{auth()->user()->id}}"> User Profile</a> <a  href="/category/{{auth()->user()->id}}"> Categories</a></div>
                        </div>
                           <a id="wala1" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                </div>          
        </div>
        @else
        <div class="topnav" id="myTopnav">
        
                            <a  href="{{ url('/') }}"><img src="/images/logo.png" alt="Logo" style="width:20px;">
                            Real Time News</a>  

                            <a  href="{{ url('/') }}"> Covid Updates</a>
                            <a  href="{{ url('/categories') }}"> Categories</a>
                            <a href="{{ route('about') }}">About Us</a>

                            <a id="wala" href="{{ route('login') }}">Login</a>
                         
                            <a  id="wala" href="{{ route('register') }}">Register</a>
                        
                         
                

        
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            <div class="topnav-right">
                            <a id="wala1" href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                            <a id="wala1"  href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth  
                        
                        @endif            
            </div>

                               
        </div>
    </div>
       @yield('content')
      
</div>
</body>
</html>
