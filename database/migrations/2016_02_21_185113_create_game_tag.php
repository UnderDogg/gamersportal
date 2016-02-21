<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTag extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('game_tag', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('game_id')->unsigned()->index();
      $table->integer('tag_id')->unsigned()->index();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('game_tag');
  }
}
