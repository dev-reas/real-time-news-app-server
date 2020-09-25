@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<link href="{{asset('fontawesome-free-5.13.1-web/css/fontawesome.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

                @if(count($errors) > 0)
                    @foreach($errors -> all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
                <div class="profileadd">
                        <img src="/images/pro.gif" alt="" class="picture">
                        <form method="POST" action='{{ url("/addProfile") }}' enctype="multipart/form-data">
                            @csrf
                                <p class="heads">Please Input Description for Trusting your Posted News </p>
                            <form>
                                <p class="nick">Nickname</p>
                                <input placeholder="Place your Nickname" class="name"
                                id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" 
                                required autocomplete="name" autofocus>
                                @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                <p class="des">Description</p>
                                <input name="designation"  class="designation" placeholder="Place your Bio"
                                id="designation" type="text" class="form-control @error('designation') is-invalid @enderror"
                                value="{{ old('designation') }}" required autocomplete="designation" autofocus>
                                @error('designation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                <input type="file" id="profile_pic" type="file" class="form-control-file" 
                                name="profile_pic" value="{{ old('profile_pic') }}" required autocomplete="profile_pic" autofocus>
                                         @error('profile_pic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                         @enderror
                                 <div class="container">
                                        <button type="submit" class="submit"> Add Profile</button>
                                 </div>
                            </form>             
                        </form>   
                    </div>               
@endsection
