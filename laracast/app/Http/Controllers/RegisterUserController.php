<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Developer;
use App\Models\Tutor;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(LoginRequest $request){
        $request->validate([
            'username' => 'required|string|min:3|unique:users',
            'email'=> 'required|email|unique:users',
            'password'=>['required',Password::default(),'confirmed']
        ]);

        if($request->occuption=="tutor"){
            $user=Tutor::create();
        }else{
            $user=Developer::create();
        }
        $user=User::create([
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=>  Hash::make($request->password),
            'userable_type'=>$request->occuption,
            'userable_id'=>$user->id
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


}
