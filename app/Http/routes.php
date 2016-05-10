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
    Route::get('categories', ['categories.userIndex', 'CategoriesController@userIndex']);

    Route::get('categories/new', ['categories.userNew', 'CategoriesController@userNew']);

    Route::post('categories', ['categories.userCreate', 'CategoriesController@userCreate']);

    Route::get('categories/view/{id}', ['categories.userView', 'CategoriesController@userView']);

    Route::post('categories/update/{id}', ['categories.userUpdate', 'CategoriesController@userUpdate']);

    Route::post('categories/delete/{id}', ['categories.userDelete', 'CategoriesController@userDelete']);

    // Questions
    Route::get('questions', ['questions.userIndex', 'QuestionsController@userIndex']);

    Route::get('question/new', ['questions.userNew', 'QuestionsController@userNew']);

    Route::post('question', ['questions.userCreate', 'QuestionsController@userCreate']);

    Route::get('question/view/{id}', ['questions.userView', 'QuestionsController@userView']);

    Route::get('question/update/{id}', ['questions.userUpdate', 'QuestionsController@userUpdate']);

    Route::post('question/delete/{id}', ['questions.userDelete', 'QuestionsController@userDelete']);

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
