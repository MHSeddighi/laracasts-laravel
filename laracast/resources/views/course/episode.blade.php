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
        <aside class="col-md-3 text-white font-poppins position-fixed hide-scrollbar"
            style="background-color: #0D131D; bottom:0;top:0;left:0;overflow-y:auto;">
            <div class="position-sticky-top px-3" style="background-color: #0D131D;z-index:10;">
                <div class="p-3 pb-1 d-flex justify-content-between">
                    <button class="text-decoration-none text-white blue-hover btn-link" onclick="history.back();">
                        <svg width="24px" height="24px" fill="#fff">
                            <use xlink:href="{{ asset('images/icons/back-arrow.svg') }}#back-arrow"></use>
                        </svg>
                        <span>Series Overview</span>
                    </button>
                    <img src="https://laracasts.com/images/logo/logo-white-arrow.svg" height="25" width="25">
                </div>
                <hr class="bg-black">
                <figure class="d-flex gap-3 align-items-center">
                    <img src="{{ $course->image->src }}" width="65px" height="65px" class="mb-3">
                    <figcaption>
                        <h5>{{ $course->title }}</h5>
                        <span style="font-weight:600;font-size:9px;color:#78909c;">
                            <svg width="13" height="13" fill="#BAC6CC" class="">
                                <use xlink:href="{{asset('images/course cards/books-icon.svg')}}#books"></use>
                            </svg>
                            <span class="">Lessons {{$course->episodes->count()}}</span>
                        </span>
                        <span class="ms-3 position-relative " style="font-weight:600;font-size:9px;color:#78909c;">
                            <svg width="11" height="11" fill="#BAC6CC" class="transform-vertical-center">
                                <use xlink:href="{{asset('images/course cards/clock-icon.svg')}}#clock"></use>
                            </svg>
                            <span class="ms-3">{{ convertSecondsToClockTime($episode->video->duration) }}</span>
                        </span>
                    </figcaption>
                </figure>
                <hr class="bg-black">
            </div>
            @php
            $thisEpsPercent=0;
            @endphp
            <div class="overflow-auto d-flex flex-column gap-3 my-2 px-2">
                @foreach($course->episodes as $eps)
                <section class="d-flex gap-3 w-100 py-2 br-bg-hover px-2">
                    @php
                    if(is_null($watchesList)){
                    $percent=0;
                    }else{
                    $pivotEpisode=$watchesList->firstWhere('number',$eps->number);
                    if(is_null($pivotEpisode)){
                    $percent=0;
                    }else{
                    $percent=$pivotEpisode->pivot->percent;
                    if($episode->number==$eps->number)
                    $thisEpsPercent=$pivotEpisode->pivot->percent;
                    }
                    }
                    @endphp
                    <x-radial-progress :episode="$eps" :episodeNumber="$episode->number" page="episode"
                        :percent="$percent">
                    </x-radial-progress>
                    <section class="clamp-2 font-poppins">
                        <div style="font-weight:600;font-size:11px;">{{ $eps->title }}</div>
                        <span style="font-weight:600;font-size:9px;color:#78909c;">EPISODE {{
                            $eps->number}}</span>
                        <span class="ms-1 text-gray-900 font-size-10 position-relative"
                            style="font-weight:600;font-size:9px;color:#78909c;">
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

        <div class="col-md-9 position-fixed hide-scrollbar"
            style="background:#151F32;top:0;bottom:0;right:0;overflow-y:auto;">
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
                                            <use xlink:href="{{ asset('images/icons.svg#icon-search') }}"></use>
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
                        <img class="border-radius-2" src="{{ asset('images/default-avatar.png') }}" width="40"
                            height="40" />
                    </a>
                    <div class="modal" id="profile">@include('layouts.profile')</div>
                    @endauth
                </div>
            </nav>

            @auth
            @includeWhen($episode->is_public==true,'video',['video'=>$episode->video,'percent'=>$thisEpsPercent])
            @endauth
            <section class="episode-info p-5 m-3 mx-5 font-cabin text-white">
                <img src="{{ $course->image->src }}">
                <div class="d-flex align-items-center">
                    <button class="outline-0 border-0 d-inline circle p-2 red-hover me-2 "
                        style=" background:rgba(255, 255, 255,0.3);">
                        <svg width="20" height="20" color="#fff">
                            <use xlink:href="{{ asset('images/icons/favorite.svg') }}#favorite"></use>
                        </svg>
                    </button>
                    <span style="font-size:25.5px;font-weight:700;text-align: end;">{{ $episode->title }}</span>
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
                        <div style="font-size:10px;font-weight:600;">{{ $episode->created_at->diffForHumans() }}</div>
                    </div>
                    <span class="delimeter-line"></span>
                    <div>
                        <div style="font-size:10px;font-weight:500;color: rgba(255, 255, 255, 0.75)">Topic</div>
                        <div style="font-size:10px;font-weight:600;">Laravel</div>
                    </div>
                </div>

            </section>

            <div>
                <div class="grid-3-3 px-6">
                    <section
                        class=" border-radius-3 p-4 text-white grid-item-colspan-1-4 bg-blue-2 position-relative bg-blue-3-hover">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <span style="font-size:16px;font-weight:600;">YOUR TEACHER</span>
                                <span class="delimeter-line bg-white d-inline-block h-50"></span>
                                <strong style="font-size:16px;font-weight:400;">{{ $tutor->name }}</strong>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ $tutor->links->where('source','github')->first()->url }}"
                                    class="d-inline-block">
                                    <svg width="20px" height="29px" class="me-1 text-blue" fill="#BAC6CC">
                                        <use xlink:href="{{asset('images/icons/github.svg#github')}}"> </use>
                                    </svg>
                                </a>
                                <a href="{{ $tutor->links->where('source','twitter')->first()->url }}"
                                    class="d-inline-block">
                                    <svg width="20px" height="29px" class="me-3 text-blue" fill="#BAC6CC">
                                        <use xlink:href="{{asset('images/icons/twitter.svg#twitter')}}"> </use>
                                    </svg>
                                </a>
                                <a href="{{ $tutor->links->where('source','website')->first()->url }}"
                                    class="btn blur-btn" style="font-size:11px;text-transform: capitalize;">Visit
                                    Website</a>
                            </div>
                        </div>
                        <div class="d-flex gap-5 align-items-center px-4 mt-4">
                            <img class="circle purple-border" src="{{ $tutor->image->src }}" width="70" height="70"
                                style="min-width: 70px;">
                            <div class="overflow-hidden font-cabin"
                                style="max-width: 600px;font-size: 13px;font-weight: 400;">{{ $tutor->introduction }}
                            </div>
                        </div>
                    </section>

                    <section class="bg-blue-2 border-radius-3 p-4 text-white font-cabin bg-blue-3-hover">
                        <h5>Things You'll Learn</h5>
                    </section>

                    <section
                        class="grid-item-colspan-2-4 bg-blue-2 border-radius-3 p-4 text-white position-relative bg-blue-3-hover">
                        <h5 class="font-cabin">About This Episode</h5>
                        <p class="mt-3">{{ $episode->description }}</p>
                        <div class="parent-right-top m-2 mt-3"
                            style="font-size:10px;font-weight:500;color: rgba(255, 255, 255, 0.75)">Published on {{
                            $episode->created_at->diffForHumans() }}</div>
                    </section>



                    <a class="bg-blue-2 border-radius-3 p-4 text-white text-center text-decoration-none bg-blue-3-hover {{ isset($episode->link) ? '' : 'disable'}}"
                        href="{{ isset($episode->link) ? $episode->link->where('source','github')->first()->url : ''}}">
                        <img src="https://laracasts.com/images/view-source-episode-icon.svg?v=2">
                        <div class="mt-4">View this lesson's source code.</div>
                    </a>

                    <a
                        class="bg-blue-2 border-radius-3 p-4 text-white text-center text-decoration-none bg-blue-3-hover">
                        <img src="https://laracasts.com/images/download-episode-icon.svg?v=2">
                        <div class="mt-4">Download this video.</div>
                    </a>

                    <a
                        class="bg-blue-2 border-radius-3 p-4 text-white text-center text-decoration-none bg-blue-3-hover">
                        <img src="https://laracasts.com/images/download-wallpaper-icon.svg?v=3">
                        <div class="mt-4">Download series wallpaper.</div>
                    </a>
                </div>
                <section class="mt-5">
                    <h3 class="text-center text-white font-cabin">Discuss This Lesson</h3>
                </section>
            </div>
        </div>


    </main>
</body>

</html>