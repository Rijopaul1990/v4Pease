<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fill in all required fields correctly.');
        }

        try {
            // Prepare data for email
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'service' => $request->service,
                'user_message' => $request->message,
            ];

            // Get mail configuration with fallbacks
            $mailFromAddress = config('mail.from.address') ?: 'v4peacecounselling@gmail.com';
            $mailFromName = config('mail.from.name') ?: 'V4Peace';
            $mailToAddress = env('MAIL_TO_ADDRESS', 'rijo.paul1990@gmail.com');

            // Send email
            Mail::send('emails.contact', $data, function ($mail) use ($data, $mailFromAddress, $mailFromName, $mailToAddress) {
                $mail->from($mailFromAddress, $mailFromName)
                    ->to($mailToAddress)
                    ->replyTo($data['email'], $data['name'])
                    ->subject('New Contact Form Submission - ' . $data['service']);
            });

            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');

        } catch (\Exception $e) {
            \Log::error('Contact form submission error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'name' => $request->name,
                'email' => $request->email
            ]);
            
            // Return a more detailed error in development
            if (config('app.debug')) {
                return redirect()->back()
                    ->with('error', 'Error: ' . $e->getMessage())
                    ->withInput();
            }
            
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again later.')
                ->withInput();
        }
    }
}

