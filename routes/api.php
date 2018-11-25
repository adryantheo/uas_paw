<?php

use Illuminate\Http\Request;

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('/jobs', 'JobsController@index');
Route::post('/upload-file', 'JobsController@uploadFile');
Route::get('/jobs/{job}', 'JobsController@show');

Route::group(['middleware' => 'auth:api'], function(){
        Route::get('/users','UserController@index');
        Route::get('users/{user}','UserController@show');
        Route::patch('users/{user}','UserController@update');
        Route::resource('/jobs', 'JobsController')->except(['index','show']);
    });