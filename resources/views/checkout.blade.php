@extends('layouts.app')

@section('title', 'About Page')

@section('content')
<style>
   .mt-100{margin-top: 100px}body{background: #00B4DB;background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);background: linear-gradient(to right, #0083B0, #00B4DB);color: #514B64;min-height: 100vh}
  </style>
  <style>
        body {
            background: #f8f9fa;
        }
        
        .checkout-card {
            max-width: 500px;
            margin: 50px auto;
            border-radius: 15px;
        }
        .razorpay-logo {
            width: 140px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .summary-label {
            font-weight: 600;
        }
   
    </style>
  
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate mb-5 text-center">
        <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Counselor <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Qualified Counselor</h1>
        </div>
    </div>
    </div>
</section>
<div class="container">
    <div class="card shadow-lg checkout-card">
        <div class="card-body text-center">
            <img src="https://razorpay.com/favicon.png" alt="Razorpay" class="razorpay-logo mb-3">
            <h4 class="mb-3">Booking Summary</h4>

            <!-- Summary details -->
            <div class="text-start">
                <div class="summary-row">
                    <span class="summary-label">Name:</span>
                    <span>{{ $formData['first_name'] ?? 'N/A' }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Email:</span>
                    <span>{{ $formData['email'] ?? 'N/A' }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Phone:</span>
                    <span>{{ $formData['phone'] ?? 'N/A' }}</span>
                </div>
                <!-- <div class="summary-row">
                    <span class="summary-label">Counsellor ID:</span>
                    <span>{{ $selllist ?? 'N/A' }}</span>
                </div> -->
                <div class="summary-row">
                    <span class="summary-label">Hours:</span>
                    <span>{{ $formData['totalHour'] ?? '0' }}</span>
                </div>
                <div class="summary-row">
                    <span class="summary-label">Total Price:</span>
                    <span>₹{{ $formData['totalPrice'] ?? '0' }}</span>
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary px-4">Back</a>

                <form action="{{ url('/payment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="name" value="{{ $formData['first_name'] }}">
                    <input type="hidden" name="email" value="{{ $formData['email'] }}">
                    <input type="hidden" name="phone" value="{{ $formData['phone'] }}">
                    <input type="hidden" name="totalHour" value="{{ $formData['totalHour'] }}">
                    <input type="hidden" name="amount" value="{{ $formData['totalPrice'] }}">

                    <button type="submit" class="btn btn-primary px-4">
                        <img src="https://razorpay.com/assets/razorpay-glyph.svg" alt="Razorpay" width="20" class="me-2">
                        Submit & Pay
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection