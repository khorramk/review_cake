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
                        <a  class="review-card__single-review_add-comment"  href="{{route('comment.create', ["review" => $review])}}">🗨</a>
                                
                            
                           
                                
                                
                              @if ($review->user_id == Auth::id())
                        <a class="review-card__single-review_edit-review" href="{{route('review.edit', $review->id)}}">🖉</a>
                        <form class="review-card__single-review_remove-review remove-btn"  action="{{route('review.destroy',$review->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"   
                                    class="remove-btn-style"
                                    value="">⨯</button>
                                    
                                </form>
                              
                               
                              @endif
                            
                            
                           
                            
                        
                        
                        </div>
                        @foreach ($review->comments as $comment)
                                <div class="col border border-primary comments-card_single-comments__wrapper">
                                    <div class="card-body comment-card__single-card">
                                        {{$comment->comments}}
                                    <a class="review-card__single-review_edit-comment float-right"  href="{{route('comment.edit', $comment->id)}}">🖉</a>
                                    <form  class="review-card__single-review_remove-comment float-right"  action="{{action('CommentController@destroy', $comment->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="p-r" value="⨯">
                                    
                                    </form>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                @endforeach
                
            </div>
           
        </div>
    <a href="{{ route('review.create')}}" id="plus" class="review-card__link">+</a>
    </div>
   
</div>
@endsection