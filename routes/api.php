<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'customer'], function () {
    Route::post('/login', 'UsersAPIController@login');
    Route::group(['middleware' => ['auth:api', 'role:user']], function () {
        Route::get('transactions', 'UsersAPIController@getTransactions');
    });
});
