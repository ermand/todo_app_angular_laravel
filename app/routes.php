<?php

Route::get('/', function()
{
	return View::make('todos/index');
});

Route::group(['prefix' => 'api'], function()
{
    Route::get('todos', ['as' => 'todos.index', 'uses' => 'TodosController@index']);
    Route::post('todos', ['as' => 'todos.store', 'uses' => 'TodosController@store']);
    Route::post('todos/{id}', ['as' => 'todos.update', 'uses' => 'TodosController@update']);
});
