@extends('layouts.app')

@section('content')

    <h1>Create a post</h1>

    {!! Form::open(['route' => 'posts.store', 'method' => 'POST' ,'enctype'=> 'multipart/form-data']) !!}
    
        <div class="form-group">
            {!! Form::label('title', 'title') !!}
            {!! Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'body') !!}
            {!! Form::textarea('body', '', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}


@endsection