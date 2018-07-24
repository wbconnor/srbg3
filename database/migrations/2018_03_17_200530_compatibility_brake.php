<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompatibilityBrake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibility_brake', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('compatibility_id')->unsigned();
            $table->foreign('compatibility_id')->references('id')->on('compatibilities');

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
        Schema::drop('compatibility_brake');
    }
}
