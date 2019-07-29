<?php

use App\Review;
use App\Comment;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
    
// });
Route::get('/test', function ()
{
    dd('test');
});

Route::get('/cake-component/review', function(){
    
    $review = Review::all();

        return $review;
});

Route::get('/cake-component/comments/{id}', function($id)
{
  
    
    $comment = Review::find($id)->comments;
    
        return $comment;
});

//Route::apiResource('/reviews', 'ReviewController');
//Route::post('/store', 'storeController@store');
Route::apiResources([
    '/comments' => 'CommentController',
    '/reviews' => 'ReviewController',
]);

Route::get('/stats', function ()
{
    return [
        'series' => 200,
        'lessons' => 1300
    ];
});