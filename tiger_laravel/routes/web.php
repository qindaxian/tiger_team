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
    return view('index');
});
Route::any('/site/client', [ 'as' => 'site/client', 'uses' => "SiteController@getClient"]);
Route::any('/site/index', [ 'as' => 'site/index', 'uses' => "SiteController@getIndex"]);
Route::any('/huya/index', [ 'as' => 'huya/index', 'uses' => "SiteController@getIndex"]);
Route::any('/huya/category', [ 'as' => 'huya/category', 'uses' => "CategoryController@getCategory"]);
Route::any('/huya/live', [ 'as' => 'huya/live', 'uses' => "LiveController@getLive"]);
Route::post('/login','LoginController@getLogin');