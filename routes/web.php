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
    Route::get('/reviews/create', 'ReviewController@create');

    // Route::get('/reviews/user/{id}', 'ReviewController@usersReviews');
    Route::get('/comments/create', 'CommentController@create');
    
  
    // Route::get('/reviews/comment/{id}', 'CommentController@commentReviews');
    
// });



