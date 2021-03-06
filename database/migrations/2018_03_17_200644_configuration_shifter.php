<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigurationShifter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration_shifter', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('configuration_id')->unsigned();
            $table->foreign('configuration_id')->references('id')->on('configurations');

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
        Schema::drop('configuration_shifter');
    }
}
