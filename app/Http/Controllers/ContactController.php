<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('Salatugab@gmail.com')->send(new ContactFormMail($request->user(), $validatedData));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
