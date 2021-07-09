<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/hexavara', 'App\Http\Controllers\HexavaraController@index');
Route::get('/hexavara/create', 'App\Http\Controllers\HexavaraController@create');
Route::get('/hexavara/{modeltagihan}', 'App\Http\Controllers\HexavaraController@show');
Route::post('/hexavara', 'App\Http\Controllers\HexavaraController@store');
Route::delete('/hexavara/{modeltagihan}', 'App\Http\Controllers\HexavaraController@destroy');
Route::get('/hexavara/{modeltagihan}/edit', 'App\Http\Controllers\HexavaraController@edit');
Route::patch('/hexavara/{modeltagihan}', 'App\Http\Controllers\HexavaraController@update');
