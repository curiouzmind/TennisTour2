<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rnd1_score');
            $table->integer('rnd1_tiebreaks')->nullable();
            $table->integer('rnd2_score');
            $table->integer('rnd2_tiebreaks')->nullable();
            $table->integer('rnd3_score');
            $table->integer('rnd3_tiebreaks')->nullable();
            $table->integer('rnd4_score');
            $table->integer('rnd4_tiebreaks')->nullable();
            $table->integer('qf_score');
            $table->integer('qf_tiebreaks')->nullable();
            $table->integer('sf_score');
            $table->integer('sf_tiebreaks')->nullable();
            $table->integer('final_score');
            $table->integer('final_tiebreaks')->nullable();
            $table->integer('match_id')->unsigned();
            $table->foreign('match_id')->references('id')->on('matches');
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
        Schema::dropIfExists('results');
    }
}
