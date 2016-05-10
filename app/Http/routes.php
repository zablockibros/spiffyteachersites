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
    // Categories
    Route::get('categories', ['as' => 'categories.userIndex', 'uses' => 'CategoriesController@userIndex']);

    Route::get('categories/new', ['as' => 'categories.userNew', 'uses' => 'CategoriesController@userNew']);

    Route::post('categories', ['as' => 'categories.userCreate', 'uses' => 'CategoriesController@userCreate']);

    Route::get('categories/view/{id}', ['as' => 'categories.userView', 'uses' => 'CategoriesController@userView']);

    Route::post('categories/update/{id}', ['as' => 'categories.userUpdate', 'uses' => 'CategoriesController@userUpdate']);

    Route::delete('categories/delete/{id}', ['as' => 'categories.userDelete', 'uses' => 'CategoriesController@userDelete']);

    // Questions
    Route::get('questions', ['as' => 'questions.userIndex', 'uses' => 'QuestionsController@userIndex']);

    Route::get('questions/new', ['as' => 'questions.userNew', 'uses' => 'QuestionsController@userNew']);

    Route::post('questions', ['as' => 'questions.userCreate', 'uses' => 'QuestionsController@userCreate']);

    Route::get('questions/view/{id}', ['as' => 'questions.userView', 'uses' => 'QuestionsController@userView']);

    Route::post('questions/update/{id}', ['as' => 'questions.userUpdate', 'uses' => 'QuestionsController@userUpdate']);

    Route::delete('questions/delete/{id}', ['as' => 'questions.userDelete', 'uses' => 'QuestionsController@userDelete']);

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

//Route::get('/home', 'HomeController@index');

Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');

    $categories = DB::table('categories')->orderBy('created_at', 'desc')->get();
    foreach ($categories as $category)
    {
        $sitemap->add(URL::to('/for/'.$category->slug), $category->updated_at, '0.75', 'daily');
    }

    $questions = DB::table('questions')->orderBy('created_at', 'desc')->get();
    foreach ($questions as $question)
    {
        $sitemap->add(URL::to('/question/'.$question->slug), $question->updated_at, '0.50', 'monthly');
    }

    // generate your sitemap (format, filename)
    $sitemap->store('xml', 'sitemap');
    // this will generate file sitemap.xml to your public folder

    return $sitemap->render('xml');
});
