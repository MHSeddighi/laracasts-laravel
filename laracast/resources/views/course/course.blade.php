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
    <div class="d-flex overflow-x-hidden bg-blue px-5 py-5 gap-5 z-index-100">
        <asid class="mt-1">
            <figure>
                <img class="tutor-profile" src="{{$tutor_image}}">
                <figcaption>
                    <h3>{{ $tutor->name }}</h3>
                    <a>{{ $tutor->links->where('source','github')->first()->url }}</a>
                    <a>{{ $tutor->links->where('source','twitter')->first()->url }}</a>
                    <p>{{$course->introduction}}</p>
                    <a class="btn btn-primary">{{ $tutor->links->where('source','website')->first()->url }}</a>
                </figcaption>
            </figure>
        </asid>
        <section class="d-flex flex-column mt-3 ms-2 font-poppins text-white text-bold">
            <h3>Livewire Uncovered</h3>
            <a href="#" class="btn me-auto blur-btn">{{$course->category}}</a>
            <div class="d-flex  gap-5">
                <p class="align-self-center">{{$course->description}}</p>
                <img class="course-img" src="{{$course->image->src}}">

            </div>
            <button></button>
            <button></button>
            <div></div>
            //sections
        </section>

    </div>

@endsection
