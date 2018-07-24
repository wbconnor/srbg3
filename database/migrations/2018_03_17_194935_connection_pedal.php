<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectionPedal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection_pedal', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('connection_id')->unsigned();
            $table->foreign('connection_id')->references('id')->on('connections');

            $table->integer('pedal_id')->unsigned();
            $table->foreign('pedal_id')->references('id')->on('pedals');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('connection_pedal');
    }
}
