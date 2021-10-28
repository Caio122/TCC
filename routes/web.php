<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Noticias;
use App\Http\Controllers\Tutoriais;
use App\Http\Controllers\Reviews;
use App\Http\Controllers\Sobre;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\Admin;


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


Route::get('/', [Inicio::class, 'index'])->name('inicio');


Route::prefix('/noticias')->group( function(){

    Route::get('/', [Noticias::class, 'index'])->name('noticias.index');

});

Route::prefix('/reviews')->group( function(){

    Route::get('/', [Reviews::class, 'index'])->name('reviews.index');

});

Route::prefix('/tutoriais')->group( function(){

    Route::get('/', [Tutoriais::class, 'index'])->name('tutoriais.index');

    Route::get('/create', [Tutoriais::class, 'create'])->name('tutoriais.create')->middleware('auth');

    Route::post('/create/store', [Tutoriais::class, 'store'])->name('tutoriais.store')->middleware('auth');

    Route::get('/show/{id}', [Tutoriais::class, 'show'])->name('tutoriais.show')->middleware('auth');

    Route::get('/edit/{id}', [Tutoriais::class, 'edit'])->name('tutoriais.edit')->middleware('auth');

    Route::put('/edit/update/{id}', [Tutoriais::class, 'update'])->name('tutoriais.update')->middleware('auth');

    Route::get('/tutoriais/delete/{noticia}', [Tutoriais::class, 'destroy'])->name('tutoriais.delete')->middleware('auth');

});

Route::get('/primeira', function() {
    return view('noticias.primeira');
});

Route::get('/segunda', function() {
    return view('tutoriais.segunda');
});

Route::get('/sobre', [Sobre::class, 'index'])->name('sobre');


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\Dashboard::class, 'index'])->name('dashboard');

Route::get('/admin', [Admin::class, 'index'])->name('admin')->middleware('auth', 'check.is.admin');


