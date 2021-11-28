<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;
use App\Http\Middleware\CheckSigninAjax;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/', 'ProductsController@home');

Route::get('/productDescription/{id}', 'ProductsController@productDescription');

/*users*/
Route::get('/users/signin', 'UsersController@signIn');

Route::post('/users/signin/check', 'UsersController@signInCheck');

Route::get('/users/logout', 'UsersController@logOut');

Route::get('/users/signup', 'UsersController@signUp');

Route::post('/users/signup/check', 'UsersController@signUpCheck');

Route::get('/users/personalArea', 'UsersController@personalArea')->middleware(CheckSignin::class);

Route::get('/users/personalArea/check', 'UsersController@personalAreaCheck')->middleware(CheckSignin::class);

/*cart*/
Route::get('/cart/view', 'CartController@viewAllItemsForUser')->middleware(CheckSignin::class);

Route::post('/cart/add/{productId}', 'CartController@addNewItemToUser')->middleware(CheckSigninAjax::class);

Route::post('/cart/delete/{id}', 'CartController@deleteItemById')->middleware(ChecksigninAjax::class);

Route::post('/cart/getCountItemsForUser', 'CartController@getCountItemsForUser')->middleware(ChecksigninAjax::class);

/*purchases*/
Route::get('/purchases/make', 'PurchasesController@makePurchase')->middleware(CheckSignin::class);
