@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">user review</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       {{-- {{dd($users)}} --}}
                    
                    
                   
                    
                            @foreach ($reviews as $review)
                                <div class="card reviews">
                                    <div class="card-body review">
                                            {{$review->reviews}}
                                            <span class="create-block"><a href="/review/create" class="create-btn">add comment</a></span>
                                    </div>
                                </div>
                            @endforeach
                     
                     
                    
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection