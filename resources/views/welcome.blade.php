<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="landing">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/logout') }}">Logout</a>
                @else
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="top-left">
            <img src="{{asset('storage/images/logo.png')}}" alt="">
        </div>

        <div class="content">
            <div class="title m-b-md">
                <h1>Client Administration</h1>
                <p>Where you can manage your client</p>
                @auth
                    <a class="btn btn-lg btn-round btn-secondary" href="{{ route('manage')}}">Manage</a>
                @else
                    <a class="btn btn-lg btn-round btn-secondary" href="{{ route('login')}}">Login</a>
                @endauth
            </div>
        </div>
    </div>
</div>
</body>
</html>
