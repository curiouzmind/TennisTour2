<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Services\PermissionService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePermissionsRequest;
use App\Http\Requests\Admin\UpdatePermissionsRequest;

class permissionsController extends Controller
{
    private $permissionService;

    public function __construct( PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of Permission.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->permissionService->allowsAccess();
        $permissions = $this->permissionService->getAll();

        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating new permission.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->permissionService->allowsCreate();
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        return view('admin.permissions.create');
    }

    /**
     * Store a newly created permission in storage.
     *
     * @param  \App\Http\Requests\StorepermissionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionsRequest $request)
    {
        $this->permissionService->allowsCreate();
        $data = $request->all();
        $permission = $this->permissionService->create($data);
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Show the form for editing permission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->permissionService->allowsEdit();
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        $permission = $this->permissionService->find($id);

        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update permission in storage.
     *
     * @param  \App\Http\Requests\UpdatepermissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionsRequest $request, $id)
    {
        $this->permissionService->allowsEdit();
        $data = $request->all();
        $permission = $this->permissionService->update($id, $data);
    
        return redirect()->route('admin.permissions.index');
    }


    /**
     * Display permission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->permissionService->allowsView();
        $permission = $this->permissionService->find($id);

        return view('admin.permissions.show', compact('permission'));
    }


    /**
     * Remove permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permissionService->allowsDelete();
        $this->permissionService->delete($id);
    
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Delete all selected permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        $this->permissionService->allowsDelete();
        $data = $request->all();
        $this->permissionService->deleteMany($data);
    }


}
