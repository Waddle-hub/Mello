@extends('layouts.app')

@section('content')
<div class="container" >
    <br>
    <br>
    <h1>{{$post->title}}</h1>
    <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->Body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    <a href="/posts" class="btn btn-outline-dark">Go back</a>
    @if(!Auth::guest())

        <a href="#" class="btn btn-outline-info">Like</a>
            
        <a href="#" class="btn btn-outline-warning">Dislike</a>
        
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>

            <form method="post" action="{{action('PostsController@destroy', $post->id)}}" class="float-right">
                @csrf
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        @endif
    @endif
    <br>
    <br>
</div>
@endsection