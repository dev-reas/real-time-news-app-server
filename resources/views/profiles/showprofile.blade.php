
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/userprofile.css') }}">
<link href="{{asset('fontawesome-free-5.13.1-web/css/fontawesome.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.1-web/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<div class="container">
  <div class="cover">
    <div class="slideShow">
        <img src="/posts/IMG_1006.JPG" x>
    </div>
  </div>
        <div class="profile-header">
            @if(count($errors) > 0)
                @foreach($errors -> all() as $error)
                     <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            @if(session('response'))
                 <div class="alert alert-success">{{session('response')}}</div>
            @endif

              <div class="profile-img">
                    @if(empty(auth()->user()->profile->profile_pic))
                            <img src="/posts/IMG_1006.JPG" alt=" " style="border-radius:100%; max-width:100px;">
                        @else  
                            <img src="{{$users->profile->profile_pic}}" alt="" >
                    @endif
              </div>
                  <div class="profile-nav-info">
                        @if(empty(auth()->user()->profile->name))
                        <p>Add Nickname</p>
                            @else
                            
                            {{$users->profile->name}}
                        @endif
                  </div>
                
                
              
              <div class="profile-option">
                <div class="notification">
                  <i class="fa fa-bell"></i>
                  <span class="alert-message">1</span>
                </div>
              </div>
            </div>
  <div class="main-bd">
    <div class="left-side">
      <div class="profile-side">
        <p class="mobile-no">
          <i class="fa fa-phone"> </i>
          +639057620414
        </p>
        <p class="user-email">
          <i class="fa fa-envelope"></i>
           {{$users->email}}
        </p>
        <div class="user-bio">
          <h3>About</h3>
          @if(empty(auth()->user()->profile->designation))
          <p>Set more Description to trust your News</p>
          
              @else
              <p class="leatext-centerd">{{$users->profile->designation}} </p>
              @endif
        </div>
        <div class="profile-btn">
          <button class="likebtn">
            <i class="fa fa-thumbs-up"></i>
            &nbsp; Like
          </button>
          <button class="followbtn">
            <i class="fa fa-plus"></i>
            &nbsp; Follow
          </button>
        </div>
        <div class="user-rating">
          <h3 class="rating">4.7</h3>
          <div class="rate">
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            <span class="no-user">
            <span>101</span> &nbsp; &nbsp; reviews </span>
          </div>
        </div>
      </div>
    </div>
    <div class="right-side">
      <div class="nav">
        <ul>
          <li onclick="tabs(0)" class="user-posts active">Posts</li>
          <li onclick="tabs(1)" class="user-review">Reviews</li>
        </ul>
      </div>
      <div class="profile-body">
        <div class="profile-posts tab">
                            @if(empty($users->posts))
                            <p>no post yet</p>
                            @else
                            @foreach ($users->posts as $user)
                           
                                    <p>{{$user->post_title}}</p>
                                <p>{{$user->post_body}}</p>
                                     <img src="{{ $user->post_image }}" alt="" class="image2" style="max-width:500px;"
                            @endforeach
                            @endif



        </div>
        <div class="profile-reviews tab">
          <h3>Your Reviews</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia aliquam turpis, porta congue metus efficitur ac. In vitae velit congue, consequat massa nec, placerat augue. Phasellus at turpis euismod.</p>
        </div>
      </div>
    </div> 
  </div>
</div>
@endsection