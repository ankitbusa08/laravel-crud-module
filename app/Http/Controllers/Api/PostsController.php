<?php

namespace Modules\Posts\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Posts\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return response()->json([
            "status" => 0,
            "message" => "Success",
            "data" => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => "required",
            'description' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 0,
                "message" => "Validation Error",
                "data" => $validator->errors()->all()
            ]);
        }

        $posts = Post::create([
            "title" => $request->title,
            "description" => $request->description
        ]);

        return response()->json([
            "status" => 1,
            "message" => "Success",
            "data" => $posts
        ]);
    }

    /**
     * Show the specified resource.
     */
    public function show(Request $request, $id)
    {
        $post = Post::find($id);
        return response()->json([
            "status" => 1,
            "message" => "Success",
            "data" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => "required",
            'description' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => 0,
                "message" => "Validation Error",
                "data" => $validator->errors()->all()
            ]);
        }

        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return response()->json([
            "status" => 1,
            "message" => "Success",
            "data" => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json([
            "status" => 1,
            "message" => "Deleted"
        ]);
    }
}
