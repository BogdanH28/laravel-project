@extends('layouts.app')

@section('content')
    <h3 class="text-center mb-3">Login</h3>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{ route('login') }}" method="post" class="d-flex flex-column">
                @csrf

                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email"
                           value="{{old('email')}}">
                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Choose a password" value="">
                    @error('password')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <span class="text-center mb-2 mt-2 text-danger">
                    @if(session('status'))
                        {{session('status')}}
                    @endif
                 </span>
                <button type="submit" class="btn btn-primary mr-auto">Login</button>
            </form>
        </div>
    </div>
@endsection
