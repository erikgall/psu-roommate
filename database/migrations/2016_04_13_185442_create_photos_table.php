<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

    Schema::create('photos', function (Blueprint $table) {

      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->string('filename');
      $table->text('description')->nullable();
      $table->boolean('is_primary')->default(false);
      $table->timestamps();

      $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {

    Schema::drop('photos');
  }
}
