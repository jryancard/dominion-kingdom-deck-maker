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

Route::get('admin/logout',  array('as' => 'admin.logout',      'uses' => 'AuthController@getLogout'));
Route::get('admin/login',   array('as' => 'admin.login',       'uses' => 'AuthController@getLogin'));
Route::post('admin/login',  array('as' => 'admin.login.post',  'uses' => 'AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'PagesController@index');
    Route::resource('cards', 'CardsController');
    Route::resource('decks', 'DecksController');
});

Route::get('/', function()
{
	return View::make('hello');
});