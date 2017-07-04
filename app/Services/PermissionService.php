<?php

namespace App\Services;

use App\Repositories\Permission\PermissionRepositoryContract;
//use App\Exceptions\permissionNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\permissionWasCreated;
//use App\Events\permissionWasDeleted;
//use App\Events\permissionWasUpdated


class PermissionService
{
	private $permissionRepo;
	private $dispatcher;

	public function __construct(Dispatcher $dispatcher,PermissionRepositoryContract $permissionRepo) {
        $this->dispatcher = $dispatcher;
        $this->permissionRepo = $permissionRepo;
    }

    public function getAll($options = [])
    {
        return $this->permissionRepo->getAll();
    }

    public function find($id)
    {
        return $this->permissionRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $permission = $this->getRequestedPermission($permissionId);

        return $permission;
    }

     public function create($data)
    {
        $permission = $this->permissionRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $permission;
    }
    public function delete($id)
    {
        $this->permissionRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->permissionRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->permissionRepo->update($id, $data);
    }

    private function getRequestedPermission($permissionId)
    {
        $permission = $this->permissionRepo->getById($permissionId);

        if (is_null($permission)) {
            throw new permissionNotFoundException();
        }

        return $mtch;
    }

    public function allowsAccess()
    {
        if (Gate::allows('permission_access')) {
            return abort(401);
        }

    }
    public function allowsCreate()
    {
        if (Gate::allows('permission_create')) {
            return abort(401);
        }

    }

    public function allowsEdit()
    {
        if (! Gate::allows('permission_edit')) {
            return abort(401);
        }
    }

    public function allowsView()
    {
        if (! Gate::allows('permission_view')) {
            return abort(401);
        }
    }

    public function allowsDelete()
    {
        if (! Gate::allows('permission_delete')) {
            return abort(401);
        }
    }
}