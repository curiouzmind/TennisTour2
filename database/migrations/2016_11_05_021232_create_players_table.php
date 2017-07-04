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
            $table->string('birth_place')->nullable();
            $table->string('residence')->nullable();
            $table->string('hand_type')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->integer('singles_ranking')->nullable();
            $table->integer('doubles_ranking')->nullable();
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
