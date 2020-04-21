@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->Body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>

    <a href="/posts" class="btn btn-outline-dark">Go back</a>
    
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>

    <form method="post" action="{{action('PostsController@destroy', $post->id)}}" class="float-right">
        @csrf
        <input type="hidden" name="_method" value="DELETE"/>
        <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>
@endsection