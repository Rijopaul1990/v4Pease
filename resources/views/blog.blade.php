@extends('layouts.app')

@section('title', 'Mental Health Blog, Tips & Insights | V4Peace')
@section('meta_description', 'Explore the V4Peace blog for expert articles, practical tips and insights on mental health, stress management, relationships, careers and wellbeing from our qualified counsellors.')
@section('meta_keywords', 'mental health blog, counselling tips, stress management articles, wellbeing insights, relationship advice, V4Peace blog')

@section('content')
<div class="vp-blog">
<style>
    .vp-blog { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }

    .vp-blog .blog-card {
        background: white;
        border-radius: 16px;
        box-shadow: 0 12px 35px rgba(92, 53, 53, 0.08);
        border: 1px solid rgba(123,74,74,0.06);
        overflow: hidden;
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .vp-blog .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 22px 48px rgba(92, 53, 53, 0.16);
    }
    .vp-blog .blog-image {
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .vp-blog .blog-card:hover .blog-image { transform: scale(1.06); }
    .vp-blog .blog-content { padding: 28px; display: flex; flex-direction: column; flex: 1; }
    .vp-blog .blog-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #3b2626;
        margin-bottom: 14px;
        line-height: 1.4;
    }
    .vp-blog .blog-excerpt {
        color: #6b5a5a;
        line-height: 1.7;
        margin-bottom: 22px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        flex: 1;
    }
    .vp-blog .blog-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
        font-size: 0.85rem;
    }
    .vp-blog .blog-date { display: flex; align-items: center; color: #9a8888; }
    .vp-blog .blog-date i { margin-right: 6px; color: var(--vp-brand); }
    .vp-blog .blog-category {
        background: var(--vp-brand-light);
        color: var(--vp-brand-dark);
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .03em;
        padding: 4px 12px;
        border-radius: 20px;
    }
    .vp-blog .read-more-btn {
        background: var(--vp-brand);
        color: white;
        padding: 11px 26px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.25s ease;
        display: inline-block;
        align-self: flex-start;
    }
    .vp-blog .read-more-btn:hover {
        background: var(--vp-brand-dark);
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(92, 53, 53, 0.25);
    }

    /* Header */
    .vp-blog .blog-header {
        background: linear-gradient(135deg, var(--vp-brand-dark) 0%, var(--vp-brand) 100%);
        padding: 70px 0 60px;
        margin-bottom: 0;
        position: relative;
        overflow: hidden;
    }
    .vp-blog .blog-header::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-image: url('images/bg_5.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.12;
        z-index: 0;
    }
    .vp-blog .blog-header .container { position: relative; z-index: 1; }
    .vp-blog .blog-header .eyebrow {
        display: inline-block;
        background: rgba(255,255,255,0.14);
        border: 1px solid rgba(255,255,255,0.3);
        color: #ffe8e8;
        padding: 6px 18px;
        border-radius: 30px;
        font-size: 13px;
        letter-spacing: .06em;
        text-transform: uppercase;
        margin-bottom: 16px;
    }
    .vp-blog .blog-header h1 {
        color: white;
        font-size: 2.6rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }
    .vp-blog .blog-header .breadcrumbs { color: rgba(255, 255, 255, 0.85); margin-bottom: 6px; }
    .vp-blog .blog-header .breadcrumbs a { color: white; text-decoration: none; }

    /* Section headings */
    .vp-blog .heading-section .subheading {
        color: var(--vp-brand); font-weight: 600; letter-spacing: .06em;
        text-transform: uppercase; font-size: 14px;
    }
    .vp-blog .heading-section h2 { color: #3b2626; font-weight: 700; }

    /* FAQ accordion */
    .vp-blog #faqAccordion .card {
        border: 1px solid rgba(123,74,74,0.12);
        border-radius: 12px !important;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(92, 53, 53, 0.05);
    }
    .vp-blog #faqAccordion .card-header {
        border-bottom: none;
        padding: 0;
        background: #fff !important;
    }
    .vp-blog #faqAccordion .card-header h5 a {
        display: block;
        padding: 18px 50px 18px 22px;
        color: #3b2626;
        font-weight: 600;
        font-size: 1rem;
        position: relative;
        text-decoration: none;
        transition: all .2s ease;
    }
    .vp-blog #faqAccordion .card-header h5 a:not(.collapsed) {
        color: var(--vp-brand-dark);
        background: var(--vp-cream);
    }
    .vp-blog #faqAccordion .card-header h5 a:after {
        content: "\f078";
        font-family: FontAwesome;
        position: absolute;
        right: 22px; top: 50%;
        transform: translateY(-50%);
        color: var(--vp-brand);
        font-size: 13px;
        transition: transform .25s ease;
    }
    .vp-blog #faqAccordion .card-header h5 a:not(.collapsed):after {
        transform: translateY(-50%) rotate(180deg);
    }
    .vp-blog #faqAccordion .card-body { color: #6b5a5a; line-height: 1.8; }
    .vp-blog #faqAccordion .card-body a { color: var(--vp-brand); font-weight: 600; }

    /* Contact */
    .vp-blog .ftco-appointment .half {
        background: rgba(255, 255, 255, 0.96);
        border-radius: 10px;
        padding: 2.5rem;
        box-shadow: 0 20px 45px rgba(0,0,0,0.25);
    }
    .vp-blog .ftco-appointment .half h2 { color: #3b2626 !important; }
    .vp-blog .ftco-appointment .appointment .btn-primary,
    .vp-blog .ftco-appointment input[type="submit"].btn-primary {
        background: var(--vp-brand) !important;
        border-color: var(--vp-brand) !important;
        color: #fff !important;
        border-radius: 30px !important;
        transition: all .25s ease;
    }
    .vp-blog .ftco-appointment .appointment .btn-primary:hover,
    .vp-blog .ftco-appointment input[type="submit"].btn-primary:hover {
        background: var(--vp-brand-dark) !important;
        border-color: var(--vp-brand-dark) !important;
    }

    @media (max-width: 768px) {
        .vp-blog .blog-header h1 { font-size: 1.9rem; }
        .vp-blog .blog-image { height: 200px; }
        .vp-blog .blog-content { padding: 20px; }
    }
</style>

<!-- Header Section -->
<div class="blog-header">
    <div class="container text-center">
        <p class="breadcrumbs mb-0">
            <span class="mr-2">
                <a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a>
            </span>
            <span>Blog <i class="fa fa-chevron-right"></i></span>
        </p>
        <span class="eyebrow">Insights &amp; Resources</span>
        <h1 class="mb-0">Our Blog</h1>
    </div>
</div>

<!-- Blog Posts Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Insights &amp; Tips</span>
                <h2 class="mb-3">Latest Articles</h2>
            </div>
        </div>

        <div class="row">
            
            @forelse($blogs as $blog)
                <!-- Blog Post -->
                <?php
                //dd($blog->image_url);
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <img src="{{ $blog->image_url }}" 
                             alt="{{ $blog->title }}" 
                             class="blog-image"
                             onerror="this.src='{{ asset('images/staff-1.jpg') }}'">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <div class="blog-date">
                                    <i class="fa fa-calendar"></i>
                                    <span>{{ $blog->post_date->format('F d, Y') }}</span>
                                </div>
                                <span class="blog-category">{{ $blog->workplace }}</span>
                            </div>
                            <h3 class="blog-title">{{ $blog->title }}</h3>
                            <div class="blog-excerpt">
                                {!! Str::limit($blog->display_text, 150) !!}
                            </div>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <h4>No blog posts found</h4>
                        <p>Check back later for new articles!</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="ftco-section pt-0">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">FAQ</span>
                <h2 class="mb-3">Frequently Asked Questions</h2>
                <p class="text-muted">Answers to common questions about our online counseling services.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="faqAccordion" class="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq1">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#faqAccordion" href="#faq-1" aria-expanded="true" aria-controls="faq-1" class="d-block">
                                    1. What is online counseling?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-1" class="collapse show" role="tabpanel" aria-labelledby="faq1">
                            <div class="card-body">
                                <p>Online counseling is a virtual form of therapy or mental health support that allows individuals to connect with licensed and experienced mental health professionals remotely through secure video calls, phone sessions, or chat platforms. It provides the same quality of service as traditional in-person counseling but offers the flexibility and comfort of attending sessions from your preferred location.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq2">
                            <h5 class="mb-0">
                                <a class="collapsed d-block" data-toggle="collapse" data-parent="#faqAccordion" href="#faq-2" aria-expanded="false" aria-controls="faq-2">
                                    2. How secure is my information during online counseling sessions?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-2" class="collapse" role="tabpanel" aria-labelledby="faq2">
                            <div class="card-body">
                                <p>We take your privacy very seriously. All our online counseling sessions are conducted using encrypted, secure, and confidential communication platforms to ensure that your information remains protected. We comply with Indian IT laws and international standards such as GDPR to safeguard your data. Your personal information is only used for administrative purposes related to your sessions and is never shared with third parties unless required by law.</p>
                                <p>For more details, please read our <a href="#">Privacy Policy</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq3">
                            <h5 class="mb-0">
                                <a class="collapsed d-block" data-toggle="collapse" data-parent="#faqAccordion" href="#faq-3" aria-expanded="false" aria-controls="faq-3">
                                    3. How do I book a session?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-3" class="collapse" role="tabpanel" aria-labelledby="faq3">
                            <div class="card-body">
                                <p>Booking a session is quick and simple:</p>
                                <ol>
                                    <li>Visit our <a href="{{ url('/slotBooking') }}">Book a Session</a> page.</li>
                                    <li>Choose the type of counseling service you need and select a date and time that works for you.</li>
                                    <li>Complete the secure online booking form with your details.</li>
                                    <li>Confirm your appointment, and you’ll receive an email with all session details and next steps.</li>
                                </ol>
                                <p>Need help booking? Reach out to us at <a href="mailto:v4peacecounselling@gmail.com">v4peacecounselling@gmail.com</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq4">
                            <h5 class="mb-0">
                                <a class="collapsed d-block" data-toggle="collapse" data-parent="#faqAccordion" href="#faq-4" aria-expanded="false" aria-controls="faq-4">
                                    4. What payment methods do you accept?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-4" class="collapse" role="tabpanel" aria-labelledby="faq4">
                            <div class="card-body">
                                <p>We accept a variety of secure and convenient payment methods to ensure flexibility for our clients:</p>
                                <ul>
                                    <li>UPI transfers</li>
                                    <li>Paytm</li>
                                    <li>Credit/Debit Cards</li>
                                    <li>Net Banking</li>
                                </ul>
                                <p>All payments are processed securely, and a receipt will be sent to your registered email after each transaction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq5">
                            <h5 class="mb-0">
                                <a class="collapsed d-block" data-toggle="collapse" data-parent="#faqAccordion" href="#faq-5" aria-expanded="false" aria-controls="faq-5">
                                    5. Do you offer free consultations?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-5" class="collapse" role="tabpanel" aria-labelledby="faq5">
                            <div class="card-body">
                                <p>We value every client’s journey toward mental well-being. While we do not provide free consultations, we aim to make our services affordable and accessible. Occasionally, we may offer discounted rates or sliding scale fees based on individual needs. For inquiries about pricing or financial concerns, please contact us at <a href="mailto:v4peacecounselling@gmail.com">v4peacecounselling@gmail.com</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq6">
                            <h5 class="mb-0">
                                <a class="collapsed d-block" data-toggle="collapse" data-parent="#faqAccordion" href="#faq-6" aria-expanded="false" aria-controls="faq-6">
                                    6. Can I cancel or reschedule a session?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-6" class="collapse" role="tabpanel" aria-labelledby="faq6">
                            <div class="card-body">
                                <p>Yes! We understand that schedules can change. You can reschedule your session by notifying us at least 24 hours in advance. Late cancellations may result in session fees or adjustments. To reschedule or cancel, use the link provided in your confirmation email or contact us directly at <a href="mailto:v4peacecounselling@gmail.com">v4peacecounselling@gmail.com</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-white" role="tab" id="faq7">
                            <h5 class="mb-0">
                                <a class="collapsed d-block" data-toggle="collapse" data-parent="#faqAccordion" href="#faq-7" aria-expanded="false" aria-controls="faq-7">
                                    7. Is this service suitable for all age groups?
                                </a>
                            </h5>
                        </div>
                        <div id="faq-7" class="collapse" role="tabpanel" aria-labelledby="faq7">
                            <div class="card-body">
                                <p>Our services are primarily designed for individuals aged 15 years and older. However, we understand the unique needs of younger individuals and offer specialized sessions depending on the situation and family involvement. If you’re unsure whether online counseling is appropriate for you or a loved one, contact us directly, and we’ll guide you through the available options.</p>
                                <p>If you have additional questions or need help navigating our services, don’t hesitate to <a href="{{ url('/contactus') }}">Contact Us</a>. We’re here to support you every step of the way.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('happyClient')

<section class="ftco-appointment ftco-section img" id="contact-form" style="background-image: url(images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 half ftco-animate">
                <h2 class="mb-4">Send a Message &amp; Get in touch!</h2>

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

                <form action="{{ route('contact.send') }}" method="POST" class="appointment">
                    @csrf
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}" required>
                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <div class="form-field">
                            <div class="select-wrap">
                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                    <select name="service" class="form-control" required>
                        <option value="">Select Service</option>
                        <option value="Relation Problem" {{ old('service') == 'Relation Problem' ? 'selected' : '' }}>Relation Problem</option>
                        <option value="Couple Counseling" {{ old('service') == 'Couple Counseling' ? 'selected' : '' }}>Couple Counseling</option>
                        <option value="Depression Treatment" {{ old('service') == 'Depression Treatment' ? 'selected' : '' }}>Depression Treatment</option>
                        <option value="Family Problem" {{ old('service') == 'Family Problem' ? 'selected' : '' }}>Family Problem</option>
                        <option value="Personal Problem" {{ old('service') == 'Personal Problem' ? 'selected' : '' }}>Personal Problem</option>
                        <option value="Business Problem" {{ old('service') == 'Business Problem' ? 'selected' : '' }}>Business Problem</option>
                    </select>
                    </div>
                    </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                    <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Message" required>{{ old('message') }}</textarea>
                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                    <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                    </div>
                            </div>
                    </div>
        </form>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

