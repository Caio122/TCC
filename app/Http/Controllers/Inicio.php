<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Review;
use App\Models\Tutorial;

class Inicio extends Controller
{
    public function index()
    {

            $noticia = Noticia::all();
            $review =  Review::all();
            $tutorial = Tutorial::all();
        
        return view('inicio', ['noticia' => $noticia, 'review' => $review, 'tutorial', $tutorial]);
    }

}
