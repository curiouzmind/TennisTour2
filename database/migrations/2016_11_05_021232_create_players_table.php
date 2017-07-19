<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function(Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('country')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('residence')->nullable();
            $table->string('hand_type')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->integer('singles_ranking')->nullable();
            $table->integer('doubles_ranking')->nullable();
            $table->string('avatar')->nullable();
            $table->date('year_turned_pro')->nullable();
            $table->integer('career_matches_won')->nullable();
            $table->integer('career_matches_lost')->nullable();
            $table->integer('year_to_date_matches_won')->nullable();
            $table->integer('year_to_date_matches_lost')->nullable();
            $table->integer('aces')->nullable();
            $table->integer('double_faults')->nullable();
            $table->integer('unforced_errors')->nullable();
            $table->integer('total_points_won')->nullable();
            $table->integer('break_points_won')->nullable();
            $table->float('distance_covered')->nullable();
            $table->softdeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
