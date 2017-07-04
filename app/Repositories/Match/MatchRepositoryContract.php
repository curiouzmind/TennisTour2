<?php
namespace App\Repositories\Match;

interface MatchRepositoryContract
{
    public function find($id);

    public function getAll();
	
	public function getMatchSchedule($id);

	public function getMatchResult($id);

    public function getModel();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

}
