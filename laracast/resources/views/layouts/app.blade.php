<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laracasts') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.webp') }}">
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
            <button class=" btn-search border-radius-3" type="button" data-bs-toggle="modal" data-bs-target="#searchId">
                <svg fill="#fff" width="16px" height="16px" viewBox="0 0 15 15">
                    <use xlink:href="images/icons.svg#icon-search"></use>
                </svg>
            </button>
            @auth
            <a class="p-1 ms-1" href="#" data-bs-toggle="modal" data-bs-target="#profile">
                <img class="border-radius-2" src="images/default-avatar.png " width="40" height="40" />
            </a>
            <div class="modal" id="profile">@include('layouts.profile')</div>
            @endauth

            @guest
            <button class="btn mx-2 btn-outline-primary" data-bs-toggle="modal" data-bs-target="#login-form">
                {{__('SIGN IN')}}
            </button>
            <button class="btn mx-2 btn-outline-primary" data-bs-toggle="modal" data-bs-target="#register-form">
                {{__('SIGN UP')}}
            </button>

            <div class="modal" id="login-form">@include('auth.login')</div>
            <div class="modal" id="register-form">@include('auth.register')</div>

            @endguest

            @yield('header-navbar')
    </nav>
    <main>
        @yield('content')
    </main>
    <section class="home-footer position-relative  overflow-hidden">
        <img class="position-absolute" src="images/footer-gang.svg" style="top:0;bottom:0;right: -200px;z-inedx:-1;"/>
        <div class="d-flex flex-column text-white gap-5 font-poppins pt-0">
            <div class="footer-email gap-4">
                <h2 class="text-center align-self-center mt-4" style="max-width:580px;">Want us to email you occasionally with Laracasts news?</h2>
                <form class="align-self-center"  method="post">
                    <input type="email" placeholder="Enter your email address" />
                </form>
            </div>
            <div class="d-flex text-white gap-1">
                <div class="flex-grow-2">
                    <img src="images/logo-white.svg " width="180" height="25">
                    <p class="mt-4" style="max-width: 400px">
                        Nine out of ten doctors recommend Laracasts over competing brands. Come inside, see for yourself, and massively level up your development skills in the process.
                    </p>
                </div>
                <div class="footer-link flex-grow-1">
                    <h5 class="font-cabin">LEARN</h5>
                    <ul class="list-style-none p-0 mt-2">
                        <li><a href="https://laracasts.com/series">Series </a></li>
                        <li><a href="https://laracasts.com/bits">Larabits </a></li>
                        <li><a href="https://laracasts.com/browse">Topics </a></li>
                        <li><a href="https://laracasts.com/week-in-review">What's New </a></li>
                        <li><a href="#">Search </a></li>
                        <li><a href="#">Commercial </a></li>
                    </ul>

                </div>

                <div class="footer-link flex-grow-1">
                    <h5 class="font-cabin">DISCUSS</h5>
                    <ul class="list-style-none p-0 mt-2">
                        <li><a href="https://laracasts.com/discuss">Forum </a></li>
                        <li><a href="https://laracasts.com/podcast">Podcast </a></li>
                        <li><a href="https://laracasts.com/blog">Blog </a></li>
                        <li><a href="#">Support </a></li>
                    </ul>
                </div>

                <div class="footer-link flex-grow-1">
                    <h5 class="font-cabin">EXTRAS</h5>
                    <ul class="list-style-none p-0 mt-2">
                        <li><a href="https://laracasts.com/gift-certificates">Gift Certificates </a></li>
                        <li><a href="https://laracasts.com/teams">Teames </a></li>
                        <li><a href="https://laracasts.com/faq">FAQ </a></li>
                        <li><a href="https://assets.laracasts.com/">Assets </a></li>
                        <li><a href="https://larajobs.com/?partner=36#">Get a Job </a></li>
                        <li><a href="https://laracasts.com/privacy">Privacy </a></li>
                        <li><a href="https://laracasts.com/terms">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center font-poppins">
                <hr>
                <div class="text-secondary mx-auto" style="line-break:auto;max-width:500px; ">© Laracasts 2022. All rights reserved. Yes, all of them. That means you, Todd.
                    Proudly hosted with Laravel Forge and DigitalOcean .</div>
            </div>
        </div>
    </section>


</body>

</html>
