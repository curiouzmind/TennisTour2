<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccessServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\User\UserRepositoryContract::class,
            \App\Repositories\User\UserRepository::class
        );
        $this->app->bind(
            \App\Repositories\Role\RoleRepositoryContract::class,
            \App\Repositories\Role\RoleRepository::class
        );
        $this->app->bind(
            \App\Repositories\Player\PlayerRepositoryContract::class,
            \App\Repositories\Player\PlayerRepository::class
        );
        $this->app->bind(
            \App\Repositories\Match\MatchRepositoryContract::class,
            \App\Repositories\Match\MatchRepository::class
        );
        $this->app->bind(
            \App\Repositories\Schedule\ScheduleRepositoryContract::class,
            \App\Repositories\Schedule\ScheduleRepository::class
        );
        $this->app->bind(
            \App\Repositories\Permission\PermissionRepositoryContract::class,
            \App\Repositories\Permission\PermissionRepository::class
        );
        $this->app->bind(
            \App\Repositories\Result\ResultRepositoryContract::class,
            \App\Repositories\Result\ResultRepository::class
        );
        $this->app->bind(
            \App\Repositories\Tournament\TournamentRepositoryContract::class,
            \App\Repositories\Tournament\TournamentRepository::class
        );
    }
}
