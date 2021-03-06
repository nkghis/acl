<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- My own Styles -->
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

    <!-- Favicon -->
   {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('/img/logo48.ico')}}" />--}}


<!-- Style for Navbar image logo -->
   {{-- <style>
        #brand-image
        {
            height: 35px;
        }
    </style>--}}
    @yield('bootstrap')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    <!-- Comment line up if you want to add logo in navbar and decomment line down -->
                    {{--<img id="brand-image" alt="Website Logo" src="{{asset('img/logo.png')}}" />--}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @if (Auth::check())
                            @can('view_users')
                                <li class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                                    <a href="{{ route('users.index') }}">
                                        <i class="material-icons">account_circle</i> <span>Utilisateur </span></a>
                                </li>

                            @endcan
                           {{-- A ajouter si l'on veux creer un menu aditionnel comme ici diplôme--}}
                           {{-- @can('view_diplomes')
                                <li class="nav-link {{ Request::is('titulaires*') ? 'active' : '' }}">
                                    <a href="{{ route('titulaires.index') }}">
                                        <i class="material-icons">school</i><span> Diplôme </span>

                                    </a>
                                </li>

                            @endcan--}}
                            @can('view_roles')
                                <li class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                                    <a href="{{ route('roles.index') }}">
                                        <i class="material-icons">accessible</i> Rôle
                                    </a>
                                </li>
                            @endcan
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                            {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container"><!-- Message Flash session -->
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
        </div>
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <div class="row justify-content-center">
            <footer class="row">
                @include('layouts.footer')
            </footer>
        </div>
        <!-- End Footer -->

    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('jquery')
</body>
</html>
