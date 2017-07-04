<?php
namespace App\Repositories\Match;

use App\Models\User;

class UserRepository extends UserRepositoryContract
{
	public function getModel()
    {
        return new User();
    }

    public function getAll()
    {
        return $this->getModel()->all();
    }
	
    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function create($requestData)
    {
        $user = $this->getModel();
        $user->fill($requestData);
        $user->save()
        return $user;
    }

    public function update(User $user, array $data)
    {
        $user->fill($data);

        $user->save();

        return $user;
    }

    public function destroy($id);

    public function listAllMatches();
	
	public function getTournament($id);

    public function getModel();

    

}
