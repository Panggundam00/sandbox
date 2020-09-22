@extends('layouts.main')
@section('content')
    <h1>สร้างโพสต์ใหม่</h1>

    <form action="{{ route('posts.store') }}" class="form" method="POST">
        @csrf
            <div class="form-group">
                <label for="title">Post title</label>
                <input class="form-control" id="title" aria-describedby="titleHelp" name="title" required>
                <small id="titleHelp" class="form-text text-muted">Post title is require</small>
            </div>
            <div class="form-group">
                <label for="content">Post content</label>
                <textarea class="form-control" id="content" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">สร้าง</button>
    </form>



@endsection
