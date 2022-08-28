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
@section('content')

<img class="tutor-background" src="{{$tutor_image}}">
<div class="d-flex bg-blue px-5 py-5 gap-5 z-index-100" style="display:inline-block;">
    <asid class="mt-1 ms-4 overflow-y-hidden" style="position:sticky;position:-webkit-sticky;top:15px;height:800px;">
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
                <a href="{{ $tutor->links->where('source','website')->first()->url }}" class="btn blur-btn fs-5 w-100">Visit Website</a>
            </figcaption>
        </figure>
    </asid>
    <div class="my-5 ms-2 font-poppins text-white text-bold">
        <section>
            <h1>{{ $course->title }}</h1>
            <a href="#" class="btn me-auto blur-btn mt-2">{{$course->category}}</a>
            <div class="d-flex justify-content-between gap-3">
                <p class="course-description">{{$course->description}}</p>
                <img class="course-img me-2" src="{{$course->image->src}}">
            </div>
            <a class="btn blur-btn my-3 bg-white text-black-c px-4 me-2 text-center">
                <svg class="me-2 my-auto" width="10" height="12">
                    <use xlink:href="{{asset('images/play-button2.svg#play-button')}}"></use>
                </svg>
                Begin Series
            </a>
            <a class="btn blur-btn my-3 px-4 text-center ms-2">
                <svg class="me-2 my-auto" width="20px" height="20px" fill="#fff">
                    <use xlink:href="{{asset('images/archive-icon.svg#archive')}}"></use>
                </svg>
                Add to Watchlist
            </a>
            <div class="course-detail d-flex justify-content-between gap-4 vertical-align-middle px-4 font-poppins">
                <x-img-text imgSrc="{{asset('images/course cards/books-icon.svg')}}#books" imgColor="#fff" text="{{ $course->episodes->count() }} episodes" textColor="#fff"></x-img-text>
                <div class="delimeter-line bg-lightgray "></div>
                <x-img-text imgSrc="{{asset('images/course cards/clock-icon.svg')}}#clock" imgColor="#fff" text="12h " textColor="#fff"></x-img-text>
                <div class="delimeter-line bg-lightgray "></div>
                <x-difficulty-icon level="{{ $course->difficulty }}" direction="vertical"></x-difficulty-icon>
                <span>{{ $course->difficulty}}</span>
                <div class="delimeter-line bg-lightgray "></div>
                <a href="{{ $course->links->where('source','facebook')->first()->url }}" class="d-flex align-items-center ms-auto ">
                    <svg width="21px" height="21px" class="text-blue" color="#fff">
                        <use xlink:href="{{ asset('images/icons/facebook.svg#facebook') }}"></use>
                    </svg>
                </a>
                <a href="{{ $course->links->where('source','twitter')->first()->url }}" class="d-flex align-items-center">
                    <svg  width="21px" height="21px" fill="#fff" class="text-blue">
                        <use xlink:href="{{ asset('images/icons/twitter.svg#twitter') }}"></use>
                    </svg>
                </a>
            </div>
        </section>

        <div class=" d-flex flex-column font-poppins">
            @foreach ($course->episodes as $episode)
            <div class="d-flex justify-content-start border-radius-3 p-4 my-2 bg-blue-c gap-5">
                <div class="d-flex circle border-blue outline-blue p-3 align-self-center justify-content-center position-relative success-hover" style="background:#193152;">
                    <div class="transform-vertical-center">{{ sprintf("%02d",$episode->number) }}</div>
                    <div class="opacity-0">
                        <svg fill="#fff" width="20px" height="20px">
                            <use xlink:href="{{ asset('images/success.svg') }}#success"></use>
                        </svg>
                    </div>
                    <!-- <div></div>  not uploaded yet-->
                </div>
                <section class="max-width" style="max-width:85%">
                    <h4>{{ $episode->title }}</h4>
                    <p class="mt-3 position-relative font-size-12 clamp">{{ $episode->description }}</p>
                    <span class="ms-4 text-gray-900 font-size-10">EPISODE {{ $episode->number}}</span>
                    <span class="ms-4 text-gray-900 font-size-10">
                        <img src="{{asset("images/course cards/clock-icon.svg")}}" class="m-1 ">
                        {{ $episode->video->getDuration() }} minutes
                    </span>
                </section>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection