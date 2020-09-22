@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Created at: {{ $post->created_at }}</p>
    <p>View: {{ $post->view_count }}</p>
    <p>{{ $post->content }}</p>

@endsection
