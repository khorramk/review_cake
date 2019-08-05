<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Review;
use Illuminate\Http\Request;
class ReviewController extends Controller
{
    public function create(\App\Review $review)
    {
        return view('review-vue.create');
    }
    public function edit(\App\Review $review)
    {
        return view('review-vue.reviewEdit')->withReview($review);
    }
}
