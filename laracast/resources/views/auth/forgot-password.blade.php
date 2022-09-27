@extends('layouts.app')

@section('content')
    <section class="p-5 mx-auto bg-blue position-relative text-white">
        <h3>Enter your email for sending email to it :</h3>
        <form class="position-relative d-flex flex-column gap-3 bg-blue rounded p-4 w-33" action="{{route('auth.forgot-password')}}" method="post">
            @csrf
            <input  class="border-radius-2 bg-light border-0 px-2 flex-grow-shrink-0" type="email" name="email">
            <input class="text-white font-cabin border-radius-2 border-0 px-2 flex-grow-shrink-0 bg-primary" type="submit" name="submit" value="Send Email">
        </form>
    </section>
@endsection
