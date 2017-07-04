<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $results = [
        	[
        		'id' 			  => 1,
            	'rnd1_score' 	  => 3,
            	'rnd1_tiebreaks'  => 3,
            	'rnd2_score' 	  => 5,
            	'rnd2_tiebreaks'  => 2,
            	'rnd3_score'      => 6,
            	'rnd3_tiebreaks'  => 2,
            	'rnd4_score'      => 4,
            	'rnd4_tiebreaks'  => 3,
            	'qf_score'        => 5,
            	'qf_tiebreaks'    => 2,
            	'sf_score'        => 5,
            	'sf_tiebreaks'    => 4,
            	'final_score'     => 6,
            	'final_tiebreaks' => 4,
            	'match_id'        => 1,
                'created_at'      => '2017-04-04 13:42:19',
                'updated_at'      => '2017-04-04 13:42:19',
        	],
            [
                'id'              => 2,
                'rnd1_score'      => 4,
                'rnd1_tiebreaks'  => 2,
                'rnd2_score'      => 4,
                'rnd2_tiebreaks'  => 6,
                'rnd3_score'      => 3,
                'rnd3_tiebreaks'  => 2,
                'rnd4_score'      => 4,
                'rnd4_tiebreaks'  => 3,
                'qf_score'        => 5,
                'qf_tiebreaks'    => 2,
                'sf_score'        => 5,
                'sf_tiebreaks'    => 4,
                'final_score'     => 6,
                'final_tiebreaks' => 4,
                'match_id'        => 2,
                'created_at'      => '2017-04-04 13:42:19',
                'updated_at'      => '2017-04-04 13:42:19',
            ],
            [
                'id'              => 3,
                'rnd1_score'      => 7,
                'rnd1_tiebreaks'  => 6,
                'rnd2_score'      => 5,
                'rnd2_tiebreaks'  => 5,
                'rnd3_score'      => 3,
                'rnd3_tiebreaks'  => 2,
                'rnd4_score'      => 4,
                'rnd4_tiebreaks'  => 3,
                'qf_score'        => 5,
                'qf_tiebreaks'    => 2,
                'sf_score'        => 5,
                'sf_tiebreaks'    => 4,
                'final_score'     => 6,
                'final_tiebreaks' => 4,
                'match_id'        => 3,
                'created_at'      => '2017-04-04 13:42:19',
                'updated_at'      => '2017-04-04 13:42:19',
            ],
        ];
        \DB::table('results')->insert($results);
    }
}
