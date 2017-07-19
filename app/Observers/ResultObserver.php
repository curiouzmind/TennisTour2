<?php
namespace App\Observers;
use Log;
class ResultObserver {

    public function created($result)
    {
        Log::info('[ResultObserver] result created!');
    }
    public function updated($result)
    {
        Log::info('[ResultObserver] result Updated!');
    }
    public function deleted($result)
    {
        Log::info('[ResultObserver] result Deleted!');
    }
}