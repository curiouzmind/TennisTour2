<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
    	'name',
    	'location'
    ];
    protected $table = 'tournaments';

    public function matches()
    {
    	return $this->hasMany(Match::class,'match_id','id');
    }
}
