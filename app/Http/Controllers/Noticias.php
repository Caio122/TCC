<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class Noticias extends Controller
{
    public function index()
    {
        return view('noticias.index');
    }

}