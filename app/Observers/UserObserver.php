<?php
namespace App\Observers;
use Log;
class UserObserver {

    public function created($user)
    {
        Log::info('[UserObserver] User created!');
    }
    public function updated($user)
    {
        Log::info('[UserObserver] User Updated!');
    }
    public function deleted($user)
    {
        Log::info('[UserObserver] User Deleted!');
    }
}