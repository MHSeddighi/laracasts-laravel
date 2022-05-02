@extends('layouts.app')

@section('content')

<div class="container mx-auto my-5 col-md-8" >
    <div class="card p-4 bg-light border-radius-2 shadow-sm" style="filter:opacity(80%) blure(5px);">

        <div class="card-header ps-5 fs-4">
            {{__('Register')}}
        </div>
        <div class="card-body fs-5 py-5">
            <form action="{{ route('register') }}" method="Post">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <label class="col-md-4 " for="username">{{__('Username')}}</label>
                <input class="bg-light border-1 border-radius-2 px-3 py-1" name="username" id="username" 
                type="text" placeholder="username or email" value="{{ old('username') }}" autofocus><br><br>

                <label class="col-md-4 form-label" for="email">{{__('Email')}}</label>
                <input class="bg-light border-1 border-radius-2 px-3 py-1" name="email" id="email" type="text" value="{{ old('email') }}"><br><br>

                <label class="col-md-4 form-label" for="password">{{__('Password')}}</label>
                <input class="bg-light border-1 border-radius-2 px-3 py-1" name="password" id="password" type="text" value="{{ old('password') }}"><br><br>

                <label class="col-md-4 form-label" for="confirm-password">{{__('Confirm password')}}</label>
                <input name="password_confirmation" class="bg-light border-1 border-radius-2 px-3 py-1" id="confirm-password" type="text"><br><br>

                <hr>
                <button class="btn submit btn-primary fs-5 align-item-center" id="submit">
                    {{ __('Register')}}
                </button>
            </form>
        </div>
    </div>
</div>


@endsection