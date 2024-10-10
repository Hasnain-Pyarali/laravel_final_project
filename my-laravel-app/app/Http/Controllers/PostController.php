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
        // Validate the form inputs
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'author_id' => 'required|int'
        ]);

        // Get the authenticated user (author)
        $user = Auth::user();
        echo "test";
        // Create a new post and associate it with the user
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'author_id' => $user->id,
            
        ]);

        // Return a JSON response (for AJAX)
        return response()->json(['success' => true, 'post' => $post]);
    }
}
