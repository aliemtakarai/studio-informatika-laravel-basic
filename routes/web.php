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

Route::get('/', 'PeopleController@index')->name('people');
Route::get('/create', 'PeopleController@create')->name('people.create');
Route::post('/create', 'PeopleController@store')->name('people.store');
Route::get('/edit/{id}', 'PeopleController@edit')->name('people.edit');
Route::post('/edit/{id}', 'PeopleController@update')->name('people.update');
Route::get('/delete/{id}', 'PeopleController@destroy')->name('people.delete');
