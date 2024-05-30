<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    Public function index(){
        return view('/emails/contact');
    }
    public function sendEmail(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('charafeddinetbibzat@gmail.com')->send(new ContactMail($request->all()));
  // Send notification to admin page
  $adminMessage = "New message from: " . $request->name . "\n";
  $adminMessage .= "Email: " . $request->email . "\n";
  $adminMessage .= "Subject: " . $request->subject . "\n";
  $adminMessage .= "Message: " . $request->message;

  // You can save the message to a database or use any other method to notify the admin
  // For demonstration purposes, I'm using session flash here
  session()->flash('admin_message', $adminMessage);
        // Return a response
        return back()->with('success', 'Email sent successfully.');
    }
}

