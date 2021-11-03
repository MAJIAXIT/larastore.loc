<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/', 'ProductsController@home');

Route::get('/productDescription', 'ProductsController@productDescription');

Route::get('/users/signin', 'UsersController@signIn');

Route::post('/users/signin/check', 'UsersController@signInCheck');

Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);

Route::get('/users/logout', 'UsersController@logOut');

Route::get('/users/signup', 'UsersController@signUp');

<<<<<<< Updated upstream
Route::get('/users/signup/check', 'UsersController@signUpCheck');

=======
<<<<<<< HEAD
>>>>>>> Stashed changes
Route::post('/users/signup/check', 'UsersController@signUpCheck');

Route::get('/addtobasket', 'ProductsController@addToBasket');
=======
Route::get('/users/signup/check', 'UsersController@signUpCheck');

Route::post('/users/signup/check', 'UsersController@signUpCheck');
>>>>>>> fa6fae171be01b261d8977032710bad5f4775887
