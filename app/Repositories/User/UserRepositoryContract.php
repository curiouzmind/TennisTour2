<?php
namespace App\Repositories\User;

interface UserRepositoryContract
{
	public function getModel();

	public function getAll();

    public function find($id);
    
    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);


	

  

}
