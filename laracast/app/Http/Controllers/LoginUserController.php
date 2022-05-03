<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

class LoginUserController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        return $request->authenticate();
    }
}
