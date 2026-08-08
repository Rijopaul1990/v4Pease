<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Quotation;

class QuotationController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'company_name'    => 'required|string|max:255',
            'contact_email'   => 'required|email|max:255',
            'mobile'          => 'required|string|max:20',
            'people'          => 'required|integer|min:1',
            'additional_info' => 'nullable|string|max:2000',
        ]);

        $data = [
            'company_name'    => $request->company_name,
            'contact_email'   => $request->contact_email,
            'mobile'          => $request->mobile,
            'people'          => $request->people,
            'additional_info' => $request->additional_info,
        ];

        // Persist the request first so the lead is never lost, even if the email fails.
        Quotation::create($data);

        // Send the notification e-mail (best effort).
        try {
            $adminEmail  = config('constants.ADMIN_EMAIL');
            $fromAddress = config('mail.from.address') ?: 'v4peacecounselling@gmail.com';
            $fromName    = config('mail.from.name') ?: 'V4Peace Counselling Centre';

            Mail::send('emails.quotation', $data, function ($mail) use ($adminEmail, $fromAddress, $fromName, $data) {
                $mail->from($fromAddress, $fromName)
                     ->to($adminEmail)
                     ->replyTo($data['contact_email'], $data['company_name'])
                     ->subject('New Quotation Request — ' . $data['company_name']);
            });
        } catch (\Exception $e) {
            Log::error('Quotation request email failed', [
                'error'   => $e->getMessage(),
                'company' => $request->company_name,
            ]);
        }

        return redirect()->back()->with('quotation_success', 'Thank you! Your quotation request has been received. We will get back to you shortly.');
    }
}
