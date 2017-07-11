<?php
namespace App\Repositories\Role;

use App\Models\Role;

class RoleRepository implements RoleRepositoryContract
{
	/*
	 * @param $id
	 * @return mixed
	 */
    public function find($id)
	{
		return Role::findOrFail($id);
	}

	public function listRoles()
	{
		$roles = Role::get()->pluck('name', 'id');
		return $roles;
	}

	public function create($requestData)
	{
		$role = Role::create($requestData);
		$this->addPerm($role,$requestData);

		return $role;
		
	}

	public function addPerm($role,$data)
	{
		isset($data['permissions']) ? $role->attachPermissions($requestData['permissions']) : $role;
	}

	public function update($id, $data)
	{
		$role = Role::findOrFail($id);
		$role->fill($data)->save();
		$this->updatePerm($role,$data);
		return $role;
	}

	public function updatePerm($role, $data)
	{
		isset($data['permissions']) ? $role->savePermissions($data['permissions']) : $role;
	}

	public function getPermissions($role)
    {
        return $role->perms()->pluck('name', 'id');
    }

	public function getModel()
	{
		return new Role();
	}

	/*
	 * @return mixed
	 */
    public function getAll()
	{
		return Role::all();
	}
	
    public function getAllRolesCount()
	{
		return Role::all()->count();
	}


    public function destroy($id)
	{
		return Role::destroy($id);
	}

	public function deleteMany($data)
	{
		if ($data['ids']) {
			foreach ($data['ids'] as $id){
				Role::destroy($id);
			}
          
        }
	}

}
