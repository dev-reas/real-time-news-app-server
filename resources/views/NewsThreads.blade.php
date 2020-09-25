@extends('layouts.app')

@section('content')

<style>
  
  

  }
    .card {
    
    padding-top: 20px;
    margin: 0px 0 0px 0;
    background-color: green (214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    margin-bottom: -30px;
    margin-left: -100px;
    display: block;
    height: auto;
     font-family: 'Noto Sans KR', sans-serif;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
    display: block;
}
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 5px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: -40px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("http://lorempixel.com/850/280/nature/4/");
    background-size: cover;
    height: 225px;
    margin-left: -50px;
     font-family: 'Noto Sans KR', sans-serif;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}

.btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }


    .image1{
        border-radius:50%; 
        width:100px;
        height:100px;
        border: 3px solid #3498DB;
        margin-top:20px;
       

    }
    
    .image2{
        
        width:690px;

    }
    .pro{
        background-color:#fff;
        padding-bottom:20px;
        border-radius:15px;
        border: 2px solid rgba(0, 0, 0, 0.125);
        box-shadow: 0px 0px px grey;
        text-overflow: ellipsis; 
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: clip; 
        margin-bottom:30px; 
        margin-left: -10px;
         font-family: 'Noto Sans KR', sans-serif;
        
    }
    .fontw{
        color:grey;
        text-transform: uppercase;
        font-weight: bold;
        
    }
    .para{
        width:100%;
        position:center;
        
    }
    .right{
        display: block;
        margin-left: 120px;
        margin-right: auto;
    }
    .left{
        display: block;
        margin-left: 120px;
        margin-right: auto;
    }
    
    
    /*
*
* ===========================================================
*     HERO SECTION
* ===========================================================
*
*/
.hero {
  padding: 2rem 0px !important;
  margin: 0px !important;
  font-family: 'Noto Sans KR', sans-serif;
}
.cardbox {
  border-radius: 3px;
  margin-bottom: -0px;
  padding: 0px !important;
}

/* ------------------------------- */
/* Cardbox Heading
---------------------------------- */
.cardbox .cardbox-heading {
  padding: 14px;
  margin: 0;
}
.cardbox .btn-flat.btn-flat-icon {
 border-radius: 50%;
 font-size: 24px;
 height: 32px;
 width: 32px;
 padding: 0;
 overflow: hidden;
 color: #fff !important;
 background: #b5b6b6;
 
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.cardbox .float-right .dropdown-menu{
  position: relative;
  left: 13px !important;  
}
.cardbox .float-right a:hover{
  background: #f4f4f4 !important;   
}
.cardbox .float-right a.dropdown-item {
  display: block;
  width: 100%;
  padding: 4px 0px 4px 10px;
  clear: both;
  font-weight: 400;
  font-family: 'Abhaya Libre', serif;
  font-size: 14px !important;
  color: #848484;
  text-align: inherit;
  white-space: nowrap;
  background: 0 0;
  border: 0;
}

/* ------------------------------- */
/* Media Section
---------------------------------- */
.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}
.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}
.media .mr-3{
  margin-right: 1rem !important;
}
.media img{
  width: 48px !important;
  height: 48px !important;
  padding: 2px;
  border: 2px solid #f4f4f4;
} 
.media-body {
  -ms-flex: 1;
  flex: 1;
  padding: .4rem !important;
}
.media-body p{
  font-family: 'Rokkitt', serif;    
  font-weight: 500 !important;
  font-size: 14px;
  color: #88898a;
}
.media-body small span{
  font-family: 'Rokkitt', serif;    
  font-size: 12px;
  color: #aaa;
  margin-right: 10px;
}


/* ------------------------------- */
/* Cardbox Item
---------------------------------- */
.cardbox .cardbox-item {
    position: relative;
    display: block;
    text-align: center;
}
.cardbox .cardbox-item img{
}
.img-responsive{
    display: block;
    max-width: 100%;
    height: auto;
}   
.fw {
    width: 100% !important;
    height: auto;
}


/* ------------------------------- */
/* Cardbox Base
---------------------------------- */
.cardbox-base{
 border-bottom: 2px solid #f4f4f4;
}   
.cardbox-base ul{
 margin: 10px 0px 10px 15px!important; 
 padding: 10px !important;
 font-size: 0px;    
  display: inline-block;
   text-align: right;
}
.cardbox-base li {
  list-style: none;
  margin: 0px 0px 0px -8px !important;
  padding: 0px 0px 0px 0px !important;
  display: inline-block;
   text-align: right;
}

.cardbox-base li a{
  margin: 0px !important;
  padding: 0px !important;
}
.cardbox-base li a i{
 position: relative;
 top: 4px; 
 font-size: 16px;
 color: #8d8d8d;
 margin-right: 15px;
}
.cardbox-base li a span{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 margin-left: 20px;
 position: relative;
 top: 5px; 
}
.cardbox-base li a em{
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 position: relative;
 top: 3px; 
}
.cardbox-base li a img{
  width: 25px;
  height: 25px;
  margin: 0px !important;
  border: 2px solid #fff;
   text-align: right;
}


/* ------------------------------- */
/* Cardbox Comments
---------------------------------- */
.cardbox-comments{
  padding: 10px 40px 20px 40px !important;
  font-size: 0px;   
  text-align: center;
  display: inline-block;
}
.cardbox-comments .comment-avatar img{
  margin-top: 1px;
  margin-right: 10px;
  position: relative;
  display: inline-block;
  text-align: center;
  width: 40px;
  height: 40px;
}
.cardbox-comments .comment-body {
  overflow: auto;
}
.search {
 position: relative;
 right: -60px;
 top: -40px;
 margin-bottom: -40px;
 border: 2px solid #f4f4f4; 
 width: 100%;
 overflow: hidden;
}
.search input[type="text"] {
 background-color: #fff;
 line-height: 10px;
 padding: 15px 60px 20px 10px;
 border: none;
 border-radius: 4px;
 width: 350px;
 font-family: 'Rokkitt', serif;
 font-size: 14px;
 color: #8d8d8d;
 height: inherit;
 font-weight: 700;
}
.search button {
 position: absolute;
 right: 0;
 top: 0px;
 border: none;
 background-color: transparent;
 color: #bbbbbb;
 padding: 15px 25px;
 cursor: pointer;
 
 display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
}
.search button i {
 font-size: 20px;
 line-height: 30px;
 display: block;
 text-align: center;
}

.span1 {
   text-align: ;
    
}

</style>



<div class="container">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@500&display=swap" rel="stylesheet">
                <link href="{{asset('fontawesome-free-5.13.1-web/css/fontawesome.css')}}" rel="stylesheet">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
                <script src='https://kit.fontawesome.com/a076d05399.js'></script>
                <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     
       <div class="col-lg-3 col-lg-6 left">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                        <div class="avatar">
                            @if(empty(auth()->user()->profile))
                            
                            <img src="/images/avatar3.png" alt="/images/avatar3.png">
                            <div class="info">
                                Not Yet set
                            <div class="title">
                               Add profile for more news
                               <a target="_blank" ></a>
                           </div>
                                 <div class="desc" ></div>
                            </div>
                            @else
                            <img alt="" src="{{auth()->user()->profile->profile_pic}}" alt="/images/avatar3.png">
                         </div>
                         <div class="info">
                             {{auth()->user()->profile->name}}
                         <div class="title">
                            {{auth()->user()->profile->designation}}
                            @endif
                            <a target="_blank" ></a>
                        </div>
                              <div class="desc" ></div>
                         </div>
     

                         <div class="bottom">
                                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                        <i class="fa fa-twitter"></i></a>
                                        <a class="btn btn-danger btn-sm" rel="publisher" href="https://plus.google.com/+ahmshahnuralam">
                                        <i class="fa fa-google-plus"></i></a>
                                        <a class="btn btn-primary btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                        <i class="fa fa-facebook"></i> </a>
                                        <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                                        <i class="fa fa-behance"></i></a>
                         </div>
           </div>
     </div>
                   


        <div class="container">
    <div class="card-body pro" > 
        @if(count($errors) > 0)
        @foreach($errors -> all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif

        @if(session('response'))
        <div class="alert alert-success">{{session('response')}}</div>
        @endif

        <form method="POST" action="{{ url('/addPost') }}" enctype="multipart/form-data">@csrf
            <div class="card-body">
                <!--TITLE-->
                <div class="form-group">
                    <label for="post_title">Title</label>
                    <input id="post_title" type="text" class="form-control @error('post_title') is-invalid @enderror" placeholder="Make an eye-catching title!" name="post_title" value="{{ old('post_title') }}" required autocomplete="post_title" autofocus>

                    @error('post_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--BODY-->
                <div class="form-group">
                    <label for="name">Tell us your story!</label>
                    <textarea class="form-control" rows="5" aria-label="With textarea" id="post_body" type="text" placeholder="Make sure it's informative and nonbiased!" class="form-control @error('post_body') is-invalid @enderror" name="post_body" value="{{ old('post_body') }}" required autocomplete="post_body" autofocus></textarea>
                    @error('post_body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
     
                <!--CATEGORIES-->
                <div class="form-row">
                    <div class="col-sm-3">
                            <select class="form-control float-none" id="category_id" type="category_id" name="category_id" required>
                                <option value="">Select Category</option>
                                @if(count($categories) > 0)
                                @foreach($categories->all() as $categories)
                                <option value="{{$categories -> id}}">{{$categories -> categories}}</option>
                                @endforeach
                                @endif

                            </select>

                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <!--IMAGE UPLOAD-->
                    <div class="col-sm-6">

                        <input class="form-control-file" id="post_image" type="file" name="post_image" value="{{ old('post_image') }}" required autocomplete="post_image" autofocus>
                        @error('post_image')
                        
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!--SUBMIT BUTTON-->
                    <div class="col-sm-3 align">
                        <button type="submit" class="btn btn-info btn-large float-right">Post Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div> <!-- end of card gedf-card -->  
</div> <!--CONTAINER-->


        
                        @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
    <div class="container">
        <section class="hero">
           <div class="row"> 
              <div class="col-lg-6 offset-lg-3">
                 <div class="cardbox shadow-lg bg-white">
                     <div class="cardbox-heading">
                       <div class="dropdown float-right">
         <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
        <em class="fa fa-ellipsis-h"></em>
         </button>
         <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
        <a class="dropdown-item" href="{{url("/view/{$post->id}")}}">View post</a>
        <a class="dropdown-item" href="{{url("/edit/{$post->id}")}}">Edit Post</a>
        <a class="dropdown-item" href="{{url("/delete/{$post->id}")}}">Delete Post</a>
         </div>
        </div>
                  <div class="center">
            <div class="media m-0">
      <div class="d-flex mr-3">
                 <a href="/showprofile"><img class="img-fluid rounded-circle" src="{{  $post->user()->first()->profile->profile_pic  }}" alt="User"></a>
 </div>
               <div class="media-body">
               <p class="m-0">  <a href="/showprofile/{{$post->user()->first()->id}}">{{$post->user()->first()->profile->name}}</a></p>
                          <small><span><i class="icon ion-md-pin">{{$post->user()->first()->profile->designation}}</i> </span></small>
                             <small><span><i class="icon ion-md-time"></i> {{date('M j, Y H:i',
                            strtotime($post->updated_at))}}</span></small>
               </div>
              </div>
             </div>
             <br>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet" >
               <div class="cardbox-item">
                   <h4 class="fontw">{{$post->post_title}}</h4>
                   <br>
                        <a href="{{url("/view/{$post->id}")}}"> <img src="{{ $post->post_image }}" alt="{{$post->post_image}}" class="image2"></a>
                        <br>
                        <br>
                    <p class="para">{{$post-> post_body}}</p>
                    <br>

                    
                    
                    

  </div>
             <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
             <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
             <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
             
             <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
             <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/sass/styles.css">  
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        </section>


                            <cite style =" float:left;"> </cite>
                            </div>  
                            @endforeach
                            @else
                            <p>No post Available</p>
                            </center>
                            @endif
                               {{$posts->links()}}   
                
            
        </div>             
    </div>
</div>
@endsection

