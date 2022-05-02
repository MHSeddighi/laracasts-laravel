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

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar justify-content-center navbar-background m-0">
        <a class="navbar-brand" href="#">
            <img width="22px" height="22px" src="images/lary-switch-to-subscription-icon.svg" />
        </a>
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a id="switch-link" class="nav-link text-light underline-hover" href="#">
                    Switch to a subscription, and watch everything for $15
                    bucks.
                </a>
            </li>
        </ul>
    </nav>
    <nav class="navbar px-2 mt-0  bg-blue justify-content-end">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img class="" src="images/logo-white.svg " width="145" height="17" />
            </a>
            <button class=" btn-search border-radius-3" type="button" data-bs-toggle="modal"
                data-bs-target="#searchId">
                <svg fill="#fff" width="16px" height="16px" viewBox="0 0 15 15">
                    <use xlink:href="images/icons.svg#icon-search"></use>
                </svg>
            </button>
            @auth
                <a class="p-1 ms-1" href="/">
                    <img class="border-radius-2" src="images/default-avatar.png " width="40" height="40" />
                </a>
            @endauth
            
            @guest
                <a href="/login" class="btn mx-2 btn-outline-primary">
                    {{__('Login')}}
                </a>
                <a href="/register" class="btn mx-2 btn-outline-primary ">
                    {{__('Register')}}
                </a>
            @endguest
            
            @yield('header-navbar')
    </nav>
        <main>
            @yield('content')
        </main>
</body>
</html>
