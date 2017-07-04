<?php

namespace App\Services;

use App\Repositories\Match\MatchRepositoryContract;
//use App\Exceptions\MatchNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\MatchWasCreated;
//use App\Events\MatchWasDeleted;
//use App\Events\matchWasUpdated;


class MatchService
{
	private $matchRepo;
	private $dispatcher;

	public function __construct(Dispatcher $dispatcher,MatchRepositoryContract $matchRepo) {
        $this->dispatcher = $dispatcher;
        $this->matchRepo = $matchRepo;
    }

    public function getAll($options = [])
    {
        return $this->matchRepo->getAll();
    }

    public function find($id)
    {
        return $this->matchRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $match = $this->getRequestedMatch($matchId);

        return $match;
    }

     public function create($data)
    {
        $match = $this->matchRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $match;
    }
    public function delete($id)
    {
        $this->matchRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->matchRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->matchRepo->update($id, $data);
    }

    private function getRequestedMatch($matchId)
    {
        $match = $this->matchRepo->getById($matchId);

        if (is_null($match)) {
            throw new MatchNotFoundException();
        }

        return $mtch;
    }

    public function allowsAccess()
    {
        if (Gate::allows('match_access')) {
            return abort(401);
        }

    }
    public function allowsCreate()
    {
        if (Gate::allows('match_create')) {
            return abort(401);
        }

    }

    public function allowsEdit()
    {
        if (! Gate::allows('match_edit')) {
            return abort(401);
        }
    }

    public function allowsView()
    {
        if (! Gate::allows('match_view')) {
            return abort(401);
        }
    }

    public function allowsDelete()
    {
        if (! Gate::allows('match_delete')) {
            return abort(401);
        }
    }
}