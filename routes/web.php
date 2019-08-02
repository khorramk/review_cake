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
Route::get('/reviews/create', function (\App\Review $review)
{
    return View::make('review-vue.create');
});
Route::get('/comments/create/{review}', function (\App\Review $review)
{
    return View::make('review-vue.commentCreate')->withReviewId($review->id);
});
Route::get('/comments/{comment}/edit', function (\App\Comment $comment)
{
    return view('comments.edit')->withCommentId($comment->id);
});
Route::get('/reviews/{review}/edit', function(\App\Review $review)
{
    return view('review-vue.reviewEdit')->withReview($review);
});


