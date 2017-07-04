<?php

namespace App\Services;

use App\Repositories\Schedule\ScheduleRepositoryContract;
//use App\Exceptions\scheduleNotFoundException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Events\Dispatcher;
//use App\Events\scheduleWasCreated;
//use App\Events\scheduleWasDeleted;
//use App\Events\scheduleWasUpdated;


class ScheduleService
{
	private $scheduleRepo;
	private $dispatcher;

	public function __construct(Dispatcher $dispatcher,ScheduleRepositoryContract $scheduleRepo) {
        $this->dispatcher = $dispatcher;
        $this->scheduleRepo = $scheduleRepo;
    }

    public function getAll($options = [])
    {
        return $this->scheduleRepo->getAll();
    }

    public function find($id)
    {
        return $this->scheduleRepo->find($id);
    }

    public function getById($userId, array $options = [])
    {
        $schedule = $this->getRequestedSchedule($scheduleId);

        return $schedule;
    }

     public function create($data)
    {
        $schedule = $this->scheduleRepo->create($data);

       // $this->dispatcher->fire(new PlayerWasCreated($player));

        return $schedule;
    }
    public function delete($id)
    {
        $this->scheduleRepo->delete($id);
    }
    public function deleteMany($data)
    {
        $this->scheduleRepo->deleteMany($data);
    }

    public function update($id,$data)
    {
        return $this->scheduleRepo->update($id, $data);
    }

    private function getRequestedSchedule($scheduleId)
    {
        $schedule = $this->scheduleRepo->getById($scheduleId);

        if (is_null($schedule)) {
            throw new scheduleNotFoundException();
        }

        return $mtch;
    }


    
}