@extends('layouts.app')

@section('content')
<review-edit review="{{$review->reviews}}" :id="{{$review->id}}"></review-edit>
@endsection