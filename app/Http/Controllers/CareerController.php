<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\CareerApplication;

class CareerController extends Controller
{
    public function index()
    {
        return view('career');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'qualification' => 'required|string|max:255',
            'experience' => 'required|numeric|min:0',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
            'notes' => 'nullable|string|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Store the resume file
            $file = $request->file('resume');
            $fileName = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            $filePath = $file->storeAs('resumes', $fileName, 'public');

            // Save to database
            $careerApplication = CareerApplication::create([
                'name' => $request->name,
                'qualification' => $request->qualification,
                'experience' => $request->experience,
                'resume' => $filePath,
                'notes' => $request->notes,
            ]);

            // Prepare data for email
            $data = [
                'name' => $request->name,
                'qualification' => $request->qualification,
                'experience' => $request->experience,
                'notes' => $request->notes ?? 'N/A',
                'resume_path' => storage_path('app/public/' . $filePath),
            ];

            // Try to send email with resume attachment
            try {
                Mail::send('emails.career', $data, function ($message) use ($data, $filePath) {
                    $mailFromAddress = config('mail.from.address') ?: 'v4peacecounselling@gmail.com';
                    $mailFromName = config('mail.from.name') ?: 'V4Peace';
                    $mailToAddress = env('MAIL_TO_ADDRESS', 'rijo.paul1990@gmail.com');
                    
                    $message->from($mailFromAddress, $mailFromName)
                        ->to($mailToAddress)
                        ->subject('New Career Application: ' . $data['name'])
                        ->attach($data['resume_path']);
                });
            } catch (\Exception $mailError) {
                // Log email error but don't fail the submission
                \Log::error('Career email failed but data saved: ' . $mailError->getMessage());
            }

            return redirect()->back()->with('success', 'Thank you for your application! We have received your information and will review your resume soon.');

        } catch (\Exception $e) {
            \Log::error('Career application failed: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Sorry, there was an error submitting your application. Please try again later.')
                ->withInput();
        }
    }
}

