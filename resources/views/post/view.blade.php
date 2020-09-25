@extends('layouts.app')

@section('content')

<div class="container">
<link href="{{asset('fontawesome-free-5.13.1-web/css/fontawesome.css')}}" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <center><div class="card-header">Post View</div></center> 


               

        <div class="panel-body">
        <div class="col-md-8">
        </div>
            
                   @if(count($posts) > 0)
                    @foreach($posts->all() as $post)
                    <center>
                        {{$post->category->categories}}
                    <br>
                    <br>
                    <a href="/showprofile/{{$post->user()->first()->id}}">
                    {{$post->user()->first()->profile->name}}
                    <img class="img-fluid rounded-circle" src="{{  $post->user()->first()->profile->profile_pic  }}" alt="User" style="border-radius:100%; max-width:100px;"></a>
                </a>
                    <h4>{{$post-> post_title}}</h4>
                    <p>{{$post-> post_body}}</p>
                    <img src="{{$post->post_image}}" alt=""  class="post-image">
                    <br>
                    <br>

                        <ul class="nav nav-pills" role="tablist" >
                        <li role="presentation">
                            <a href="{{url("/like/{$post->id}")}}">
                            <span class="fas fa-thumbs-up"> Like  {{$likeCtr}}</span>
                            </a>
                            </li>
                            <li role="presentation">
                            <a href="{{url("/dislike/{$post->id}")}}">
                            <span class='fas fa-thumbs-down'> Dislike  {{$dislikeCtr}}</span>
                            </a>
                            </li>
                            <li role="presentation">
                            <a href="#">
                            <span class='fas fa-comments'> Comment </span>
                            </a>
                            </li>
                           
                        </li>
                        </ul>
                    @endforeach
                   
                    @else
                    <p>No post Available</p>
                    </center>
                    @endif
                    <br>
                   

                    <form method="POST" action='{{ url("/comment/{$post->id}") }}'>
                        @csrf

                        <div class="form-group">
                            <div class="col-md-12">
                            <textarea class="form-control" rows ="5" aria-label="With textarea"
                               placeholder="Add comment Here ..." id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}" required autocomplete="post_id" autofocus></textarea>
                             <br>
                                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-large btn-block">
                                    Submit Comment
                                </button>
                            </div>
                        </div>

                                
                    </form>

                   
                    
                    <h4>Comment Section</h4>
                    @if(count($comments) > 0)
                    @foreach($comments->all() as $comment)
                    <div class="cont" >
                    <p>{{$comment->comment}}</p>
                    </div>
                    <p>{{$comment->first_name}}</p> &nbsp;
                    <img src="{{$comment->profile_pic}}" alt="" style="border-radius:100%; max-width:50px;">
                    <br> <center> <cite style =" float:left;"> Posted on: {{date('M j, Y H:i',
                    strtotime($post->updated_at))}}</cite></center>
                    @endforeach
                  
                    @else
                    <div class="cont" >
                    <p>Comment something ...</p>
                    </div>

                    @endif
                   


                    <style>
    
    .cont {
        position:relative;
        max-width:600px;
        height:auto;
        border: 2px solid #A9A9A9;
        margin: 40px auto;
        padding:10px;
        box-sizing:border-box;
        border-radius: 20px;
    }
    .cont:after{

        position: absolute;
        width: 50px;
        height:50px;
        border-top:0px solid #A9A9A9;
        border-right:2px solid #A9A9A9;
        border-bottom:2px solid #A9A9A9;
        border-left:0px solid #A9A9A9;
        top:100%;
        left:50%;
        margin-left: -25px;
        content: " ";
        transform: rotate(45deg);
        margin-top: -25px;
        background: white;
    }

    .list-group > li > a{
        text-decoration:none;
        color:black;
        font-size: 20px;
        font-weight: bold;
        
    }

    .list-group > li {
        text-align:center;
    }
    .list-group {
        width:300px;
    }

    .post-image {
        max-width:500px;
    }

</style>

                   
                   
                   </div>
                </div>
        </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
