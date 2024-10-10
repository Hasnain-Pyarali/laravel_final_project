<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Store a new post in the database
    public function store(Request $request)
    {
        $user = Auth::user();
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'author_id' => 1,
        ]);
        return response()->json([
            'message' => 'Post created successfully!',
            'post' => $post
        ], 201); // HTTP status code 201 (Created)    }
    }
}
