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

    public function create($requestData)
	{
		return Role::create($requestData);
	}

    public function update($id, $requestData)
	{
		$Role= Role::findOrFail($id);
		$Role->fill($requestData)->save();
		return $Role;
	}

    public function destroy($id)
	{
		return Role::destroy($id);
	}

	public function deleteMany($data)
	{
		if ($data['ids']) {
            $entries = Role::whereIn('id', $data['ids']);

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
	}

}
