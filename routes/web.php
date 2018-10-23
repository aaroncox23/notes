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

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\DB;

Route::get('/', 'NoteController@index');
Route::get('/notes/{note}', 'NoteController@show');
Route::get('/create', 'NoteController@create');
Route::post('/notes', 'NoteController@store');
Route::get('/notes/{note}/edit', 'NoteController@edit');
Route::post('/notes/{note}', 'NoteController@update');
Route::post('/notes/{note}/delete', 'NoteController@destroy');
