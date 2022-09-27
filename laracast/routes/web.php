<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/series/{slug}/episodes/{number}', [CourseController::class, 'beginCourse'])
    ->name('course.episode');

Route::get('/series/{slug}', [CourseController::class, 'index'])
    ->name('course');

Route::post('/update/{course_slug}/{number}',[CourseController::class, 'updatePercent'])
    ->name('update.percent');

require __DIR__ . '/auth.php';
