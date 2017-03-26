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
    return redirect('notebooks');
});

Route::get('notebooks/index', function () {
    return redirect('notebooks');
});

Route::group(['prefix' => 'notebooks'], function () {
	Route::get('/', 'NoteController@index');
	Route::get('create', 'NoteController@create');
	Route::post('/', 'NoteController@store');
	Route::get('{id}', 'NoteController@show');

	Route::get('{id}/edit', 'NoteController@edit');
	Route::put('{id}/edit', 'NoteController@update');
	Route::get('{id}/delete', 'NoteController@destroy');
});

