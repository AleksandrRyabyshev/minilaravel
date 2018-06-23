<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class BookController extends Controller
{
    public function getListBooks() // название метода после @
    {
        $user = User::where('id', 1)->first(); // where
        return view('welcome2', [
            'list_books' => Book::all(),
            'user' => $user,
        ]); //
    }
}
