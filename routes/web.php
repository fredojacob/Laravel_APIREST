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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createpdf', function(){

  $pdf = PDF::loadView('presentacion ');

  //  return $pdf->stream();
  return $pdf->download('invoice.pdf');


    return view('presentacion');
});

Route::resource('/task', 'TaskController');
Route::resource('/helpdesk', 'HelpdeskController');
Route::resource('/cliente', 'ClienteController');
