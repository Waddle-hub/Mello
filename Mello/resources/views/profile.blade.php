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
        </div>
      </div>
</div>


@endsection