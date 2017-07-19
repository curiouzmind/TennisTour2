<?php
namespace App\Observers;
use Log;
class PlayerObserver {

    public function created($player)
    {
        Log::info('[PlayerObserver] player created!');
    }
    public function updated($player)
    {
        Log::info('[PlayerObserver] player Updated!');
    }
    public function deleted($player)
    {
        Log::info('[PlayerObserver] player Deleted!');
    }
}