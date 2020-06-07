<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Reader extends MongoModel
{
    protected $collection = 'readers';

    protected $fillable = ['id', 'name', 'last_name', 'age', 'address', 'email', 'phone', 'cell'];

    protected $primaryKey = '_id';
}
