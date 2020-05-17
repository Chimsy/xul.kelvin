<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();

            $table->string('program_code');
            $table->foreign('program_code')->references('program_code')->on('programs')->onDelete('cascade');

            $table->string('course_id');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');

            $table->tinyInteger('year')->nullable();
            $table->tinyInteger('semester')->nullable();
            $table->string('exam_date')->nullable();
            $table->string('exam_time')->nullable();
            $table->string('exam_venue')->nullable();
            $table->string('exam_duration')->nullable();
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
        Schema::dropIfExists('timetables');
    }
}
