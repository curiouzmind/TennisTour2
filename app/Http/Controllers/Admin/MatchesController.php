<?php

namespace App\Http\Controllers\Admin;

use App\Models\Match;
use App\Services\MatchService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMatchesRequest;
use App\Http\Requests\Admin\UpdateMatchesRequest;

class MatchesController extends Controller
{
    private $matchService;

    public function __construct(MatchService $matchService)
    {
        $this->matchService = $matchService;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of Match.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->matchService->allowsAccess();
        $matches = $this->matchService->getAll();

        return view('admin.matches.index', compact('matches'));
    }

    /**
     * Show the form for creating new Match.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->matchService->allowsCreate();
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        return view('admin.matches.create');
    }

    /**
     * Store a newly created Match in storage.
     *
     * @param  \App\Http\Requests\StoreMatchesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatchesRequest $request)
    {
        $this->matchService->allowsCreate();
        $data = $request->all();
        $match = $this->matchService->create($data);
        return redirect()->route('admin.matches.index');
    }

    /**
     * Show the form for editing Matches.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->matchService->allowsEdit();
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        $match = $this->matchService->find($id);

        return view('admin.matches.edit', compact('match'));
    }

    /**
     * Update Matche in storage.
     *
     * @param  \App\Http\Requests\UpdateMatchesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatchesRequest $request, $id)
    {
        $this->matchService->allowsEdit();
        $data = $request->all();
        $match = $this->matchService->update($id, $data);
    
        return redirect()->route('admin.matches.index');
    }


    /**
     * Display Matche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->matchService->allowsView();
        $match = $this->matchService->find($id);

        return view('admin.matches.show', compact('match'));
    }


    /**
     * Remove Matche from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->matchService->allowsDelete();
        $this->matchService->delete($id);
    
        return redirect()->route('admin.matches.index');
    }

    /**
     * Delete all selected Matche at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        $this->matchService->allowsDelete();
        $data = $request->all();
        $this->matchService->deleteMany($data);
    }

}
