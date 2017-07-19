<?php
namespace App\Observers;
use Log;
class PermissionObserver {

    public function created($permission)
    {
        Log::info('[PermissionObserver] permission created!');
    }
    public function updated($permission)
    {
        Log::info('[PermissionObserver] permission Updated!');
    }
    public function deleted($permission)
    {
        Log::info('[PermissionObserver] permission Deleted!');
    }
}