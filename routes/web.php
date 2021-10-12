<?php

use Illuminate\Support\Facades\Route;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');
