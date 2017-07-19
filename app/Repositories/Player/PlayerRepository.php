<?php
namespace App\Repositories\Player;

use App\Models\Player;

class PlayerRepository implements PlayerRepositoryContract
{
	/*
	 * @param $id
	 * @return mixed
	 */
    public function find($id)
	{
		return Player::findOrFail($id)->first();
	}
	public function getModel()
	{
		return new Player();
	}

	/*
	 * @return mixed
	 */
    public function getAll()
	{
		return Player::all();
	}

	/**
     * @param string $key
     *
     * @return Session
     */
    public function getByKey($key,$value)
    {
        return Player::where($key, $value)->get();
    }

    public function getPlayersByGender($type)
    {
    	return Player::gender($type)->orderBy('first_name','asc')->get();
    }
	
	/*
	 * @param $id
	 * @return mixed
	 */
    public function getPlayerProfile($id)
	{
		return Player::findOrFail($id)->profile;
	}

    public function getAllPlayersCount()
	{
		return Player::all()->count();
	}

    public function create($requestData)
	{
		return Player::create($requestData);
	}

    public function update($id, $requestData)
	{
		$player= Player::findOrFail($id);
		$player->fill($requestData)->save();
		return $player;
	}

    public function destroy($id)
	{
		return Player::destroy($id);
	}

	public function deleteMany($data)
	{
		if ($data['ids']) {
			foreach ($data['ids'] as $id){
				Player::destroy($id);
			}
          
        }
	}

}
