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

Route::get('/', 'CategoriesController@home');

Route::get('categories', ['as' => 'category', 'uses' => 'CategoriesController@index']);

Route::get('for/{slug}', ['as' => 'category', 'uses' => 'CategoriesController@view']);

Route::get('site/{slug}', ['as' => 'site', 'uses' => 'WebsitesController@view']);

Route::post('site/{id}/vote', ['as' => 'site.vote', 'uses' => 'WebsitesController@vote']);

Route::post('subscribe', ['as' => 'subscribe', 'uses' => 'SubscribersController@newsletter']);


Route::group(['middleware' => ['auth'], 'prefix' => 'user'], function() {

    Route::get('sites', ['as' => 'sites.userIndex', 'uses' => 'WebsitesController@userIndex']);

    Route::get('sites/new', ['as' => 'sites.userNew', 'uses' => 'WebsitesController@userNew']);

    Route::post('sites', ['as' => 'sites.userCreate', 'uses' => 'WebsitesController@userCreate']);

    Route::get('sites/{id}', ['as' => 'sites.userView', 'uses' => 'WebsitesController@userView']);

    Route::post('sites/{id}/edit', ['as' => 'sites.userEdit', 'uses' => 'WebsitesController@userEdit']);

    Route::delete('sites/{id}/delete', ['as' => 'sites.userDelete', 'uses' => 'WebsitesController@userDelete']);

});

/**
 * Admin in routes
 */
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function()
{
    // Categories
    Route::get('categories', ['as' => 'categories.adminIndex', 'uses' => 'CategoriesController@adminIndex']);

    Route::get('categories/new', ['as' => 'categories.adminNew', 'uses' => 'CategoriesController@adminNew']);

    Route::post('categories', ['as' => 'categories.adminCreate', 'uses' => 'CategoriesController@adminCreate']);

    Route::get('categories/view/{id}', ['as' => 'categories.adminView', 'uses' => 'CategoriesController@adminView']);

    Route::post('categories/update/{id}', ['as' => 'categories.adminUpdate', 'uses' => 'CategoriesController@adminUpdate']);

    Route::delete('categories/delete/{id}', ['as' => 'categories.adminDelete', 'uses' => 'CategoriesController@adminDelete']);

    // Sites
    Route::get('sites', ['as' => 'sites.adminIndex', 'uses' => 'WebsitesController@adminIndex']);

    Route::get('sites/new', ['as' => 'sites.adminNew', 'uses' => 'WebsitesController@adminNew']);

    Route::post('sites', ['as' => 'sites.adminCreate', 'uses' => 'WebsitesController@adminCreate']);

    Route::get('sites/view/{id}', ['as' => 'sites.adminView', 'uses' => 'WebsitesController@adminView']);

    Route::post('sites/update/{id}', ['as' => 'sites.adminUpdate', 'uses' => 'WebsitesController@adminUpdate']);

    Route::delete('sites/delete/{id}', ['as' => 'sites.adminDelete', 'uses' => 'WebsitesController@adminDelete']);

    // Questions
    /*
    Route::get('questions', ['as' => 'questions.userIndex', 'uses' => 'QuestionsController@userIndex']);

    Route::get('questions/new', ['as' => 'questions.userNew', 'uses' => 'QuestionsController@userNew']);

    Route::post('questions', ['as' => 'questions.userCreate', 'uses' => 'QuestionsController@userCreate']);

    Route::get('questions/view/{id}', ['as' => 'questions.userView', 'uses' => 'QuestionsController@userView']);

    Route::post('questions/update/{id}', ['as' => 'questions.userUpdate', 'uses' => 'QuestionsController@userUpdate']);

    Route::delete('questions/delete/{id}', ['as' => 'questions.userDelete', 'uses' => 'QuestionsController@userDelete']);


    Route::get('questions/excel', ['as' => 'questions.userExcel', 'uses' => 'QuestionsController@userExcel']);

    Route::post('questions/excel/upload', ['as' => 'questions.userExcelUpload', 'uses' => 'QuestionsController@userExcelUpload']);
    */

});

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // add items to the sitemap (url, date, priority, freq)
    $sitemap->add(URL::to('/'), Carbon\Carbon::now()->subHours(1), '1.0', 'daily');

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
