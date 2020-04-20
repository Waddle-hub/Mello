@extends('layouts.app')

@section('content')
    <h1>Create Posts !</h1>
    {!! Form::open(['action' => 'PostController@store', 'method'=> 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
    {!! Form::close() !!}
@endsection
