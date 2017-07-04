<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $table = 'results';

	protected $fillable = [
			'rnd1_score',
            'rnd1_tiebreaks',
            'rnd2_score',
            'rnd2_tiebreaks',
            'rnd3_score',
            'rnd3_tiebreaks',
            'rnd4_score',
            'rnd4_tiebreaks',
            'qf_score',
            'qf_tiebreaks',
            'sf_score',
            'sf_tiebreaks',
            'final_score',
            'final_tiebreaks',
            'match_id'
	];

    public function match()
    {
    	return $this->belongsTo(Match::class,'match_id','id');
    }
}
