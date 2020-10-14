@extends('layouts.app')

@section('content')

    @if (count($posts)> 0)
        
        <ul>
            @foreach ($posts as $post)
            <div class="row">
                <div class="col-md-4">
                <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                </div>
                <div class="col-md-8">
                    <h1><a href="{{ route('posts.show',$post->id)}}">{{  $post->title }}</a></h1>
                    <p class="mb-0">{{  $post->body }}</p>
                    <small> written on {{ $post->created_at  }} </small>
                </div>
            </div>
                
            @endforeach
        </ul>

    @endif


@endsection