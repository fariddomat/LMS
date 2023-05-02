<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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


// Clear cashe route
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

 });


 Route::group(['prefix' => '/dashboard', 'middleware' => ['auth', ], 'as' => 'dashboard.'], function () {

    Route::resource('users','App\Http\Controllers\Dashboard\UserController');
    Route::resource('categories','App\Http\Controllers\Dashboard\CategoryController');
    Route::resource('courses','App\Http\Controllers\Dashboard\CourseController');
    Route::resource('enrollments','App\Http\Controllers\Dashboard\EnrollmentController');
    Route::resource('lessons','App\Http\Controllers\Dashboard\LessonController');
    Route::get('/courses/{course}/lessons/create', [App\Http\Controllers\Dashboard\LessonController::class, 'create'])->name('lessons.create');

    Route::resource('payments','App\Http\Controllers\Dashboard\PaymentController');
    Route::resource('posts','App\Http\Controllers\Dashboard\PostController');
    Route::resource('tags','App\Http\Controllers\Dashboard\TagController');
 });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
