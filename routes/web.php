<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Noticias;
use App\Http\Controllers\Tutoriais;
use App\Http\Controllers\Reviews;
use App\Http\Controllers\Sobre;
use App\Http\Controllers\Forum;


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

Route::prefix('/forum')->group( function(){

    Route::get('/', [Forum::class, 'index'])->name('forum');

    Route::get('/create', [Forum::class, 'create'])->name('forum.create');

    Route::post('/create/store', [Forum::class, 'store'])->name('forum.store');

    Route::get('/show/{id}', [Forum::class, 'show'])->name('forum.show');

    Route::get('/edit/{id}', [Forum::class, 'edit'])->name('forum.edit');

    Route::put('/edit/update/{id}', [Forum::class, 'update'])->name('forum.update');


});

Route::prefix('/reviews')->group( function(){

    Route::get('/', [Reviews::class, 'index'])->name('reviews');

    Route::get('/create', [Reviews::class, 'create'])->name('Reviews.create');

    Route::post('/create/store', [Reviews::class, 'store'])->name('Reviews.store');

    Route::get('/show/{id}', [Reviews::class, 'show'])->name('Reviews.show');

    Route::get('/edit/{id}', [Reviews::class, 'edit'])->name('Reviews.edit');

    Route::put('/edit/update/{id}', [Reviews::class, 'update'])->name('Reviews.update');


});

Route::prefix('/tutoriais')->group( function(){

    Route::get('/', [Tutoriais::class, 'index'])->name('tutoriais');

    Route::get('/create', [Tutoriais::class, 'create'])->name('tutoriais.create');

    Route::post('/create/store', [Tutoriais::class, 'store'])->name('tutoriais.store');

    Route::get('/show/{id}', [Tutoriais::class, 'show'])->name('tutoriais.show');

    Route::get('/edit/{id}', [Tutoriais::class, 'edit'])->name('tutoriais.edit');

    Route::put('/edit/update/{id}', [Tutoriais::class, 'update'])->name('tutoriais.update');

});

Route::get('/sobre', function() {
    return view('sobre');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/primeira', function() {
    return view('primeira');
});