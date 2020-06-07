<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   
    public function index()
    {
        $books = Book::all();
        return json_encode([
            'status' => 1,
            'books'=> $books
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        
        Book::create($request->all());
        return json_encode([
            'status' => 1,
            'message' => 'Se creo correctamente el Libro'
        ]);
    }

    public function show(Book $book)
    {
        //
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(Request $request)
    {
        $book = Book::find($request->_id);
        $book->update($request->all());
        return json_encode([
            'status' => 1,
            'message' => 'Se modifico correctamente el Libro'
        ]);
    }

    public function destroy(Request $request)
    {
        Book::destroy($request->_id);
        
        return json_encode([
            'status' => 1,
            'message' => 'Se elimino correctamente el Libro'
        ]);
    }
}
