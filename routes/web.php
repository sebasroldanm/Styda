<?php

Route::get('/', function(){
	return 'Home';
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
	->where('id', '[0-9]+');	//Obliga a la URL ser un numero

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController@index');