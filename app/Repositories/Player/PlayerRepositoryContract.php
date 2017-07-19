<?php
namespace App\Repositories\Player;

interface PlayerRepositoryContract
{
	public function getModel();
	
    public function find($id);

    public function getAll();
    
    public function getByKey($key, $value);

    public function getPlayersByGender($type);
	
	public function getPlayerProfile($id);

    public function getAllPlayersCount();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);
    public function deleteMany($requestData);

}
