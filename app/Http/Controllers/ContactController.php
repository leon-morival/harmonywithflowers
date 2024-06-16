<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Handle form submission, e.g., send an email
        Mail::send([], [], function ($message) use ($request) {
            $message->to('your-email@example.com')
                    ->subject('Contact Form Submission')
                    ->from($request->email, $request->name)
                    ->setBody($request->message, 'text/html');
        });

        return redirect()->route('contact.show')->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
