<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    // MailController.php
    public function sendEmail(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'to' => 'required|email',
            'msg' => 'required|string',
            'subject' => 'required|string',
        ]);

        $to = $request->input('to'); // Get recipient email from request
        $msg = $request->input('msg'); // Get message from request
        $subject = $request->input('subject'); // Get subject from request

        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return response()->json(['message' => 'Email has been sent!']);
    }

    // MailController.php
    public function showForm()
    {
        return view('mail_form'); // Create a new view for the mail form
    }
}
