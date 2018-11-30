<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('users_create','Api\UserCreateController@store');
Route::get('moreApp','Api\ApplicationCreateController@getApp');
Route::post('purchaseFunctionality','Api\PurchaseApi@updateApp');

