<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class Noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticia = Noticia::where('status', '=', true)->get();
        return view('noticias.index', compact(['noticia']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticia = Noticia::all();
        return view('admin.noticias.create', compact('noticia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new Noticia();
        $noticia->titulo = $request->input('titulo');
        $noticia->sbtitulo = $request->input('sbtitulo');
        $noticia->texto = $request->input('texto');
        //Adição de Imagem
        // if($request->hasFile('image') && $request->file('image')->isValid()){

        //     $requestImage = $request->image;

        //     $extension = $requestImage->extension();

        //     $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;

        //     $requestImage->move(public_path('img/noticias'), $imageName);

        //     $noticia->image = $imageName;

        // }

        $noticia->save();

        return redirect()->route('noticias.index', compact('noticia'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::where('id', $id)->first();
        return view('admin.noticias.show', compact(['noticia']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)) {
            return view('admin.noticias.edit', compact('noticia'));
        }
        return view('noticias.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)) {
            $noticia->titulo = $request->input('titulo'); 
            $noticia->sbtitulo = $request->input('sbtitulo');
            $noticia->texto = $request->input('texto');
            //caso queira adicionar mais variaveis é pra mudar depois do arrow
            $noticia->save();
        }
        return redirect()->route('noticias.index', compact('noticia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request, $id) {
        $noticia = Noticia::find($id);
        if (isset($noticia)) {
            $noticia->status = false;
            $noticia->save();
        }
        return redirect()->route('noticias.index', compact('noticia'));
    }
}

