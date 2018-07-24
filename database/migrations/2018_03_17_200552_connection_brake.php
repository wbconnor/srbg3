<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectionBrake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection_brake', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('connection_id')->unsigned();
            $table->foreign('connection_id')->references('id')->on('connections');

            $table->integer('brake_id')->unsigned();
            $table->foreign('brake_id')->references('id')->on('brakes');

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
        Schema::drop('connection_brake');
    }
}
