<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$field = Book::find(1); // если находит в таблице Book ид 1 возвращает объект поляс ид1, если нет Null
    	if (is_null($field)) {
    		$book = new Book(); // Экземпляр класса
       		$book->name = "Garry Potter";
       		$book->save();
    	}

    	$field = Book::find(2); // если находит в таблице Book ид 1 возвращает объект поляс ид1, если нет Null
    	if (is_null($field)) {
    		$book = new Book(); // Экземпляр класса
       		$book->name = "Mein kampf";
       		$book->save();
    	}

    	$field = User::find(1);
    	if (is_null($field)) {
    		$user = new User();
    		$user->book_id = 1;
    		$user->name = "Papka";
    		$user->password = bcrypt(123456); // bcrypt() - функция для хеширования пароля
    		$user->save();
    	}
    }
}
