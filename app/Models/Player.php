<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'gender',
        'country',
        'birth_place',
        'residence',
        'hand_type',
        'height',
        'weight',
        'singles_ranking',
        'doubles_ranking',
        'avatar',
        'year_turned_pro',
        'matches_won',
        'matches_lost',
        'aces',
        'double_faults',
        'unforced_errors',
        'total_points_won',
        'break_points_won',
        'distance_covered',
        ];

     protected $table = 'players';

     /**
     * Scope a query to only include players by gender.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string gender types
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGender($query, $gender)
    {
        return $query->where('gender', $gender);
    }

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return sprintf('%s %s',
            $this->first_name,
            $this->last_name
        );
    }


}
