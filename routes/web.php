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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Todos routes
Route::get('/home','Todos\TodosController@index')->name('home');
Route::get('create','Todos\TodosController@create')->name('todo-create');
Route::post('store','Todos\TodosController@store')->name('todo-store');
Route::get('todo-edit/{id}','Todos\TodosController@edit')->name('todo-edit');
Route::post('todo-update/{id}','Todos\TodosController@update')->name('todo-update');
Route::get('todo-delete/{id}','Todos\TodosController@destroy')->name('todo-delete');


