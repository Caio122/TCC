<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function index()
    {
        // $search = request('search');
        //  if($search) {

        //     $tutorial = Tutorial::where([
        //         ['nome']   
        //     ])->get();
        // }
         
        // else{
        //     $tutorial = Tutorial::all();
        //  }

        //['tutorial' ->$tutorial, 'search' -> $search] colocar depois de inicio no return
        return view('inicio');
    }

}
