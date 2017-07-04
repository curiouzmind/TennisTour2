<?php

namespace App\Http\Controllers\Admin;

use App\Models\Player;
use App\Services\PlayerService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePlayersRequest;
use App\Http\Requests\Admin\UpdatePlayersRequest;

class PlayersController extends Controller
{
    private $playerService;

    public function __construct( PlayerService $playerService)
    {
        $this->playerService = $playerService;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of Player.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->playerService->allowsAccess();
        $players = $this->playerService->getAll();
        return view('admin.players.index', compact('players'));
    }

    /**
     * Show the form for creating new Player.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');
        return view('admin.players.create');
    }

    /**
     * Store a newly created Player in storage.
     *
     * @param  \App\Http\Requests\StorePlayersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayersRequest $request)
    {
       
        $data = $request->all();
        $player = $this->playerService->create($data);
        return redirect()->route('admin.players.index');
    }

    /**
     * Show the form for editing Player.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');
        $player = $this->playerService->find($id);
        return view('admin.players.edit', compact('player'));
    }

    /**
     * Update Player in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayersRequest $request, $id)
    {
      //  $this->playerService->allowsEdit();
        $data =$request->all();
        $player = $this->playerService->update($id, $data);
    
        return redirect()->route('admin.players.index');
    }


    /**
     * Display Player.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $this->playerService->allowsView();
        $player = $this->playerService->find($id);

        return view('admin.players.show', compact('player'));
    }


    /**
     * Remove Player from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $this->playerService->allowsDelete();
        $this->playerService->delete($id);
    
        return redirect()->route('admin.players.index');
    }

    /**
     * Delete all selected Player at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
       // $this->playerService->allowsDelete();
        $data = $request->all();
        $this->playerService->deleteMany($data);
    }


}
