<?php

use Illuminate\Database\Seeder;

class MatchSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
        	[
        		'id' 			=> 1,
            	'match_stage'	=> 'group',
                'match_name'    => 'Mens singles',
                'match_venue'   => 'main bowl of Teslim balogun statium',
                'match_date'    => '2017-05-10',
            	'player1_id' 	=> 'Seed1',
            	'player2_id' 	=> 'Seed10',
            	'tournament_id' => 1,
            	'created_at' 	=> '2017-04-04 13:42:19',
                'updated_at' 	=> '2017-04-04 13:42:19',
        	],
        	[
        		'id' 			=> 2,
            	'match_stage'	=> 'group',
                'match_name'    => 'Mens singles',
                'match_venue'   => 'main bowl of Teslim balogun statium',
                'match_date'    => '2017-05-10',
            	'player1_id' 	=> 'Seed3',
            	'player2_id' 	=> 'Seed65',
            	'tournament_id' => 1,
            	'created_at' 	=> '2017-04-04 13:42:19',
                'updated_at' 	=> '2017-04-04 13:42:19',
        	],
        	[
        		'id' 			=> 3,
                'match_name'    => 'Mens singles',
            	'match_stage'	=> 'group',
                'match_venue'   => 'main bowl of Teslim balogun statium',
                'match_date'    => '2017-05-10',
            	'player1_id' 	=> 'Seed1',
            	'player2_id' 	=> 'Seed10',
            	'tournament_id' => 1,
            	'created_at' 	=> '2017-04-04 13:42:19',
                'updated_at' 	=> '2017-04-04 13:42:19',
        	],
        	[
        		'id' 			=> 4,
                'match_name'    => 'Mens singles',
            	'match_stage'	=> 'group',
                'match_venue'   => 'main bowl of Teslim balogun statium',
                'match_date'    => '2017-05-10',
            	'player1_id' 	=> 'Seed1',
            	'player2_id' 	=> 'Seed10',
            	'tournament_id' => 1,
            	'created_at' 	=> '2017-04-04 13:42:19',
                'updated_at' 	=> '2017-04-04 13:42:19',
        	],
        ];
        \DB::table('match_schedules')->insert($schedules);
    }
}
