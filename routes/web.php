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

Auth::routes();

Route::get('/{any}', function(){
    return view('review-vue.review');
})->where('any', '.*');


// Route::get('/reviews', 'app\IndexController@index');

// Route::get('/reviews/create', 'ReviewController@create');
// Route::get('/reviews/{review}/edit', 'ReviewController@edit');

// Route::get('/comments/create/{review}', 'CommentsController@create');
// Route::get('/comments/{comment}/edit', 'CommentsController@edit');


