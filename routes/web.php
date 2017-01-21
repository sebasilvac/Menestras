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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::resource('/tienda', 'TiendaController');
Route::resource('/producto', 'ProductoController');
Route::resource('/categoria', 'CategoriaController');
Route::resource('/bodega', 'BodegaController');

Route::get('name', function () {
    return 'Hello World';
});

Route::post('/tienda',[
    'as' => 'tienda.create',
    'uses' => 'TiendaController@create'
]);
