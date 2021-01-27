<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => 'cors',
    'prefix' => 'auth'
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signUp');
    Route::apiResource('appointment', 'App\Http\Controllers\AppointmentController');
    Route::get('user/{email}', 'App\Http\Controllers\AuthController@getUserByEmail');
    Route::get('profile/{id}', 'App\Http\Controllers\ProfileController@getProfile');
    Route::get('deleteAppointment/{id}', 'App\Http\Controllers\AppointmentController@deleteAppointment');

    Route::group([
        'middleware' => ['auth:api'] 
    ], function () {
        Route::get('logout', 'App\Http\Controllers\AuthController@logout');
        
        
    });
});

//Route::apiResource('appointment', 'App\Http\Controllers\AppointmentController');

