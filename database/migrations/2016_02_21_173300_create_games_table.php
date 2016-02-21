<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('games', function (Blueprint $table) {
      $table->increments('id');

      $table->string('gamename', 85);
      $table->string('slug')->unique();

      $table->boolean('isinteresting');
      $table->boolean('linksfetched');

      $table->string('datestring', 85);

      $table->enum('ico', array('GameSpot','aaemuromania.ico','caesar.ico','coinop.ico','emuviews.ico','mame.dk','needtoresearch.ico','officialsite.ico','yahoogames.ico'))->default('needtoresearch.ico')->index();
      $table->mediumText('description');

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
    Schema::drop('games');
  }
}
