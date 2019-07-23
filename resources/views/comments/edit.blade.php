@extends('layouts.app')  

@section('content')
<comment-edit :comment-id="{{$comment_id}}" review-name="{{$review_name}}"></comment-edit>
@endsection