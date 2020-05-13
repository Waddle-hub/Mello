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

    @if(!Auth::guest())
      <form method="POST" class="pull-left form-inline" action="{{action('LikeController@like', $post->id, Auth::user()->id)}}">
          @csrf
          <div class="form-group mb-2">
              <button type="submit" class="btn btn-outline-info">Like</button>
          </div>
      </form>
 
      <form method="POST" class="float-right" action="{{action('LikeController@dislike', $post->id, Auth::user()->id)}}">
          @csrf
          <div class="form-group mb-2">
              <button type="submit" class="btn btn-outline-warning">Dislike</button>
          </div>
      </form>
    @endif

    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    <div class="container">
        <div class="form-group mb-2">
            <a href="/posts" class="btn btn-outline-dark">Go back</a>
        </div>
    </div>

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
    <br>
    <br>
</div>
@endsection