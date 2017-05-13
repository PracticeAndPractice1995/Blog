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
use App\Task;


Route::get('/books','BookController@index');

Route::get('/books/{id}','BookController@show');

Route::get('/post','PostController@index');

Route::get('/','PostController@index');

Route::get('/post/create','PostController@create');

Route::post('/post','PostController@store');

Route::get('/post/{id}','PostController@show');

Route::post('/post/{id}/comments','CommentsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
