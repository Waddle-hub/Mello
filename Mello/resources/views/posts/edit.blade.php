@extends('layouts.app')

@section('content')
    <h1>Editing your Post</h1>

    <form method="post" action="/posts/{{$post->id}}">
        <div class="form-group">
            @method('PUT')
            @csrf          
            <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="detail">Body</label>
            <textarea  class="form-control" name="Body" placeholder="Body Text" rows="10">{{$post->Body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
