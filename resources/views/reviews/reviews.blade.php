@extends('layouts.app')

@section('content')
<div class="row justify-content-center reviews-container">
    <div class="col-md-8 reviews-container__content">
        <div class="card reviews-container__content__review-card">
            <div class="card-header reviews-card__header">user review</div>

            <div class="card-body reviews-card__body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- {{dd($users)}} --}}
                @foreach ($reviews as $review)
                    <div class="card reviews-card__single-review__wrapper">
                        <div class="card-body reviews-card__single-review">
                                {{$review->reviews}}
                        <a  class="review-card__single-review_add-comment" style="float:right;  color:blue; border:2px solid black; margin-left:10px;" href="/review/comment/{{$review->id}}">🞡</a>
                        <a class="review-card__single-review_edit-review" style="float:right;  color:blue; border:2px solid black; margin-left:10px;" href="/review/{{$review->id}}/edit">🖉</a>
                        <form class="review-card__single-review_remove-review" style="float:right;  color:blue; border:2px solid black; margin-left:10px;" action="/review/{{$review->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" style="color:teal; background:none; border:none; " value="⨯">
                            
                            </form>
                        </div>
                        @foreach ($review->comments as $comment)
                                <div class="col border border-primary comments-card_single-comments__wrapper">
                                    <div class="card-body comment-card__single-card">
                                        {{$comment->comments}}
                                        <a class="review-card__single-review_edit-comment" style="float:right;" href="/review/comment/{{$comment->id}}/edit">🖉</a>
                                    <form  class="review-card__single-review_remove-comment" style="float:right;" action="/review/comment/{{$comment->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" style="color:teal; background:none; border:none; padding-right:30px;" value="⨯">
                                    
                                    </form>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                @endforeach
                
            </div>
           
        </div>
        <a href="/review/create" style="background:yellow; width:100px; height:50px; border-radius:100%; float:right; z-index:999; right:0; position: absolute; bottom:0; text-align:center" class="review-card__link">R</a>
    </div>
   
</div>
@endsection