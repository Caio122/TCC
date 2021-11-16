<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;
use App\Models\User;

class Tutoriais extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $tutorial = Tutorial::where('status', '=', true)->get();
        return view('tutoriais.index', compact(['tutorial']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutorial = Tutorial::all();
        return view('tutoriais.create', compact('tutorial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tutorial = new Tutorial();
        $tutorial->titulo = $request->input('titulo');

        $user= auth()->user();
        $tutorial->user_id= $user->id;
        
        $tutorial->save();
        return redirect()->route('tutoriais.index', compact('tutorial'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutorial = Tutorial::where('id', $id)->first();
        $tutorialOwner = User::where('id', $tutorial->user_id)->first()->toArray();
        return view('tutoriais.show', ['tutorial' => $tutorial, 'tutorialOwner' => $tutorialOwner], compact(['tutorial']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorial = Tutorial::find($id);
        if (isset($tutorial)) {
            return view('tutoriais.edit', compact('tutorial'));
        }
        return view('tutoriais.index');
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
        $tutorial = Tutorial::find($id);
        if (isset($tutorial)) {
            $tutorial->titulo = $request->input('titulo'); 
            //caso queira adicionar mais variaveis é pra mudar depois do arrow
            $tutorial->save();
        }
        return redirect()->route('tutoriais.index', compact('tutorial'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Request $request, $id) {
        $review = Review::findOrFail($id)->delete();
        return redirect()->route('tutoriais.index', compact('tutorial'));
    }
}

