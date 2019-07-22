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
    Route::resource('/reviews', 'ReviewController');

    // Route::get('/reviews/user/{id}', 'ReviewController@usersReviews');
    Route::get('/comments/create', 'CommentController@create');
    Route::get('/comments/edit/{id}', 'CommentController@edit');
  
    // Route::get('/reviews/comment/{id}', 'CommentController@commentReviews');
    
// });



