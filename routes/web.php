<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend/', 'as' => 'backend.', 'namespace' => 'Backend\\', 'middleware' => ['auth']], function () {
    Route::get('/pages',                   ['as' => 'pages.index',          'uses' =>   'PagesController@index']);
    Route::get('/pages/create',                   ['as' => 'pages.create',          'uses' =>   'PagesController@create']);
    Route::post('/pages/store',                   ['as' => 'pages.store',          'uses' =>   'PagesController@store']);
    Route::get('/pages/edit/{id}',                   ['as' => 'pages.edit',          'uses' =>   'PagesController@edit']);
    Route::post('/pages/update/{id}',                   ['as' => 'pages.update',          'uses' =>   'PagesController@update']);
    Route::get('/pages/delete/{id}',            ['as' => 'pages.delete', 'uses' => 'PagesController@delete']);

    Route::get('/content',                   ['as' => 'content.index',          'uses' =>   'ContentController@index']);
    Route::get('/content/create',                   ['as' => 'content.create',          'uses' =>   'ContentController@create']);
    Route::post('/content/store',                   ['as' => 'content.store',          'uses' =>   'ContentController@store']);
    Route::get('/content/edit/{id}',            ['as' => 'content.edit',        'uses' => 'ContentController@edit']);
    Route::post('/content/update/{id}',            ['as' => 'content.update',        'uses' => 'ContentController@update']);
    Route::get('/content/delete/{id}',            ['as' => 'content.delete',        'uses' => 'ContentController@delete']);

    Route::get('/site/setting',                   ['as' => 'setting.index',          'uses' =>   'SiteSettingsController@index']);
    Route::post('/site/update/{id}',            ['as' => 'setting.update',        'uses' => 'SiteSettingsController@update']);

    Route::get('/contact',                   ['as' => 'contact.index',          'uses' =>   'ContactController@index']);
    Route::get('/contact/detail/{id}',                   ['as' => 'contact.read',          'uses' =>   'ContactController@detail_preview']);
});

Route::group(['as' => 'frontend.', 'namespace' => 'Frontend\\'], function () {
    Route::get('/{slug}',                   ['as' => 'page.detail',          'uses' =>   'FrontendController@pages']);
    Route::post('/contact/store',                   ['as' => 'message.store',          'uses' =>   'FrontendController@messagestore']);
});
