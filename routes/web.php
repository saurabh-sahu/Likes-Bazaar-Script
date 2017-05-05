<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




// Route::get('/', function () {
// 	$people = ['Saurabh','Abhisek','Podar'];
//     return view('welcome', compact("people"));
// });
// Route::get('about', function () {
//     return view('about');
// });


Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesControler@store');

Route::get('notes/{note}/edit', 'NotesControler@edit');

Route::patch('notes/{note}', 'NotesControler@update');

Route::get('/getRes', function(){
	return view('app');
});

Route::get('/phpunit', 'CardsController@phpunit');