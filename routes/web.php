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

    $hello = 'Ciao Laravel';

    return view('home', compact('hello'));
});

Route::get('/about', function() {

    $bio = 'Mia biografia';

    return view('about', compact('bio'));
});
