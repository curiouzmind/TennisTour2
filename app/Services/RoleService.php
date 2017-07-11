<?php

namespace App\Services;

use App\Repositories\Role\RoleRepositoryContract;
//use App\Exceptions\roleNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\RoleWasCreated;
//use App\Events\RoleWasDeleted;
//use App\Events\RoleWasUpdated;


class RoleService
{
	private $roleRepo;
	private $dispatcher;

	public function __construct(Dispatcher $dispatcher,RoleRepositoryContract $roleRepo) {
        $this->dispatcher = $dispatcher;
        $this->roleRepo = $roleRepo;
    }

    public function getAll($options = [])
    {
        return $this->roleRepo->getAll();
    }

    public function find($id)
    {
        return $this->roleRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $role = $this->getRequestedRole($roleId);

        return $role;
    }

     public function create($data)
    {
        $role = $this->roleRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $role;
    }

    public function getPermissions($role)
    {
        return $this->roleRepo->getPermissions($role);
    }

    public function delete($id)
    {
        $this->roleRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->roleRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->roleRepo->update($id, $data);
    }

    private function getRequestedRole($roleId)
    {
        $role = $this->roleRepo->getById($roleId);

        if (is_null($role)) {
            throw new roleNotFoundException();
        }

        return $mtch;
    }

    public function allowsAccess()
    {
        if (Gate::allows('role_access')) {
            return abort(401);
        }

    }
    public function allowsCreate()
    {
        if (Gate::allows('role_create')) {
            return abort(401);
        }

    }

    public function allowsEdit()
    {
        if (! Gate::allows('role_edit')) {
            return abort(401);
        }
    }

    public function allowsView()
    {
        if (! Gate::allows('role_view')) {
            return abort(401);
        }
    }

    public function allowsDelete()
    {
        if (! Gate::allows('role_delete')) {
            return abort(401);
        }
    }
}