<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class BooksController extends Controller
{
    public function store()
    {
        books::create(['id' => 1, 'title' => 'The Fault in Our Stars']);
    }
}
