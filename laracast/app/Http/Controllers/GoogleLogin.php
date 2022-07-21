<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Laravel\Socialite\Facades\Socialite;

class GoogleLogin extends Controller{

public function redirect()
{
    return Socialite::driver('google')->redirect();
}

public function callback()
{
    try {
            $user = Socialite::driver('google')->user();
            $user = User::where('google_id', $user->id)->first();

            if($user){
                Auth::login($user);
                return redirect(RouteServiceProvider::HOME);
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect(RouteServiceProvider::HOME);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   }
}