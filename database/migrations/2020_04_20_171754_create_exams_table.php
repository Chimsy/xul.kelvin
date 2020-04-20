<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('reg_num');
            $table->foreign('reg_num')->references('reg_num')->on('users')->onDelete('cascade');

            $table->string('program_code');
            $table->foreign('program_code')->references('program_code')->on('programs')->onDelete('cascade');

            $table->string('cource_id');
            $table->foreign('cource_id')->references('cource_id')->on('courses')->onDelete('cascade');

            $table->string('course_work_mark')->nullable();
            $table->string('course_exam_mark')->nullable();
            $table->string('course_exam_grade')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
