<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('score', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exam');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('course');
            $table->integer('topics_id')->unsigned();
            $table->foreign('topics_id')->references('id')->on('topics');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('score');
            $table->string('comment'); //comment from admin
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
       Schema::drop('score');
    }
}
