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


Route::prefix('/noticias')->group( function(){

    Route::get('/', [Noticias::class, 'index'])->name('noticias.index');

    Route::get('/create', [Noticias::class, 'create'])->name('noticias.create');

    Route::post('/create/store', [Noticias::class, 'store'])->name('noticias.store');

    Route::get('/show/{id}', [Noticias::class, 'show'])->name('noticias.show');

    Route::get('/edit/{id}', [Noticias::class, 'edit'])->name('noticias.edit');

    Route::put('/edit/update/{id}', [Noticias::class, 'update'])->name('noticias.update');

    Route::get('/noticias/delete/{noticia}', [Noticias::class, 'destroy'])->name('noticias.delete');

});

Route::prefix('/forum')->group( function(){

    Route::get('/', [Forum::class, 'index'])->name('forum');

    Route::get('/create', [Forum::class, 'create'])->name('forum.create');

    Route::post('/create/store', [Forum::class, 'store'])->name('forum.store');

    Route::get('/show/{id}', [Forum::class, 'show'])->name('forum.show');

    Route::get('/edit/{id}', [Forum::class, 'edit'])->name('forum.edit');

    Route::put('/edit/update/{id}', [Forum::class, 'update'])->name('forum.update');

    Route::delete('/forum/delete/{noticia}', [Forum::class, 'destroy'])->name('forum.delete');


});

Route::prefix('/reviews')->group( function(){

    Route::get('/', [Reviews::class, 'index'])->name('reviews');

    Route::get('/create', [Reviews::class, 'create'])->name('reviews.create');

    Route::post('/create/store', [Reviews::class, 'store'])->name('reviews.store');

    Route::get('/show/{id}', [Reviews::class, 'show'])->name('reviews.show');

    Route::get('/edit/{id}', [Reviews::class, 'edit'])->name('reviews.edit');

    Route::put('/edit/update/{id}', [Reviews::class, 'update'])->name('reviews.update');

    Route::delete('/reviews/delete/{noticia}', [Reviews::class, 'destroy'])->name('reviews.delete');


});

Route::prefix('/tutoriais')->group( function(){

    Route::get('/', [Tutoriais::class, 'index'])->name('tutoriais.index');

    Route::get('/create', [Tutoriais::class, 'create'])->name('tutoriais.create');

    Route::post('/create/store', [Tutoriais::class, 'store'])->name('tutoriais.store');

    Route::get('/show/{id}', [Tutoriais::class, 'show'])->name('tutoriais.show');

    Route::get('/edit/{id}', [Tutoriais::class, 'edit'])->name('tutoriais.edit');

    Route::put('/edit/update/{id}', [Tutoriais::class, 'update'])->name('tutoriais.update');

    Route::get('/tutoriais/delete/{noticia}', [Tutoriais::class, 'destroy'])->name('tutoriais.delete');

});

Route::get('/sobre', function() {
    return view('sobre');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/primeira', function() {
    return view('primeira');
});