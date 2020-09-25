@extends('layouts.app')

@section('content')

<style>
    .card {

        padding-top: auto;
        margin: 10px 0 20px 0;
        background-color: rgba(214, 224, 226, 0.2);
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
    }

    .card .card-heading {
        padding: 0 20px;
        margin: 0;
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
        margin-right: 15px;
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
        margin-left: 20px;
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
        height: 135px;
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
        border: 5px solid rgba(255, 255, 255, 0.5);
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

    .gedf-wrapper {
        margin-top: 0.97rem;
    }

    @media (min-width: 992px) {
        .gedf-main {
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .gedf-card {
            margin-bottom: 2.77rem;
        }
    }

    textarea {
        width: 400px;
        height: 150px;
        border: none;
        padding: 5px 10px;
        font-family: arial;
        resize: none;
        outline: none;
        border-bottom: 2px solid #0077CC;
    }

    textarea::-webkit-scrollbar {
        width: 0px;
        background-color: transparent;
    }

    textarea::-webkit-scrollbar-thumb {
        background-color: #CCC;
        border-radius: 2px
    }

    .overlay {
        background-color: rgba(0, 0, 0, .5);
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        z-index: 2;
        display: none;
    }

    .post {
        background-color: #fff;
        width: 500px;
        margin: 10px auto;
        padding: 10px;
        color: #333;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, .3);
        border-radius: 3px;
    }





    .image1 {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        border: 3px solid #3498DB;
        margin-top: 20px;


    }

    .image2 {

        width: 690px;

    }

    .pro {
        background-color: #fff;
        padding-bottom: 40px;
        border-radius: 15px;
        border: 2px solid rgba(0, 0, 0, 0.125);
        box-shadow: 10px 10px 5px grey;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: clip;
        margin-bottom: -30px;

    }

    .fontw {
        color: gray;
        text-transform: uppercase;
        font-weight: bold;

    }

    .para {
        width: 100%;
        position: center;

    }

    .right {
        display: block;
        margin-left: 120px;
        margin-right: auto;
    }

    .left {
        display: block;
        margin-left: 120px;
        margin-right: auto;
    }
</style>
<div class="container">
    <!---JAKS EDITING -->
    <div class="card gedf-card">
        <div class="card-header">
            <h3>{{ __('Edit Post') }}</h3>
        </div>

        @if(count($errors) > 0)
        @foreach($errors -> all() as $error)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif

        @if(session('response'))
        <div class="alert alert-success">{{session('response')}}</div>
        @endif
        <form method="POST" action="{{ url('/editPost', array($posts->id)) }}" enctype="multipart/form-data">{{csrf_field()}}
            <div class="card-body">
                <!--TITLE-->
                <div class="form-group">
                    <label for="post_title">Title</label>
                    <input id="post_title" type="text" class="form-control @error('post_title') is-invalid @enderror" name="post_title" value="{{ $posts->post_title }}" required autocomplete="post_title" autofocus>

                    @error('post_title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--BODY-->
                <div class="form-group">
                    <label for="name">Tell us your story!</label>
                    <textarea class="form-control" rows="5" aria-label="With textarea" id="post_body" type="text" class="form-control @error('post_body') is-invalid @enderror" name="post_body" required autocomplete="post_body" autofocus>
                    {{$posts->post_body}}
                    </textarea>

                    @error('post_body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
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
                        <input type="file" id="post_image" name="post_image" value="{{ old('post_image') }}" required autocomplete="post_image" autofocus>
                        @error('post_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!--SUBMIT BUTTON-->
                    <div class="col-sm-3 right-align">
                        <button type="submit" class="btn btn-primary btn-sm float-right">Update Article</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection