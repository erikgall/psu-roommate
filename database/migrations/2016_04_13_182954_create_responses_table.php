<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('responses', function (Blueprint $table) {

      $table->increments('id');
      $table->integer('user_id');
      $table->integer('answer_id');
      $table->timestamps();

      $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('cascade');

      $table->foreign('answer_id')
            ->references('id')
            ->on('answers')
            ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('responses');
  }
}
