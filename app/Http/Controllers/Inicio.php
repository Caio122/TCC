<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class Inicio extends Controller
{
    public function index()
    {
        $search = request('search');
         if($search) {

            $noticia =  Noticia::where('titulo','like','%' .$search. '%')->get();
            // $review  =  Review::where([['titulo','like','%'.$search. '%']])->get();
            // $tutorial = Tutorial::where([['titulo','like','%'.$search. '%']])->get();
        }
         
        else{
            $noticia = Noticia::all();
            // $review =  Review::all();
            // $tutorial = Tutorial::all();

         }

        // //['tutorial' =>$tutorial, 'search' => $search] colocar depois de inicio no return
        // 'review' => $review, 'search' => $search,
        // 'tutorial' => $tutorial, 'search' => $search
         
        return view('inicio', ['noticia' => $noticia, 'search' => $search]);
    }

}
