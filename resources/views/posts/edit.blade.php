@extends('layouts.main')
@section('content')
    <h1>แก้ไขโพสต์</h1>
    <form action="{{ route('posts.update', ['post' => $post->id]) }}" class="form" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Post title</label>
            <input class="form-control" id="title" aria-describedby="titleHelp" name="title" required value="{{ $post->title }}">
            <small id="titleHelp" class="form-text text-muted">Post title is require</small>
        </div>
        <div class="form-group">
            <label for="content">Post content</label>
            <textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">แก้ไข</button>
    </form>

    <br>

    <h2>Danger Zone</h2>
    <form action="{{route('posts.destroy', ['post' =>$post->id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">ลบโพสต์</button>
    </form>
@endsection
