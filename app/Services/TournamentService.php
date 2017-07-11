<?php

namespace App\Services;

use App\Repositories\Tournament\TournamentRepositoryContract;
//use App\Exceptions\tournamentNotFoundException;
use Illuminate\Events\Dispatcher;

class TournamentService
{
	private $tournamentRepo;
	private $dispatcher;

	public function __construct(TournamentRepositoryContract $tournamentRepo) {
       // $this->dispatcher = $dispatcher;
        $this->tournamentRepo = $tournamentRepo;
    }

    public function getAll()
    {
        return $this->tournamentRepo->getAll();
    }

    public function find($id)
    {
        return $this->tournamentRepo->find($id);
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
 

    
}