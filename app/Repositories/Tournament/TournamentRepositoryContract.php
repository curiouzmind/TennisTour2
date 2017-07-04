<?php
namespace App\Repositories\Tournament;

interface TournamentRepositoryContract
{
	public function getModel();
	
    public function find($id);

    public function getAll();
	
	//public function getPlayerProfile($id);

    public function getAllTurnamentsCount();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function deleteMany($requestData);

}
