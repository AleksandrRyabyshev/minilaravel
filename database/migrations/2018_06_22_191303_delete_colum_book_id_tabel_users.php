<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteColumBookIdTabelUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->dropForeign(['book_id']);
            $table->dropColumn('book_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onUpdate('cascade');
            $table->integer('book_id')->unsigned()->nullabel(); // unsigned() - дает возможность созд внешний ключ
        });
    }
}
