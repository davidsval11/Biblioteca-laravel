<?php

namespace App\Http\Controllers;

use App\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{

    public function index()
    {
        $readers = Reader::all();
        return json_encode([
            'status' => 1,
            'readers'=> $readers
        ]);
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        Reader::create($request->all());
        return json_encode([
            'status' => 1,
            'message' => 'Se creo correctamente el Lector'
        ]);
    }


    public function show(Reader $reader)
    {
        //
    }

    public function edit(Reader $reader)
    {
        //
    }

    
    public function update(Request $request)
    {
        $reader = Reader::find($request->_id);
        $reader->update($request->all());
        return json_encode([
            'status' => 1,
            'message' => 'Se modifico correctamente el Lector'
        ]);
    }


    public function destroy(Request $request)
    {
        Reader::destroy($request->_id);
        
        return json_encode([
            'status' => 1,
            'message' => 'Se elimino correctamente el Lector'
        ]);
    }
}
