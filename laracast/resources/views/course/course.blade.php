@extends('layouts.app')

@section('header-navbar')
    <nav class="navbar-links d-flex gap-5 h-100">
        <a href="http://127.0.0.1:8000/series/learn-laravel-forge-2022-edition#" class="">MY LIBRARY</a>
        <a href="#" >TOPICS</a>
        <a href="#" class="active">SERIES</a>
        <a href="#" >LARABITS</a>
        <a href="#" >DISCUSSIONS</a>
        <a href="#" >PODCAST</a>
    </nav>
@endsection
@section('content')

    <img class="tutor-background" src="{{$tutor_image}}">
    <div class="d-flex bg-blue px-5 py-5 gap-5 z-index-100" style="display:inline-block;">
        <asid class="mt-1 ms-4 z-index-100" style="position:sticky;position: -webkit-sticky;top:20px;height:150px;">
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
            <section class="">
                <h1>Livewire Uncovered</h1>
                <a href="#" class="btn me-auto blur-btn mt-2">{{$course->category}}</a>
                <div class="d-flex justify-content-between ">
                    <p class="d-inline-block course-description align-self-center">{{$course->description}}</p>
                    <img class="course-img me-2" src="{{$course->image->src}}">
                </div>
                <a class="btn blur-btn my-3">
                    <img>
                    Begin Series
                </a>
                <a class="btn blur-btn my-3">
                    <img>
                    Add to Watchlist
                </a>
            </section>

            <div class=" d-flex flex-column font-poppins">
                @foreach ($course->episodes as $episode)
                    <section class="border-radius-3 p-4 my-2" style="background:#17273F;">
                        <h4>{{ $episode->title }}</h4>
                        <p class="mt-3">{{ $episode->description }}</p>
                        <span class="ms-4 text-gray-900 font-size-10">EPISODE {{ $episode->number}}</span>
                        <span class="ms-4 text-gray-900 font-size-10">
                            <img src="{{asset("images/course cards/clock-icon.svg")}}" class="m-1 "> 1:90 minutes
                        </span>
                    </section>
                @endforeach
            </div>
        </div>

    </div>

@endsection
