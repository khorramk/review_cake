<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Comment;
use App\Review;
use Illuminate\Http\Request;
class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comments = new Comment();
        $comments->comments = $request->input('commentBody');
        $comments->review_id = $request->input('reviewId');
        $comments->save();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updatingComment = Comment::find($id);
        $updatingComment->comments = $request->input('comment');
        $updatingComment->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
    }

    public function fetchComments(Review $review)
    {
        /** @var Review */
        return $review->comments;
    }
}
