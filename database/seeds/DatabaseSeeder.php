<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(MatchesTableSeeder::class);
         $this->call(PlayersTableSeeder::class);
         $this->call(TournamentsTableSeeder::class);
         $this->call(ResultsTableSeeder::class);
         $this->call(MatchSchedulesTableSeeder::class);
         $this->call(PlayerTournamentTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(RoleUserTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
         $this->call(PermissionRoleTableSeeder::class);
    
    }
}
