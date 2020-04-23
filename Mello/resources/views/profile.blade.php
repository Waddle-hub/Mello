@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <h5 class="card-header">Profile</h5>
        <div class="card-body">
            <div class="container">
              <h5 class="card-title">Welcome {{Auth::user()->name}}</h5>
              <p class="card-text">Lets create some magical posts for your people to enjoy</p>
              <div class="text-center">
                <a href="/posts/create" class="btn btn-outline-primary">Create Posts</a>
              </div>
            </div>

            <h5 class="card-title">Your posts</h5>
            @if(count($posts) > 0)
            <table  class="table table-striped table-dark">
                <tr>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post->title}}</th>
                        <th>
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success">Edit</a>
                            <form method="post" action="{{action('PostsController@destroy', $post->id)}}" class="float-right">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </th>
                        <th>
                        </th>
                    </tr>
                @endforeach
            </table>
            @else
                <p>You have no posts</p>
            @endif
        </div>
      </div>
</div>


@endsection