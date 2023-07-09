<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('xylaray37@gmail.com')->send(new ContactFormMail($request->user(), $request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
