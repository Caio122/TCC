<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

class Reviews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::where('status', '=', true)->get();
        return view('reviews.index', compact(['review']));
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $review = Review::all();
        return view('reviews.create', compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->titulo = $request->input('titulo');
        $review->sbtitulo = $request->input('sbtitulo');
        $review->texto = $request->input('texto');
        
        //Adição de Imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
                        
            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")). "." . $extension;
            
            $requestImage->move(public_path('img/reviews'), $imageName);
            
            $review->image = $imageName;
        
        }

        $user= auth()->user();
        $review->user_id= $user->id;
        $review->save();

        return redirect()->route('reviews.index', compact('review'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::where('id', $id)->first();
        $reviewOwner = User::where('id', $review->user_id)->first()->toArray();
        return view('reviews.show', ['review' => $review, 'reviewOwner' => $reviewOwner], compact(['review']));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        if (isset($review)) {
            return view('reviews.edit', compact('review'));
        }
        return view('reviews.index');
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
        $review = Review::find($id);
        if (isset($review)) {
            $review->titulo = $request->input('titulo');
            $review->sbtitulo = $request->input('sbtitulo');
            $review->texto = $request->input('texto');
            //caso queira adicionar mais variaveis é pra mudar depois do arrow
            $review->save();
        }
        return redirect()->route('reviews.index', compact('review'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request, $id) {
        $review = Review::findOrFail($id)->delete();
        return redirect()->route('reviews.index', compact('review'));
    }

    // public function home()
    // {
    //     $user = auth()->user();

    //     $review = $user->reviews;

    //     return view('admin.home', ['review' => $review]);

    // }
}

