<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        ## return view('welcome');
        return "Welcome to my Laravel Application";
    });
    Route::get('/books', 'BookController@getIndex');
    Route::get('/book/create', 'BookController@getCreate');
    Route::post('/book/create', 'BookController@postCreate');
    Route::get('/book/{id}', 'BookController@getShow');

    Route::get('/practice', function() {

        echo 'app.url: '.config('app.url');
        echo 'app.env: '.config('app.env');
        return '';
    });

});
