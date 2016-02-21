<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameDevpub extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_devpub', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned()->index();
            $table->integer('platform_id')->unsigned()->index();
            $table->integer('developer_id')->unsigned()->index();
            $table->integer('publisher_id')->unsigned()->index();




            $table->string('publisher')->index();




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
        Schema::drop('game_devpub');
    }
}
