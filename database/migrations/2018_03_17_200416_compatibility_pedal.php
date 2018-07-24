<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompatibilityPedal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibility_pedal', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('compatibility_id')->unsigned();
            $table->foreign('compatibility_id')->references('id')->on('compatibilities');

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
        Schema::drop('compatibility_pedal');
    }
}
