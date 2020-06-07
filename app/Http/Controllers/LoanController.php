<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Book;
use Illuminate\Http\Request;

class LoanController extends Controller
{
 
    public function index()
    {
        $loans = Loan::all();
        return json_encode([
            'status' => 1,
            'loans'=> $loans
        ]);
    }

    
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        Loan::create($request->all());
        $book = Book::find($request->_id_book);
        $book->update(['status' => 'Loan']);
        return json_encode([
            'status' => 1,
            'message' => 'Se creo correctamente el Prestamo'
        ]);
    }

   
    public function show(Loan $loan)
    {
        //
    }

    public function edit(Loan $loan)
    {
        //
    }

   
    public function update(Request $request)
    {
        $loan = Loan::find($request->_id);
        $loan->update($request->all());
        return json_encode([
            'status' => 1,
            'message' => 'Se modifico correctamente el Prestamo'
        ]);
    }

    
    public function returnBook(Request $request)
    {
        $loan = Loan::find($request->_id);
        $loan->update($request->all());
        $book = Book::find($request->_id_book);
        $book->update(['status' => 'Active']);
        return json_encode([
            'status' => 1,
            'message' => 'El libro fue devuelto'
        ]);
    }

    public function destroy(Request $request)
    {
        Loan::destroy($request->_id);
        $book = Book::find($request->_id_book);
        $book->update(['status' => 'Active']);
        return json_encode([
            'status' => 1,
            'message' => 'Se elimino correctamente el Prestamo'
        ]);
    }
}
