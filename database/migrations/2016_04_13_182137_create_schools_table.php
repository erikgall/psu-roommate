<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('schools', function (Blueprint $table) {

      $table->increments('id');
      $table->string('name');
      $table->string('city');
      $table->integer('state_id')->unsigned();
      $table->timestamps();

      $table->foreign('state_id')
            ->references('id')
            ->on('states');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('schools');
  }
}
