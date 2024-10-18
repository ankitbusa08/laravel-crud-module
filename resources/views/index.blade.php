@extends('posts::layouts.master')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>


    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No posts found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
