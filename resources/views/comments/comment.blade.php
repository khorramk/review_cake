@extends('layouts.app') 

@section('content')
    <h1>{{$review->content}}</h1>
    <form action="{{action('CommentController@store')}}" method="POST">
        @csrf
        <input type="hidden" name="review_id" value="{{$review->id}}">
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="add comments">
    </form>
@endsection