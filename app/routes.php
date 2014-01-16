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

Route::get('/', ['https' => true, 'as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('/', ['https' => true, 'as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('/{url}/{key}', ['https' => true, 'as' => 'messages.show', 'uses' => 'MessagesController@show']);
