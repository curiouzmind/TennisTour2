<?php

use Illuminate\Database\Seeder;

class PlayerTournamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playerTournament = [
        	[
        		'id' => 1,
            	'player_id' => 1,
            	'tournament_id' => 1,
        	],
        	[
        		'id' => 2,
            	'player_id' => 2,
            	'tournament_id' => 1,
        	],
        	[
        		'id' => 3,
            	'player_id' => 2,
            	'tournament_id' => 2,
        	],
        	[
        		'id' => 4,
            	'player_id' => 1,
            	'tournament_id' => 2,
        	]
        ];
        \DB::table('player_tournament')->insert($playerTournament);
    }
}
