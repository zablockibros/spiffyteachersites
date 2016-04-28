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

Route::get('for/{slug}', 'CategoriesController@view');

Route::get('question/{id}', 'QuestionsController@view');

/**
 * Logged in routes
 */
Route::group(['middleware' => ['auth'], 'prefix' => 'user'], function()
{
    Route::get('questions', 'QuestionsController@userIndex');

    Route::get('questions/create', 'QuestionsController@userCreate');

});

/**
 * Admin routes
 */
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['namespace' => 'User'], function() {
        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
    });

});

Route::auth();

Route::get('/home', 'HomeController@index');
