<?php

Route::get('/', function() {
	return 'hola';
});

Route::get('/usuario', function() {
	return 'usuarios';
});

Route::get('/usuario/{id}', function($id) {
	return "usuario con id {$id}";
})->where('id', '[0-9]+');

Route::get('/usuario/nuevo', function() {
	return 'crear nuevo usuario';
});

Route::get('broma/{nombre}/{apodo?}', function($nombre, $apodo = null) {

	if ($apodo) {
		return "hola {$nombre}, tu apodo es {$apodo}";
	}else{
		return "hola {$nombre}, no tienes apodo eres un nood";
	}
});