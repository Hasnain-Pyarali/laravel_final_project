<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the Comment model
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Http\Controllers\MailController;
use Mail;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $comment = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        sendMail($request->email,"<strong>Welcome feel free to make as much posts as you want and get commented anonymously</strong>","Welcome to the bloggers");
        return response()->json([
            'message' => 'User added successfully!',
        ], 201);
    }
}
