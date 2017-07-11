<?php

namespace App\Http\Controllers\Admin;

use App\Services\TournamentService;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTournamentsRequest;
use App\Http\Requests\Admin\UpdateTournamentsRequest;

class TournamentsController extends Controller
{
    private $tournamentService;

    public function __construct(TournamentService $tournamentService)
    {
        $this->tournamentService = $tournamentService;
    }


    /**
     * Display a listing of Tournament.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = $this->tournamentService->getAll();
    
        return view('admin.tournaments.index', compact('tournaments'));
    }

    /**
     * Show the form for creating new Tournament.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        return view('admin.tournaments.create');
    }

    /**
     * Store a newly created Tournament in storage.
     *
     * @param  \App\Http\Requests\StoreTournamentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTournamentsRequest $request)
    {

        $data = $request->all();
        $tournament = $this->tournamentService->create($data);
        return redirect()->route('admin.tournaments.index');
    }

    /**
     * Show the form for editing Tournament.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        $tournament = $this->tournamentService->find($id);

        return view('admin.tournaments.edit', compact('tournament'));
    }

    /**
     * Update Tournament in storage.
     *
     * @param  \App\Http\Requests\UpdateTouranmentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTournamentsRequest $request, $id)
    {
      
        $data =$request->all();
        $tournament = $this->tournamentService->update($id, $data);
    
        return redirect()->route('admin.tournaments.index');
    }


    /**
     * Display Tournament.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $tournament = $this->tournamentService->find($id);

        return view('admin.tournaments.show', compact('tournament'));
    }


    /**
     * Remove Tournament from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $this->tournamentService->delete($id);
    
        return redirect()->route('admin.tournaments.index');
    }

    /**
     * Delete all selected Tournament at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        
        $data = $request->all();
        $this->tournamentService->deleteMany($data);
    }

   

    


}
