@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Post') }}</div>

                @if(count($errors) > 0)
                 @foreach($errors -> all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                 @endforeach
                 @endif

                 @if(session('response'))
                 <div class="alert alert-success">{{session('response')}}</div>
                 @endif
                <form method="POST" action="{{ url('/addPost') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="post_title" class="col-md-4 col-form-label text-md-right">Post Title</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control @error('post_title') is-invalid @enderror" name="post_title" value="{{ old('post_title') }}" required autocomplete="post_title" autofocus>

                                @error('post_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"  class="col-md-4 col-form-label text-md-right">Post Something</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows ="5" aria-label="With textarea"
                                id="post_body" type="text" class="form-control @error('post_body') is-invalid @enderror" name="post_body" value="{{ old('post_body') }}" required autocomplete="post_body" autofocus></textarea>
                                

                                @error('post_body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <select id="category_id" type="category_id" class="form-control" name="category_id" required="">
                                    <option value="">Select</option>
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
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">

                                <input id="post_image" type="file" class="form-control-file" name="post_image" value="{{ old('post_image') }}" required autocomplete="post_image" autofocus>

                                @error('post_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-large btn-block">
                                    Post Now
                                </button>
                            </div>
                        </div>
                    </form>

                    
            </div>
        </div>
    </div>
</div>
@endsection
