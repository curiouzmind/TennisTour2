<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

    public function matches()
    {
        return view('front.matches');
    }
    public function singleMatch()
    {
        return view('front.single-match');
    }
    public function players()
    {
        return view('front.players');
    }
    public function singlePlayer()
    {
        return view('front.single-player');
    }
    public function media()
    {
        return view('front.media');
    }
}

