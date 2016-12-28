<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineeHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('history', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->integer('topics_id')->unsigned();
          $table->foreign('topics_id')->references('id')->on('topics');
          $table->integer('course_id')->unsigned();
          $table->foreign('course_id')->references('id')->on('course');
          $table->integer('exam_id')->unsigned();
          $table->foreign('exam_id')->references('id')->on('exam');
          $table->integer('status');
          $table->integer('score');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
