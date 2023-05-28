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
Route::get('/', function () {
    return view('home.index');
})->name('home');

// Clear cashe route
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

 });


 Route::group(['prefix' => '/dashboard', 'middleware' => ['auth', ], 'as' => 'dashboard.'], function () {
   Route::get('home', 'App\Http\Controllers\Dashboard\HomeController@index')->name('home');

    Route::resource('users','App\Http\Controllers\Dashboard\UserController');
    Route::post('ban/{id}', 'App\Http\Controllers\Dashboard\UserController@ban')->name('users.ban');
    Route::post('unban/{id}', 'App\Http\Controllers\Dashboard\UserController@unban')->name('users.unban');
    Route::resource('categories','App\Http\Controllers\Dashboard\CategoryController');
    Route::resource('courses','App\Http\Controllers\Dashboard\CourseController');
    Route::resource('enrollments','App\Http\Controllers\Dashboard\EnrollmentController');
    Route::resource('lessons','App\Http\Controllers\Dashboard\LessonController');
    Route::get('/courses/{course}/lessons/create', [App\Http\Controllers\Dashboard\LessonController::class, 'create'])->name('lessons.create');

    Route::resource('payments','App\Http\Controllers\Dashboard\PaymentController');

    Route::resource('posts','App\Http\Controllers\Dashboard\PostController');
    Route::resource('tags','App\Http\Controllers\Dashboard\TagController');


    Route::get('/contactForm', 'App\Http\Controllers\Dashboard\ContactFormController@index')->name('contactForm.index');
    Route::delete('/contactForm/{contactForm}', 'App\Http\Controllers\Dashboard\ContactFormController@destroy')->name('contactForm.destroy');
    Route::post('/contactForm/{contactForm}/status', 'App\Http\Controllers\Dashboard\ContactFormController@changeStatus')->name('contactForm.status');
    Route::put('/contactForm/{contactForm}/note', 'App\Http\Controllers\Dashboard\ContactFormController@note')->name('contactForm.note');



    Route::get('/imageGallery/browser', 'App\Http\Controllers\Dashboard\ImageGalleryController@browser')->name('imageGallery.browser');
    Route::post('/imageGallery/uploader', 'App\Http\Controllers\Dashboard\ImageGalleryController@uploader')->name('imageGallery.uploader');

    Route::get('/about', 'App\Http\Controllers\Dashboard\AboutController@create')->name('about.create');
    Route::post('/about', 'App\Http\Controllers\Dashboard\AboutController@store')->name('about.store');

    Route::resource('services','App\Http\Controllers\Dashboard\ServiceController');
    Route::get('/services/{service}/sliderImages', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@index')->name('sliderImages.index');
    Route::get('/services/{service}/sliderImages/create', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@create')->name('sliderImages.create');
    Route::post('/services/{service}/sliderImages', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@store')->name('sliderImages.store');
    Route::get('/services/sliderImages/{image}/edit', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@edit')->name('sliderImages.edit');
    Route::put('/services/sliderImages/{image}', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@update')->name('sliderImages.update');
    Route::delete('/services/sliderImages/{image}/delete', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@destroy')->name('sliderImages.destroy');
    Route::get('/services/{service}/sliderImages/show', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@show')->name('sliderImages.show');
    Route::get('/services/{service}/sliderImages/hide', 'App\Http\Controllers\Dashboard\ServiceSliderImageController@hide')->name('sliderImages.hide');

    Route::get('/settings/cover', 'App\Http\Controllers\Dashboard\SettingController@cover')->name('setting.cover');
    Route::post('/settings/change_cover', 'App\Http\Controllers\Dashboard\SettingController@change_cover')->name('setting.change_cover');
    Route::get('/settings/logs', 'App\Http\Controllers\Dashboard\SettingController@logs')->name('setting.logs');
    Route::get('/settings/settings', 'App\Http\Controllers\Dashboard\SettingController@settingsText')->name('setting.settingsText');
    Route::post('/settings/setting', 'App\Http\Controllers\Dashboard\SettingController@settings')->name('setting.settings');
    Route::get('/settings/social', 'App\Http\Controllers\Dashboard\SettingController@social')->name('setting.social');
    Route::get('/settings/changePassword', 'App\Http\Controllers\Dashboard\SettingController@changePassword')->name('setting.changePassword');
    Route::post('/settings/changePass', 'App\Http\Controllers\Dashboard\SettingController@changePass')->name('setting.changePass');

 });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
