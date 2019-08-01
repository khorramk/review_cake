<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Review;
use Illuminate\Http\Request;
class CommentController extends Controller
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
        $comments->reviews_id = $request->input('reviewId');
        $comments->save();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviewName = Comment::find($id)->review->reviews;
        return view('comments.edit')->with('comment_id', $id)
                                    ->with('review_name', $reviewName);
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
        return $review->comments;
    }
}
