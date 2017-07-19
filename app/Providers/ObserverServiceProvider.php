<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Player;
use App\Models\Match;
use App\Models\MatchSchedule;
use App\Models\Tournament;
use App\Models\Result;
use App\Models\Role;
use App\Models\Permission;

class ObserverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        User::observe( new App\Observers\UserObserver );
        Player::observe( new App\Observers\PlayerObserver );
        Match::observe( new App\Observers\MatchObserver );
        MatchScedule::observe( new App\Observers\MatchScheduleObserver );
        Tournament::observe( new App\Observers\ournamentObserver );
        Result::observe( new App\Observers\ResultObserver );
        Role::observe( new App\Observers\RoleObserver );
        Permission::observe( new App\Observers\PermissionObserver );
    }
    public function register()
    {
    }
}