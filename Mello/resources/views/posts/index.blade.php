@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="list-group-item">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="list-group-item">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <div>{!!$post->Body!!}</div>
                        </div>
                        <small>Made on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No Posts Found !</p>
    @endif
</div>
@endsection
