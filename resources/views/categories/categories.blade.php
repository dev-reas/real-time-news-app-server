@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>

                @if(count($errors) > 0)
                 @foreach($errors -> all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                 @endforeach
                 @endif

                 @if(session('response'))
                 <div class="alert alert-success">{{session('response')}}</div>
                 @endif
                 <form method="POST" action="{{ url('/addCategory') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">Enter Categories</label>

                            <div class="col-md-6">
                                <input id="categories" type="categories" class="form-control @error('categories') is-invalid @enderror" name="categories" value="{{ old('categories') }}" required autocomplete="categories" autofocus>

                                @error('categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $categories }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Enter Category
                                </button>

                               
                            </div>
                        </div>
                    </form>

                   
        </div>
    </div>
</div>
@endsection
