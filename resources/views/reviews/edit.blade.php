@extends('layouts.app')


@section('content')
        {{$review->reviews}}
        <form action="/review/{{$review->id}}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="review_edit" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="edit review">
        </form>
@endsection