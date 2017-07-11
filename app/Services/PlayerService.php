<?php

namespace App\Services;

use App\Repositories\Player\PlayerRepositoryContract;
//use App\Exceptions\PlayerNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\PlayerWasCreated;
//use App\Events\PlayerWasDeleted;
//use App\Events\PlayerWasUpdated;


class PlayerService
{
	private $playerRepo;
	private $dispatcher;

	public function __construct(
        Dispatcher $dispatcher,
        PlayerRepositoryContract $playerRepo
    ) {
        $this->dispatcher = $dispatcher;
        $this->playerRepo = $playerRepo;
    }

    public function getAll()
    {
        return $this->playerRepo->getAll();
    }

    public function find($id)
    {
        return $this->playerRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $player = $this->getRequestedPlayer($playerId);

        return $player;
    }

     public function create($data)
    {
        $player = $this->playerRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $player;
    }
    public function delete($id)
    {
        $this->playerRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->playerRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->playerRepo->update($id, $data);
    }

    private function getRequestedPlayer($playerId)
    {
        $player = $this->playerRepo->getById($playerId);

        if (is_null($player)) {
            throw new PlayerNotFoundException();
        }

        return $player;
    }

    public function allowsAccess()
    {
        if (Gate::allows('player_access')) {
            return abort(401);
        }

    }
    public function allowsCreate()
    {
        if (Gate::allows('player_create')) {
            return abort(401);
        }

    }

    public function allowsEdit()
    {
        if (! Gate::allows('player_edit')) {
            return abort(401);
        }
    }

    public function allowsView()
    {
        if (! Gate::allows('player_view')) {
            return abort(401);
        }
    }

    public function allowsDelete()
    {
        if (! Gate::allows('player_delete')) {
            return abort(401);
        }
    }
}