<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::get('/{key}/{value}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
