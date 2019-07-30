@extends('layouts.app')

@section('content')
    <form action="{{action('CommentController@store')}}"  method="POST" class="create-form-reviews">
        @csrf
        <label for="review_creation">write your reviews</label>
        <textarea name="comments" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="add your comments">
    </form>
@endsection