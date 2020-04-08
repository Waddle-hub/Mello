@extends('Layout.Master')

@section('content')
<div class="card w-75 mt-5 mx-auto">
    <div class="card-header">{{'Create a post'}}</div>
    <div class="card-body">
        <form action="{{ route('Post.makepost') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="post[title]">{{ 'Title' }}</label>
                <input class="form-control{{ $errors->has('post.title') ? ' is-invalid' : '' }}" type="text" name="post[title]" value="{{ old('post.title') }}">
                @foreach ($errors->get('post.title') as $error)
                    <p class="invalid-feedback">{{ $error }}</p>
                @endforeach
            </div>

            <div class="form-group">
                <label for="post[topic_id]">{{ 'Topic' }}</label>
                <select class="form-control{{ $errors->has('post.topic_id') ? ' is-invalid' : '' }}" name="post[topic_id]">
                    <option>{{ "Select your topic" }}</option>
                    @foreach ($topic_options as $topic)
                        <option value="{{ $topic->id }}" {{ $topic->id == old('post.topic_id') ? 'selected' : '' }}>{{ $topic->title }}</option>
                    @endforeach
                </select>
                @foreach ($errors->get('post.topic_id') as $error)
                <p class="invalid-feedback">{{ $error }}</p>
            @endforeach
            </div>

            <div class="form-group">
                <label for="post[content]">{{ 'Content' }}</label>
                <textarea class="form-control{{ $errors->has('post.content') ? ' is-invalid' : '' }}" name="post[content]">{{ old('post.content') }}</textarea>
                @foreach ($errors->get('post.content') as $error)
                    <p class="invalid-feedback">{{ $error }}</p>
                @endforeach
            </div>

            <div class="form-group text-right">
                <button class="btn btn-primary" type="submit">{{'Submit'}}</button>
            </div>

        </form>
    </div>
</div>
@endsection
