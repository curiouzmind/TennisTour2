<?php
namespace App\Repositories\Role;

interface RoleRepositoryContract
{
	public function getModel();
	
    public function find($id);
    
    public function listRoles();

    public function getPermissions($role);

    public function getAll();

    public function getAllRolesCount();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function deleteMany($requestData);

}
