<?php




Route::get ('/','HomeController@index');


Route::group(['middleware'=> 'auth'],function(){

	Route::resource('subtask','SubtaskController');
	Route::resource('task','TaskController');
	Route::resource('projects','ProjectController');
});



Route::Controllers([
	'auth'=> 'Auth\authController',
	'password'=> 'Auth\PasswordController'


]);