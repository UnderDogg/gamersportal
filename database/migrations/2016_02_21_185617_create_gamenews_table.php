<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamenewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamenews', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('gamenews_gameid')->index();

            $table->integer('gamenews_sourceid');
            $table->string('gamenews_sourceurl');

            $table->string('gamenews_title')->index();
            $table->string('gamenews_slug')->index();

            $table->mediumtext('gamenews_content');

            $table->enum('gamenews_type', array('game', 'general'))->default('game')->index();

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
        Schema::drop('gamenews');
    }
}
