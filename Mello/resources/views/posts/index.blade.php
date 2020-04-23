@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
            <h3 class="list-group-item"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Made on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No Posts Found !</p>
    @endif
</div>
@endsection
