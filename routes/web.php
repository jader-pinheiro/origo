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

Auth::routes();
//Auth::routes(['register' => false]);
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/clientes', 'ClienteController@index')->middleware('auth');
Route::get('/clientes/add', 'ClienteController@create')->middleware('auth');
Route::get('/clientes/delete/{id}', 'ClienteController@destroy')->middleware('auth');
Route::get('/clientes/edit/{id}', 'ClienteController@edit')->middleware('auth');
Route::get('/get_planos/{id}', 'ClienteController@getPlanos')->middleware('auth');

Route::post('/clientes', 'ClienteController@store')->middleware('auth');
Route::post('/clientes/{id}', 'ClienteController@update')->middleware('auth');

Route::get('/planos', 'PlanoController@index')->middleware('auth');
Route::get('/planos/delete/{id}', 'PlanoCliController@destroy')->middleware('auth');


Route::get('/tester', 'ClienteController@tester');
