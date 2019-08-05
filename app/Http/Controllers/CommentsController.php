<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Review;

class CommentsController extends Controller
{
    /**
     * create Comments from Review id
     * @param Model $review
     * @return \Illuminate\http\Response
     */
    public function create(\App\Review $review)
    {
        return view('review-vue.commentCreate')->withReviewId($review->id);
    }
    /**
     * edit comments 
     * @param Model $comment
     * @return \Illuminate\http\Response
     */
    public function edit(\App\Comment $comment)
    {
        return view('comments.edit')->withCommentId($comment->id);
    }
}
