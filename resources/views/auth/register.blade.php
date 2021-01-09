@extends('layouts.app')

@section('content')
    <h3 class="text-center mb-3">Register</h3>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{ route('register') }}" method="post" class="d-flex flex-column">
                @csrf
                <div class="form-group mb-2">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" value="{{old('name')}}">
                    @error('name')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Your username"
                           value="{{old('username')}}">
                    @error('username')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email" value="{{old('email')}}">
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
                <div class="form-group mb-2">
                    <label for="password_confirmation">Password again</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                           placeholder="Repeat your password" value="">
                </div>
                <button type="submit" class="btn btn-primary mr-auto">Register</button>
            </form>
        </div>
    </div>
@endsection
