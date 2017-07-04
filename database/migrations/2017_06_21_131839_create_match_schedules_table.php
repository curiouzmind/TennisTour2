<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('match_venue')->nullable();
            $table->string('match_name')->nullable();
            $table->string('match_stage')->nullable();
            $table->dateTime('match_date')->nullable();
            $table->string('player1_id')->nullable();
            $table->string('player2_id')->nullable();
            $table->integer('tournament_id');
            $table->foreign('tournament_id')->references('id')->on('tournaments');
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
        Schema::dropIfExists('match_schedules');
    }
}
