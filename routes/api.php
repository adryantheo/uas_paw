<?php

use Illuminate\Http\Request;

Route::post('login', 'userController@login');
Route::post('register', 'userController@register');



Route::post('/testimoni/create', 'TestimoniController@store');
Route::get('/testimoni', 'TestimoniController@index');