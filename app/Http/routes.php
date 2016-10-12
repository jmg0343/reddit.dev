<?php

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

// *********************** UPPERCASE ************************************************
// Route::get('/uppercase/{word}', function ($word) {
// 	$data['word'] = $word;
// 	$data['upperCaseString'] = strtoupper($word);
// 	return view('uppercase')->with($data);
// });
get('/uppercase/{word}', 'HomeController@uppercase');

// *********************** INCREMENT ************************************************
// Route::get('/increment/{number}', function($number) {
// 	$data['number'] = $number;
// 	$data['incremented'] = $number + 1;
// 	return view('increment')->with($data);
// });
get('/increment/{number}', 'HomeController@increment');

// *********************** ROLL-DICE ************************************************
// Route::get('/rolldice/{guess?}', function($guess = 1) {
// 	$data['dice_roll'] = mt_rand(1, 6);
// 	$data['guess'] = $guess;
// 	$data['correct'] = $data["dice_roll"] == $data["guess"];
// 	return view('roll-dice')->with($data);
// });

get('/rolldice/{guess}', 'HomeController@rollDice');

// ***********************  ************************************************

Route::resource('posts', 'PostsController');