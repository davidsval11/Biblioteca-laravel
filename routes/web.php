<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', 'BookController@index');
Route::get('books/store', 'BookController@store');
Route::get('books/show', 'BookController@show');
Route::get('books/update', 'BookController@update');
Route::get('books/destroy', 'BookController@destroy');

Route::get('readers', 'ReaderController@index');
Route::get('readers/store', 'ReaderController@store');
Route::get('readers/show', 'ReaderController@show');
Route::get('readers/update', 'ReaderController@update');
Route::get('readers/destroy', 'ReaderController@destroy');

Route::get('loans', 'LoanController@index');
Route::get('loans/store', 'LoanController@store');
Route::get('loans/show', 'LoanController@show');
Route::get('loans/update', 'LoanController@update');
Route::get('loans/destroy', 'LoanController@destroy');