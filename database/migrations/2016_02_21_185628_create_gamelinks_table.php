<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamelinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamelinks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('gamelink_gameid');
            $table->string('gamelink_url');
            $table->string('gamelink_title')->index();

            $table->string('httpcode', 3);
            $table->string('httpdefinition', 25);

            $table->enum('gamelink_type', array('linktype','GamePage','GamePageOK','CheatPageOK','ReviewPageOK','OfficialPageOK','DEADpage'))->default('linktype')->index();

            $table->date('checked_at');
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
        Schema::drop('gamelinks');
    }
}
