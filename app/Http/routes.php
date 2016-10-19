<?php

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', ['middleware'=>'auth'], function () {
// 	return redirect()->action()
// })





// ****************** SEARCH ROUTE ****************************************************
Route::get('posts/search', 'PostsController@search');

// ****************** HOME ************************************************************

Route::get('/', 'PostsController@index');

// ****************** POSTS CONTROLLER ************************************************

Route::resource('posts', 'PostsController');

// ****************** USERS CONTROLLER ************************************************

Route::resource('user', 'UsersController', ['except' => ['create', 'store']]);

// ****************** AUTH ************************************************************


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// ****************** VOTES *************************************************************

Route::post('posts/show', 'PostsController@vote');
// Route::post('posts/show', 'PostsController@downVote');