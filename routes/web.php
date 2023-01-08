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

    $routes = config('db.routes_list');

    return view('home', compact('hello', 'routes'));
});

Route::get('/about', function() {

    $print_paragraph = false;

    return view('about', compact('print_paragraph'));
});


Route::get('/bio', function() {
    return view('bio');
});

Route::get('/our-team', function () {

    $team = [
        [
            'name' => 'Luca',
            'surname' => 'Fabbozzo',
            'email' => 'luca@gmail.com'
        ],
        [
            'name' => 'Michele',
            'surname' => 'De rosa',
            'email' => 'michele@gmail.com'
        ],
        [
            'name' => 'Ugo',
            'surname' => 'De Ughi',
            'email' => 'ugo@gmail.com'
        ],
        [
            'name' => 'Fabrizio',
            'surname' => 'Rossi',
            'email' => 'rossi@gmail.com'
        ],

    ];

    return view('our-team', compact('team'));
});

Route::get('/documentation', function () {
    return view('documentation');
});


Route::get('/contact', function() {
    return view('contact');
});
