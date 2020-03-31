<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','ContactController@index');
Route::get('add/','ContactController@addpage');
Route::post('adduser/','ContactController@adduser');
Route::get('edit/{id}','ContactController@edit');
Route::post('update/{id}','ContactController@update');
Route::get('delete/{id}','ContactController@delete');
