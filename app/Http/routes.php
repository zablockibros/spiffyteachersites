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

Route::get('for/{slug}', 'CategoryController@showCategory');

Route::get('question/{id}', 'QuestionController@showQuestion');

/**
 * Logged in routes
 */
Route::group(['namespace' => 'User', 'middleware' => 'auth', 'prefix' => 'user'], function()
{

});

/**
 * Admin routes
 */
Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' => 'User'], function() {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });

    Route::group(['namespace' => 'Question'], function() {

    });

    Route::group(['namespace' => 'Category'], function() {

    });
});