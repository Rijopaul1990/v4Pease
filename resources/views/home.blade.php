@extends('layouts.app')

@section('title', 'Online Counselling & Therapy in Kerala | V4Peace Counselling Centre')
@section('meta_description', 'V4Peace is a government-approved, ISO 9001:2015 certified online counselling centre in Kerala. Confidential support for stress, relationships, careers, trauma & personal growth. Book your session today.')
@section('meta_keywords', 'online counselling Kerala, counselling centre Kothamangalam, online therapist India, mental health support, career counselling, relationship counselling, stress management, V4Peace')

@section('content')
<div class="vp-home">
<!-- Hero Section -->
<div class="hero-wrap d-flex align-items-center justify-content-center text-center"
     style="background-image: url('images/home_l.png'); background-size: cover; background-position: center; height: 100vh; position: relative;">

  <!-- Overlay -->
  <div class="overlay"
       style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;
              background: linear-gradient(135deg, rgba(45,20,25,0.75) 0%, rgba(123,74,74,0.55) 55%, rgba(45,20,25,0.75) 100%); z-index: 1;">
  </div>

  <!-- Content -->
  <div class="container position-relative z-2" style="z-index: 2;">
    <div class="row justify-content-center">
      <div class="col-lg-9 text-white animate__animated animate__fadeInUp hero-content">
        <span class="hero-eyebrow d-inline-flex align-items-center mb-4">
          <span class="dot"></span> Trusted Online Counselling Centre
        </span>
        <h1 class="hero-title mb-3">
          v4peace
        </h1>
        <h5 class="hero-subtitle mb-4">
          Recognize Beats of Peace
        </h5>
        <p class="hero-lead mb-5">
          A globally trusted online counselling centre, empowering individuals to find peace of
          mind, personal growth, and happiness through compassionate, professional, and accessible
          mental health support.
        </p>

        <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
          <a href="{{ url('/slotBooking') }}" class="btn btn-hero-primary btn-lg px-4 py-3">
            Book Your Session <span class="fa fa-arrow-right ml-2"></span>
          </a>
          <a href="#services-section" class="btn btn-hero-outline btn-lg px-4 py-3">
            Explore Services
          </a>
        </div>

        <div class="hero-stats row justify-content-center no-gutters">
          <div class="col-4 col-md-3 hero-stat">
            <span class="hero-stat-num">100%</span>
            <span class="hero-stat-label">Confidential</span>
          </div>
          <div class="col-4 col-md-3 hero-stat">
            <span class="hero-stat-num">15+</span>
            <span class="hero-stat-label">Expert Counsellors</span>
          </div>
          <div class="col-4 col-md-3 hero-stat">
            <span class="hero-stat-num">24/7</span>
            <span class="hero-stat-label">Online Access</span>
          </div>
        </div>

        <!-- Accreditation badges — inline version for mobile/tablet -->
        <div class="hero-cert-inline d-flex d-lg-none">
          <div class="hero-cert" title="Government Approved">
            <span class="hero-cert-badge"><img src="{{ asset('images/GOVERNMENT_badge.png') }}" alt="Government Approved — V4Peace Counselling Centre"></span>
            <span class="hero-cert-label">Government<br>Approved</span>
          </div>
          <div class="hero-cert" title="ISO 9001:2015 Certified">
            <span class="hero-cert-badge"><img src="{{ asset('images/ISO_badge.png') }}" alt="ISO 9001:2015 Certified — V4Peace Counselling Centre"></span>
            <span class="hero-cert-label">ISO 9001:2015<br>Certified</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Accreditation badges — floating top-left of hero -->
  <div class="hero-cert-float d-none d-lg-flex">
    <div class="hero-cert" title="Government Approved — Official Certification">
      <span class="hero-cert-badge"><img src="{{ asset('images/GOVERNMENT_badge.png') }}" alt="Government Approved — V4Peace Counselling Centre"></span>
      <span class="hero-cert-label">Government<br>Approved</span>
    </div>
    <div class="hero-cert" title="ISO 9001:2015 Certified — Quality Management System">
      <span class="hero-cert-badge"><img src="{{ asset('images/ISO_badge.png') }}" alt="ISO 9001:2015 Certified — V4Peace Counselling Centre"></span>
      <span class="hero-cert-label">ISO 9001:2015<br>Certified</span>
    </div>
  </div>

  <a href="#intro-section" class="scroll-down-indicator d-none d-md-flex" aria-label="Scroll down">
    <span class="fa fa-chevron-down"></span>
  </a>
</div>

<!-- Home page scoped styling -->
<style>
  .vp-home { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }

  html { scroll-behavior: smooth; }

  /* Smooth scroll with offset for fixed header */
  .vp-home section[id] { scroll-margin-top: 80px; }

  .vp-home .hero-eyebrow {
    background: rgba(255,255,255,0.12);
    border: 1px solid rgba(255,255,255,0.35);
    color: #ffe8e8;
    padding: 6px 18px;
    border-radius: 30px;
    font-size: 13px;
    letter-spacing: .06em;
    text-transform: uppercase;
  }
  .vp-home .hero-eyebrow .dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: #6ee7a0; margin-right: 10px; display: inline-block;
  }
  .vp-home .hero-title {
    font-family: 'Edu NSW ACT Hand', cursive;
    font-weight: 700;
    font-size: 4rem;
    color: #fff;
    text-shadow: 0 4px 24px rgba(0,0,0,0.35);
  }
  .vp-home .hero-subtitle {
    font-family: 'Edu NSW ACT Hand', cursive;
    color: #ffe8e8;
    font-size: 1.4rem;
  }
  .vp-home .hero-lead {
    font-family: 'Roboto', sans-serif;
    color: #fdf3f3;
    max-width: 640px;
    margin-left: auto;
    margin-right: auto;
    font-size: 1.05rem;
  }
  .vp-home .btn-hero-primary {
    background: var(--vp-brand);
    border: 1px solid var(--vp-brand);
    color: #fff;
    border-radius: 30px;
    font-weight: 500;
    transition: all .25s ease;
  }
  .vp-home .btn-hero-primary:hover {
    background: var(--vp-brand-dark);
    border-color: var(--vp-brand-dark);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.25);
  }
  .vp-home .btn-hero-outline {
    background: transparent;
    border: 1px solid rgba(255,255,255,0.7);
    color: #fff;
    border-radius: 30px;
    font-weight: 500;
    transition: all .25s ease;
  }
  .vp-home .btn-hero-outline:hover {
    background: rgba(255,255,255,0.15);
    color: #fff;
    transform: translateY(-2px);
  }
  .vp-home .hero-stats { max-width: 560px; margin: 0 auto; }

  /* Accreditation badges — floating top-left of hero */
  .vp-home .hero-cert-float {
    position: absolute; top: 24%; left: 48px; z-index: 3;
    display: flex; gap: 26px;
  }
  .vp-home .hero-cert {
    display: flex; flex-direction: column; align-items: center;
    gap: 10px; text-align: center;
  }
  .vp-home .hero-cert-badge {
    width: 132px; height: 132px; flex: 0 0 132px;
    display: inline-flex;
    transition: transform .25s ease;
  }
  .vp-home .hero-cert-badge img {
    width: 100%; height: 100%; object-fit: contain; display: block;
    filter: drop-shadow(0 6px 14px rgba(0, 0, 0, 0.55));
  }
  .vp-home .hero-cert:hover .hero-cert-badge { transform: translateY(-5px) scale(1.04); }
  .vp-home .hero-cert-label {
    color: #fff; font-weight: 600;
    font-size: 14px; line-height: 1.25; text-shadow: 0 2px 8px rgba(0,0,0,.5);
  }
  @media (max-width: 1399.98px) {
    .vp-home .hero-cert-float { left: 28px; gap: 20px; }
    .vp-home .hero-cert-float .hero-cert-badge { width: 112px; height: 112px; flex: 0 0 112px; }
  }

  /* Inline badges for mobile/tablet (shown below the hero stats) */
  .vp-home .hero-cert-inline {
    justify-content: center; gap: 26px;
    margin-top: 28px; padding-top: 22px;
    border-top: 1px solid rgba(255,255,255,0.18);
  }
  .vp-home .hero-cert-inline .hero-cert-badge { width: 78px; height: 78px; flex: 0 0 78px; }
  .vp-home .hero-cert-inline .hero-cert-label { font-size: 12px; }
  @media (max-width: 359.98px) {
    .vp-home .hero-cert-inline { gap: 16px; }
    .vp-home .hero-cert-inline .hero-cert-badge { width: 62px; height: 62px; flex: 0 0 62px; }
  }
  .vp-home .hero-stat {
    display: flex; flex-direction: column; align-items: center;
    border-left: 1px solid rgba(255,255,255,0.25);
    padding: 4px 8px;
  }
  .vp-home .hero-stat:first-child { border-left: none; }
  .vp-home .hero-stat-num { font-size: 1.4rem; font-weight: 700; color: #fff; }
  .vp-home .hero-stat-label { font-size: 12px; color: #f1dede; text-transform: uppercase; letter-spacing: .04em; }

  .vp-home .scroll-down-indicator {
    position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
    width: 40px; height: 40px; border-radius: 50%; z-index: 2;
    border: 1px solid rgba(255,255,255,0.6); color: #fff;
    align-items: center; justify-content: center;
    animation: vpBounce 2s infinite;
  }
  @keyframes vpBounce {
    0%, 100% { transform: translate(-50%, 0); }
    50% { transform: translate(-50%, -8px); }
  }

  /* Reserve space at the bottom of the hero so the stats row is never
     clipped by the intro cards that overlap upward into the hero. */
  .vp-home .hero-content { margin-left: 0; padding-bottom: 130px; }
  .vp-home .hero-stats { margin-bottom: 0; }

  @media (max-width: 991px) {
    .vp-home .hero-title { font-size: 2.6rem; }
    .vp-home .hero-content { padding-bottom: 40px; }
    /* Let the hero grow to fit all content (incl. badges) instead of clipping at 100vh */
    .vp-home .hero-wrap.hero-wrap { height: auto !important; min-height: 100vh; padding: 40px 0; }
  }
</style>

<section class="ftco-intro" id="intro-section">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex">
                <div class="intro aside-stretch d-lg-flex w-100">
                    <div class="icon">
                        <span class="flaticon-checklist"></span>
                    </div>
                    <div class="text">
                        <h2>Flexible & Accessible Services </h2>
                        <p>We’re here to meet your needs with convenience and flexibility.
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-1 d-lg-flex w-100">
                    <div class="icon">
                        <span class="flaticon-employee"></span>
                    </div>
                    <div class="text">
                        <h2>Qualified Team</h2>
                        <p>Master's, Doctorates and certifications in Psychology, Counseling & Mental Health
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="intro color-2 d-lg-flex w-100">
                    <div class="icon">
                        <span class="flaticon-umbrella"></span>
                    </div>
                    <div class="text">
                        <h2>Individual Approach</h2>
                        <p>We recognize that every client’s journey is unique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(isset($socialPosts) && $socialPosts->count())
<!-- Social Media Posts -->
<section class="ftco-section vp-social-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Follow Us</span>
                <h2 class="mb-3">Latest from Social Media</h2>
                <p class="vp-social-lead">Catch our newest updates, tips and stories. Tap any post to view it on social media.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($socialPosts as $post)
            @php
                $platformIcons = ['Instagram' => 'fa-instagram', 'Facebook' => 'fa-facebook', 'Twitter' => 'fa-twitter', 'YouTube' => 'fa-youtube-play', 'LinkedIn' => 'fa-linkedin'];
                $icon = $platformIcons[$post->platform] ?? 'fa-share-alt';
            @endphp
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <a href="{{ $post->link }}" target="_blank" rel="noopener" class="vp-social-card">
                    <div class="vp-social-img" style="background-image: url('{{ $post->image_url }}');">
                        <span class="vp-social-platform"><span class="fa {{ $icon }}"></span></span>
                        <span class="vp-social-overlay"><span class="fa fa-external-link"></span> View Post</span>
                    </div>
                    <div class="vp-social-body">
                        <span class="vp-social-tag">{{ $post->platform }}</span>
                        <h3 class="vp-social-title">{{ $post->title }}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Getting Started</span>
        <h2>How It Works</h2>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-calendar"></span>
                        </div>
                    </div>
                    <h2>Online Booking System</h2>
                    <p>Book your appointments quickly and easily online.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-qa"></span>
                        </div>
                    </div>
                    <h2>Start Discussion</h2>
                    <p>Begin a conversation with our expert counselors today.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch ftco-animate">
                <div class="services-2 text-center">
                    <div class="icon-wrap">
                        <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-checklist"></span>
                        </div>
                    </div>
                    <h2>Enjoy Plan</h2>
                    <p>Follow your personalized plan and see the results unfold.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/who_we_are.png);">
            </div>
            <div class="col-md-6 wrap-about px-md-5 ftco-animate py-5 bg-light">
        <div class="heading-section">
        <!--<span class="subheading">Welcome to Counselor</span>-->
        <h2 class="mb-4">Who We Are</h2>

        <p>Founded on the principles of empathy, professionalism, and credibility, V4Peace brings together a diverse team of experienced counselors and therapists with extensive expertise across mental health, personal development, and well-being. Our mission is simple yet powerful: to support individuals, couples, and families in overcoming obstacles and achieving emotional balance.
</p>
        <p>We combine evidence-based techniques with a client-centered approach, ensuring that you feel heard, understood, and empowered throughout your journey with us.
</p>

        <ul class="vp-who-we-are-list list-unstyled mt-3 mb-4">
            <li><span class="fa fa-check-circle"></span> Confidential & compassionate sessions</li>
            <li><span class="fa fa-check-circle"></span> Qualified, credentialed counsellors</li>
            <li><span class="fa fa-check-circle"></span> Flexible online scheduling</li>
        </ul>

        <a href="{{ url('/counselor') }}" class="btn vp-btn-outline-brand px-4 py-2">Meet Our Counsellors</a>

        <!-- <a href="https://vimeo.com/45830194" class="play-video popup-vimeo d-flex align-items-center mt-4">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-play"></span></div>
            <span class="watch">Watch Our Consultant Video</span>
        </a> -->
        </div>

            </div>
        </div>
    </div>
</section>

<!-- Stats / Impact Band -->
<section class="vp-stats-band">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-3 vp-stat ftco-animate">
                <div class="vp-stat-icon"><span class="flaticon-employee"></span></div>
                <span class="vp-stat-num" data-number="15">0</span><span class="vp-stat-plus">+</span>
                <p class="vp-stat-label">Expert Counsellors</p>
            </div>
            <div class="col-6 col-md-3 vp-stat ftco-animate">
                <div class="vp-stat-icon"><span class="flaticon-qa"></span></div>
                <span class="vp-stat-num" data-number="19">0</span>
                <p class="vp-stat-label">Areas of Support</p>
            </div>
            <div class="col-6 col-md-3 vp-stat ftco-animate">
                <div class="vp-stat-icon"><span class="flaticon-checklist"></span></div>
                <span class="vp-stat-num" data-number="2500">0</span><span class="vp-stat-plus">+</span>
                <p class="vp-stat-label">Sessions Delivered</p>
            </div>
            <div class="col-6 col-md-3 vp-stat ftco-animate">
                <div class="vp-stat-icon"><span class="flaticon-umbrella"></span></div>
                <span class="vp-stat-num" data-number="98">0</span><span class="vp-stat-plus">%</span>
                <p class="vp-stat-label">Client Satisfaction</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">Our Services</span>
            <h2 class="mb-3">We Can Help You With These Situations</h2>
        </div>
        </div>
        <div class="row tabulation mt-4 ftco-animate">
        <div class="col-md-4">
                <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                    <li class="nav-item text-left">
                    <a class="nav-link active py-4" data-toggle="tab" href="#services-1">Career Counseling & Guidance</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-2">Relationship & Marriage Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-3">Life Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-4">Parenting Support & Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-5">Stress Management & Resilience Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-6">Grief & Loss Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-7">Trauma Recovery Support</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-8">Behavioral Coaching & Habit Change</a>
                    </li>
                    <!-- <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-9">Financial Counseling</a>
                    </li> -->
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-10">Support for LGBTQIA+ Clients</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-11">Health & Wellness Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-12">Digital Well-being Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-13">Crisis Intervention Services</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-14">Cultural Adaptation & Cross-Cultural Support</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-15">Peer Support Counseling</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-16">Mindfulness & Meditation Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-17">Performance Mindset Coaching</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-18">Focus & Concentration Enhancement</a>
                    </li>
                    <li class="nav-item text-left">
                    <a class="nav-link py-4" data-toggle="tab" href="#services-19">Work-Life Balance for Professionals</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane container p-0 active" id="services-1">
                    <div class="img" style="background-image: url(images/career_counselling_home.png);"></div>
                    <h3><a href="#">Shape Your Future with Confidence</a></h3>
                    <p>Choosing the right career is one of the most important decisions in life. Whether you're a student exploring options, a graduate unsure about your next step, or a professional seeking a career shift, our Career Counseling & Guidance services are designed to help you make informed, confident, and fulfilling choices.</p>
                    <h2>What is Career Counseling?</h2>
                    <p>Career counseling is a structured process that helps individuals understand their strengths, interests, skills, and values to make informed decisions about their education, career path, or professional development. Our expert counselors work one-on-one with clients to explore various career opportunities and create a personalized action plan.</p>
                    <h2>Who Can Benefit?</h2>
                    <ul>
                        <li>
                        <strong>High School Students</strong> – Discover suitable streams and courses aligned with your potential.
                        </li>
                        <li>
                        <strong>College Students</strong> – Find clarity on career options based on your education and interests.
                        </li>
                        <li>
                        <strong>Graduates</strong> – Learn about industry trends, competitive exams, and higher education pathways.
                        </li>
                        <li>
                        <strong>Working Professionals</strong> – Make smooth transitions, explore growth opportunities, or switch careers with confidence.
                        </li>
                    </ul>
                    <h2>Our Approach</h2>
                    <ul>
                        <li>
                        <strong>Aptitude and Personality Assessments</strong><br>
                        We use scientifically validated tools to identify your core strengths and career preferences.
                        </li>
                        <li>
                        <strong>Goal Setting &amp; Planning</strong><br>
                        Our counselors help you define your short-term and long-term career goals, along with actionable steps to achieve them.
                        </li>
                        <li>
                        <strong>Market &amp; Industry Insights</strong><br>
                        Get updated information about trending careers, job prospects, salaries, and skill requirements.
                        </li>
                        <li>
                        <strong>Interview &amp; Resume Support</strong><br>
                        We offer training on resume building, interview preparation, and soft skills development.
                        </li>
                    </ul>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-2">
                    <div class="img" style="background-image: url(images/relationship_counselling_home.png);"></div>
                    <h3><a href="#">Couples Counseling</a></h3>
                    <h2>Relationship &amp; Marriage Counseling</h2>
  <p>
    Healthy relationships are the foundation of emotional well-being. Our <strong>Relationship &amp; Marriage Counseling</strong> services are designed to help couples and individuals build strong, respectful, and fulfilling partnerships.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>Couples</strong> – Strengthen communication, resolve conflicts, and build emotional intimacy.
    </li>
    <li>
      <strong>Married Individuals</strong> – Address issues like trust, compatibility, and stress that may affect the relationship.
    </li>
    <li>
      <strong>Pre-marital Couples</strong> – Prepare for marriage with clarity on expectations, values, and future planning.
    </li>
    <li>
      <strong>Individuals Facing Breakups or Divorce</strong> – Receive emotional support, clarity, and coping strategies.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Open &amp; Safe Communication</strong><br>
      We create a non-judgmental space for both partners to express themselves and be heard.
    </li>
    <li>
      <strong>Conflict Resolution Strategies</strong><br>
      Learn how to manage disagreements constructively and respectfully.
    </li>
    <li>
      <strong>Emotional Connection Building</strong><br>
      Strengthen the bond between partners through empathy, trust, and shared goals.
    </li>
    <li>
      <strong>Guidance for Life Transitions</strong><br>
      Navigate major life events like parenting, relocation, or career shifts with mutual understanding.
    </li>
  </ul>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-3">
                    <div class="img" style="background-image: url(images/life_coaching_home.png);"></div>
                    <h2>Life Coaching</h2>
  <p>
    Life Coaching is a powerful, client-focused process that helps individuals unlock their full potential and achieve personal and professional goals. Our expert life coaches guide you in gaining clarity, building confidence, and creating a meaningful, purpose-driven life.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>Individuals Seeking Direction</strong> – Discover your passions, strengths, and a clear sense of purpose.
    </li>
    <li>
      <strong>Professionals Wanting Growth</strong> – Improve productivity, leadership skills, and work-life balance.
    </li>
    <li>
      <strong>People in Transition</strong> – Navigate life changes such as career shifts, relocation, or personal reinvention.
    </li>
    <li>
      <strong>Anyone Feeling Stuck</strong> – Break free from limiting beliefs, procrastination, or negative patterns.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Goal Clarification</strong><br>
      We help you define meaningful, realistic goals aligned with your values and aspirations.
    </li>
    <li>
      <strong>Action-Oriented Planning</strong><br>
      Develop a practical, step-by-step strategy to move forward confidently.
    </li>
    <li>
      <strong>Mindset Shifting</strong><br>
      Learn techniques to overcome self-doubt, fear, and mental roadblocks.
    </li>
    <li>
      <strong>Accountability &amp; Support</strong><br>
      Stay on track with regular check-ins, motivation, and constructive feedback.
    </li>
  </ul>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-4">
                    <div class="img" style="background-image: url(images/services-4.jpg);"></div>
                    <h2>Parenting Support &amp; Counseling</h2>
  <p>
    Parenting is one of life’s most rewarding yet challenging roles. Our <strong>Parenting Support &amp; Counseling</strong> services offer guidance, strategies, and emotional support to help parents build strong, healthy relationships with their children and confidently navigate every stage of parenthood.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>New Parents</strong> – Adjust to parenting roles, understand infant needs, and manage early-stage challenges.
    </li>
    <li>
      <strong>Parents of School-Age Children</strong> – Learn effective discipline, communication, and support strategies.
    </li>
    <li>
      <strong>Parents of Teenagers</strong> – Deal with emotional changes, peer influence, and academic stress.
    </li>
    <li>
      <strong>Parents Facing Special Challenges</strong> – Get support for parenting children with behavioral, emotional, or developmental issues.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Child-Centered Understanding</strong><br>
      Understand your child's developmental needs, emotions, and behaviors.
    </li>
    <li>
      <strong>Positive Parenting Techniques</strong><br>
      Learn proven strategies to foster trust, discipline with empathy, and build confidence in children.
    </li>
    <li>
      <strong>Emotional Support for Parents</strong><br>
      Address stress, guilt, burnout, and find emotional balance in your parenting journey.
    </li>
    <li>
      <strong>Family Communication Skills</strong><br>
      Strengthen parent-child relationships through healthy communication and conflict resolution.
    </li>
  </ul>
                    </div>
      <div class="tab-pane container p-0 fade" id="services-5">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Stress Management &amp; Resilience Coaching</h2>
        <p>In today’s fast-paced world, stress has become a common part of life. Our <strong>Stress Management &amp; Resilience Coaching</strong> helps individuals identify sources of stress, develop healthy coping mechanisms, and build emotional resilience to face challenges with confidence and calm.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            <strong>Students &amp; Exam Candidates</strong> – Cope with academic pressure, anxiety, and performance stress.
          </li>
          <li>
            <strong>Working Professionals</strong> – Manage work-related stress, burnout, and time pressures.
          </li>
          <li>
            <strong>Caregivers &amp; Homemakers</strong> – Find emotional balance while managing responsibilities at home or in caregiving roles.
          </li>
          <li>
            <strong>Anyone Facing Life Challenges</strong> – Build strength to deal with loss, change, uncertainty, or emotional overload.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Stress Awareness &amp; Identification</strong><br>
            Learn to recognize early signs of stress and understand its sources.
          </li>
          <li>
            <strong>Relaxation &amp; Mindfulness Techniques</strong><br>
            Practice deep breathing, meditation, and body awareness for emotional balance.
          </li>
          <li>
            <strong>Resilience Building Strategies</strong><br>
            Cultivate optimism, adaptability, and a proactive mindset to overcome challenges.
          </li>
          <li>
            <strong>Lifestyle &amp; Time Management Tips</strong><br>
            Improve sleep, nutrition, work-life balance, and personal boundaries for long-term well-being.
          </li>
        </ul>
    </div>
                    <div class="tab-pane container p-0 fade" id="services-6">
                    <div class="img" style="background-image: url(images/grief_and_loss_counselling.png);"></div>
                    <h2>Grief &amp; Loss Counseling</h2>
  <p>
    Coping with the loss of a loved one or experiencing major life changes can be overwhelming. Our <strong>Grief &amp; Loss Counseling</strong> services provide a compassionate space to process emotions, find meaning, and begin the journey toward healing and acceptance.
  </p>

  <h3>Who Can Benefit?</h3>
  <ul>
    <li>
      <strong>Individuals Mourning a Loved One</strong> – Navigate the emotional stages of grief and loss.
    </li>
    <li>
      <strong>People Facing Major Life Changes</strong> – Cope with separation, divorce, job loss, or retirement.
    </li>
    <li>
      <strong>Caregivers &amp; Survivors</strong> – Deal with anticipatory grief or survivor’s guilt in caregiving or traumatic situations.
    </li>
    <li>
      <strong>Children &amp; Teens Experiencing Loss</strong> – Get age-appropriate emotional support to understand and express grief.
    </li>
  </ul>

  <h3>Our Approach</h3>
  <ul>
    <li>
      <strong>Compassionate Listening</strong><br>
      We provide a safe, empathetic environment where you can express your thoughts and feelings freely.
    </li>
    <li>
      <strong>Grief Education &amp; Awareness</strong><br>
      Understand the stages and individual nature of grief to reduce confusion and self-blame.
    </li>
    <li>
      <strong>Emotional Healing Techniques</strong><br>
      Engage in reflection, journaling, mindfulness, or creative expression to work through pain.
    </li>
    <li>
      <strong>Hope &amp; Meaning-Making</strong><br>
      Explore ways to honor the past, rebuild life, and find purpose after loss.
    </li>
  </ul>
                    </div>
      <div class="tab-pane container p-0 fade" id="services-7">
        <div class="img" style="background-image: url(images/trauma.png);"></div>
        <h2>Trauma Recovery Support</h2>
        <p>Recovering from trauma takes time, care, and the right support. Our Trauma Recovery services
            help individuals process painful experiences, build resilience, and regain a sense of safety and
            control in their lives.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Survivors of Abuse or Violence – Heal from physical, emotional, or sexual trauma in a
            safe, nonjudgmental space.
          </li>
          <li>
            Accident or Disaster Survivors – Process shock, fear, and recurring memories after
            traumatic events.
          </li>
          <li>
            Individuals with PTSD Symptoms – Manage triggers, flashbacks, and emotional
            numbness effectively.
          </li>
          <li>
            First Responders or Caregivers – Address compassion fatigue and secondary trauma
            exposure.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Safety &amp; Stabilization</strong><br>
            Establish emotional safety and grounding techniques.
          </li>
          <li>
            <strong>Trauma-Informed Therapy</strong><br>
            Understand how trauma impacts thoughts, behavior, and the body.
          </li>
          <li>
            <strong>Emotional Regulation Tools</strong><br>
            Develop strategies to reduce anxiety, panic, and distress.
          </li>
          <li>
            <strong>Empowerment &amp; Growth</strong><br>
            Rebuild trust, self-worth, and confidence through guided recovery.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-8">
        <div class="img" style="background-image: url(images/Behavioural.png);"></div>
        <h2>Behavioral Coaching &amp; Habit Change</h2>
        <p>Breaking unhelpful patterns and building healthier habits can transform your daily life. Our
            Behavioral Coaching helps you identify what holds you back and guides you toward consistent,
            positive change.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Individuals Seeking Personal Growth – Build discipline and self-awareness.
          </li>
          <li>
            Professionals Managing Procrastination or Burnout – Replace unproductive habits with
            goal-oriented routines.
          </li>
          <li>
            People with Addictive Behaviors – Develop self-control and mindful choices.
          </li>
          <li>
            Anyone Seeking Motivation – Create sustainable lifestyle changes for long-term success.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Behavioral Assessment</strong><br>
            Understand current patterns and their triggers.
          </li>
          <li>
            <strong>Goal-Oriented Coaching</strong><br>
            Set realistic, measurable milestones.
          </li>
          <li>
            <strong>Accountability Systems</strong><br>
            Stay on track with guided follow-ups and feedback.
          </li>
          <li>
            <strong>Positive Reinforcement</strong><br>
            Strengthen progress through encouragement and reward-based methods.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-10">
        <div class="img" style="background-image: url(images/LGBT.png);"></div>
        <h2>Support for LGBTQIA+ Clients</h2>
        <p>We provide a respectful, affirming, and confidential space for LGBTQIA+ individuals to explore
            identity, relationships, and emotional well-being without fear of judgment or discrimination.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li>
            Individuals Exploring Gender or Sexual Identity – Find clarity, confidence, and
            acceptance.
          </li>
          <li>
            Those Facing Discrimination or Rejection – Heal from social stigma and internalized
              stress.
          </li>
          <li>
            Couples &amp; Families – Navigate communication, acceptance, and relationship dynamics.
          </li>
          <li>
            Youth in Transition – Access emotional support and guidance during identity formation.
          </li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li>
            <strong>Affirmative Counseling</strong><br>
            Celebrate and validate each person’s unique identity.
          </li>
          <li>
            <strong>Safe &amp; Inclusive Environment</strong><br>
            Foster openness, respect, and belonging.
          </li>
          <li>
            <strong>Identity Empowerment</strong><br>
            Strengthen self-acceptance and resilience.
          </li>
          <li>
            <strong>Community Resource Guidance </strong><br>
            Connect clients with inclusive networks and support Systems.
          </li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-11">
        <div class="img" style="background-image: url(images/healthandwelness.png);"></div>
        <h2>Health &amp; Wellness Counseling</h2>
        <p>Achieving mental wellness goes hand in hand with physical health. Our Health &amp; Wellness Counseling focuses on lifestyle balance, stress management, and overall well-being to help you thrive holistically.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Individuals Managing Stress or Fatigue</strong> – Learn strategies to restore energy and calm.</li>
          <li><strong>Those Coping with Chronic Illness</strong> – Build emotional strength to live meaningfully.</li>
          <li><strong>People Seeking Healthier Lifestyles</strong> – Balance diet, exercise, and rest with professional guidance.</li>
          <li><strong>Anyone Seeking Preventive Wellness</strong> – Foster resilience and mental clarity for long-term health.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Mind-Body Connection</strong><br>Explore how emotions influence physical health.</li>
          <li><strong>Lifestyle Coaching</strong><br>Set achievable goals for fitness, sleep, and nutrition.</li>
          <li><strong>Stress Reduction Techniques</strong><br>Practice mindfulness, breathing, and relaxation.</li>
          <li><strong>Holistic Health Planning</strong><br>Integrate physical, emotional, and spiritual well-being.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-12">
        <div class="img" style="background-image: url(images/Digital.png);"></div>
        <h2>Digital Well-being Counseling</h2>
        <p>Technology should serve your life, not control it. Our Digital Well-being Counseling helps individuals manage screen time, digital addiction, and online stress for healthier, more mindful living.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students &amp; Professionals</strong> – Balance productivity and screen dependency.</li>
          <li><strong>Parents &amp; Families</strong> – Develop healthy digital habits for children and teens.</li>
          <li><strong>Individuals Facing Social Media Burnout</strong> – Reduce comparison stress and information overload.</li>
          <li><strong>Gamers &amp; Content Creators</strong> – Manage engagement without losing emotional balance.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Digital Habit Assessment</strong><br>Understand your online behavior patterns.</li>
          <li><strong>Screen-Time Management</strong><br>Set boundaries and digital detox routines.</li>
          <li><strong>Mindful Technology Use</strong><br>Learn conscious engagement and emotional regulation online.</li>
          <li><strong>Balance Restoration</strong><br>Reconnect with real-life relationships and interests.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-13">
        <div class="img" style="background-image: url(images/crisis.png);"></div>
        <h2>Crisis Intervention Services</h2>
        <p>In times of emotional crisis, immediate and compassionate support can make all the difference. Our Crisis Intervention Services offer timely guidance to help you stabilize and regain control during distress.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Individuals Experiencing Acute Stress or Panic</strong> – Get immediate coping tools.</li>
          <li><strong>Those Facing Suicidal Thoughts or Self-Harm Urges</strong> – Access urgent emotional support.</li>
          <li><strong>Families in Crisis</strong> – Navigate conflict, trauma, or sudden loss together.</li>
          <li><strong>Victims of Violence or Disasters</strong> – Receive immediate psychological first aid.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>24/7 Support Access</strong><br>Immediate help when it’s needed most.</li>
          <li><strong>Crisis Stabilization</strong><br>Techniques to calm intense emotions safely.</li>
          <li><strong>Short-Term Counseling</strong><br>Focused sessions for immediate problem-solving.</li>
          <li><strong>Referral &amp; Follow-Up</strong><br>Continued care for long-term recovery and safety.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-14">
        <div class="img" style="background-image: url(images/cultural.png);"></div>
        <h2>Cultural Adaptation &amp; Cross-Cultural Support</h2>
        <p>Adapting to a new culture or environment can be both exciting and stressful. Our Cultural Adaptation Support helps individuals manage transitions, identity shifts, and emotional adjustments in multicultural settings.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>International Students &amp; Professionals</strong> – Adjust to new cultural and academic environments.</li>
          <li><strong>Migrants &amp; Expats</strong> – Navigate homesickness and cultural identity challenges.</li>
          <li><strong>Intercultural Couples &amp; Families</strong> – Strengthen understanding and communication.</li>
          <li><strong>Returnees</strong> – Reintegrate smoothly after living abroad.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Cultural Awareness Building</strong><br>Understand cultural values and differences.</li>
          <li><strong>Emotional Adjustment Support</strong><br>Manage culture shock and loneliness.</li>
          <li><strong>Communication Skills Coaching</strong><br>Improve interpersonal and workplace adaptability.</li>
          <li><strong>Resilience Training</strong><br>Develop confidence and cross-cultural empathy.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-15">
        <div class="img" style="background-image: url(images/services-5.jpg);"></div>
        <h2>Peer Support Counseling</h2>
        <p>Sometimes, healing begins with being heard by someone who understands. Our Peer Support Counseling connects individuals with trained peers who provide empathy, encouragement, and shared understanding.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students &amp; Young Adults</strong> – Discuss stress, relationships, and identity with relatable support.</li>
          <li><strong>Individuals Facing Loneliness</strong> – Build connection and community.</li>
          <li><strong>People in Recovery</strong> – Share progress and challenges with peers who’ve walked similar paths.</li>
          <li><strong>Caregivers</strong> – Gain emotional relief through peer understanding.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Empathetic Listening</strong><br>Engage in safe, judgment-free conversations.</li>
          <li><strong>Mutual Support</strong><br>Build strength through shared experience.</li>
          <li><strong>Guided Peer Training</strong><br>Ensure supportive and ethical interactions.</li>
          <li><strong>Connection to Resources</strong><br>Access professional help when needed.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-16">
        <div class="img" style="background-image: url(images/mindfulness.png);"></div>
        <h2>Mindfulness &amp; Meditation Coaching</h2>
        <p>Find calm and clarity amid life’s chaos. Our Mindfulness &amp; Meditation Coaching helps individuals cultivate awareness, emotional balance, and present-moment living.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Individuals Seeking Stress Relief</strong> – Learn techniques to calm the mind.</li>
          <li><strong>Professionals Managing Burnout</strong> – Reconnect with purpose and focus.</li>
          <li><strong>Students</strong> – Enhance concentration and emotional stability.</li>
          <li><strong>Anyone Seeking Inner Peace</strong> – Develop lifelong mindfulness practices.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Guided Meditation Sessions</strong><br>Practice breathwork and focus techniques.</li>
          <li><strong>Mindful Awareness Training</strong><br>Strengthen presence and self-compassion.</li>
          <li><strong>Stress &amp; Emotion Regulation</strong><br>Manage anxiety through mindfulness.</li>
          <li><strong>Integration in Daily Life</strong><br>Bring mindfulness into routines and relationships.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-17">
        <div class="img" style="background-image: url(images/performance.png);"></div>
        <h2>Performance Mindset Coaching</h2>
        <p>Unlock your peak potential through structured mindset development. Our Performance Mindset Coaching equips individuals to overcome mental barriers and perform with confidence, consistency, and purpose.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students &amp; Professionals</strong> – Improve focus, discipline, and motivation.</li>
          <li><strong>Athletes &amp; Artists</strong> – Build resilience and mental toughness.</li>
          <li><strong>Leaders &amp; Entrepreneurs</strong> – Cultivate clarity under pressure.</li>
          <li><strong>Anyone Striving for Excellence</strong> – Turn potential into sustained performance.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Mindset Reframing</strong><br>Replace limiting beliefs with empowering thoughts.</li>
          <li><strong>Goal Visualization</strong><br>Train the mind for success through mental imagery.</li>
          <li><strong>Resilience Building</strong><br>Handle setbacks with confidence and adaptability.</li>
          <li><strong>Peak Performance Strategies</strong><br>Apply proven tools for sustained results.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-18">
        <div class="img" style="background-image: url(images/focus.png);"></div>
        <h2>Focus &amp; Concentration Enhancement</h2>
        <p>In an age of constant distraction, sharpening focus is essential for success. Our Focus Enhancement sessions teach mental discipline and practical tools to improve attention span and productivity.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Students Preparing for Exams</strong> – Enhance study focus and retention.</li>
          <li><strong>Working Professionals</strong> – Improve concentration and task efficiency.</li>
          <li><strong>Creatives &amp; Innovators</strong> – Sustain creative flow without distraction.</li>
          <li><strong>Individuals with Attention Challenges</strong> – Develop structured focus routines.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Attention Training</strong><br>Practice techniques to sustain mental engagement.</li>
          <li><strong>Distraction Management</strong><br>Identify and minimize attention drains.</li>
          <li><strong>Cognitive Exercises</strong><br>Strengthen memory, clarity, and thinking speed.</li>
          <li><strong>Mindful Focus Practice</strong><br>Combine mindfulness and concentration for lasting improvement.</li>
        </ul>
      </div>

      <div class="tab-pane container p-0 fade" id="services-19">
        <div class="img" style="background-image: url(images/worklife.png);"></div>
        <h2>Work-Life Balance for Professionals</h2>
        <p>In the modern world, maintaining harmony between work and personal life is vital. Our Work-Life Balance Coaching helps professionals manage time, reduce stress, and create sustainable lifestyles.</p>
        <h3>Who Can Benefit?</h3>
        <ul>
          <li><strong>Corporate Employees &amp; Managers</strong> – Manage professional stress effectively.</li>
          <li><strong>Entrepreneurs &amp; Business Owners</strong> – Create balance without compromising growth.</li>
          <li><strong>Working Parents</strong> – Juggle responsibilities with calm and clarity.</li>
          <li><strong>Remote Workers</strong> – Build structure and emotional boundaries.</li>
        </ul>
        <h3>Our Approach</h3>
        <ul>
          <li><strong>Time &amp; Priority Management</strong><br>Optimize routines for balance and fulfillment.</li>
          <li><strong>Boundary Setting</strong><br>Separate work and personal spaces effectively.</li>
          <li><strong>Stress Reduction Techniques</strong><br>Learn tools to recharge mentally and physically.</li>
          <li><strong>Life Integration Coaching</strong><br>Align career goals with personal well-being.</li>
        </ul>
      </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
(function() {
  function scrollToPane(hash) {
    var el = document.querySelector(hash);
    if (!el) return;
    var y = el.getBoundingClientRect().top + window.pageYOffset - 20;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }

  if (window.jQuery) {
    jQuery(function($) {
      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        if (window.innerWidth <= 768) {
          var target = $(e.target).attr('href');
          if (target && target.charAt(0) === '#') {
            scrollToPane(target);
          }
        }
      });

      $('a[data-toggle="tab"]').on('click', function() {
        if (window.innerWidth <= 768) {
          var target = $(this).attr('href');
          if (target && target.charAt(0) === '#') {
            setTimeout(function() { scrollToPane(target); }, 150);
          }
        }
      });
    });
  } else {
    var links = document.querySelectorAll('a[data-toggle="tab"]');
    Array.prototype.forEach.call(links, function(link) {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 768) {
          var target = link.getAttribute('href');
          if (target && target.charAt(0) === '#') {
            setTimeout(function() { scrollToPane(target); }, 200);
          }
        }
      });
    });
  }
})();
</script>

<!-- Why Choose Us -->
<section class="vp-why ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Why Choose V4Peace</span>
                <h2 class="mb-3">Care You Can Trust</h2>
                <p class="vp-why-intro">We blend professional expertise with genuine compassion to create a safe, judgment-free space where healing and growth truly begin.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="vp-why-card">
                    <div class="vp-why-icon"><span class="fa fa-lock"></span></div>
                    <h3>100% Confidential</h3>
                    <p>Your privacy is sacred. Every conversation stays strictly between you and your counsellor.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="vp-why-card">
                    <div class="vp-why-icon"><span class="fa fa-graduation-cap"></span></div>
                    <h3>Qualified Experts</h3>
                    <p>Master's, doctorates and certified professionals in psychology and mental health.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="vp-why-card">
                    <div class="vp-why-icon"><span class="fa fa-laptop"></span></div>
                    <h3>Sessions From Anywhere</h3>
                    <p>Connect securely online from the comfort of your home, on a schedule that suits you.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                <div class="vp-why-card">
                    <div class="vp-why-icon"><span class="fa fa-heart"></span></div>
                    <h3>Client-Centered Care</h3>
                    <p>A personalised, empathetic approach built entirely around your unique journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('happyClient')

<!-- Call To Action Band -->
<section class="vp-cta-band">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-center text-lg-left mb-4 mb-lg-0">
                <h2 class="vp-cta-title">Ready to take the first step towards peace?</h2>
                <p class="vp-cta-text mb-0">Book a confidential session with one of our expert counsellors today. Your better tomorrow starts here.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-right">
                <a href="{{ url('/slotBooking') }}" class="btn vp-cta-btn px-4 py-3">Book Your Session <span class="fa fa-arrow-right ml-2"></span></a>
            </div>
        </div>
    </div>
</section>
<section class="ftco-appointment ftco-section img" id="contact-form" style="background-image: url(images/happy_client_6.png);">
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
<!-- <section class="ftco-section">
    <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Blog</span>
        <h2>Recent Blog</h2>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a></h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
            <div class="text text-center">
            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
                </a>
                <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">
                <div>
                    <span class="day">18</span>
                    <span class="mos">April</span>
                    <span class="yr">2020</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">Social Media Risks To Mental Health</a mb-3></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>              
                        </div>
        </div>
        </div>
    </div>
    </div>
</section>	 -->
</div>

<style>
  /* Intro cards */
  .vp-home .ftco-intro { padding: 0; }
  .vp-home .ftco-intro .intro {
    background: #fff;
    box-shadow: 0 15px 40px rgba(92, 53, 53, 0.1);
    margin-top: -40px;
    position: relative;
    z-index: 2;
  }
  .vp-home .ftco-intro .intro,
  .vp-home .ftco-intro .intro.color-1,
  .vp-home .ftco-intro .intro.color-2 {
    background: #fff;
  }
  .vp-home .ftco-intro .intro .icon {
    background: var(--vp-brand-light);
    border-radius: 50%;
    width: 64px;
    height: 64px;
    min-width: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .vp-home .ftco-intro .intro .icon span {
    color: var(--vp-brand-dark);
    font-size: 28px;
  }
  .vp-home .ftco-intro .intro .text h2 {
    font-size: 19px;
    font-weight: 600;
    color: #3b2626;
  }
  .vp-home .ftco-intro .intro .text p {
    color: #6b5a5a;
    font-size: 14.5px;
    margin-bottom: 0;
  }
  .vp-home .ftco-intro .intro:hover {
    box-shadow: 0 20px 45px rgba(92, 53, 53, 0.18);
    transform: translateY(-4px);
    transition: all .3s ease;
  }
  .vp-home .ftco-intro .intro.aside-stretch:after { display: none; }

  /* Section headings */
  .vp-home .heading-section .subheading {
    color: var(--vp-brand);
    font-weight: 600;
    letter-spacing: .05em;
    text-transform: uppercase;
    font-size: 14px;
  }
  .vp-home .heading-section h2 { color: #3b2626; }

  /* Social media posts */
  .vp-home .vp-social-section { background: var(--vp-cream); }
  .vp-home .vp-social-lead { color: #6b5a5a; max-width: 620px; margin: 0 auto; }
  .vp-home .vp-social-card {
    display: block; width: 100%;
    background: #fff; border-radius: 16px; overflow: hidden;
    text-decoration: none;
    box-shadow: 0 12px 35px rgba(92, 53, 53, 0.08);
    border: 1px solid rgba(123,74,74,0.06);
    transition: all .3s ease;
    margin-bottom: 30px;
  }
  .vp-home .vp-social-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 22px 48px rgba(92, 53, 53, 0.18);
  }
  .vp-home .vp-social-img {
    position: relative;
    height: 260px;
    background-size: cover;
    background-position: center;
  }
  .vp-home .vp-social-platform {
    position: absolute; top: 14px; right: 14px;
    width: 40px; height: 40px; border-radius: 50%;
    background: rgba(255,255,255,0.92); color: var(--vp-brand-dark);
    display: flex; align-items: center; justify-content: center;
    font-size: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }
  .vp-home .vp-social-overlay {
    position: absolute; inset: 0;
    background: rgba(45,20,25,0.55); color: #fff;
    display: flex; align-items: center; justify-content: center;
    gap: 8px; font-weight: 600; letter-spacing: .03em;
    opacity: 0; transition: opacity .3s ease;
  }
  .vp-home .vp-social-card:hover .vp-social-overlay { opacity: 1; }
  .vp-home .vp-social-body { padding: 20px 22px; }
  .vp-home .vp-social-tag {
    display: inline-block; background: var(--vp-brand-light); color: var(--vp-brand-dark);
    font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: .03em;
    padding: 3px 12px; border-radius: 20px; margin-bottom: 10px;
  }
  .vp-home .vp-social-title {
    font-size: 1.1rem; font-weight: 600; color: #3b2626; margin: 0; line-height: 1.4;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
  }

  /* How it works */
  .vp-home .services-2 .icon-wrap .number {
    background: var(--vp-brand-light);
  }
  .vp-home .services-2 .icon-wrap .number span {
    color: var(--vp-brand-dark);
  }
  .vp-home .services-2 .icon {
    background: var(--vp-brand-light);
  }
  .vp-home .services-2:hover .icon-wrap .number span { color: var(--vp-brand-dark); }
  .vp-home .services-2:hover .icon { background: var(--vp-brand); }
  .vp-home .services-2:hover .icon span { color: #fff !important; }
  .vp-home .services-2 h2 { color: #3b2626; }

  /* Who we are */
  .vp-home .wrap-about {
    border-radius: 0 12px 12px 0;
  }
  .vp-home .vp-who-we-are-list li {
    padding: 6px 0;
    color: #4a3838;
    font-size: 15px;
  }
  .vp-home .vp-who-we-are-list li .fa {
    color: var(--vp-brand);
    margin-right: 10px;
  }
  .vp-home .vp-btn-outline-brand {
    border: 1px solid var(--vp-brand);
    color: var(--vp-brand-dark);
    border-radius: 30px;
    font-weight: 500;
    background: transparent;
    transition: all .25s ease;
  }
  .vp-home .vp-btn-outline-brand:hover {
    background: var(--vp-brand);
    color: #fff;
  }

  /* Services tabs */
  .vp-home .tabulation .nav-pills .nav-link {
    border-radius: 6px;
    color: #4a3838;
  }
  .vp-home .tabulation .nav-pills .nav-link.active,
  .vp-home .tabulation .nav-pills .nav-link:hover {
    background: var(--vp-brand-light);
    color: var(--vp-brand-dark);
    font-weight: 600;
  }

  /* Appointment / contact section */
  .vp-home .ftco-appointment .half {
    background: rgba(255, 255, 255, 0.96);
    border-radius: 10px;
    padding: 2.5rem;
    box-shadow: 0 20px 45px rgba(0,0,0,0.25);
  }
  .vp-home .ftco-appointment .half h2 { color: #3b2626 !important; }
  .vp-home .ftco-appointment .appointment .btn-primary,
  .vp-home .ftco-appointment input[type="submit"].btn-primary {
    background: var(--vp-brand) !important;
    border-color: var(--vp-brand) !important;
    color: #fff !important;
    border-radius: 30px !important;
    transition: all .25s ease;
  }
  .vp-home .ftco-appointment .appointment .btn-primary:hover,
  .vp-home .ftco-appointment input[type="submit"].btn-primary:hover {
    background: var(--vp-brand-dark) !important;
    border-color: var(--vp-brand-dark) !important;
  }

  /* Stats / Impact band */
  .vp-home .vp-stats-band {
    background: linear-gradient(135deg, var(--vp-brand-dark) 0%, var(--vp-brand) 100%);
    padding: 4rem 0;
  }
  .vp-home .vp-stat { color: #fff; padding: 1rem 0; }
  .vp-home .vp-stat-icon {
    width: 60px; height: 60px; margin: 0 auto 14px;
    border-radius: 50%;
    background: rgba(255,255,255,0.14);
    display: flex; align-items: center; justify-content: center;
  }
  .vp-home .vp-stat-icon span { font-size: 26px; color: #fff; }
  .vp-home .vp-stat-num { font-size: 2.6rem; font-weight: 700; line-height: 1; color: #fff; }
  .vp-home .vp-stat-plus { font-size: 2rem; font-weight: 700; color: #ffd9d9; }
  .vp-home .vp-stat-label {
    margin: 10px 0 0; font-size: 14px; letter-spacing: .04em;
    text-transform: uppercase; color: rgba(255,255,255,0.85);
  }

  /* Why choose us */
  .vp-home .vp-why { background: var(--vp-cream); }
  .vp-home .vp-why-intro { color: #6b5a5a; font-size: 1rem; }
  .vp-home .vp-why-card {
    background: #fff;
    border-radius: 14px;
    padding: 2.2rem 1.6rem;
    text-align: center;
    box-shadow: 0 12px 35px rgba(92, 53, 53, 0.08);
    border: 1px solid rgba(123,74,74,0.06);
    transition: all .3s ease;
    width: 100%;
    margin-bottom: 30px;
  }
  .vp-home .vp-why-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(92, 53, 53, 0.16);
  }
  .vp-home .vp-why-icon {
    width: 72px; height: 72px; margin: 0 auto 1.2rem;
    border-radius: 20px;
    background: var(--vp-brand-light);
    display: flex; align-items: center; justify-content: center;
    transition: all .3s ease;
  }
  .vp-home .vp-why-icon span { font-size: 30px; color: var(--vp-brand-dark); }
  .vp-home .vp-why-card:hover .vp-why-icon { background: var(--vp-brand); }
  .vp-home .vp-why-card:hover .vp-why-icon span { color: #fff; }
  .vp-home .vp-why-card h3 { font-size: 19px; font-weight: 600; color: #3b2626; margin-bottom: .6rem; }
  .vp-home .vp-why-card p { color: #6b5a5a; font-size: 14.5px; margin-bottom: 0; }

  /* Testimonials (scoped to home) */
  .vp-home .testimony-section .subheading { color: #ffe0e0 !important; }
  .vp-home .testimony-wrap { border-radius: 12px; }
  .vp-home .testimony-section .icon span { color: var(--vp-brand); }

  /* CTA band */
  .vp-home .vp-cta-band {
    background: linear-gradient(135deg, var(--vp-brand) 0%, var(--vp-brand-dark) 100%);
    padding: 3.5rem 0;
  }
  .vp-home .vp-cta-title { color: #fff; font-weight: 700; font-size: 1.9rem; margin-bottom: .4rem; }
  .vp-home .vp-cta-text { color: rgba(255,255,255,0.9); font-size: 1.05rem; }
  .vp-home .vp-cta-btn {
    background: #fff;
    color: var(--vp-brand-dark);
    border-radius: 30px;
    font-weight: 600;
    border: none;
    white-space: nowrap;
    transition: all .25s ease;
  }
  .vp-home .vp-cta-btn:hover {
    background: #2b1618;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
  }
  @media (max-width: 767.98px) {
    .vp-home .vp-cta-title { font-size: 1.5rem; }
    .vp-home .vp-stat-num { font-size: 2rem; }
  }
</style>

<script>
  // Animated stat counters for the impact band
  (function() {
    function runCounters() {
      if (!window.jQuery || !jQuery.fn.animateNumber) { return false; }
      jQuery('.vp-stats-band .vp-stat-num').each(function() {
        var $el = jQuery(this);
        if ($el.data('counted')) return;
        var target = parseInt($el.attr('data-number'), 10) || 0;
        $el.data('counted', true);
        $el.animateNumber({ number: target, numberStep: jQuery.animateNumber.numberStepFactories.separator('') }, 1600);
      });
      return true;
    }

    function whenVisible() {
      var band = document.querySelector('.vp-stats-band');
      if (!band) return;
      var started = false;
      function check() {
        if (started) return;
        var rect = band.getBoundingClientRect();
        if (rect.top < window.innerHeight - 80 && rect.bottom > 0) {
          started = runCounters();
        }
      }
      window.addEventListener('scroll', check, { passive: true });
      check();
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', whenVisible);
    } else {
      whenVisible();
    }
  })();
</script>
@endsection