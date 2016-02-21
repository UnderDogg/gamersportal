<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
});

Route::get('games', 'GamesController@index');
Route::get('game/{slug}', 'GamesController@showGame');


// Admin area
Route::get('admin', function () {
  return redirect('/admin/games');
});



Route::group(['prefix' => 'admin'], function () {
  Route::resource('games', 'Admin\GamesController');
  Route::resource('tags', 'Admin\TagsController');
  Route::resource('categories', 'Admin\CategoriesController');
  Route::resource('devpub', 'Admin\DevpubController');
  Route::resource('platforms', 'Admin\PlatformsController');
  Route::resource('gamenews', 'Admin\GamenewsController');
  Route::resource('gamelinks', 'Admin\GamelinksController');
  
  
  
});

// Logging in and out
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
RoutE::get('/auth/logout', 'Auth\AuthController@getLogout');



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});
