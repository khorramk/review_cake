<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Review;

class IndexController extends Controller
{
    public function Index()
    {
        return view('review-vue.review');
    }
    
}
