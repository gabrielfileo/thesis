<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_result', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exam');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('course');
            $table->integer('topics_id')->unsigned();
            $table->foreign('topics_id')->references('id')->on('topics');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('file_path');
            $table->string('comment'); //trainee comment
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
         Schema::drop('result');
    }
}
