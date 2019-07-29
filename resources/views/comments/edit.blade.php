@extends('layouts.app')  

@section('content')
          
<form action="{{action('CommentController@update', $comment->id)}}" method="POST">
        @csrf
        @method('PUT')
        {{-- <input type="hidden" name="comment_id" value="{{$comment->id}}"> --}}
        <textarea name="comment_edit" id="" cols="30" rows="10">{{$comment->content}}</textarea>
        <input type="submit" value="add comments">
    </form>
@endsection