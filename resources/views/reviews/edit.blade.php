@extends('layouts.app')


@section('content')
        {{$review->reviews}}
        <form action="/review/{{$review->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="review_id" value="{{$review->id}}">
            <textarea name="review_edit" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="edit review">
        </form>
@endsection