<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Posts\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts::index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('posts::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Post::create($validated);
        return redirect('/posts');
    }

    /**
     * Show the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts::show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts::edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //Valication
        request()->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        /* Second way */
        $post->update([
            'title'     => request('title'),
            'description'    => request('description'),
        ]);

        //redirect to the post page
        return redirect('/posts/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        //redirect
        return redirect('/posts');
    }
}
