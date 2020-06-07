<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Loan extends MongoModel
{
    protected $collection = 'loans';

    protected $fillable = ['isbn_book', 'title_book', '_id_book', 'id_reader', '_id_reader', 'name_reader', 'date_loan', 'status', 'date_return'];

    protected $primaryKey = '_id';
}
