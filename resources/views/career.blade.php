@extends('layouts.app')

@section('title', 'Careers — Join Our Counselling Team | V4Peace')
@section('meta_description', 'Build a meaningful career with V4Peace Counselling Centre. If you are a qualified, compassionate mental health professional, submit your application and resume to join our team.')
@section('meta_keywords', 'counselling jobs Kerala, therapist careers, psychology jobs India, join counselling team, mental health careers, V4Peace careers')

@section('content')
<div class="vp-career">
<style>
   .vp-career { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }

   .vp-career { background: var(--vp-cream); color: #514B64; }

   /* Header */
   .vp-career .career-header {
       background: linear-gradient(135deg, var(--vp-brand-dark) 0%, var(--vp-brand) 100%);
       padding: 70px 0 60px;
       margin-bottom: 0;
       position: relative;
       overflow: hidden;
   }
   .vp-career .career-header::before {
       content: '';
       position: absolute;
       top: 0; left: 0; right: 0; bottom: 0;
       background-image: url('images/bg_5.jpg');
       background-size: cover;
       background-position: center;
       opacity: 0.12;
       z-index: 0;
   }
   .vp-career .career-header .container { position: relative; z-index: 1; }
   .vp-career .career-header .eyebrow {
       display: inline-block;
       background: rgba(255,255,255,0.14);
       border: 1px solid rgba(255,255,255,0.3);
       color: #ffe8e8;
       padding: 6px 18px;
       border-radius: 30px;
       font-size: 13px;
       letter-spacing: .06em;
       text-transform: uppercase;
       margin-bottom: 18px;
   }
   .vp-career .career-header h1 {
       color: white;
       font-size: 2.6rem;
       font-weight: 700;
       margin-bottom: 12px;
       text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
   }
   .vp-career .career-header .lead-text { color: rgba(255,255,255,0.9); max-width: 580px; margin: 0 auto; }
   .vp-career .career-header .breadcrumbs { color: rgba(255, 255, 255, 0.85); margin-bottom: 6px; }
   .vp-career .career-header .breadcrumbs a { color: white; text-decoration: none; }

   /* Form card */
   .vp-career .career-wrap { margin-top: -35px; }
   .vp-career .career-form-card {
       background: white;
       border-radius: 18px;
       box-shadow: 0 20px 55px rgba(92, 53, 53, 0.12);
       padding: 45px;
       margin-bottom: 60px;
       position: relative;
       z-index: 2;
   }
   .vp-career .vp-form-head { text-align: center; margin-bottom: 32px; }
   .vp-career .vp-form-head .subheading {
       color: var(--vp-brand); font-weight: 600; letter-spacing: .06em;
       text-transform: uppercase; font-size: 14px;
   }
   .vp-career .vp-form-head h3 { color: #3b2626; font-weight: 700; margin-top: 6px; }
   .vp-career .vp-form-head p { color: #9a8888; margin-bottom: 0; }

   .vp-career .form-group label { font-weight: 600; color: #4a3838; margin-bottom: 8px; }
   .vp-career .form-control {
       border-radius: 10px;
       border: 1px solid #e4d9d6;
       padding: 12px 15px;
       transition: all 0.25s ease;
       background: #fffdfc;
   }
   .vp-career .form-control:focus {
       border-color: var(--vp-brand);
       box-shadow: 0 0 0 0.2rem rgba(123, 74, 74, 0.15);
       background: #fff;
   }
   .vp-career .text-danger { color: var(--vp-brand) !important; }

   /* Submit button */
   .vp-career #career-submit {
       background: linear-gradient(135deg, var(--vp-brand) 0%, var(--vp-brand-dark) 100%);
       border: none;
       border-radius: 50px;
       padding: 15px 45px;
       font-size: 1.1rem;
       font-weight: 600;
       color: #fff;
       transition: all 0.25s ease;
   }
   .vp-career #career-submit:hover {
       transform: translateY(-2px);
       box-shadow: 0 12px 28px rgba(92, 53, 53, 0.3);
   }

   /* File upload */
   .vp-career .file-upload-wrapper { position: relative; overflow: hidden; display: inline-block; width: 100%; }
   .vp-career .file-upload-input { position: absolute; left: -9999px; }
   .vp-career .file-upload-label {
       padding: 16px 20px;
       background: var(--vp-cream);
       border: 2px dashed var(--vp-brand);
       border-radius: 12px;
       color: var(--vp-brand-dark);
       cursor: pointer;
       display: flex;
       align-items: center;
       justify-content: center;
       transition: all 0.25s ease;
       font-weight: 500;
   }
   .vp-career .file-upload-label:hover { background: var(--vp-brand); color: white; }
   .vp-career .file-upload-label i { margin-right: 10px; }
   .vp-career .file-name-display {
       margin-top: 10px;
       padding: 10px 14px;
       background: var(--vp-brand-light);
       color: var(--vp-brand-dark);
       border-radius: 8px;
       font-size: 0.9rem;
       font-weight: 500;
   }

   @media (max-width: 768px) {
       .vp-career .career-header h1 { font-size: 1.9rem; }
       .vp-career .career-form-card { padding: 28px 20px; }
   }
</style>

<!-- Header Section -->
<div class="career-header">
    <div class="container text-center">
        <p class="breadcrumbs mb-0">
            <span class="mr-2">
                <a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a>
            </span>
            <span>Career <i class="fa fa-chevron-right"></i></span>
        </p>
        <span class="eyebrow">We're Hiring</span>
        <h1 class="mb-0">Join Our Team</h1>
        <p class="lead-text mb-0">Are you passionate about mental health and helping others thrive? Become part of a compassionate team making a real difference.</p>
    </div>
</div>

<!-- Form Section -->
<div class="container career-wrap">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="career-form-card">
                <div class="vp-form-head">
                    <span class="subheading">Apply Now</span>
                    <h3>Career Application Form</h3>
                    <p>Fill in your details below and attach your resume — we'll be in touch.</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{ route('career.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="name">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}" required>
                    </div>

                    <!-- Qualification Field -->
                    <div class="form-group">
                        <label for="qualification">Qualification <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="qualification" name="qualification" placeholder="e.g., M.Sc. Psychology, PhD in Counseling" value="{{ old('qualification') }}" required>
                    </div>

                    <!-- Years of Experience Field -->
                    <div class="form-group">
                        <label for="experience">Years of Experience <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="experience" name="experience" placeholder="Enter years of experience" value="{{ old('experience') }}" min="0" step="0.5" required>
                    </div>

                    <!-- Resume Upload Field -->
                    <div class="form-group">
                        <label for="resume">Upload Resume <span class="text-danger">*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" class="file-upload-input" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                            <label for="resume" class="file-upload-label">
                                <i class="fa fa-upload"></i>
                                <span id="file-name">Choose File (PDF, DOC, DOCX)</span>
                            </label>
                        </div>
                        <div id="file-name-display" class="file-name-display" style="display: none;"></div>
                        <small class="form-text text-muted">Maximum file size: 5MB. Accepted formats: PDF, DOC, DOCX</small>
                    </div>

                    <!-- Additional Notes -->
                    <div class="form-group">
                        <label for="notes">Additional Information (Optional)</label>
                        <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Tell us about yourself, your goals, and why you'd like to join our team...">{{ old('notes') }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group text-center mt-4">
                        <button type="submit" id="career-submit" class="btn px-5">
                            <i class="fa fa-paper-plane mr-2"></i>
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    // File upload display
    document.getElementById('resume').addEventListener('change', function(e) {
        const fileName = e.target.files[0]?.name || '';
        const fileNameDisplay = document.getElementById('file-name-display');
        const fileLabel = document.getElementById('file-name');

        if (fileName) {
            fileLabel.textContent = fileName;
            fileNameDisplay.textContent = 'Selected: ' + fileName;
            fileNameDisplay.style.display = 'block';
        } else {
            fileLabel.textContent = 'Choose File (PDF, DOC, DOCX)';
            fileNameDisplay.style.display = 'none';
        }
    });

    // Auto-scroll to form after showing header first
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const formCard = document.querySelector('.career-form-card');
            if (formCard) {
                const navbarHeight = 100;
                const targetPosition = formCard.offsetTop - navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }, 2000);
    });
</script>

@endsection
