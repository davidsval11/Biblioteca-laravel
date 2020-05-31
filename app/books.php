<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class books extends MongoModel
{
    protected $collection = 'books';

    protected $fillable = ['id', 'title'];

    protected $primaryKey = 'id';
}
