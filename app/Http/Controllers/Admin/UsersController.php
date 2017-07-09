<?php

namespace App\Http\Controllers\Admin;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Role\RoleRepositoryContract;
//use App\Http\Requests\Admin\StoreUsersRequest;
//use App\Http\Requests\Admin\UpdateUsersRequest;

class UsersController extends Controller
{
    private $userService;
    private $role;

    public function __construct( UserService $userService, RoleRepositoryContract $role)
    {
        $this->userService = $userService;
        $this->role = $role;
       // $this->middleware('client.create', ['only' => ['create']]);
        //$this->middleware('client.update', ['only' => ['edit']]);
    }


    /**
     * Display a listing of user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->userService->allowsAccess();
        $users = $this->userService->getAll();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->listRoles();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \App\Http\Requests\StoreusersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
       
        $data = $request->all();
        $user = $this->userService->create($data);
        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for editing user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $roles = $this->role->listRoles();
        $user = $this->userService->find($id);
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update user in storage.
     *
     * @param  \App\Http\Requests\UpdateusersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
      //  $this->userService->allowsEdit();
        $data =$request->all();
        $user = $this->userService->update($id, $data);
    
        return redirect()->route('admin.users.index');
    }


    /**
     * Display user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $this->userService->allowsView();
        $user = $this->userService->find($id);

        return view('admin.users.show', compact('user'));
    }


    /**
     * Remove user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $this->userService->allowsDelete();
        $this->userService->delete($id);
    
        return redirect()->route('admin.users.index');
    }

    /**
     * Delete all selected user at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
       // $this->userService->allowsDelete();
        $data = $request->all();
        $this->userService->deleteMany($data);
    }


}
