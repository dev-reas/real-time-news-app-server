@extends('layouts.app')

@section('content')
<style>
.pro{
        background-color:#fff;
        padding-bottom:100px;
        border-radius:5px;
        border: 2px solid rgba(0, 0, 0, 0.125);
        text-overflow: ellipsis; 
        white-space: nowrap; 
        overflow: hidden;
        text-overflow: clip; 
        margin-bottom:390px; 
        margin-top: -400px;
        margin-left: -250px;
        width: 700px;
        height: 659px;
      
        
    }
    .fontw{
        color:black;
        text-transform: uppercase;
        font-weight: bold;
        font-family: helvetica;
        
    }
    .para{
        width:100%;
        position:center;

    
    }
    .a{
        position: relative;
       font-family:'Oswald' sans-serif;
     }
     a:link{
        text-decoration: none;
        font-family:'Oswald' sans-serif;
     }
     #mydiv{
        font-size: 30px;
        display:inline-block;
         margin-bottom: 10px;
         margin-top:10px;
          font-family: times;


     }
    #mydiv a{
        font-size: 20px;
    }
    
</style>
<div class="container">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&family=Rowdies&display=swap" rel="stylesheet">


                    

    <ul class="list-group  " style=" position:;top: 0; position: -webkit-stickyfont-family:'Oswald' sans-serif; margin-top: 30px;margin-left: 900px;">

             @if(count($categories) > 0)
              @foreach($categories->all() as $categories)
                <li class=" list-group-item list-group-item-action list-group-item-light list-group-item-active" style="top: 0; position: -webkit-sticky; text-underline-position: none; box-shadow: 10px 10px 5px grey;font-family:'Oswald' sans-serif; font-size:15px;width:290px;height: 49px;text-align: center; margin-right: -20px;">
                <a href="{{$categories -> id}}">{{$categories -> categories}}</a></li>
                 @endforeach
                 @else
                 <p>No Categories Found</p>
                    @endif
            
                    </ul>
            </div>
    
<link href="{{asset('fontawesome-free-5.13.1-web/css/fontawesome.css')}}" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&family=Rowdies&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
            
<div class="container">

                        <br>
                        @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
                        <center>
                        <br>
                        <br>
                        <div class="card-body pro" >

                            <h1><p style="font-size: 25px; margin-left: -250px;margin-bottom: 20px; font-family: Poynter;margin-top: 15px">{{$post->name}}</h1>
                            <p>{{$post->categories}}</p>
                                   <img src= "{{$post->profile_pic}}" alt="" class="avatar" style="border-radius:100%;text-align-right; max-width:80px; border: 5px solid #ddd ;margin-top: -80px;margin-left: -550px;">

                        <h4 class="fontw" ><p style="margin-top: 5px;">{{$post-> post_title}}</h4>
                        <a href="{{url("/view/{$post->id}")}}"></a>

                             <p style="overflow: inherit; white-space: nowrap; margin-top: -18px; font-family:'corier New';font-size: 20px; text-align: center;">{{$post-> post_body}}</p>

                         <img src="{{$post->post_image}}" alt="" style="border: 1px solid #ddd;border-radius: 4px;padding: 8px; height:350px; width: 600px;"></a>
                            </div>  
                            @endforeach
                             @else
                    <p style = "text-shadow: 2px 2px 5px grey; margin-top: -350px;text-align: center;font-size: 50px;font-family:'verdana'">Check more News in</p>
                    </center>
                    @endif
            
        </div>
                    
         
    </div>
</div>
@endsection
                
                