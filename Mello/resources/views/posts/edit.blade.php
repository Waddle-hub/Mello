@extends('layouts.app')

@section('content')
    <h1>Editing your Post</h1>

    <form method="put" action="{{ route('posts.update') }}">
        <div class="form-group">
            @csrf            
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="{{$post->title}}"/>
        </div>
        <div class="form-group">
            <label for="Body">Body</label>
            <textarea class="form-control" name="Body" cols="30" rows="10" placeholder="{{$post->Body}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit Post</button>
 </form>
@endsection
