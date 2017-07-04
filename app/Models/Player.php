<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'birth_place',
        'residence',
        'hand_type',
        'height',
        'weight',
        'singles_ranking',
        'doubles_ranking'];

     public function profile(){
     	return $this->hasOne(PlayerProfile::class,'player_id','id');
     }
}
