<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{

    public function destroy(Request $request){
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(url()->previous());
    }

    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        return $request->authenticate();
    }

   

}