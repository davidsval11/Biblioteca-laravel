<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
 
    public function index()
    {
        $readers = Loan::all();
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
        //
    }

   
    public function show(Loan $loan)
    {
        //
    }

    public function edit(Loan $loan)
    {
        //
    }

   
    public function update(Request $request, Loan $loan)
    {
        //
    }

   
    public function destroy(Loan $loan)
    {
        //
    }
}
