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

Route::middleware('auth')->group(function ()
{
    Route::resource('/review', 'ReviewController');

    Route::get('/review/user/{id}', 'ReviewController@usersReviews')->name('user.review');
    Route::get('/review/{review}/comment/create', 'CommentController@create')->name('comment.create');
    Route::resource('/review/comment', 'CommentController');
    Route::get('/review/comment/{id}', 'CommentController@commentReviews');
   // Route::get('/review/{id}', 'ReviewController@revie')

});

