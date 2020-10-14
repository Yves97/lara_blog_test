@extends('layouts.app')

@section('content')
    @foreach ($data as $item)
        {{  $item }}
    @endforeach
    <h1>Hello from services</h1>
@endsection