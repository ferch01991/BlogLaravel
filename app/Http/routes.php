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
*/
//
Route::get('article/{nombre?}', function($nombre = "Elver"){
	echo "El nombre que has colocado es: ".$nombre;
});