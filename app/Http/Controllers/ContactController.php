<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
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

        // Return a response
        return back()->with('success', 'Email sent successfully.');
    }
}

