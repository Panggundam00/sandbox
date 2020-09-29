@extends('layouts.main')
@section('content')
    <h1>สร้างโพสต์ใหม่</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" class="form" method="POST">
        @csrf
            <div class="form-group">
                <label for="title">Post title</label>
                <input class="form-control @error('title')is-invalid @enderror" id="title" aria-describedby="titleHelp"
                       name="title" value="{{ old('title') }}" required>
                <small id="titleHelp" class="form-text text-muted">Post title is require</small>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Post content</label>
                <textarea class="form-control @error('content')is-invalid @enderror" id="content"
                          name="content"></textarea>
                @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">สร้าง</button>
    </form>



@endsection
