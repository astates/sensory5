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

Route::get('/sensory5_laravel/public/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/facts', function () {
    return view('facts');
});

Route::get('/iss', function () {
    return view('iss');
});

Route::get('/nasaapi', function () {
    return view('nasaapi');
});
