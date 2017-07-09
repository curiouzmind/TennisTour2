<?php
namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryContract
{
	public function getModel()
    {
        return new User();
    }

    public function getAll()
    {
        return User::all();
    }
	
    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function create($requestData)
    {
        return User::create($requestData);
    }

    public function update($id, $data)
    {
        $user = User::findOrFail($id);
        $user->fill($data)->save();
        return $user;
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }
    

}
