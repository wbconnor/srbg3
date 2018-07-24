<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wheels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->text('description')->nullable();
            $table->decimal('diameter', 4, 2)->nullable();
            $table->integer('rotation')->nullable();
            $table->decimal('torque', 4, 2)->nullable();
            $table->boolean('brushless_motor');
            $table->integer('resolution')->nullable();

            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');

            $table->integer('drive_id')->unsigned()->nullable();
            $table->foreign('drive_id')->references('id')->on('drives');

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
        Schema::drop('wheels');
    }
}
