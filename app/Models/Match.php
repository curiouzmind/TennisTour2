<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'player1_id',
        'player2_id',
        'match_schedule_id',
        'tournament_id'
    ];

     protected $table = 'matches';

     public function tournament()
     {
     	return $this->belongsTo(Tournament::class, 'match_id','id');
     }

     public function schedule()
     {
        return $this->hasOne(MatchSchedule::class, 'schedule_id','id');
     }

     public function result()
     {
        return $this->hasOne(Result::class,'match_id','id');
     }


}
