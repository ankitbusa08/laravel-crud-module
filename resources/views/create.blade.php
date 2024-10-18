@extends('posts::layouts.master')

@section('content')
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Create</button>
    </form>
@endsection
