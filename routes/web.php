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
Auth::routes();

Route::get('/', 'NormalController@index')-> name('index');
Route::get('/show/{id}', 'NormalController@show')-> name('emp-show');
Route::get('/destroy/{id}', 'LoggedController@destroy') ->name('emp-delete');
Route::get('/create', 'LoggedController@create') ->name('emp-create');
Route::post('/store', 'LoggedController@store') ->name('emp-store');




