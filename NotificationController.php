<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotificationEvent;

class NotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        $userName = $request->user_name;  // Extract user name from request
        $message = "Welcome" . $userName;  // Customize message
        broadcast(new NotificationEvent($message));  // Broadcast the event
        return response()->json(['message' => 'Notification sent']);
    }

    public function send(Request $request) {
        return response()->json([
            'message' => 'Hi welcome' . $request->name
        ]);
    }
    
}