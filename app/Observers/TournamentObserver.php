<?php
namespace App\Observers;
use Log;
class TournamentObserver {

    public function created($tournament)
    {
        Log::info('[TournamentObserver] tournament created!');
    }
    public function updated($tournament)
    {
        Log::info('[TournamentObserver] tournament Updated!');
    }
    public function deleted($tournament)
    {
        Log::info('[TournamentObserver] tournament Deleted!');
    }
}