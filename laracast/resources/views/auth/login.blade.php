@extends('layouts.app')
@section('content')
<div class="container bg-white p-3 border-radius-2 mt-5 w-25 px-5 py-3">
        <form action="{{ route('login.store') }}" method="Post">
            @csrf

            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <label class="form-label" for="username">{{__('Username')}} :</label><br>
            <input class="bg-light border-1 border-radius-1 px-3 w-100 mx-auto" id="username" name="username" type="text" autofocus><br><br>

            <label class="form-label" for="password">{{__('Password')}} :</label><br>
            <input class="bg-light border-1 border-color border-radius-1 px-3 w-100 mx-auto mb-1" name="password" id="password" type="password">

            <label class="form-check-label underline-hover" for="remember-me">{{__('Remember me')}}</label>
            <input class="mx-2 form-check-input" type="checkbox" id="remember-me" name="remember"><br><br>

            <button class="btn submit btn-primary fs-5 w-100" id="submit">
                {{ __('Login')}}
            </button>
        </form>
    
</div>

@endsection