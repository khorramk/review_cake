@extends('layouts.app')  

@section('content')
    {{$comment->comments}}
    <form action="/review/comment/{{$comment->id}}" method="POST">
        @csrf
        @method('PUT')
        <textarea name="comment_edit" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="add comments">
    </form>
@endsection