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
Route::get('/', 'ReviewController@welcome');
Auth::routes();

Route::get('/reviews', 'app/IndexController@index');

Route::get('/reviews/create', 'ReviewController@create');
Route::get('/reviews/{review}/edit', 'RevieController@edit');

Route::get('/comments/create/{review}', 'CommentController@create');
Route::get('/comments/{comment}/edit', 'CommentController@edit');


