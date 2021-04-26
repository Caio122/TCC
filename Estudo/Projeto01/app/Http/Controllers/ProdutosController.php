<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){
        
        $dados = [
            'produto'=> $request->input('produto'),
            'preco'=>$request->input('preco'),
            'categoria'=>$request->input('categoria')
        ];

        return view('produtos', $dados);
        }
}
