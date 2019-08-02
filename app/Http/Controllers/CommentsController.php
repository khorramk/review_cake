<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Review;

class CommentsController extends Controller
{
    public function create(\App\Review $review)
    {
        return view('review-vue.commentCreate')->withReviewId($review->id);
    }
    public function edit(\App\Comment $comment)
    {
        return view('comments.edit')->withCommentId($comment->id);
    }
}
