<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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




// Route::get('/teste', function () {
//     return view('index');
// });

// //Auth::routes(['register' => false]);

// Auth::routes();
// Route::get('/', 'HomeController@index');//->middleware('auth');


Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/produtos', 'ControladorProduto@index');
Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');



Route::get('/clientes', 'ClienteController@index')->middleware('auth');
Route::get('/clientes/novo', 'ClienteController@create')->middleware('auth');
Route::get('/clientes/delete/{id}', 'ClienteController@destroy')->middleware('auth');
Route::get('/clientes/edit/{id}', 'ClienteController@edit')->middleware('auth');
Route::post('/clientes', 'ClienteController@store')->middleware('auth');
Route::post('/clientes/{id}', 'ClienteController@update')->middleware('auth');
