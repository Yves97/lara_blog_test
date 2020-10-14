@extends('layouts.app')

@section('content')

    <h1> Edit The Post : "{{  $post->title }}" </h1>

    {!! Form::open(['route' => ['posts.update',$post->id], 'method' => 'POST','enctype'=> 'multipart/form-data' ]) !!}
    
        <div class="form-group">
            {!! Form::label('title', 'title') !!}
            {!! Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Title']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'body') !!}
            {!! Form::textarea('body', $post->body, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
        {!! Form::hidden('_method', 'PUT') !!}
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}


@endsection