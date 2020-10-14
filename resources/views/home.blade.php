@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{ route('posts.create')}}">Create a post</a>

                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th>
                                <a  class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit </a>
                            </th>
                            <th></th>
                        </tr>
                        @endforeach
                    
                    </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection
