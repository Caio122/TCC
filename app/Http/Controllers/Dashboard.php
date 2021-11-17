<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        $user = auth()->user();

        $review = $user->reviews;

        return view('dashboard', ['review' => $review]);

    }

    public function index()
    {
        $review =  Review::all();

        return view('dashboard', ['review' => $review]);
    }
}
