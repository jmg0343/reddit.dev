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

// Route::get('/', function () {
//     return view('welcome');
// });
// // below, will only work with defined $name
// Route::get('/sayhello/{name}', function ($name) {
// 	return 'Hello ' . $name;
// });
// // below, will work with no $name. Defaulted to 'Lassen'
// Route::get('/sayhello/{name?}', function ($name = 'Lassen') {
// 	return 'Hello ' . $name;
// });
// // below, will redirect anyone named "Chris" to home page
// Route::get('/sayhello/{name}', function ($name) {
// 	if ($name == "Chris") {
// 		return redirect('/');
// 	}
// 	return 'Hello ' . $name;
// });

Route::get('/uppercase/{word}', function ($word) {
	return strtoupper($word);
});

Route::get('/increment/{number}', function($number) {
	return ($number + 1);
});

Route::get('/add/{a?}/{b?}', function($a = 2, $b = 2) {
	return ($a + $b);
});