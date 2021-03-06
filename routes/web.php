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

Route::get('/', 'WelcomeController');

Route::get('/blogpost', 'PostController@index');
Route::get('/page/{slug}', 'PageController')->where(['slug' => '^[A-Za-z_-]+$']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
