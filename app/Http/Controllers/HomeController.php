<?php

namespace App\Http\Controllers;

// use App\Http\Resources\University;
use Illuminate\Http\Request;
use App\University;
class HomeController extends Controller
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
    public function index()
    {
        $university = University::all();
        return view('welcome',compact('university'));
        // return view('home');
    }
}
