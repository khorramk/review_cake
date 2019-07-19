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
        return view('review-vue.create');
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
        $review->user_id = Auth::id();
        $review->rating_id = 0;
        $review->save();
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
         dd('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('review.edit')->with('review', $review);

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

        return redirect('/reviews');
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
        dd('');
        $review = Review::find($id);
        $review->delete();
        return redirect('/reviews');
    }

    public function usersReviews($id)
    {
        $reviews = \App\User::find($id)->reviews;
    //  dd($review);
         
        
        return view('reviews.reviews')->with('reviews', $reviews);
    }

    public function welcome()
    {
        # code...
        return view('welcome');
    }
}
