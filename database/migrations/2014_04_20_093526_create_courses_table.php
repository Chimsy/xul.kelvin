<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_id')->unique();
            $table->string('course_name')->nullable();
            $table->string('course_description');
            $table->string('year_of_study')->nullable();
            $table->string('semester')->nullable();
            $table->string('course_exam_date')->nullable();
            $table->string('program_code');
            $table->foreign('program_code')->references('program_code')->on('programs')->onDelete('cascade');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('courses');
    }
}
