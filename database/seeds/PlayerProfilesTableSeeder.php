<?php

use Illuminate\Database\Seeder;

class PlayerProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
        	[
        		'id' 				=> 1,
            	'avatar'			=> '',
            	'year-turned_pro'	=> '1994-04-08',
            	'matches_won' 		=> 10,
            	'matches_lost'		=> 3,
            	'aces' 				=> 3,
            	'double_faults'		=> 3,
            	'unforced_errors' 	=> 3,
            	'total_points_won'	=> 16,
            	'break_points_won' 	=> 5,
            	'distance_covered' 	=> 60.5,
            	'player_id' 		=> 1,
            	'created_at' 		=> '2017-04-04 13:42:19',
                'updated_at' 		=> '2017-04-04 13:42:19',           
        	],
        	[
        		'id' 				=> 2,
            	'avatar'			=> '',
            	'year-turned_pro'	=> '1995-06-10',
            	'matches_won' 		=> 14,
            	'matches_lost'		=> 4,
            	'aces' 				=> 2,
            	'double_faults'		=> 3,
            	'unforced_errors' 	=> 4,
            	'total_points_won'	=> 20,
            	'break_points_won' 	=> 5,
            	'distance_covered' 	=> 60.5,
            	'player_id' 		=> 2,
            	'created_at' 		=> '2017-04-04 13:42:19',
                'updated_at' 		=> '2017-04-04 13:42:19',           
        	],

        	[
        		'id' 				=> 3,
            	'avatar'			=> '',
            	'year-turned_pro'	=> '1996-01-09',
            	'matches_won' 		=> 10,
            	'matches_lost'		=> 3,
            	'aces' 				=> 2,
            	'double_faults'		=> 3,
            	'unforced_errors' 	=> 3,
            	'total_points_won'	=> 16,
            	'break_points_won' 	=> 5,
            	'distance_covered' 	=> 60.5,
            	'player_id' 		=> 3,
            	'created_at' 		=> '2017-04-04 13:42:19',
                'updated_at' 		=> '2017-04-04 13:42:19',           
        	],
        	[
        		'id' 				=> 4,
            	'avatar'			=> '',
            	'year-turned_pro'	=> '1993-11-05',
            	'matches_won' 		=> 19,
            	'matches_lost'		=> 3,
            	'aces' 				=> 3,
            	'double_faults'		=> 3,
            	'unforced_errors' 	=> 3,
            	'total_points_won'	=> 16,
            	'break_points_won' 	=> 5,
            	'distance_covered' 	=> 66.5,
            	'player_id' 		=> 4,
            	'created_at' 		=> '2017-04-04 13:42:19',
                'updated_at' 		=> '2017-04-04 13:42:19',           
        	],


        ];
        DB::table('player_profiles')->insert($profiles);
    }
}
