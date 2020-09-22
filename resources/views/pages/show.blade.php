@extends('layouts.main')

@section('content')
    <h1>Show Page</h1>
    <h1>Your name is {{ $name }}, id = {{ $id }}</h1>

{{--     comment --}}

    @if ($id > 100)
        <p>{{ $id }} > 100</p>
    @endif

    @unless($id > 100)
        <p>{{ $id }} <= 100</p>
    @endunless

    @isset($record)
        <p>record is define</p>
    @endisset

    @empty($array)
        <p>array is empty</p>
    @endempty
@endsection
