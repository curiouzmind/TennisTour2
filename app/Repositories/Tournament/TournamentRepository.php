<?php
namespace App\Repositories\Tournament;

use App\Models\Tournament;

class TournamentRepository implements TournamentRepositoryContract
{
	/*
	 * @param $id
	 * @return mixed
	 */
    public function find($id)
	{
		return Tournament::findOrFail($id);
	}
	public function getModel()
	{
		return new Tournament();
	}

	/*
	 * @return mixed
	 */
    public function getAll()
	{
		return Tournament::all();
	}
	
	/*
	 * @param $id
	 * @return mixed
	 */
    public function getTournamentMatches($id)
	{
		return Tournament::findOrFail($id)->profile;
	}

    public function getAllTournamentsCount()
	{
		return Tournament::all()->count();
	}

    public function create($requestData)
	{
		return Tournament::create($requestData);
	}

    public function update($id, $requestData)
	{
		$Tournament= Tournament::findOrFail($id);
		$Tournament->fill($requestData)->save();
		return $Tournament;
	}

    public function delete($id)
	{
		return Tournament::destroy($id);
	}

	public function deleteMany($data)
	{
		if ($data['ids']) {
			foreach ($data['ids'] as $id){
				Tournament::destroy($id);
			}
          
        }
	}

}
