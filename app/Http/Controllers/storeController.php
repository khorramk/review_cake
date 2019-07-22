<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class storeController extends Controller
{
    //
    public function store(Request $request)
    {
        $comments = new Comment();
        $comments->comments = $request->input('comment');
        $comments->review_id = $request->input('review_id');
        $comments->save();
        return redirect('/reviews');
    }
}
