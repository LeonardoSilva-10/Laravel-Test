<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/create', 'ContactController@create');
Route::post('/contacts', 'ContactController@store');
Route::get('/contacts/{contact}', 'ContactController@show');
Route::get('/contacts/{contact}/edit', 'ContactController@edit');
Route::put('/contacts/{contact}', 'ContactController@update');
Route::delete('/contacts/{contact}', 'ContactController@destroy');
