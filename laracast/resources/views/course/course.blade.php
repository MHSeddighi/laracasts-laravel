@extends('layouts.app')

@section('header-navbar')
<nav class="navbar-links d-flex gap-5 h-100">
    <a href="http://127.0.0.1:8000/series/learn-laravel-forge-2022-edition#" class="">MY LIBRARY</a>
    <a href="#">TOPICS</a>
    <a href="#" class="active">SERIES</a>
    <a href="#">LARABITS</a>
    <a href="#">DISCUSSIONS</a>
    <a href="#">PODCAST</a>
</nav>
@endsection

@section('header-navbar-end')
<nav class="navbar-links-menu d-none">
    <button class="outline-0 border-0 bg-transparent" type="button" data-bs-toggle="modal" data-bs-target="#menu">
        <img src="{{ asset('images/icons/menu.svg') }}" width="30" height="30">
    </button>
    <div class="modal" id="menu">
        <div class="modal-dialog modal-fullscreen-xl-down" style="">
            <div class="modal-content text-center m-0 h-100 bg-blue overflow-scroll" style="min-height:100%">
                <div class="bg-blue z-index-100" style="height:50px"></div>
                <button class="outline-0 border-0 close-btn p-1 close-hover" data-bs-dismiss="modal">
                    <svg width="25px" height="25px" color="#fff">
                        <use xlink:href="{{ asset('images/icons/close.svg') }}#close"></use>
                    </svg>
                </button>
                <a href="#" class="text-decoration-none my-2 text-white">
                    <h1>Home</h1>
                    <div class="font-gray fs-6">//is where the php is</div>
                </a>
                <a href="#" class="text-decoration-none my-2 text-white">
                    <h1>Topics</h1>
                    <div class="font-gray fs-6">//just browsing?</div>
                </a>

                <a href="http://127.0.0.1:8000/series/learn-laravel-forge-2022-edition#"
                    class="text-decoration-none my-2 text-white">
                    <h1>Series</h1>
                    <div class="font-gray fs-6">//it's what you are here for</div>
                </a>

                <a href="#" class="text-decoration-none my-2 text-white">
                    <h1>Larabits</h1>
                    <div class="font-gray fs-6">//got fibe minutes?</div>
                </a>

                <a href="#" class="text-decoration-none my-2 text-white">
                    <h1>Podcast</h1>
                    <div class="font-gray fs-6">//rest those eyes</div>
                </a>

                <a href="#" class="text-decoration-none my-2 text-white">
                    <h1>Discussions</h1>
                    <div class="font-gray fs-6">//let it all about</div>
                </a>
                <div class="bg-blue z-index-100" style="height:40px"></div>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('content')

<img class="tutor-background" src="{{$tutor_image}}">
<div class="d-flex bg-blue px-5 py-5 gap-5 z-index-100 course-wrap" style="display:inline-block;">
    <aside class="mt-1 overflow-y-hidden" style="position:sticky;position:-webkit-sticky;top:15px;height:800px;">
        <figure class="tutor-card">
            <img class="tutor-profile w-100" src="{{$tutor_image}}">
            <figcaption class="text-white text-bold font-poppins px-4 py-3">
                <div class="d-flex align-items-center">
                    <span class="font-gray white-space-nowrap me-2">Your Instructor Today</span>
                    <span class="inline-line"></span>
                </div>
                <h3 class="ms-1 mt-2 fs-1">{{ $tutor->name }}</h3>

                <a href="{{ $tutor->links->where('source','github')->first()->url }}" class="d-inline-block">
                    <svg width="20px" height="29px" class="me-1 text-blue" fill="#BAC6CC">
                        <use xlink:href="{{asset('images/icons/github.svg#github')}}"> </use>
                    </svg>
                </a>
                <a href="{{ $tutor->links->where('source','twitter')->first()->url }}" class="d-inline-block">
                    <svg width="20px" height="29px" class="me-3 text-blue" fill="#BAC6CC">
                        <use xlink:href="{{asset('images/icons/twitter.svg#twitter')}}"> </use>
                    </svg>
                </a>

                <p class="ms-1 mt-2">{{$tutor->introduction}}</p>
                <a href="{{ $tutor->links->where('source','website')->first()->url }}"
                    class="btn blur-btn fs-6 w-100">Visit Website</a>
            </figcaption>
        </figure>
    </aside>
    <div class="my-5 mx-2 font-poppins text-white text-bold">
        <div>
            <div class="d-flex justify-content-between course-mediaquery">
                <section class="course-info">
                    <h1>{{ $course->title }}</h1>
                    <a href="#" class="btn blur-btn mt-2 mb-5 ">{{$course->category}}</a>
                    <p class="course-description">{{$course->description}}</p>
                    <a href="{{ route('course.episode',['slug'=>$course->slug,'number'=>1]) }}"
                        class="btn blur-btn my-3 bg-white text-black-c px-4 me-2 text-center">
                        <svg class="me-2 my-auto" width="10" height="12">
                            <use xlink:href="{{asset('images/play-button2.svg#play-button2')}}"></use>
                        </svg>
                        Begin Series
                    </a>
                    <a class="btn blur-btn my-3 px-2 text-center">
                        <svg class="me-2 my-auto" width="20px" height="20px" fill="#fff">
                            <use xlink:href="{{asset('images/archive-icon.svg#archive')}}"></use>
                        </svg>
                        Add to Watchlist
                    </a>
                </section>
                <div class="align-self-center">
                    <img class="course-img me-2" src="{{$course->image->src}}">
                </div>
            </div>
        </div>

        <div class=" d-flex flex-column font-poppins mx-2">
            <div class="course-detail d-flex justify-content-start gap-4 vertical-align-middle px-4 font-poppins">
                <x-img-text imgSrc="{{asset('images/course cards/books-icon.svg')}}#books" imgColor="#fff"
                    text="{{ $course->episodes->count() }} episodes" textColor="#fff"></x-img-text>
                <div class="delimeter-line bg-lightgray"></div>
                <x-img-text imgSrc="{{asset('images/course cards/clock-icon.svg')}}#clock" imgColor="#fff" text="12h "
                    textColor="#fff"></x-img-text>
                <div class="delimeter-line bg-lightgray mq-860-d-none"></div>
                <x-difficulty-icon level="{{ $course->difficulty }}" direction="vertical"></x-difficulty-icon>
                <span class="mq-860-d-none">{{ $course->difficulty}}</span>
                <div class="delimeter-line bg-lightgray mq-860-d-none"></div>
                <a href="{{ $course->links->where('source','facebook')->first()->url }}"
                    class="d-flex align-items-center ms-auto mq-860-d-none">
                    <svg width="21px" height="21px" class="text-blue" color="#fff">
                        <use xlink:href="{{ asset('images/icons/facebook.svg#facebook') }}"></use>
                    </svg>
                </a>
                <a href="{{ $course->links->where('source','twitter')->first()->url }}"
                    class="d-flex align-items-center mq-860-d-none">
                    <svg width="21px" height="21px" fill="#fff" class="text-blue">
                        <use xlink:href="{{ asset('images/icons/twitter.svg#twitter') }}"></use>
                    </svg>
                </a>
            </div>
            @foreach ($course->episodes as $episode)
            <div class="d-flex justify-content-start border-radius-3 p-4 my-2 bg-blue-c gap-5 w-100">
                <div class="d-flex circle border-blue outline-blue p-3 align-self-center justify-content-center position-relative success-hover"
                    style="background:#193152;">
                    <div class="transform-vertical-center">{{ sprintf("%02d",$episode->number) }}</div>
                    <div class="opacity-0">
                        <svg fill="#fff" width="20px" height="20px">
                            <use xlink:href="{{ asset('images/success.svg') }}#success"></use>
                        </svg>
                    </div>
                    <!-- <div></div>  not uploaded yet-->
                </div>
                <section>
                    <h4>{{ $episode->title }}</h4>
                    <p class="mt-3 position-relative font-size-12 clamp">{{ $episode->description }}</p>
                    <span class="ms-3 text-gray-900 font-size-10 mq-860-d-none">EPISODE {{ $episode->number}}</span>
                    <span class="ms-3 text-gray-900 font-size-10 position-relative mq-860-d-none">
                        <svg width="12" height="12" fill="#BAC6CC" class="transform-vertical-center">
                            <use xlink:href="{{asset(" images/course cards/clock-icon.svg")}}#clock"></use>
                        </svg>
                        <spanc class="ms-3">{{ convertSecondsToClockTime($episode->video->duration) }} minutes
                    </span>
                    </span>
                </section>
            </div>
            @endforeach
        </div>
        <div class="d-flex flex-column align-items-center mt-5">
            <img class="" width="210" src="https://laracasts.com/images/series/series-in-progress-robot.png"
                alt="Series In Progress Robot">

            <a class="btn blur-btn my-3 px-2 text-center" style="transform: translateX(-20px);">
                <svg class="me-2 my-auto" width="20px" height="20px" fill="#fff">
                    <use xlink:href="{{asset('images/archive-icon.svg#archive')}}"></use>
                </svg>
                Add to Watchlist
            </a>
        </div>
    </div>

</div>

<script defer>
    title = {{ Illuminate\Support\Js:: from($course -> title) }};
    document.title = title;
</script>
@endsection