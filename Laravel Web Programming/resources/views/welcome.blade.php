<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/cs.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/regis.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/recipe.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/recipe_detail.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard_recipe.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/insert_recipe.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/view_profile.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
    </head>
    <body>
        <div class="header">
            <div class="logo">
                <img src="{{asset('img/LOGOFIX.png')}}">
            </div>

            <div class="nav-bar">
                @if(!\Illuminate\Support\Facades\Session::get('login'))
                    <a href="/home" id="home">Home</a>
                    <a href="/recipe">Recipe</a>
                    <a href="/signin">Sign In</a>
                @else
                    <a href="/dashboard">Home</a>
                    <a href="/dashboard/recipe">Recipe</a>
                    <a href="/dashboard/subscription">Subscription</a>
                    <a href="/dashboard/signout">Sign Out</a>
                @endif
                <p></p>
            </div>
        </div>

        <div class="full-content">
            @yield('content')
        </div>

        <div class="footer">
            <div class="contactUs">
                <h3>SUBSCRIBE</h3>
                <p>Join our mailing list for updates, events and recipes</p>
                <input type="text" placeholder="Email Address" name="email">

                <button>
                    <b class="sub">Subscribe</b>
                </button>
            </div>

            <div class="copyright">
                <p>© 2018 CookIt! All Rights Reserved</p>
                <span class="dot">
                    <img src="{{asset('img/twitter.png')}}">
                </span>

                <span class="dot">
                    <img src="{{asset('img/facebook.png')}}">
                </span>

                <span class="dot">
                    <img src="{{asset('img/instagram.png')}}">
                </span>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    {{--<script type="text/javascript" src="{{ URL::asset('js/regis.js') }}"></script>--}}
</html>
