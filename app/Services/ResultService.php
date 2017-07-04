<?php

namespace App\Services;

use App\Repositories\Result\ResultRepositoryContract;
//use App\Exceptions\resultNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\ResultWasCreated;
//use App\Events\ResultWasDeleted;
//use App\Events\ResultWasUpdated;


class ResultService
{
	private $resultRepo;
	private $dispatcher;

	public function __construct(Dispatcher $dispatcher,ResultRepositoryContract $resultRepo) {
        $this->dispatcher = $dispatcher;
        $this->resultRepo = $resultRepo;
    }

    public function getAll($options = [])
    {
        return $this->resultRepo->getAll();
    }

    public function find($id)
    {
        return $this->resultRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $result = $this->getRequestedResult($resultId);

        return $result;
    }

     public function create($data)
    {
        $result = $this->resultRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $result;
    }
    public function delete($id)
    {
        $this->resultRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->resultRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->resultRepo->update($id, $data);
    }

    private function getRequestedResult($playerId)
    {
        $result = $this->resultRepo->getById($resultId);

        if (is_null($result)) {
            throw new resultNotFoundException();
        }

        return $player;
    }

    public function allowsAccess()
    {
        if (Gate::allows('result_access')) {
            return abort(401);
        }

    }
    public function allowsCreate()
    {
        if (Gate::allows('result_create')) {
            return abort(401);
        }

    }

    public function allowsEdit()
    {
        if (! Gate::allows('result_edit')) {
            return abort(401);
        }
    }

    public function allowsView()
    {
        if (! Gate::allows('result_view')) {
            return abort(401);
        }
    }

    public function allowsDelete()
    {
        if (! Gate::allows('result_delete')) {
            return abort(401);
        }
    }
}