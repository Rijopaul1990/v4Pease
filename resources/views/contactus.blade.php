@extends('layouts.app')

@section('title', 'Contact Us — Kothamangalam, Kerala | V4Peace')
@section('meta_description', 'Get in touch with V4Peace Counselling Centre in Kothamangalam, Kerala. Call +91 9495702172, email us, or send a message. We usually respond within one business day.')
@section('meta_keywords', 'contact V4Peace, counselling centre Kothamangalam, counsellor phone number Kerala, book counselling contact, mental health help contact')

@section('content')
<div class="vp-contact">

<!-- Hero / Page banner -->
<section class="hero-wrap hero-wrap-2 vp-ct-hero" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact Us <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Contact Us</h1>
        </div>
    </div>
    </div>
</section>

<section class="ftco-section vp-ct-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Get in Touch</span>
                <h2 class="mb-3">We'd Love to Hear From You</h2>
                <p class="vp-ct-lead">Have a question or want to book a session? Reach out through any of the channels below or send us a message.</p>
            </div>
        </div>

        <!-- Info cards -->
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="vp-info-box">
                    <div class="vp-info-icon"><span class="fa fa-map-marker"></span></div>
                    <h5>Address</h5>
                    <p>Kothamangalam, Ernakulam, Kerala, India</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="vp-info-box">
                    <div class="vp-info-icon"><span class="fa fa-phone"></span></div>
                    <h5>Phone</h5>
                    <p><a href="tel:+919495702172">+91 9495702172</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="vp-info-box">
                    <div class="vp-info-icon"><span class="fa fa-paper-plane"></span></div>
                    <h5>Email</h5>
                    <p><a href="mailto:v4peacecounselling@gmail.com">v4peacecounselling@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="vp-info-box">
                    <div class="vp-info-icon"><span class="fa fa-globe"></span></div>
                    <h5>Website</h5>
                    <p><a href="https://v4peace.com" target="_blank">v4peace.com</a></p>
                </div>
            </div>
        </div>

        <!-- Form + Map -->
        <div class="row no-gutters vp-ct-panel">
            <div class="col-lg-7">
                <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-2 vp-ct-form-title">Send Us a Message</h3>
                    <p class="vp-ct-form-sub mb-4">We usually respond within one business day.</p>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
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

                    <form method="POST" action="{{ route('contact.send.page') }}" id="contactForm" name="contactForm" class="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required>{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 d-flex">
                <div class="vp-map w-100">
                    <iframe
                        src="https://www.google.com/maps?q=Kothamangalam,+Kerala,+India&z=13&output=embed"
                        style="border:0; width:100%; height:100%;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="V4Peace location — Kothamangalam, Kerala">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

<style>
    .vp-contact { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }

    /* Page banner */
    .vp-contact .vp-ct-hero { position: relative; }
    .vp-contact .vp-ct-hero .overlay {
        background: linear-gradient(135deg, rgba(45,20,25,0.80) 0%, rgba(123,74,74,0.55) 100%);
        opacity: 1;
    }
    .vp-contact .vp-ct-hero .bread { color: #fff !important; font-weight: 700; text-shadow: 0 4px 20px rgba(0,0,0,.45); }
    .vp-contact .vp-ct-hero .breadcrumbs { text-transform: uppercase; letter-spacing: .08em; font-size: 13px; }
    .vp-contact .vp-ct-hero .breadcrumbs,
    .vp-contact .vp-ct-hero .breadcrumbs span,
    .vp-contact .vp-ct-hero .breadcrumbs a { color: #ffe0e0 !important; }

    .vp-contact .vp-ct-section { background: var(--vp-cream); }
    .vp-contact .heading-section .subheading {
        color: var(--vp-brand); font-weight: 600; letter-spacing: .06em;
        text-transform: uppercase; font-size: 14px;
    }
    .vp-contact .heading-section h2 { color: #3b2626; font-weight: 700; }
    .vp-contact .vp-ct-lead { color: #6b5a5a; max-width: 620px; margin: 0 auto; }

    /* Info cards */
    .vp-contact .vp-info-box {
        background: #fff;
        border-radius: 14px;
        padding: 2rem 1.2rem;
        text-align: center;
        height: 100%;
        box-shadow: 0 12px 35px rgba(92, 53, 53, 0.07);
        border: 1px solid rgba(123,74,74,0.06);
        transition: all .3s ease;
    }
    .vp-contact .vp-info-box:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 45px rgba(92, 53, 53, 0.15);
    }
    .vp-contact .vp-info-icon {
        width: 64px; height: 64px; margin: 0 auto 1rem;
        border-radius: 50%;
        background: var(--vp-brand-light);
        display: flex; align-items: center; justify-content: center;
        transition: all .3s ease;
    }
    .vp-contact .vp-info-icon span { font-size: 26px; color: var(--vp-brand-dark); }
    .vp-contact .vp-info-box:hover .vp-info-icon { background: var(--vp-brand); }
    .vp-contact .vp-info-box:hover .vp-info-icon span { color: #fff; }
    .vp-contact .vp-info-box h5 { color: #3b2626; font-weight: 600; font-size: 16px; margin-bottom: .5rem; }
    .vp-contact .vp-info-box p { color: #6b5a5a; font-size: 14px; margin-bottom: 0; word-break: break-word; }
    .vp-contact .vp-info-box p a { color: #6b5a5a; }
    .vp-contact .vp-info-box:hover p a { color: var(--vp-brand); }

    /* Form + Map panel */
    .vp-contact .vp-ct-panel {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 55px rgba(92, 53, 53, 0.10);
    }
    .vp-contact .contact-wrap { background: #fff; }
    .vp-contact .vp-ct-form-title { color: #3b2626; font-weight: 700; }
    .vp-contact .vp-ct-form-sub { color: #9a8888; }
    .vp-contact .contact-wrap .label { font-weight: 600; color: #4a3838; }
    .vp-contact .contact-wrap .form-control {
        border-radius: 10px;
        border: 1px solid #e4d9d6;
        padding: 12px 15px;
        background: #fffdfc;
        transition: all .25s ease;
    }
    .vp-contact .contact-wrap .form-control:focus {
        border-color: var(--vp-brand);
        box-shadow: 0 0 0 0.2rem rgba(123, 74, 74, 0.15);
        background: #fff;
    }
    .vp-contact .contact-wrap .btn-primary {
        background: var(--vp-brand) !important;
        border-color: var(--vp-brand) !important;
        color: #fff !important;
        border-radius: 30px !important;
        padding: 12px 34px;
        font-weight: 600;
        transition: all .25s ease;
    }
    .vp-contact .contact-wrap .btn-primary:hover {
        background: var(--vp-brand-dark) !important;
        border-color: var(--vp-brand-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(92, 53, 53, 0.25);
    }

    /* Map */
    .vp-contact .vp-map { min-height: 420px; }
    .vp-contact .vp-map iframe { display: block; min-height: 420px; }

    @media (max-width: 991.98px) {
        .vp-contact .vp-map { min-height: 320px; }
        .vp-contact .vp-map iframe { min-height: 320px; }
    }
</style>
@endsection
