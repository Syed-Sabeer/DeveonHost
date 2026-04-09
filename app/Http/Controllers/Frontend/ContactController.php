<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{

public function index()
{
    return view('frontend.contact');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:150'],
        'subject' => ['required', 'string', 'max:180'],
        'message' => ['required', 'string', 'max:5000'],
    ]);

    $submission = ContactSubmission::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'subject' => $validated['subject'],
        'message' => $validated['message'],
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
    ]);

    try {
        $content = "New contact inquiry received.\n\n"
            . "Name: {$submission->name}\n"
            . "Email: {$submission->email}\n"
            . "Subject: {$submission->subject}\n"
            . "Message:\n{$submission->message}\n\n"
            . "Submitted At: {$submission->created_at}\n"
            . "IP: {$submission->ip_address}";

        Mail::raw($content, function ($mail) use ($submission) {
            $mail->to('contacthost@deveoninc.com')
                ->subject('Website Contact Form: ' . $submission->subject)
                ->replyTo($submission->email, $submission->name);
        });

        return back()->with('success', 'Your message has been sent successfully. Our team will contact you soon.');
    } catch (\Throwable $exception) {
        Log::error('Contact email sending failed', [
            'submission_id' => $submission->id,
            'error' => $exception->getMessage(),
        ]);

        return back()->with('warning', 'Your message was saved successfully, but email delivery is temporarily delayed.');
    }
}


}