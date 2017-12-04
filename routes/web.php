<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



#
Route::get('/', 'HomeController@index');
Auth::routes();

#Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'], function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses'=>'UsersController@destroy',
		'as'=>'users.destroy'
	]);

	Route::resource('instituciones','InstitucionesController');
	Route::get('instituciones/{id}/destroy',[
		'uses'=>'InstitucionesController@destroy',
		'as'=>'instituciones.destroy'
	]);

	Route::resource('llamados','LlamadosController');
	Route::get('llamados/{id}/destroy',[
		'uses'=>'LlamadosController@destroy',
		'as'=>'llamados.destroy'
	]);
});

Route::group(['prefix'=>'escuela'], function(){

	Route::resource('llamados','LlamadosController');
	Route::get('llamados/{id}/destroy',[
		'uses'=>'LlamadosController@destroy',
		'as'=>'llamados.destroy'
	]);
	Route::get('llamados/misllamados',[
		'uses'=>'LlamadosController@indexEscuela',
		'as'=>'llamados.indexEscuela'
	]);

});
