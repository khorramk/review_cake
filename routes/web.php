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
    Route::get('/', function () {
        return view('layouts.master-contents');
    });

    Route::get('/cms', function ()
    {
        return view('cms.main');
    });

// Route::get('/{any}', function(){
//     return view('review-vue.review');
// })->where('any', '.*');



