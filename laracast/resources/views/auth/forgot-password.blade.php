@extends('layouts.app')

@section('content')
    <div class="p-5 mx-auto">
        <form action="{{route('auth.forgot-password')}}" method="post">
            @csrf
            <input type="email" name="email">
            <input type="submit" name="submit">
        </form>
    </div>
@endsection
