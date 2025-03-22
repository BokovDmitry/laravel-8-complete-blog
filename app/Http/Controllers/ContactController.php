<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Display the Contact Us form
    public function index()
    {
        return view('contact.index');
    }

    // Handle form submission and send email
    public function send(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        $user = auth()->user();

        // Send the email
        Mail::raw($request->message, function ($mail) use ($request, $user) {
            $mail->to('gamequest.support@gmail.com') // Replace with your support email
                ->subject($request->subject)
                ->from($user->email, $user->name);
        });

        return redirect()->route('contact.index')->with('success', 'Your message has been sent successfully!');
    }
}