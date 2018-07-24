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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'brakes'], function () {
    Route::get('/', 'BrakeController@index');
    Route::post('/', 'BrakeController@store');
    Route::get('/{id}', 'BrakeController@show');
    Route::put('/{id}', 'BrakeController@update');
    Route::delete('/{id}', 'BrakeController@destroy');
});

Route::group(['prefix' => 'brands'], function () {
    Route::get('/', 'BrandController@index');
    Route::post('/', 'BrandController@store');
    Route::get('/{id}', 'BrandController@show');
    Route::put('/{id}', 'BrandController@update');
    Route::delete('/{id}', 'BrandController@destroy');
});

Route::group(['prefix' => 'compatibilities'], function () {
    Route::get('/', 'CompatibilityController@index');
    Route::post('/', 'CompatibilityController@store');
    Route::get('/{id}', 'CompatibilityController@show');
    Route::put('/{id}', 'CompatibilityController@update');
    Route::delete('/{id}', 'CompatibilityController@destroy');
});

Route::group(['prefix' => 'configurations'], function () {
    Route::get('/', 'ConfigurationController@index');
    Route::post('/', 'ConfigurationController@store');
    Route::get('/{id}', 'ConfigurationController@show');
    Route::put('/{id}', 'ConfigurationController@update');
    Route::delete('/{id}', 'ConfigurationController@destroy');
});

Route::group(['prefix' => 'connection'], function () {
    Route::get('/', 'ConnectionController@index');
    Route::post('/', 'ConnectionController@store');
    Route::get('/{id}', 'ConnectionController@show');
    Route::put('/{id}', 'ConnectionController@update');
    Route::delete('/{id}', 'ConnectionController@destroy');
});

Route::group(['prefix' => 'pedals'], function () {
    Route::get('/', 'PedalController@index');
    Route::post('/', 'PedalController@store');
    Route::get('/{id}', 'PedalController@show');
    Route::put('/{id}', 'PedalController@update');
    Route::delete('/{id}', 'PedalController@destroy');
});

Route::group(['prefix' => 'shifters'], function () {
    Route::get('/', 'ShifterController@index');
    Route::post('/', 'ShifterController@store');
    Route::get('/{id}', 'ShifterController@show');
    Route::put('/{id}', 'ShifterController@update');
    Route::delete('/{id}', 'ShifterController@destroy');
});

Route::group(['prefix' => 'tensions'], function () {
    Route::get('/', 'TensionController@index');
    Route::post('/', 'TensionController@store');
    Route::get('/{id}', 'TensionController@show');
    Route::put('/{id}', 'TensionController@update');
    Route::delete('/{id}', 'TensionController@destroy');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index');
    Route::post('/', 'UserController@store');
    Route::get('/{id}', 'UserController@show');
    Route::put('/{id}', 'UserController@update');
    Route::delete('/{id}', 'UserController@destroy');
});

Route::group(['prefix' => 'wheels'], function () {
    Route::get('/', 'WheelController@index');
    Route::post('/', 'WheelController@store');
    Route::get('/{id}', 'WheelController@show');
    Route::put('/{id}', 'WheelController@update');
    Route::delete('/{id}', 'WheelController@destroy');
});
