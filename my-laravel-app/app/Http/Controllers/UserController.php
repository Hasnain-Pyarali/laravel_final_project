<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the Comment model
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Http\Controllers\MailController;
use Mail;
// function sendMail($toEmail,$messageContent)
// {
//     Mail::raw($messageContent, function ($message) use ($toEmail) {
//         $message->to($toEmail)
//                 ->subject('Message from Website');
//     });

//     return response()->json([
//         'message' => 'Email sent successfully!',
//     ]);
// }
class UserController extends Controller
{
    public function store(Request $request)
    {
        $comment = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        // sendMail($request->email,"Welcome " + $request->name  + " to our blog");
        return response()->json([
            'message' => 'User added successfully!',
        ], 201);
    }
}
