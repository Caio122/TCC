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

    Route::get('/create', [Noticias::class, 'create'])->name('noticias.create')->middleware('auth', 'check.is.admin');

    Route::post('/create/store', [Noticias::class, 'store'])->name('noticias.store')->middleware('auth', 'check.is.admin');

    Route::get('/show/{id}', [Noticias::class, 'show'])->name('admin.noticias.show');

    Route::get('/edit/{id}', [Noticias::class, 'edit'])->name('admin.noticias.edit')->middleware('auth', 'check.is.admin');

    Route::put('/edit/update/{id}', [Noticias::class, 'update'])->name('admin.noticias.update')->middleware('auth', 'check.is.admin');

    Route::get('/noticias/delete/{noticia}', [Noticias::class, 'destroy'])->name('admin.noticias.delete')->middleware('auth', 'check.is.admin');

});


Route::prefix('/reviews')->group( function(){

    Route::get('/', [Reviews::class, 'index'])->name('reviews.index');

    Route::get('/create', [Reviews::class, 'create'])->name('reviews.create')->middleware('auth', 'check.is.admin');

    Route::post('/create/store', [Reviews::class, 'store'])->name('reviews.store')->middleware('auth', 'check.is.admin');

    Route::get('/show/{id}', [Reviews::class, 'show'])->name('admin.reviews.show')->middleware('auth', 'check.is.admin');

    Route::get('/edit/{id}', [Reviews::class, 'edit'])->name('admin.reviews.edit')->middleware('auth', 'check.is.admin');

    Route::put('/edit/update/{id}', [Reviews::class, 'update'])->name('admin.reviews.update')->middleware('auth', 'check.is.admin');

    Route::get('/reviews/delete/{review}', [Reviews::class, 'destroy'])->name('admin.reviews.delete')->middleware('auth', 'check.is.admin');

});


  Route::prefix('/admin')->group( function(){

     Route::get('/', [Admin::class, 'index'])->name('home')->middleware('auth', 'check.is.admin');

  });

// //  Route::prefix('/admin')->group( function(){

        
    
//         //  });

Route::prefix('/tutoriais')->group( function(){

    Route::get('/', [Tutoriais::class, 'index'])->name('tutoriais.index');

    Route::get('/create', [Tutoriais::class, 'create'])->name('tutoriais.create')->middleware('auth');

    Route::post('/create/store', [Tutoriais::class, 'store'])->name('tutoriais.store')->middleware('auth');

    Route::get('/show/{id}', [Tutoriais::class, 'show'])->name('tutoriais.show')->middleware('auth');

    Route::get('/edit/{id}', [Tutoriais::class, 'edit'])->name('tutoriais.edit')->middleware('auth');

    Route::put('/edit/update/{id}', [Tutoriais::class, 'update'])->name('tutoriais.update')->middleware('auth');

    Route::get('/tutoriais/delete/{tutorial}', [Tutoriais::class, 'destroy'])->name('tutoriais.delete')->middleware('auth');

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



