<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Laravel</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="navbar__container">
        <ul class="navbar__list">
            <li>
                <a class="nav-link" href="{{route('shop')}}">Shop</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('cart')}}">Cart</a>
            </li>
        </ul>
        <ul class="navbar__list">
            @auth
                <li>
                    <span class="nav-link disabled">{{auth()->user()->name}}</span>
                </li>
                <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="nav-link btn btn-danger">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>

</html>
