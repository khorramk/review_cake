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

// Route::post('/cake-component/review', function ()
// {
//     return redirect('/cake-component');
// });
Route::get('/', 'ReviewController@welcome');

Auth::routes();

// Route::middleware('auth')->group(function ()
// {
    Route::resource('/review', 'ReviewController');

    Route::get('/review/user/{id}', 'ReviewController@usersReviews');
    Route::resource('/review/comment', 'CommentController');
    Route::get('/review/comment/{id}', 'CommentController@commentReviews');
    
// });



