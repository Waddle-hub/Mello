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

Route::get('/home', "HomeController@index")->name('Layout.Master');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/publish', 'PostController@create')->name('Posts.makepost');
    Route::post('/publish', 'PostController@store');
});

Route::get('/post/{post}', 'PostController@show')->name('post.show');

Auth::routes();