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
Route::get('/cake-component/comments/{review}', 'api\CommentsController@fetchComments');

Route::apiResources([
    'comments' => 'api\CommentsController',
    'reviews' => 'api\ReviewController',
]);


