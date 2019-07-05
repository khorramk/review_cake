@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">your review</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       {{-- {{dd($users)}} --}}
                    @if (empty($posts))
                        <h1>put your posts</h1>
                    @else
                   
                    @foreach($posts as $post)
                        <div class="card">
                        <h1>{{$post->posts}}</h1>
                        </div>
                    @endforeach
                    @endif
                    
                    

                    <form action="/posts" method="POST" style="
                       display:flex;
                       flex-direction:column;
                    
                    ">
                    @csrf
                {{-- <input type="text" name="posts_id" id="" value="{{$posts_id}}"> --}}
                        <textarea name="posts" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="add your review">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
