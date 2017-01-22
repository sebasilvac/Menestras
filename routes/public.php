<?php

    Auth::routes();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('posts/{post}', [
        'as' => 'posts.show',
        'uses' => 'PostController@show'
    ])->where('post', '[0-9]+');
