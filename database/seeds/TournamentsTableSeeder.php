<?php

use Illuminate\Database\Seeder;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tournaments = [
        		[
                	'id' => 1,
                	'name' => 'Lagos Tennis championship',
                	'location' => 'lagos',
                	'created_at' => '2017-04-04 13:42:19',
                	'updated_at' => '2017-04-04 13:42:19',
            	],
            	[
                	'id' => 2,
                	'name' => 'Edo Tennis championship',
                	'location' => 'Edo state',
                	'created_at' => '2017-04-04 13:42:19',
                	'updated_at' => '2017-04-04 13:42:19',
            	],
            	[
                	'id' => 3,
                	'name' => 'Abuja Tennis championship',
                	'location' => 'Abuja',
                	'created_at' => '2017-04-04 13:42:19',
                	'updated_at' => '2017-04-04 13:42:19',
            	],
            ];

           \DB::table('tournaments')->insert($tournaments);
    }
}
