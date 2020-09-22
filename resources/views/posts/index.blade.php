@extends('layouts.main')
@section('content')
    <h1>รายการโพสต์</h1>

    <a href="{{route('posts.create')}}">สร้างโพสต์ใหม่</a>

    @foreach($posts as $post)
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->created_at }}</p>
                <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Go to post</a>
            </div>
        </div>

    @endforeach

@endsection