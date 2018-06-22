<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\User;
use App\UserBook;
use App\Story;
use App\BookStory;


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
            $book->id = 1;
       		$book->name = "Garry Potter";
       		$book->save();
    	}

    	$field = Book::find(2); // если находит в таблице Book ид 1 возвращает объект поляс ид1, если нет Null
    	if (is_null($field)) {
    		$book = new Book(); // Экземпляр класса
       		$book->id = 2;
       		$book->name = "Mein kampf";
       		$book->save();
    	}

    	$field = User::find(1);
    	if (is_null($field)) {
    		$user = new User();
    		$user->id = 1;
    		$user->name = "Papka";
    		$user->password = bcrypt(123456); // bcrypt() - функция для хеширования пароля
    		$user->save();
    	}

    	$field = UserBook::find(1);
        if (is_null($field)) {
            $user_book = new UserBook();
            $user_book->id = 1;
            $user_book->user_id = 1;
            $user_book->book_id = 1;
            $user_book->save();
        }

        $field = UserBook::find(2);
        if (is_null($field)) {
            $user_book = new UserBook();
            $user_book->id = 2;
            $user_book->user_id = 1;
            $user_book->book_id = 2;
            $user_book->save();
        }

        $field = Story::find(1);
        if (is_null($field)) {
            $story = new Story();
            $story->id = 1;
            $story->label = 'Часть 1';
            $story->text = 'Текст для части 1';
            $story->save();
        }

        $field = Story::find(2);
        if (is_null($field)) {
            $story = new Story();
            $story->id = 2;
            $story->label = 'Часть 2';
            $story->text = 'Текст для части 2';
            $story->save();
        }

        $field = BookStory::find(1);
        if (is_null($field)) {
            $book_story = new BookStory();
            $book_story->id = 1;
            $book_story->book_id = 1;
            $book_story->story_id = 1;
            $book_story->save();
        }

        $field = BookStory::find(2);
        if (is_null($field)) {
            $book_story = new BookStory();
            $book_story->id = 2;
            $book_story->book_id = 2;
            $book_story->story_id = 2;
            $book_story->save();
        }

    }
}
