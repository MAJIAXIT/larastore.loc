<?php

use Illuminate\Support\Facades\Route;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/', 'ProductsController@home');

Route::post('/productDescription', 'ProductsController@productDescription');

Route::get('/users/signin', 'UsersController@signIn');

Route::post('/users/signin/check', 'UsersController@signInCheck');
