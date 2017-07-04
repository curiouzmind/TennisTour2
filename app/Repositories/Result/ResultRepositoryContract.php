<?php
namespace App\Repositories\Result;

interface ResultRepositoryContract
{
	public function getModel();
	
    public function find($id);

    public function getAll();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function deleteMany($requestData);

}
