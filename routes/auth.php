<?php


//posts
Route::get('posts/create', [
    'uses'  => 'CreatePostController@create',
    'as'    => 'posts.create'
]);

Route::post('posts/create', [
    'uses' => 'CreatePostController@store',
    'as' => 'posts.store'
]);

// bodega
Route::get('bodega/create', [
    'uses'  => 'BodegaController@create',
    'as'    => 'bodega.create'
]);

Route::post('bodega/store', [
    'uses'  => 'BodegaController@store',
    'as'    => 'bodega.store'
]);

// categorias
Route::get('categoria/create', [
    'uses'  => 'CategoriaController@create',
    'as'    => 'categoria.create'
]);

Route::post('categoria/store', [
    'uses'  => 'CategoriaController@store',
    'as'    => 'categoria.store'
]);

// productos
Route::get('producto/create', [
    'uses'  => 'ProductoController@create',
    'as'    => 'producto.create'
]);

Route::post('producto/store', [
    'uses'  => 'ProductoController@store',
    'as'    => 'producto.store'
]);

// tiendas
Route::get('tienda/create', [
    'uses'  => 'TiendaController@create',
    'as'    => 'tienda.create'
]);

Route::post('tienda/store', [
    'uses'  => 'TiendaController@store',
    'as'    => 'tienda.store'
]);
