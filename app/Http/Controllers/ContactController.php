<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
     
        return view('contact'); // Ensure this matches your view path
    }
    

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $fromAddress = config('mail.from.address');
        $fromName = config('mail.from.name');

        // Handle form submission, e.g., send an email
        Mail::send([], [], function ($message) use ($request, $fromAddress, $fromName) {
            $message->to($fromAddress)
                    ->subject('Contact Form Submission')
                    ->from($fromAddress, $fromName) // Use the configured email address as the sender
                    ->replyTo($request->email, $request->name) // Use the user's email as the reply-to address
                    ->html($request->message);
        });

        return redirect()->route('contact')->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
