@extends('posts::layouts.master')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->description }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
@endsection
