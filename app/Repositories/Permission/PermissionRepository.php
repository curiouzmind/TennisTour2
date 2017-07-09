<?php
namespace App\Repositories\Permission;

use App\Models\Permission;

class PermissionRepository implements PermissionRepositoryContract
{
	/*
	 * @param $id
	 * @return mixed
	 */
    public function find($id)
	{
		return Permission::findOrFail($id);
	}

	public function listPermissions()
	{
	$permissions = Permission::get()->pluck('name', 'id');
		return $permissions;
	}

	public function getModel()
	{
		return new Permission();
	}

	/*
	 * @return mixed
	 */
    public function getAll()
	{
		return Permission::all();
	}
	
    public function getAllPermissionsCount()
	{
		return Permission::all()->count();
	}

    public function create($requestData)
	{
		return Permission::create($requestData);
	}

    public function update($id, $requestData)
	{
		$Permission= Permission::findOrFail($id);
		$Permission->fill($requestData)->save();
		return $Permission;
	}

    public function destroy($id)
	{
		return Permission::destroy($id);
	}

	public function deleteMany($data)
	{
		if ($data['ids']) {
            $entries = Permission::whereIn('id', $data['ids']);

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
	}

}
