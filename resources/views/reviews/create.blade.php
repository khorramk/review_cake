@extends('layouts.app')

@section('content')
        <div class="container comment">
            <form action="/comments"  method="POST" class="form_comment" style="display:flex; flex-direction:column;">
                <textarea name="comments_creation" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="add your comments">
            </form>
        </div>
@endsection