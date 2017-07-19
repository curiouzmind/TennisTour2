<?php
namespace App\Observers;
use Log;
class MatchScheduleObserver {

    public function created($matchSchedule)
    {
        Log::info('[MatchScheduleObserver] matchSchedule created!');
    }
    public function updated($matchSchedule)
    {
        Log::info('[MatchScheduleObserver] matchSchedule Updated!');
    }
    public function deleted($matchSchedule)
    {
        Log::info('[MatchScheduleObserver] matchSchedule Deleted!');
    }
}