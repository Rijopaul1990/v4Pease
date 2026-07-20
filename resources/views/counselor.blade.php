@extends('layouts.app')

@section('title', 'Our Qualified Counsellors & Session Pricing | V4Peace')
@section('meta_description', 'Meet the qualified, experienced counsellors at V4Peace Counselling Centre. View their expertise and our transparent session pricing for adults, children and businesses, then book online.')
@section('meta_keywords', 'counsellors Kerala, qualified therapist, counselling pricing, book counsellor, V4Peace counsellors, online counselling')

@section('content')
<div class="vp-counsellor">

<!-- Hero / Page banner -->
<section class="hero-wrap hero-wrap-2 vp-cn-hero" style="background-image: url('{{ asset('images/ourqualifiedcounsellors.png') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Counsellor <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Our Qualified Counsellors</h1>
        </div>
    </div>
    </div>
</section>

<!-- Intro -->
<section class="ftco-section vp-cn-intro pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Meet the Team</span>
                <h2 class="mb-3">Compassionate Experts, Ready to Help</h2>
                <p class="vp-cn-lead">Our counsellors bring decades of combined experience, advanced qualifications, and a genuinely caring approach to every session.</p>
            </div>
        </div>
    </div>
</section>

<!-- Counsellor profiles -->
<section class="ftco-section vp-cn-profiles">
  <div class="container">

    @forelse($counsellors as $counsellor)
    <div class="vp-profile-card ftco-animate">
      <div class="row align-items-center {{ $loop->even ? 'flex-md-row-reverse' : '' }}">
        <div class="col-md-4 text-center mb-4 mb-md-0">
          <div class="vp-photo-ring">
            <img src="{{ $counsellor->photo_url }}" alt="{{ $counsellor->counsellor_name }}">
          </div>
        </div>
        <div class="col-md-8">
          <h3 class="vp-cn-name">{{ $counsellor->counsellor_name }}</h3>
          @if($counsellor->counsellor_qualification)
            <p class="vp-cn-qual">{{ $counsellor->counsellor_qualification }}</p>
          @endif
          @if($counsellor->designation)
            <span class="vp-cn-role">{{ $counsellor->designation }}</span>
          @endif
          @if($counsellor->bio)
            <p class="vp-cn-bio">{{ $counsellor->bio }}</p>
          @endif
          @if($counsellor->twitter_link || $counsellor->fb_link || $counsellor->google_link || $counsellor->insta_link)
          <div class="vp-cn-social">
            @if($counsellor->twitter_link)
              <a href="{{ $counsellor->twitter_link }}" target="_blank" rel="noopener" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
            @endif
            @if($counsellor->fb_link)
              <a href="{{ $counsellor->fb_link }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
            @endif
            @if($counsellor->google_link)
              <a href="{{ $counsellor->google_link }}" target="_blank" rel="noopener" aria-label="Google"><i class="fa fa-google"></i></a>
            @endif
            @if($counsellor->insta_link)
              <a href="{{ $counsellor->insta_link }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
            @endif
          </div>
          @endif
          <a href="{{ url('/slotBooking') }}" class="btn vp-cn-btn">Book a Session <span class="fa fa-arrow-right ml-2"></span></a>
        </div>
      </div>
    </div>
    @empty
    <div class="text-center py-5">
      <p class="vp-cn-lead">Our counsellors will be listed here soon. Please check back later.</p>
    </div>
    @endforelse

  </div>
</section>

<!-- Pricing -->
<section class="ftco-section vp-cn-pricing">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Price &amp; Plans</span>
        <h2>Affordable Packages</h2>
        <p class="vp-cn-lead">Transparent, session-based pricing — pick the plan that fits your needs.</p>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 ftco-animate d-flex">
            <div class="vp-price-card w-100">
                <span class="vp-price-tag">For Adults</span>
                <div class="vp-price"><sup>$</sup><span class="vp-price-num">15</span><sub>/30 min</sub></div>
                <ul class="vp-price-list">
                    <li><span class="fa fa-check"></span>Individual Counseling</li>
                    <li><span class="fa fa-check"></span>Couples Therapy</li>
                    <li><span class="fa fa-check"></span>Family Therapy</li>
                </ul>
                <a href="{{ url('/slotBooking') }}" class="btn vp-price-btn">Get Started</a>
            </div>
        </div>
        <div class="col-md-4 ftco-animate d-flex">
            <div class="vp-price-card vp-price-featured w-100">
                <span class="vp-price-badge">Most Popular</span>
                <span class="vp-price-tag">For Children</span>
                <div class="vp-price"><sup>$</sup><span class="vp-price-num">17</span><sub>/30 min</sub></div>
                <ul class="vp-price-list">
                    <li><span class="fa fa-check"></span>Counseling for Children</li>
                    <li><span class="fa fa-check"></span>Behavioral Management</li>
                    <li><span class="fa fa-check"></span>Educational Counseling</li>
                </ul>
                <a href="{{ url('/slotBooking') }}" class="btn vp-price-btn vp-price-btn-solid">Get Started</a>
            </div>
        </div>
        <div class="col-md-4 ftco-animate d-flex">
            <div class="vp-price-card w-100">
                <span class="vp-price-tag">For Business</span>
                <div class="vp-price"><sup>$</sup><span class="vp-price-num">20</span><sub>/30 min</sub></div>
                <ul class="vp-price-list">
                    <li><span class="fa fa-check"></span>Consultancy Services</li>
                    <li><span class="fa fa-check"></span>Employee Counseling</li>
                    <li><span class="fa fa-check"></span>Psychological Assessment</li>
                </ul>
                <a href="{{ url('/slotBooking') }}" class="btn vp-price-btn">Get Started</a>
            </div>
        </div>
        </div>
    </div>
</section>

</div>

<style>
  .vp-counsellor { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }

  /* Page banner */
  .vp-counsellor .vp-cn-hero { position: relative; }
  .vp-counsellor .vp-cn-hero .overlay {
    background: linear-gradient(135deg, rgba(45,20,25,0.80) 0%, rgba(123,74,74,0.55) 100%);
    opacity: 1;
  }
  .vp-counsellor .vp-cn-hero .bread { color: #fff !important; font-weight: 700; text-shadow: 0 4px 20px rgba(0,0,0,.45); }
  .vp-counsellor .vp-cn-hero .breadcrumbs { text-transform: uppercase; letter-spacing: .08em; font-size: 13px; }
  .vp-counsellor .vp-cn-hero .breadcrumbs,
  .vp-counsellor .vp-cn-hero .breadcrumbs span,
  .vp-counsellor .vp-cn-hero .breadcrumbs a { color: #ffe0e0 !important; }

  /* Headings */
  .vp-counsellor .heading-section .subheading {
    color: var(--vp-brand); font-weight: 600; letter-spacing: .06em;
    text-transform: uppercase; font-size: 14px;
  }
  .vp-counsellor .heading-section h2 { color: #3b2626; font-weight: 700; }
  .vp-counsellor .vp-cn-lead { color: #6b5a5a; max-width: 640px; margin: 0 auto; }

  /* Profile cards */
  .vp-counsellor .vp-cn-profiles { background: var(--vp-cream); }
  .vp-counsellor .vp-profile-card {
    background: #fff;
    border-radius: 18px;
    padding: 2.5rem;
    margin-bottom: 2.5rem;
    box-shadow: 0 15px 40px rgba(92, 53, 53, 0.08);
    border: 1px solid rgba(123,74,74,0.06);
    transition: all .3s ease;
  }
  .vp-counsellor .vp-profile-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 25px 55px rgba(92, 53, 53, 0.16);
  }
  .vp-counsellor .vp-photo-ring {
    width: 220px; height: 220px; margin: 0 auto;
    border-radius: 50%; padding: 6px;
    background: linear-gradient(135deg, var(--vp-brand) 0%, var(--vp-brand-light) 100%);
    box-shadow: 0 12px 30px rgba(92,53,53,0.20);
  }
  .vp-counsellor .vp-photo-ring img {
    width: 100%; height: 100%; border-radius: 50%; object-fit: cover;
    border: 4px solid #fff;
  }
  .vp-counsellor .vp-cn-name { font-weight: 700; color: #2f1e1e; margin-bottom: .25rem; font-size: 1.6rem; }
  .vp-counsellor .vp-cn-qual { color: #9a8888; font-size: 14px; margin-bottom: .6rem; }
  .vp-counsellor .vp-cn-role {
    display: inline-block; background: var(--vp-brand-light); color: var(--vp-brand-dark);
    font-size: 12.5px; font-weight: 600; text-transform: uppercase; letter-spacing: .04em;
    padding: 4px 14px; border-radius: 20px; margin-bottom: 1rem;
  }
  .vp-counsellor .vp-cn-bio { color: #6b5a5a; line-height: 1.8; margin-bottom: 1.2rem; }
  .vp-counsellor .vp-cn-social { display: flex; gap: 10px; margin-bottom: 1.5rem; }
  .vp-counsellor .vp-cn-social a {
    width: 40px; height: 40px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    border: 1px solid var(--vp-brand-light); color: var(--vp-brand);
    transition: all .25s ease;
  }
  .vp-counsellor .vp-cn-social a:hover {
    background: var(--vp-brand); color: #fff; border-color: var(--vp-brand);
    transform: translateY(-3px);
  }
  .vp-counsellor .vp-cn-btn {
    background: var(--vp-brand); color: #fff; border-radius: 30px;
    padding: 12px 28px; font-weight: 500; transition: all .25s ease;
  }
  .vp-counsellor .vp-cn-btn:hover {
    background: var(--vp-brand-dark); color: #fff;
    transform: translateY(-2px); box-shadow: 0 10px 25px rgba(92,53,53,0.25);
  }

  /* Pricing */
  .vp-counsellor .vp-cn-pricing { background: #fff; }
  .vp-counsellor .vp-price-card {
    background: #fff;
    border: 1px solid rgba(123,74,74,0.12);
    border-radius: 16px;
    padding: 2.5rem 2rem;
    text-align: center;
    position: relative;
    transition: all .3s ease;
    margin-bottom: 30px;
  }
  .vp-counsellor .vp-price-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(92, 53, 53, 0.14);
    border-color: transparent;
  }
  .vp-counsellor .vp-price-featured {
    border: 2px solid var(--vp-brand);
    box-shadow: 0 20px 45px rgba(92, 53, 53, 0.16);
  }
  .vp-counsellor .vp-price-badge {
    position: absolute; top: -14px; left: 50%; transform: translateX(-50%);
    background: var(--vp-brand); color: #fff; font-size: 12px; font-weight: 600;
    text-transform: uppercase; letter-spacing: .05em;
    padding: 5px 18px; border-radius: 20px; white-space: nowrap;
  }
  .vp-counsellor .vp-price-tag {
    display: block; color: #9a8888; font-weight: 600; text-transform: uppercase;
    letter-spacing: .05em; font-size: 13px; margin-bottom: .8rem;
  }
  .vp-counsellor .vp-price { color: var(--vp-brand-dark); margin-bottom: 1.5rem; }
  .vp-counsellor .vp-price sup { font-size: 1.4rem; font-weight: 600; top: -1.4rem; }
  .vp-counsellor .vp-price-num { font-size: 3.4rem; font-weight: 700; line-height: 1; }
  .vp-counsellor .vp-price sub { font-size: 1rem; color: #9a8888; font-weight: 400; }
  .vp-counsellor .vp-price-list { list-style: none; padding: 0; margin: 0 0 2rem; }
  .vp-counsellor .vp-price-list li {
    padding: 10px 0; color: #4a3838; border-bottom: 1px solid #f2ebe8;
  }
  .vp-counsellor .vp-price-list li:last-child { border-bottom: none; }
  .vp-counsellor .vp-price-list li .fa { color: var(--vp-brand); margin-right: 10px; }
  .vp-counsellor .vp-price-btn {
    display: block; border: 1px solid var(--vp-brand); color: var(--vp-brand-dark);
    border-radius: 30px; padding: 12px; font-weight: 600; background: transparent;
    transition: all .25s ease;
  }
  .vp-counsellor .vp-price-btn:hover { background: var(--vp-brand); color: #fff; }
  .vp-counsellor .vp-price-btn-solid { background: var(--vp-brand); color: #fff; border-color: var(--vp-brand); }
  .vp-counsellor .vp-price-btn-solid:hover { background: var(--vp-brand-dark); border-color: var(--vp-brand-dark); }

  @media (max-width: 767.98px) {
    .vp-counsellor .vp-profile-card { padding: 1.6rem; }
    .vp-counsellor .vp-photo-ring { width: 170px; height: 170px; }
    .vp-counsellor .vp-cn-social { justify-content: center; }
    .vp-counsellor .vp-cn-btn { display: block; text-align: center; }
  }
</style>
@endsection
