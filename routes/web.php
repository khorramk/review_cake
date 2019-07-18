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
// Route::get('/cake-component',  function ()
//     {
//         # code...   
//         return view('review-vue.review');
//     });
    
// Route::get('/cake-component/review/create', function ()
//     {
//         return view('review-vue.create');
//     });



Route::get('/', 'ReviewController@welcome');

Auth::routes();
Route::resource('/cake-component/review', 'ReviewController');
// Route::middleware('auth')->group(function ()
// {
//     Route::resource('/review', 'ReviewController');

//     Route::get('/review/user/{id}', 'ReviewController@usersReviews');
//     Route::resource('/review/comment', 'CommentController');
//     Route::get('/review/comment/{id}', 'CommentController@commentReviews');
    
// });



