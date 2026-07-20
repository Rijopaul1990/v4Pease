<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

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

            // Prepare data for email
            $data = [
                'name' => $request->name,
                'qualification' => $request->qualification,
                'experience' => $request->experience,
                'notes' => $request->notes ?? 'N/A',
                'resume_path' => storage_path('app/public/' . $filePath),
            ];

            // Send email with resume attachment
            Mail::send('emails.career', $data, function ($message) use ($data, $filePath) {
                $message->from('rijo.paul1990@gmail.com', 'V4Peace Career')
                    ->to('rijo.paul1990@gmail.com')
                    ->subject('New Career Application: ' . $data['name'])
                    ->attach($data['resume_path']);
            });

            return redirect()->back()->with('success', 'Thank you for your application! We will review your resume and get back to you soon.');

        } catch (\Exception $e) {
            \Log::error('Career application failed: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Sorry, there was an error submitting your application. Please try again later.')
                ->withInput();
        }
    }
}

