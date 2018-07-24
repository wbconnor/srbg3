<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompatibilityWheel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compatibility_wheel', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('compatibility_id')->unsigned();
            $table->foreign('compatibility_id')->references('id')->on('compatibilities');

            $table->integer('wheel_id')->unsigned();
            $table->foreign('wheel_id')->references('id')->on('wheels');

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
        Schema::drop('compatibility_wheel');
    }
}
