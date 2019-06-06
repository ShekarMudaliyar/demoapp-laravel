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

Route::get('/', 'PageController@mainPage');
Route::get('/about', 'PageController@aboutPage');
Route::get('/contact', 'PageController@contactPage');
Route::get('/create', 'PageController@createPost');

Route::resource('posts','PostsController');