<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Admin extends Controller
{

    // public function home()
    // {
    //     $user = auth()->user();

    //     $noticia = $user->noticias;
    //     $review = $user->reviews;
    //     $tutorial = $user->tutorials;

    //     return view('admin.home', ['noticia' => $noticia]);

    // }


    public function index()
    {
        return view('admin.home');

    }
}
