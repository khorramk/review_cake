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


    Route::get('/reviews/create', 'ReviewController@create');
    Route::get('/reviews/{id}/edit', 'ReviewController@edit');
    // Route::get('/reviews/user/{id}', 'ReviewController@usersReviews');
    Route::get('/comments/create/{id}', 'CommentController@create');



