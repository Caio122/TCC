<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\User;

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
        return view('noticias.create', compact('noticia'));
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
        $noticia->fonte = $request->input('fonte');
        //Adição de Imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;

            $requestImage->move(public_path('img/noticias'), $imageName);

            $noticia->image = $imageName;
        }
        
        $user= auth()->user();
        $noticia->user_id = $user->id;
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
        // $noticia = Noticia::findorFail($id);
        // return view('noticias.show', ['noticia' -> $noticia], compact(['noticia']));

       $noticia = Noticia::where('id', $id)->first();
       $noticiaOwner = User::where('id', $noticia->user_id)->first()->toArray();
       return view('noticias.show', ['noticia' => $noticia, 'noticiaOwner' => $noticiaOwner], compact(['noticia']));
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
            return view('noticias.edit', compact('noticia'));
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
            $noticia->fonte = $request->input('fonte');
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
        $noticia = Noticia::findOrFail($id)->delete();
        return redirect()->route('noticias.index', compact('noticia'));
    }

}

