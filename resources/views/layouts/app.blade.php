<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #526069;">
<div id="app">
    <div id="page-loader"></div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container" style="font-weight: lighter; font-size: large">
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" style="padding-left: 150px;">
                        @auth
                            <a class="nav-link" href="{{ route('new_client') }}">
                                <span class="glyphicon glyphicon-plus"></span>
                                New Client
                            </a>
                        @endauth
                    </li>
                    <li class="nav-item dropdown" style="padding-left: 150px;">
                        @auth
                            <a class="nav-link" href="{{ route('onboard_client') }}">
                               <span class="glyphicon glyphicon-flag"></span> OnBoard Clients</a>
                        @endauth
                    </li>
                    <li class="nav-item dropdown" style="padding-left: 150px;">
                        @auth
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        @endauth
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if( Session::has( 'success' ))
            <div class="alert alert-success" role="alert">
                {{ Session::get( 'success' ) }}
            </div>
        @elseif( Session::has( 'errors' ))
            <div class="alert alert-danger" role="alert">
                {{ Session::get( 'errors' ) }}
            </div>
        @endif
        </div>
        @yield('content')
    </main>
</div>
</body>
<style>
    body {
        {{--background:url({{url('images/bc.jpeg')}})  ;--}}
            font-family: Arial;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    /* .nav-item{
        padding: 0px 15px 0px 15px;
        font-size: 17px;
        font-weight: 600;
    } */
</style>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $(window).load(function() {
        $("#page-loader").fadeOut("slow");
    });
</script>
</html>
