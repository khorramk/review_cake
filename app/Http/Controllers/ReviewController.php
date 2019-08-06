<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Review;
use Illuminate\Http\Request;
class ReviewController extends Controller
{
    /**
     * create reviews from scratch from form submission
     * @param Model $review
     * @return \Illuminate\http\Response 
     */
    public function create(\App\Review $review)
    {
        
        return view('review-vue.create');
    }
    /**
     * edits reviews
     * @param Model $review
     * @return \Illuminate\http\Response
     */
    public function edit(\App\Review $review)
    {
        return view('review-vue.reviewEdit')->withReview($review);
    }
}
