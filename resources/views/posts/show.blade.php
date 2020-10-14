@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <img style="width: 100%;height:500px" src="/storage/cover_images/{{ $post->cover_image }}" alt="">
            </div>
        </div>
        <ul>
                <li>
                    <div>
                        <h1>{{  $post->title }}</h1>
                        <p class="mb-0">{{  $post->body }}</p>
                        <hr>
                        <small> written on {{ $post->created_at  }} </small>
                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-primary">Modifier</a>
                    </div>
                </li>
        </ul>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                {!! Form::open(['route' => ['posts.destroy',$post->id], 'method' => 'POST' ] , ['class'=>'pull-right']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete', [ 'class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endif
        @endif



@endsection