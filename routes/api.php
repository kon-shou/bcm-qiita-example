<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'book'], function ($route) {
    $route->get('/', 'BookController@list');
    $route->post('/create', 'BookController@create');
    $route->delete('/delete/{id}', 'BookController@delete');
});
