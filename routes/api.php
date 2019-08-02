<?php

use App\Comment;
use App\Review;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/cake-component/review', function(){
    $review = Review::all();
        return $review;
});
Route::get('/cake-component/comments/{review}', 'CommentController@fetchComments');

Route::apiResources([
    '/comments' => 'CommentController',
    '/reviews' => 'ReviewController',
]);

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