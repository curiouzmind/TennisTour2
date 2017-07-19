<?php
namespace App\Observers;
use Log;
class RoleObserver {

    public function created($role)
    {
        Log::info('[RoleObserver] role created!');
    }
    public function updated($role)
    {
        Log::info('[RoleObserver] role Updated!');
    }
    public function deleted($role)
    {
        Log::info('[RoleObserver] role Deleted!');
    }
}