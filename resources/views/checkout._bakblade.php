@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<style>
   body {
       background: #f8f9fa;
       color: #514B64;
   }
   
   .checkout-header {
       background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
       padding: 60px 0 40px;
       margin-bottom: 30px;
       position: relative;
       overflow: hidden;
   }
   
   .checkout-header::before {
       content: '';
       position: absolute;
       top: 0;
       left: 0;
       right: 0;
       bottom: 0;
       background-image: url('images/bg_5.jpg');
       background-size: cover;
       background-position: center;
       opacity: 0.15;
       z-index: 0;
   }
   
   .checkout-header .container {
       position: relative;
       z-index: 1;
   }
   
   .checkout-header img {
       max-width: 180px;
       width: 100%;
       height: auto;
       margin-bottom: 20px;
       border-radius: 15px;
       box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
       border: 4px solid rgba(255, 255, 255, 0.3);
   }
   
   .checkout-header h1 {
       color: white;
       font-size: 2.5rem;
       font-weight: 700;
       margin-bottom: 10px;
       text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
   }
   
   .checkout-header .breadcrumbs {
       color: rgba(255, 255, 255, 0.9);
   }
   
   .checkout-header .breadcrumbs a {
       color: white;
       text-decoration: none;
   }
   
   .checkout-card {
       max-width: 600px;
       margin: 30px auto 50px;
       border-radius: 15px;
       box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
       border: none;
   }
   
   .razorpay-logo {
       width: 140px;
   }
   
   .summary-row {
       display: flex;
       justify-content: space-between;
       padding: 12px 0;
       border-bottom: 1px solid #eee;
   }
   
   .summary-row:last-child {
       border-bottom: none;
       font-weight: 700;
       font-size: 1.1rem;
       color: #667eea;
   }
   
   .summary-label {
       font-weight: 600;
       color: #333;
   }
   
   .btn-primary {
       background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
       border: none;
       border-radius: 50px;
       padding: 12px 30px;
       font-weight: 600;
       transition: all 0.3s ease;
   }
   
   .btn-primary:hover {
       transform: translateY(-2px);
       box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
   }
   
   .btn-outline-secondary {
       border-radius: 50px;
       padding: 12px 30px;
       font-weight: 600;
   }
   
   @media (max-width: 768px) {
       .checkout-header img {
           max-width: 150px;
       }
       
       .checkout-header h1 {
           font-size: 1.8rem;
       }
   }
</style>

<!-- Header Section -->
<div class="checkout-header">
    <div class="container text-center">
        <p class="breadcrumbs mb-0">
            <span class="mr-2">
                <a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a>
            </span> 
            <span>Checkout <i class="fa fa-chevron-right"></i></span>
        </p>
        <img src="{{ asset('images/about1.jpg') }}" alt="Checkout" class="img-fluid">
        <h1 class="mb-0">Review Your Booking</h1>
    </div>
</div>

<!-- Checkout Card -->
<div class="container">
    <div class="card shadow-lg checkout-card">
        <div class="card-body" style="padding: 40px;">
            <div class="text-center mb-4">
                <img src="https://razorpay.com/favicon.png" alt="Razorpay" class="razorpay-logo mb-3">
                <h4 class="mb-3" style="color: #667eea;">Booking Summary</h4>
            </div>

            <!-- Summary details -->
            <div class="text-start" style="background: #f8f9fa; padding: 20px; border-radius: 10px;">
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
                    <span>${{ $formData['totalPrice'] ?? '0' }}</span>
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
                    <input type="hidden" name="remark" value="{{ $formData['remark'] ?? '' }}">

                    <button type="submit" class="btn btn-primary px-4">
                        <img src="https://razorpay.com/assets/razorpay-glyph.svg" alt="Razorpay" width="20" class="me-2">
                        Submit & Pay
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Auto-scroll to checkout card after showing header first
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const checkoutCard = document.querySelector('.checkout-card');
            if (checkoutCard) {
                // Calculate the position with navbar offset
                const navbarHeight = 100;
                const targetPosition = checkoutCard.offsetTop - navbarHeight;
                
                // Smooth scroll
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }, 2000); // 2 second delay to show header first
    });
</script>

@endsection