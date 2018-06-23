<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('comment_id')->unsigned();
            $table->integer('book_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('user_comments', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onUpfate('cascade');
            $table->foreign('comment_id')->references('id')->on('comments')->onUpdate('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_comments', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['comment_id']);
            $table->dropForeign(['book_id']);
        });

        Schema::dropIfExists('user_comments');
    }
}
