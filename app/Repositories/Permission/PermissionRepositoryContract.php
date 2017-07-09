<?php
namespace App\Repositories\Permission;

interface PermissionRepositoryContract
{
	public function getModel();
	
    public function find($id);

    public function listPermissions();

    public function getAll();

    public function getAllPermissionsCount();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function deleteMany($requestData);

}
