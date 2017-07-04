<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = [
        	[
                'match_schedule_id'   => 1,
            	'player1_id' 	      => 1,
            	'player2_id' 	      => 2,
            	'created_at' 	      => '2017-04-04 13:42:19',
                'updated_at' 	      => '2017-04-04 13:42:19',
        	],
        	[
                'match_schedule_id'   => 2,
            	'player1_id' 	      => 3,
            	'player2_id' 	      => 4,
            	'created_at' 	      => '2017-04-04 13:42:19',
                'updated_at' 	      => '2017-04-04 13:42:19',
        	],
        	[
                'match_schedule_id'   => 3,
            	'player1_id' 	      => 1,
            	'player2_id' 	      => 2,
            	'created_at' 	      => '2017-04-04 13:42:19',
                'updated_at' 	      => '2017-04-04 13:42:19',
        	],
        	[
                'match_schedule_id'   => 4,
            	'player1_id' 	      => 3,
            	'player2_id' 	      => 4,
            	'created_at' 	      => '2017-04-04 13:42:19',
                'updated_at' 	      => '2017-04-04 13:42:19',
        	],
        ];
        \DB::table('matches')->insert($matches);
    }
}
