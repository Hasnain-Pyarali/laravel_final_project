<?php

namespace App\Http\Controllers;

use App\Models\Comment; // Import the Comment model
use Illuminate\Http\Request;
use App\Models\Comments;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comments::create([
            'body' => $request->body,
            'post_id' => $request->post_id
        ]);

        return response()->json([
            'message' => 'Comment added successfully!',
            'comment' => [
                'body' => $comment->body,
                'created_at' => $comment->created_at->diffForHumans(),
            ]
        ], 201);
    }
}
