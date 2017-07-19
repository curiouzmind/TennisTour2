<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Player\PlayerRepositoryContract;

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

    public function players(PlayerRepositoryContract $player)
    {
        
        //$players_female = $player->getByKey('gender','female');
        $femalePlayers = $player->getPlayersByGender('female');
        $malePlayers = $player->getPlayersByGender('male');
        $aZRange = range('A', 'Z');
        return view('front.players',compact('malePlayers','femalePlayers','aZRange'));
    }

    public function single(PlayerRepositoryContract $player, $id)
    {
        $player = $player->find($id);   
        return view('front.single-player',compact('player'));
    }

    public function media()
    {
        return view('front.media');
    }
}

