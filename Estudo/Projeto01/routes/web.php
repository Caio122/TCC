<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

Route::get('/',[HomeController::class, 'index']);

Route::get('/produtos', [ProdutosController::class,'index']);
Route::post('/produtos', [ProdutosController::class,'index']);
