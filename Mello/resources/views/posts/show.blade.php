@extends('layouts.app')

@section('content')
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
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>

            <form method="post" action="{{action('PostsController@destroy', $post->id)}}" class="float-right">
                @csrf
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        @endif
    @endif
@endsection