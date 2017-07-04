<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryContract;
//use App\Exceptions\UserNotFoundException;
use Illuminate\Events\Dispatcher;
//use App\Events\UserWasCreated;
//use App\Events\UserWasDeleted;
//use App\Events\UserWasUpdated;


class UserService
{
	private $userRepo;
	private $dispatcher;

	public function __construct(
        Dispatcher $dispatcher,
        UserRepositoryContract $userRepo
    ) {
        $this->dispatcher = $dispatcher;
        $this->userRepo = $userRepo;
    }

    public function getAll($options = [])
    {
        return $this->userRepo->getAll();
    }

    public function getById($userId, array $options = [])
    {
        $user = $this->getRequestedUser($userId);

        return $user;
    }

     public function create($data)
    {
        $user = $this->userRepo->create($data);

        $this->dispatcher->fire(new UserWasCreated($user));

        return $user;
    }

    private function getRequestedUser($userId)
    {
        $user = $this->userRepo->getById($userId);

        if (is_null($user)) {
            throw new UserNotFoundException();
        }

        return $user;
    }
}