<?php

namespace App\Http\Controllers\Admin;

use App\Models\Result;
use App\Services\ResultService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreResultsRequest;
use App\Http\Requests\Admin\UpdateResultsRequest;

class ResultsController extends Controller
{
    private $ResultService;

    public function __construct( ResultService $resultService)
    {
        $this->resultService = $resultService;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $this->resultService->allowsAccess();
        $results = $this->resultService->getAll();

        return view('admin.results.index', compact('results'));
    }

    /**
     * Show the form for creating new Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $this->resultService->allowsCreate();
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        return view('admin.results.create');
    }

    /**
     * Store a newly created Result in storage.
     *
     * @param  \App\Http\Requests\StoreResultsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResultsRequest $request)
    {
       // $this->resultService->allowsCreate();
        $data = $request->all();
        $result = $this->resultService->create($data);
        return redirect()->route('admin.results.index');
    }

    /**
     * Show the form for editing Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //  $this->resultService->allowsEdit();
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        $result = $this->resultService->find($id);

        return view('admin.results.edit', compact('result'));
    }

    /**
     * Update Result in storage.
     *
     * @param  \App\Http\Requests\UpdateResultsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResultsRequest $request, $id)
    {
       // $this->resultService->allowsEdit();
        $data =$request->all();
        $result = $this->resultService->update($id, $data);
    
        return redirect()->route('admin.results.index');
    }


    /**
     * Display Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $this->resultService->allowsView();
        $result = $this->resultService->find($id);

        return view('admin.results.show', compact('result'));
    }


    /**
     * Remove Result from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $this->resultService->allowsDelete();
        $this->resultService->delete($id);
    
        return redirect()->route('admin.results.index');
    }

    /**
     * Delete all selected Result at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
      //  $this->resultService->allowsDelete();
        $data = $request->all();
        $this->resultService->deleteMany($data);
    }


}
