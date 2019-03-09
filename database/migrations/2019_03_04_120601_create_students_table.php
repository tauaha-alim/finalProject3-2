<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('batch_id');
            $table->unsignedInteger('course_id');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('email');
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('religion');
            $table->string('institute');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->BigInteger('national_id');
            $table->string('image')->default('default.png');
            $table->string('mobile');
            $table->string('guardians_phone');
            $table->integer('amount');

            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
