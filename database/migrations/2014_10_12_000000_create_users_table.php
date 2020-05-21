<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('semester_reg')->default(0)->nullable();
            $table->boolean('exam_reg')->default(0)->nullable();
            $table->string('reg_num')->unique()->nullable();
            $table->tinyInteger('year')->nullable();
            $table->tinyInteger('semester')->nullable();
            $table->string('program')->nullable();
            $table->foreign('program')->references('program_code')->on('programs')->onDelete('cascade');
            $table->integer('ecocash')->nullable();
            $table->integer('zipit')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
