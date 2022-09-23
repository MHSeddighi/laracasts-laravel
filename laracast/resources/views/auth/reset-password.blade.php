@extends('layouts.app')

@section('content')
    <div class="p-5 mx-auto">
        <form action="{{route('auth.reset-password')}}" method="post">
            @csrf
            <input type="password" name="token">
            <input type="submit" name="submit" value="Send">
        </form>
    </div>
@endsection
