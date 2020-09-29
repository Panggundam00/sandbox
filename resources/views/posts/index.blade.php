@extends('layouts.main')
@section('content')
    <h1>รายการโพสต์</h1>



    @if(\Illuminate\Support\Facades\Auth::check())


    <p>Hello {{ Auth::User()->name }}</p>

    <a href="{{route('posts.create')}}">สร้างโพสต์ใหม่</a>
    @endif
    {{ $posts->links() }}
    @foreach($posts as $post)
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->created_at }}</p>
                {{ $post->created_at->diffForHumans() }} BY {{ $post->user->name }}
                <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Go to post</a>
            </div>
        </div>

    @endforeach

@endsection
