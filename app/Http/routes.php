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

// Los tipos de rutas que podemos tener: GET, POST, DELETE, PUT, RESOURSE

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('article', function(){
	echo "Esta es la vista de article";
});
*/

/*
// Con esta ruta podemos pedir parametros
Route::get('article/{nombre}', function($nombre){
	echo "El nombre que has colocado es: ".$nombre;
});

//Con este funcion decimos que no es obligatorio un nombre y le asignamos uno por defecto
Route::get('article/{nombre?}', function($nombre = "El parce"){
	echo "El nombre que has colocado es: ".$nombre;
});
*/

//Vamos a agregar un grupo de rutas con el cual le asignamos un nombre como prefijo

Route::group(['prefix' => 'articles'], function(){
	Route::get('view/{id}', [
			//Esto es para indicar que controlador va a usar colocamos el @ para indicar que metedo o funcion vamos a utilizar
			'uses' => 'TestController@view',
			// Le agregamos un nombre a la rutas con 'as'
			'as' => 'aticlesView'
		]);
});