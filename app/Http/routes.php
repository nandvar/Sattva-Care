<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('admission', function () {
    return view('admission');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('volunteer', function () {
    return view('volunteer');
});

Route::post('contact', 'UserController@contact');