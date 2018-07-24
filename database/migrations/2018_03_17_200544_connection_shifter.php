<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectionShifter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection_shifter', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('connection_id')->unsigned();
            $table->foreign('connection_id')->references('id')->on('connections');

            $table->integer('shifter_id')->unsigned();
            $table->foreign('shifter_id')->references('id')->on('shifters');

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
        Schema::drop('connection_shifter');
    }
}
