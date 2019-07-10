<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\Comment;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reviews = \App\Review::all();
        $comments = Comment::all();
        
        return view('reviews.reviews')->with('reviews', $reviews)->with('comments', $comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reviews.create');
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
        $review = new Review();
        
        $review->reviews = $request->input('review_creation');
        //insert auth id for id counting
      
        $review->user_id = Auth::id();
        // $review->id = Auth::id();
        // $latestOrder = Review::orderBy('created_at','DESC')->first();
        // $review->id = $latestOrder->id;
        // dd($review);
        $review->save();
        
       return redirect('/review');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $review = Review::find($id);
        
        // return view('reviews.show')->with('review', $review);
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
        $review = Review::find($id);

        // dd($comment);
        return view('reviews.edit')->with('review', $review);

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
        $update_review = Review::find($id);
        $update_review->reviews = $request->input('review_edit');
        $update_review->user_id = Auth::id();
        $update_review->save();

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
        $review = Review::find($id);
        $review->delete();
        return redirect('/review');
    }
    public function usersReviews($id)
    {
        $reviews = \App\User::find($id)->reviews;
    //  dd($review);
        $comments = Review::find($id)->comments;
        
        return view('reviews.reviews')->with('reviews', $reviews)->with('comments', $comments);
    }

    public function welcome()
    {
        # code...
        return view('welcome');
    }
}
