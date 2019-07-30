<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Comment;
class CommentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $comment = Comment::find($id);
        
        return view('review-vue.commentCreate')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $comments = new Comment();
        $comments->comments = $request->input('comment_body');
        $comments->review_id = $request->input('reviewId');
        $comments->save();

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
        dd('show');
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
        
           //dd(Comment::find($id));
        $review_name = Comment::find($id)->review->reviews;


       
      
        // dd($comment);
        return view('comments.edit')->with('comment_id', $id)
                                    ->with('review_name', $review_name);
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
       
        $updating_comment = Comment::find($id);
       
       
        $updating_comment->comments = $request->input('comment');
        $updating_comment->save();

        

         
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

    }

   
}
