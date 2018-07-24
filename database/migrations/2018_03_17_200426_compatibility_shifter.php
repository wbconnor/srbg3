<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompatibilityShifter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibility_shifter', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('compatibility_id')->unsigned();
            $table->foreign('compatibility_id')->references('id')->on('compatibilities');

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
        Schema::drop('compatibility_shifter');
    }
}
