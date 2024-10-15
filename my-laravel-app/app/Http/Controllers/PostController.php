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
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'author_id' => $request->input('author_id'),
        ]);
        return response()->json([
            'message' => 'Post created successfully!',
            'post' => $post
        ], 201); // HTTP status code 201 (Created)    }
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $posts = Post::where('title', 'like', "%{$search}%")->paginate(10);
        } else {
            $posts = Post::paginate(10);
        }
        return view('posts.index', compact('posts'));
    }
}
