@extends('layouts.app') 

@section('content')
        <h1>{{$review->reviews}}</h1>
        <form action="/review/comment" method="POST">
            @csrf
        <input type="hidden" name="comments_id" value="{{$review->id}}">
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="add comments">
        </form>
@endsection