<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevpubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devpub', function (Blueprint $table) {
            $table->increments('id');
            $table->string('devpubname')->index();
            $table->string('slug')->unique();
            $table->string('devpuburl');
            $table->enum('devpubtype', array('unknown', 'dev', 'pub', 'both'))->default('unknown')->index();
            $table->boolean('isgreatdevpub');
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
        Schema::drop('devpub');
    }
}
