<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

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
        return view('admin.reviews.create', compact('review'));
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
        return view('admin.reviews.show', compact(['review']));
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
            return view('admin.reviews.edit', compact('review'));
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
        $review = Review::find($id);
        if (isset($review)) {
            $review->status = false;
            $review->save();
        }
        return redirect()->route('reviews.index', compact('review'));
    }
}

