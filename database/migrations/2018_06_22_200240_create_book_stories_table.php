<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('story_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('book_stories', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onUpdate('cascade');
            $table->foreign('story_id')->references('id')->on('stories')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_stories', function (Blueprint $table){
            $table->dropForeign(['book_id']);
            $table->dropForeign(['story_id']);
        });
        Schema::dropIfExists('book_stories');
    }
}
