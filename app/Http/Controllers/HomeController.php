<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */
    public function index()

    {   
        

    //     $users = Auth::id();
    //     $posts_users = App\User::find($user)->posts;
    //    # dd($posts_users);
    $users = Auth::id();
    $posts_users = \App\User::find($users)->posts;
   

        return view('home')->with('posts', $posts_users);
    }

    
   
}
