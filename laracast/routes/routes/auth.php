<?php

use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Http\Request;

Route::get('/register',[UserRegisterController::class,'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register',[UserRegisterController::class,'store'])
    ->middleware('guest')
    ->name('register.store');

Route::post('/login',[UserLoginController::class,'store'])
    ->middleware('guest')
    ->name('login.store');

Route::get('/login',[UserLoginController::class,'create'])
    ->middleware('guest')
    ->name('login');

Route::view('/dashbord','dashbord')->name('dashbord');

