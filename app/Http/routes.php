<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');
});

// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

Route::group(['middleware' => 'auth', 'namespace' => 'Surveys', 'prefix' => 'survey'], function() {

    Route::get('', ['as' => 'surveys::index', 'uses' => 'SurveyController@index']);
    Route::post('', ['as' => 'surveys::index', 'uses' => 'SurveyController@store']);
    Route::get('start', ['as' => 'surveys::start', 'uses' => 'SurveyController@show']);

});

Route::group(['middleware' => ['auth', 'survey']], function () {

    Route::get('/home', 'HomeController@index');
    
    Route::group(['prefix' => 'schools/{school}', 'namespace' => 'Schools', 'as' => 'schools::'], function() {
        
        Route::get('roommates', ['as' => 'roommates::index', 'uses' => 'Roommates\RoommateController@index']);
        Route::get('roommates/{user}', ['as' => 'roommates::show', 'uses' => 'Roommates\RoommateController@show']);

    });

});
