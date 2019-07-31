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
Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
Route::get('/comments/create', 'CommentController@create')->name('comments.create');
Route::get('/comments/{comment}/edit', function ()
{
    return view('comments.edit')->with('review', $review);
});
Route::get('/reviews/{review}/edit', function (App\Review $review)
{
    return view('review-vue.reviewEdit')->with('review', $review);
});


