<?php
namespace App\Repositories\Match;

interface UserRepositoryContract
{
	public function getModel();

	public function getAll();

    public function getById($id);
    
    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function listAllMatches();
	
	public function getTournament($id);

    public function getModel();

  

}
