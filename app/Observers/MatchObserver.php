<?php
namespace App\Observers;
use Log;
class MatchObserver {

    public function created($match)
    {
        Log::info('[MatchObserver] match created!');
    }
    public function updated($match)
    {
        Log::info('[MatchObserver] match Updated!');
    }
    public function deleted($match)
    {
        Log::info('[MatchObserver] match Deleted!');
    }
}