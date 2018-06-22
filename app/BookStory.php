<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookStory extends Model
{
    protected $fillable = [
        'book_id',
        'story_id',
    ];
}
