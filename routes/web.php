<?php

Route::get('/', function() {
	return 'hola';
});

Route::get('/usuarios', 'pruebaController@verusuario');

Route::get('/usuario/{id}', 'pruebaController@detalleusuario')->where('id', '[0-9]+');

Route::get('/usuario/nuevo', function() {
	return 'crear nuevo usuario';
});

Route::get('broma/{nombre}/{apodo?}', function($nombre, $apodo = null) {

	$nombre = ucfirst($nombre);

	if ($apodo) {
		return "hola {$nombre}, tu apodo es {$apodo}";
	}else{
		return "hola {$nombre}, no tienes apodo eres un nood";
	}
});

Route::get('texto/{comentario?}', function($comentario = null) {

	if ($comentario) {
		return "el comentario fue el siguiente {$comentario}";
	}else{
		return "no se escribio ningun comentario";
	}
});