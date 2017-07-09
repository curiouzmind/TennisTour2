<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Services\RoleService;
use App\Repositories\Permission\PermissionRepositoryContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;

class RolesController extends Controller
{
    private $roleService;

    public function __construct( RoleService $roleService)
    {
        $this->roleService = $roleService;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of role.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->roleService->getAll();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating new role.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PermissionRepositoryContract $permissions)
    {
        //$this->roleService->allowsCreate();
       // $teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');
        $permissions = $permissions->listPermissions();

        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created role in storage.
     *
     * @param  \App\Http\Requests\StorerolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesRequest $request)
    {
        $data = $request->all();
        //$role = $this->roleService->create($data);
        return redirect()->route('admin.roles.index');
    }

    /**
     * Show the form for editing role.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->roleService->allowsEdit();
        //$teams = \App\Team::get()->pluck('name', 'id')->prepend('Please select', '');

        $role = $this->roleService->find($id);


        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update role in storage.
     *
     * @param  \App\Http\Requests\UpdaterolesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterolesRequest $request, $id)
    {
        //$this->roleService->allowsEdit();
        $data = $request->all();
        $role = $this->roleService->update($id, $data);
    
        return redirect()->route('admin.roles.index');
    }


    /**
     * Display role.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->roleService->allowsView();
        $role = $this->roleService->find($id);
       // dd($role->perms);

        return view('admin.roles.show', compact('role'));
    }


    /**
     * Remove role from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$this->roleService->allowsDelete();
        //$this->roleService->delete($id);
    
        return redirect()->route('admin.roles.index');
    }

    /**
     * Delete all selected role at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        //$this->roleService->allowsDelete();
        $data = $request->all();
        $this->roleService->deleteMany($data);
    }


}
