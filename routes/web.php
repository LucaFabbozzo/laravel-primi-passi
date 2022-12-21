<?php

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




Route::get('/', function() {

    $hello = 'Hello Laravel';

    return view('home', compact('hello'));
});

Route::get('/about', function() {
    return view('about');
});


Route::get('/bio', function() {
    return view('bio');
});

Route::get('/our-team', function () {

    
    return view('our-team');
});

Route::get('/documentation', function () {
    return view('documentation');
});

