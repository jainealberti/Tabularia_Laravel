<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameNumberofplayerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_numberofplayer', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id')->index();
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
            $table->unsignedBigInteger('numberofplayer_id')->index();
            $table->foreign('numberofplayer_id')->references('id')->on('numberofplayers')->onDelete('cascade');
            $table->primary(['game_id', 'numberofplayer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_numberofplayer');
    }
}
