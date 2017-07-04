<?php

namespace App\Services;

use App\Repositories\tournament\TournamentRepositoryContract;
//use App\Exceptions\tournamentNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\TournamentWasCreated;
//use App\Events\TournamentWasDeleted;
//use App\Events\TournamentWasUpdated;


class TournamentService
{
	private $tournamentRepo;
	private $dispatcher;

	public function __construct(Dispatcher $dispatcher,TournamentRepositoryContract $tournamentRepo) {
        $this->dispatcher = $dispatcher;
        $this->tournamentRepo = $tournamentRepo;
    }

    public function getAll($options = [])
    {
        return $this->tournamentRepo->getAll();
    }

    public function find($id)
    {
        return $this->tournamentRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $tournament = $this->getRequestedTournament($tournamentId);

        return $tournament;
    }

     public function create($data)
    {
        $tournament = $this->tournamentRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $tournament;
    }
    public function delete($id)
    {
        $this->tournamentRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->tournamentRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->tournamentRepo->update($id, $data);
    }

    private function getRequestedPlayer($playerId)
    {
        $tournament = $this->tournamentRepo->getById($tournamentId);

        if (is_null($tournament)) {
            throw new tournamentNotFoundException();
        }

        return $player;
    }

    public function allowsAccess()
    {
        if (Gate::allows('tournament_access')) {
            return abort(401);
        }

    }
    public function allowsCreate()
    {
        if (Gate::allows('tournament_create')) {
            return abort(401);
        }

    }

    public function allowsEdit()
    {
        if (! Gate::allows('tournament_edit')) {
            return abort(401);
        }
    }

    public function allowsView()
    {
        if (! Gate::allows('tournament_view')) {
            return abort(401);
        }
    }

    public function allowsDelete()
    {
        if (! Gate::allows('tournament_delete')) {
            return abort(401);
        }
    }
}