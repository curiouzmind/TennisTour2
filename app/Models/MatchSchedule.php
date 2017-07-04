<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchSchedule extends Model
{
    protected $fillable = [
    	'match_stage',
    	'match_name',
    	'match_venue',
    	'match_date',
        'player1_id',
        'player2_id',
        'tournament_id'
    ];

    protected $table = 'match_schedules';

    public function match()
     {
        return $this->belongsTo(Match::class, 'match_schedule_id','id');
     }
}
