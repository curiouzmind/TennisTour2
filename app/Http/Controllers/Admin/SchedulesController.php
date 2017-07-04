<?php

namespace App\Http\Controllers\Admin;

use App\Models\Schedule;
use App\Services\ScheduleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Requests\Admin\StoreSchedulesRequest;
//use App\Http\Requests\Admin\UpdateSchedulesRequest;

class SchedulesController extends Controller
{
    private $scheduleService;

    public function __construct( ScheduleService $scheduleService)
    {
        $this->scheduleService = $scheduleService;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of schedule.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->scheduleService->allowsAccess();
        $schedules = $this->scheduleService->getAll();
        //dd($schedules);

        return view('admin.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating new schedule.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $this->scheduleService->allowsCreate();
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        return view('admin.schedules.create');
    }

    /**
     * Store a newly created schedule in storage.
     *
     * @param  \App\Http\Requests\StoreschedulesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreschedulesRequest $request)
    {
       // $this->scheduleService->allowsCreate();
        $data = $request->all();
        $schedule = $this->scheduleService->create($data);
        return redirect()->route('admin.schedules.index');
    }

    /**
     * Show the form for editing schedule.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $this->scheduleService->allowsEdit();
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        $schedule = $this->scheduleService->find($id);

        return view('admin.schedules.edit', compact('schedule'));
    }

    /**
     * Update schedule in storage.
     *
     * @param  \App\Http\Requests\UpdateschedulesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateschedulesRequest $request, $id)
    {
      //  $this->scheduleService->allowsEdit();
        $data =$request->all();
        $schedule = $this->scheduleService->update($id, $data);
    
        return redirect()->route('admin.schedules.index');
    }


    /**
     * Display schedule.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $this->scheduleService->allowsView();
        $schedule = $this->scheduleService->find($id);

        return view('admin.schedules.show', compact('schedule'));
    }


    /**
     * Remove schedule from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $this->scheduleService->allowsDelete();
        $this->scheduleService->delete($id);
    
        return redirect()->route('admin.schedules.index');
    }

    /**
     * Delete all selected schedule at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
       // $this->scheduleService->allowsDelete();
        $data = $request->all();
        $this->scheduleService->deleteMany($data);
    }


}
