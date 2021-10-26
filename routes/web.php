<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/', 'ProductsController@home');

Route::post('/productDescription', 'ProductsController@productDescription');

Route::get('/users/signin', 'UsersController@signIn');

Route::post('/users/signin/check', 'UsersController@signInCheck');

Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);

Route::get('/users/logout', 'UsersController@logOut');

Route::get('/users/signup', 'UsersController@signUp');

Route::post('/users/signup/check', 'UsersController@signUpCheck');
