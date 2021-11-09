<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;
use App\Http\Middleware\ChecksigninAjax;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/', 'ProductsController@home');

Route::get('/productDescription', 'ProductsController@productDescription');

Route::get('/users/signin', 'UsersController@signIn');

Route::post('/users/signin/check', 'UsersController@signInCheck');

Route::get('/users/logout', 'UsersController@logOut');

Route::get('/users/signup', 'UsersController@signUp');

Route::post('/users/signup/check', 'UsersController@signUpCheck');

Route::get('/cart/view/{id}', 'CartController@viewAllItemsByUserId')->middleware(CheckSignin::class);

Route::post('/cart/add/{productId}', 'CartController@addNewItemToUser')->middleware(ChecksigninAjax::class);

