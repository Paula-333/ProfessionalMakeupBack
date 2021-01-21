<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group([
    'middleware' => 'cors',
    'prefix' => 'auth'
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signUp');
    Route::apiResource('appointment', 'App\Http\Controllers\AppointmentController');

    Route::group([
        'middleware' => ['auth:api', 'cors'] 
    ], function () {
        Route::get('logout', 'App\Http\Controllers\AuthController@logout');
        
    });
});

Route::apiResource('appointment', 'App\Http\Controllers\AppointmentController');

