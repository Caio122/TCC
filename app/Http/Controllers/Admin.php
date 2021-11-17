<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Review;
use App\Models\Tutorial;

class Admin extends Controller
{

    public function home()
    {
        $user = auth()->user();

        $noticia = $user->noticias;
        $review = $user->reviews;
        $tutorial = $user->tutorials;

        return view('admin.home', ['noticia' => $noticia, 'review' => $review, 'tutorial' => $tutorial]);

    }


    public function index()
    {
        $noticia = Noticia::all();
        $review =  Review::all();
        $tutorial = Tutorial::all();

        return view('admin.home');

    }
}
