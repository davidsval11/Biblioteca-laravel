<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Book extends MongoModel
{
    protected $collection = 'books';

    protected $fillable = ['isbn', 'title', 'genre', 'author', 'editorial', 'year', 'status', 'copy', 'pages', 'obs'];

    protected $primaryKey = 'isbn';
}