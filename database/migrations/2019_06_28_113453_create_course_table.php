<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->string('description');
            $table->string('level');
            $table->double('cost');
            $table->integer('numOfHours');
            $table->unsignedBigInteger('lec_id');
            $table->string('coursePic');
            $table->timestamps();

            //$table->foreign('lec_id')->references('id')->on('lecturer')->onDelete('cascade');
            $table->foreign('lec_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
