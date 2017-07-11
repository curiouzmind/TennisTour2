<?php
namespace App\Repositories\Result;

use App\Models\Result;

class ResultRepository implements ResultRepositoryContract
{
	/*
	 * @param $id
	 * @return mixed
	 */
    public function find($id)
	{
		return Result::findOrFail($id);
	}
	public function getModel()
	{
		return new Result();
	}

	/*
	 * @return mixed
	 */
    public function getAll()
	{
		return Result::all();
	}
	
    public function create($requestData)
	{
		return Result::create($requestData);
	}

    public function update($id, $requestData)
	{
		$result= Result::findOrFail($id);
		$result->fill($requestData)->save();
		return $result;
	}

    public function destroy($id)
	{
		return Result::destroy($id);
	}

	public function deleteMany($data)
	{
		if ($data['ids']) {
			foreach ($data['ids'] as $id){
				Result::destroy($id);
			}
          
        }
	}

}
