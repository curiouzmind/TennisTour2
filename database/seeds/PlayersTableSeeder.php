<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
        		[
                	'id' => 1,
                	'first_name' 	=> 'Amos',
                	'last_name' 	=> 'Ayodeji',
                	'dob'			=>  '1982-04-04',
                	'birth_place'	=> 'lagos state',
                	'residence'		=> 'Nigeria',
            		'hand_type'		=> 'left',
            		'height'		=> 34,
            		'weight'		=> 58,
            		'singles_ranking' 	=> 1,
            		'doubles_ranking'	=> 1,
                	'created_at' 	=> '2017-04-04 13:42:19',
                	'updated_at' 	=> '2017-04-04 13:42:19',
                	'deleted_at'	=> '2017-04-04 13:42:19',
            	],
            	[
                	'id' => 2,
                	'first_name' => 'Frank',
                	'last_name' => 'Osanogie',
                	'dob'		=>  '1984-04-04',
                	'birth_place'=> 'Abuja',
                	'residence'	=> 'Edo state',
            		'hand_type'	=> 'left',
            		'height'	=> 55,
            		'weight'	=> 67,
            		'singles_ranking' 	=> 2,
            		'doubles_ranking'	=> 2,
                	'created_at' 	=> '2017-03-04 13:42:19',
                	'updated_at' 	=> '2017-03-04 13:42:19',
                	'deleted_at'	=> '2017-03-04 13:42:19',
            	],
            	[
                	'id' => 3,
                	'first_name' => 'Paul',
                	'last_name' => 'Yahaya',
                	'dob'		=>  '1986-04-04',
                	'birth_place'=> 'Abia',
                	'residence'	=> 'Abuja',
            		'hand_type'	=> 'right',
            		'height'	=> 74,
            		'weight'	=> 48,
            		'singles_ranking' 	=> 3,
            		'doubles_ranking'	=> 3,
                	'created_at' 	=> '2017-04-04 13:42:19',
                	'updated_at' 	=> '2017-04-04 13:42:19',
                	'deleted_at'	=> '2017-04-04 13:42:19',
            	],
            	[
                	'id' => 4,
                	'first_name' => 'Randy',
                	'last_name' => 'Megson',
                	'dob'		=>  '1983-04-04',
                	'birth_place'=> 'Benin',
                	'residence'	=>  'Benin',
            		'hand_type'	=> 'right',
            		'height'	=> 74,
            		'weight'	=> 48,
            		'singles_ranking' 	=> 4,
            		'doubles_ranking'	=> 4,
                	'created_at' 	=> '2017-04-04 13:42:19',
                	'updated_at' 	=> '2017-04-04 13:42:19',
                	'deleted_at'	=> '2017-04-04 13:42:19',
            	],


        ];

        DB::table('players')->insert($players);
    }
}
