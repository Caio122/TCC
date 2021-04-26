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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/noticias', function() {
    return view('noticias');
});

Route::get('/notícias', function() {
    return view('noticias');
});

Route::get('/reviews', function() {
    return view('reviews');
});

Route::get('/forum', function() {
    return view('forum');
});

Route::get('/fórum', function() {
    return view('forum');
});

Route::get('/tutoriais', function() {
    return view('tutoriais');
});
