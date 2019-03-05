<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('birthday')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('date');
            $table->string('amount');
            $table->string('optional')->nullable();
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
        Schema::dropIfExists('investments');
    }
}
