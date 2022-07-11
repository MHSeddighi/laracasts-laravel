<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/register',[RegisterUserController::class,'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register',[RegisterUserController::class,'store'])
    ->middleware('guest')
    ->name('register.store');

Route::post('/login',[LoginUserController::class,'store'])
    ->middleware('guest')
    ->name('login.store');

Route::get('/login',[LoginUserController::class,'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/logout',[LoginUserController::class,'destroy'])
    ->middleware('auth')
    ->name('logout');
    
Route::view('/dashbord','dashbord')->name('dashbord');


