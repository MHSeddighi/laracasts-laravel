<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $course->title.':'.$episode->title }}</title>

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
    <main class="d-flex">
        <aside class="col-md-3 text-white font-poppins" style="background-color: #0D131D;">
            <div class="position-sticky-top px-3" style="background-color: #0D131D;z-index:10;">
                <div class="p-3 pb-1 d-flex justify-content-between">
                    <a href="#" class="text-decoration-none text-white blue-hover">
                        <svg width="24px" height="24px" fill="#fff">
                            <use xlink:href="{{ asset('images/icons/back-arrow.svg') }}#back-arrow"></use>
                        </svg>
                        <span>Series Overview</span>
                    </a>
                    <img src="https://laracasts.com/images/logo/logo-white-arrow.svg" height="25" width="25">
                </div>
                <hr class="bg-black">
                <figure class="d-flex gap-3">
                    <img src="{{ $course->image->src }}" width="65px" height="65px" class="mb-3">
                    <figcaption>
                        <h5>{{ $course->title }}</h5>
                        <span class="text-gray-900 font-size-10">
                            <svg width="13" height="13" fill="#BAC6CC" class="">
                                <use xlink:href="{{asset('images/course cards/books-icon.svg')}}#books"></use>
                            </svg>
                            <span class="">Lessons {{$course->episodes->count()}}</span>
                        </span>
                        <span class="ms-3 text-gray-900 font-size-10 position-relative ">
                            <svg width="11" height="11" fill="#BAC6CC" class="transform-vertical-center">
                                <use xlink:href="{{asset('images/course cards/clock-icon.svg')}}#clock"></use>
                            </svg>
                            <span class="ms-3">{{ convertSecondsToClockTime($episode->video->duration) }}</span>
                        </span>
                    </figcaption>
                </figure>
                <hr class="bg-black">
            </div>
            <div class="overflow-auto d-flex flex-column gap-3 my-2 px-3">
                @foreach($course->episodes as $eps)
                <section class="d-flex gap-3 w-100 py-2 br-bg-hover">
                    <x-radial-progress></x-radial-progress>
                    <section class="">
                        <h6>{{ $eps->title }}</h6>
                        <span class="text-gray-900 font-size-10">EPISODE {{ $eps->number}}</span>
                        <span class="ms-3 text-gray-900 font-size-10 position-relative">
                            <svg width="11" height="11" fill="#BAC6CC" class="transform-vertical-center">
                                <use xlink:href="{{asset('images/course cards/clock-icon.svg')}}#clock"></use>
                            </svg>
                            <span class="ms-3" style="width:70px;">{{ convertSecondsToClockTime($eps->video->duration)
                                }}</span>
                        </span>
                    </section>
                </section>
                @endforeach
            </div>
            <div class="position-sticky-bottom p-3" style=" background-color: #0E1726;z-index:10;">
                <span>Toggle Transcript</span>
                <lable></lable>
            </div>
        </aside>

        <div class="col-md-9">
            <nav class="navbar mt-0 justify-content-between px-3 bg-blue"
                style="background: linear-gradient(to right,#0E1726 0,#395785 50%,#0E1726 100%);">
                <a class="navbar-brand" href="#">
                    <img src="https://laracasts.com/images/logo/logo-white-arrow.svg" height="25" width="25">
                </a>

                <div class="d-flex gap-1 align-items-center">
                    <button class=" btn-search border-radius-3" type="button" data-bs-toggle="modal"
                        data-bs-target="#searchId">
                        <svg fill="#fff" width="16px" height="16px" viewBox="0 0 15 15">
                            <use xlink:href="{{asset('images/icons.svg#icon-search')}}"></use>
                        </svg>
                    </button>
                    <div class="modal fade" id="searchId">
                        <div class="modal-dialog">
                            <div class="px-3 modal-content">
                                <div class="d-flex search-modal">
                                    <a href="#">
                                        <svg class="m-2" fill="rgb(107, 78, 238)" viewBox="0 0 12 12" width="16px">
                                            <use xlink:href="images/icons.svg#icon-search"></use>
                                        </svg>
                                    </a>
                                    <input id="search-input" class="search-input bg-white flex-grow-1" type="search"
                                        placeholder="Press'/'anywhere to search.">
                                </div>
                            </div>
                        </div>
                    </div>

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
                        <img class="border-radius-2" src="{{ asset(" images/default-avatar.png ") }}" width="40"
                            height="40" />
                    </a>
                    <div class="modal" id="profile">@include('layouts.profile')</div>
                    @endauth
                </div>
            </nav>

            <section class="episode-info p-5 m-3 mx-5 font-cabin text-white">
                <img src="{{ $course->image->src }}">
                <div>
                    <button class="outline-0 border-0 d-inline circle p-2 red-hover me-2"
                        style=" background:rgba(255, 255, 255,0.3)">
                        <svg width="20" height="20" color="#fff">
                            <use xlink:href="{{ asset('images/icons/favorite.svg') }}#favorite"></use>
                        </svg>
                    </button>
                    <span style="font-size:25.5px;font-weight:700;">{{ $episode->title }}</span>
                </div>
                <div class="mt-5 d-flex gap-3">
                    <div>
                        <div style="font-size:10px;font-weight:500;color: rgba(255, 255, 255, 0.75)">Episode</div>
                        <div style="font-size:10px;font-weight:600;">{{ sprintf("%02d",$episode->number) }}</div>
                    </div>
                    <span class="delimeter-line"></span>
                    <div>
                        <div style="font-size:10px;font-weight:500;color: rgba(255, 255, 255, 0.75)">Run Time</div>
                        <div style="font-size:10px;font-weight:600;">{{
                            convertSecondsToClockTime($episode->video->seconds)}}</div>
                    </div>
                    <span class="delimeter-line"></span>
                    <div>
                        <div style="font-size:10px;font-weight:500;color: rgba(255, 255, 255, 0.75)">Published</div>
                        <div style="font-size:10px;font-weight:600;">{{ $episode->created_at }}</div>
                    </div>
                    <span class="delimeter-line"></span>
                    <div>
                        <div style="font-size:10px;font-weight:500;color: rgba(255, 255, 255, 0.75)">Topic</div>
                        <div style="font-size:10px;font-weight:600;">Laravel</div>
                    </div>
                </div>

            </section>

            <div>
                <div class=" d-grid">
                    <section></section>
                    <section>
                        Things You'll Learn
                    </section>
                    <section>
                        About This Episode
                    </section>
                    <div>Download this video</div>
                    <div>Download series wallpaper</div>
                    <div>source code</div>
                </div>
                <section>
                    Discuss This Lesson
                </section>
            </div>
        </div>


    </main>
</body>

</html>