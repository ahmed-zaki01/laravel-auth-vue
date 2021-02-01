<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/secrets', 'SecretController@index')->name('secrets');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
