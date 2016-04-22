<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('dob');
            $table->integer('school_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->integer('academic_status_id')->unsigned();
            $table->string('stripe_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('school_id')
                  ->references('id')
                  ->on('schools');

            $table->foreign('gender_id')
                  ->references('id')
                  ->on('genders');

            $table->foreign('academic_status_id')
                  ->references('id')
                  ->on('academic_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('users');
    }
}
