<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerProfile extends Model
{
	protected $fillable = [
        'avatar',
        'year_turned_pro',
        'matches_won',
        'matches_lost',
        'aces',
        'double-faults',
        'unforced_errors',
        'total_points_won',
        'break_points_won',
        'distance_covered',
        'player_id'];

    public function player(){
     	return $this->belongsTo(Player::class,'player_id', 'id');
     }
}
