<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->nullable();
            $table->date('year-turned_pro')->nullable();
            $table->integer('matches_won')->nullable();
            $table->integer('matches_lost')->nullable();
            $table->integer('aces')->nullable();
            $table->integer('double_faults')->nullable();
            $table->integer('unforced_errors')->nullable();
            $table->integer('total_points_won')->nullable();
            $table->integer('break_points_won')->nullable();
            $table->float('distance_covered')->nullable();
            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players');
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
        Schema::dropIfExists('player_profiles');
    }
}
