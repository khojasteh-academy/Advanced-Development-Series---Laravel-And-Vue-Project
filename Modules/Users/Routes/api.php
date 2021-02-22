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

Route::group([

    'middleware'    =>  'adminAuth',
    'prefix'    =>  'panel'

], function () {

    Route::apiResource('/users', 'UsersController');
    Route::post('/users/changePassword', 'UsersController@changePassword');
    Route::post('/users/changeUserStatus', 'UsersController@changeUserStatus');

});
