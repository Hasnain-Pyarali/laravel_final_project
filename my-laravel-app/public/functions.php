<?php
function sendMail($toEmail, $messageContent, $title)
{
    Mail::send([], [], function ($message) use ($toEmail, $title, $messageContent) {
        $message->to($toEmail)
                ->subject($title)
                ->setBody($messageContent, 'text/html'); // Set HTML content
    });

    return response()->json([
        'message' => 'Email sent successfully!',
    ]);
}
