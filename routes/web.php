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
Route::get('/comments/create/{review}', function (App\Review $review)
{
    return view('review-vue.commentCreate')->with('reviewId', $review->id);
});
Route::get('/comments/{review}/edit', function (\App\Review $review)
{
    $reviewName = $review->name;
    return view('comments.edit')->with('reviewName', $reviewName);
});
Route::get('/reviews/{review}/edit', function(\App\Review $review)
{
    return view('review-vue.reviewEdit')->with('review', $review);
});


