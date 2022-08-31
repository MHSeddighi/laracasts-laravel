<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laracasts') }}</title>

    <!-- Scripts -->
    <script defer src="{{ asset('js/app.js') }}"></script>

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
            <img id="image" width="22px" height="22px" src="{{ asset('images/lary-switch-to-subscription-icon.svg')}}" />
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
    <nav class="navbar mt-0 justify-content-between px-3 bg-blue">
        <a class="navbar-brand" href="#">
            <img class="" src="{{ asset("images/logo-white.svg") }} " width="145" height="17" />
        </a>

        @yield('header-navbar')

        <div class="d-flex gap-1 align-items-center">
            <button class=" btn-search border-radius-3" type="button" data-bs-toggle="modal" data-bs-target="#searchId">
                <svg fill="#fff" width="16px" height="16px" viewBox="0 0 15 15">
                    <use xlink:href="{{asset("images/icons.svg#icon-search")}}"></use>
                </svg>
            </button>

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
            @auth
            <a class="p-1 ms-1" href="#" data-bs-toggle="modal" data-bs-target="#profile">
                <img class="border-radius-2" src="{{ asset("images/default-avatar.png ") }}" width="40" height="40" />
            </a>
            <div class="modal" id="profile">@include('layouts.profile')</div>
            @endauth
            @yield('header-navbar-end')
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <section class="home-footer position-relative overflow-hidden">
        <img class="footer-background" src="{{ asset("images/footer-gang.svg") }}" />
        <div class="d-flex flex-column text-white gap-5 font-poppins pt-0 z-index-100">
            <div class="footer-email gap-4 mb-5">
                <h2 class="text-center align-self-center mt-5" style="max-width:580px;">Want us to email you occasionally with Laracasts news?</h2>
                <form class="align-self-center position-relative" method="Post" action="">
                    @csrf
                    <input type="email" class="rounded-pill w-100 px-3 border-0" placeholder="Enter your email address" style="min-width:400px;height:45px;" />
                    <input type="submit" value="{{ __('SUBSCRIBE') }}" class="position-absolute py-2 px-3 h-100 btn btn-primary rounded-pill" style="right:0;" />
                </form>
            </div>
            <div class="d-flex text-white gap-1">
                <div class="flex-grow-2">
                    <img src="{{ asset("images/logo-white.svg") }} " width="180" height="25">
                    <p class="mt-4" style="max-width: 400px">
                        Nine out of ten doctors recommend Laracasts over competing brands. Come inside, see for yourself, and massively level up your development skills in the process.
                    </p>
                </div>
                <div class="footer-link flex-grow-1">
                    <h5 class="font-cabin">LEARN</h5>
                    <ul class="list-style-none p-0 mt-2 cursor-pointer">
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
                    <ul class="list-style-none p-0 mt-2 cursor-pointer">
                        <li><a href="https://laracasts.com/discuss">Forum </a></li>
                        <li><a href="https://laracasts.com/podcast">Podcast </a></li>
                        <li><a href="https://laracasts.com/blog">Blog </a></li>
                        <li><a href="#">Support </a></li>
                    </ul>
                </div>

                <div class="footer-link flex-grow-1">
                    <h5 class="font-cabin">EXTRAS</h5>
                    <ul class="list-style-none p-0 mt-2 cursor-pointer">
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
            <div class="text-center font-poppins" style="color: #b0a7a7;">
                <hr>
                <div class="mx-auto" style="line-break:auto;max-width:500px; ">© Laracasts 2022. All rights reserved. Yes, all of them. That means you, Todd.
                    Proudly hosted with Laravel Forge and DigitalOcean .</div>
            </div>
        </div>
    </section>


</body>

</html>