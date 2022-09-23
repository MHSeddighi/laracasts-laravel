@extends('layouts.app')

@section('content')
    <div class="p-5 mx-auto bg-blue position-relative text-white">
        <h2 class="font-cabin font-weight-bold mb-4">{{__('Enter your new password')}}</h2>
        <form class="position-relative d-flex flex-column gap-3 bg-blue rounded p-4 w-50" action="{{route('auth.new-password')}}" method="post">
            @csrf
            <div class="w-100 position-relative flex-grow-shrink-0 d-flex">
                <lable class="text-white flex-grow-shrink-0 w-25" for="password">{{__('New password :')}}</lable>
                <input class="border-radius-2 bg-light border-0 px-2 flex-grow-shrink-0 w-75" type="password" name="password" id="password">
            </div>
            <div class="w-100 position-relative flex-grow-shrink-0 d-flex">
                <lable class="text-white flex-grow-shrink-0 w-25" for="password-confirmation">{{__('Confirm password :')}}</lable>
                <input class="border-radius-2 bg-light border-0 px-2 flex-grow-shrink-0 w-75" type="password" name="password_confirmation" id="password-confirmation">
            </div>
            <input class="btn btn-primary border-radius-2 flex-grow-shrink-0" type="submit" name="submit" value="Reset Password">
        </form>
    </div>
@endsection
