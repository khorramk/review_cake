<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('review-vue.review');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
        $comment = Comment::all();
        
        return view('review-vue.commentCreate')->with('comment', $comment);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comments = new Comment();
        $comments->comments = $request->input('comment');
        $comments->review_id = $request->input('review_id');
        $comments->save();

        return redirect('/reviews');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // //
        // $review = Review::find($id);

        // return view('comments.comment')->with('review', $review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        

        $comment = Comment::find($id);

        // dd($comment);
        return view('comments.edit')->with('comment', $comment);
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
        //
         //dd
         $updating_comment = Comment::find($id);
        //  dd($updating_comment);
        $updating_comment->comments = $request->input('comment_edit');
        $updating_comment->review_id = $id;
        $updating_comment->save();

        return redirect('/review');

         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $comment = Comment::find($id);
       $comment->delete();

        return redirect('/review');
    }

    public function commentReviews($id)
    {
        $comments_review = Review::find($id);
        dd($comments_review);
        return view('comments.comment')->with('comment_review', $comments_review);
    }
}
