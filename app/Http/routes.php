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

Route::group(['prefix' => 'admin'], function(){
	//funcion resouse: estilo de api Rest full, toma los metodos de un controlador y los define como un estilo de rutas
	Route::resource('users','UsersController');
	
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);
	Route::resource('categories', 'CategoriesController');

	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
	]);
});

Route::get('admin/auth/login', [
	'uses'	=>  'Auth\AuthController@getLogin',
	'as'	=>  'admin.auth.login'
	]);

Route::post('admin/auth/login', [
	'uses'	=>  'Auth\AuthController@postLogin',
	'as'	=>  'admin.auth.login'
	]);

Route::get('admin/auth/logout', [
	'uses'	=>  'Auth\AuthController@getLogout',
	'as'	=>  'admin.auth.logout'
	]);
