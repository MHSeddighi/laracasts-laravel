@extends('layouts.app')

@section('content')
    <div class="p-5 mx-auto bg-blue position-relative text-white p-4">
        <h3 class="mb-3"> Enter six digit pin that is sent to your email :</h3>
        <form class="position-relative d-flex flex-column gap-3 bg-blue rounded w-50" action="{{route('auth.reset-password')}}" method="post">
            @csrf
            <input class="border-radius-2 bg-light border-0 px-2 flex-grow-shrink-0" type="password" name="token">
            <input class="border-radius-2 bg-primary text-white border-0 px-2 flex-grow-shrink-0" type="submit" name="submit" value="Send">
        </form>
    </div>
@endsection
