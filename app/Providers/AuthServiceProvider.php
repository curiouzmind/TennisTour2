<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Players
        Gate::define('player_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('player_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('player_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('player_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('player_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Tournaments
        Gate::define('tournament_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('Tournament_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('Tournament_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('Tournament_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('Tournament_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Matches
        Gate::define('match_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('match_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('match_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('match_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('match_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Schedules
        Gate::define('schedule_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('schedule_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('schedule_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('schedule_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('schedule_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Results
        Gate::define('result_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('result_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('result_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('result_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('result_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
    }
}
