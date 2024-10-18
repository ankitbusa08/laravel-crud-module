@extends('posts::layouts.master')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $post->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
@endsection
