@extends('layouts.app')

@section('title', 'Checkout — Review Your Booking | V4Peace')
@section('robots', 'noindex, nofollow')

@section('content')
@php
    $slots = $formData['time_slots'] ?? [];
    $slotText = is_array($slots) ? implode(', ', $slots) : $slots;
@endphp
<div class="vp-checkout">
<style>
   .vp-checkout { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-cream: #fff9f6; }
   .vp-checkout { background: var(--vp-cream); color: #514B64; }

   /* Header */
   .vp-checkout .checkout-header {
       background: linear-gradient(135deg, var(--vp-brand-dark) 0%, var(--vp-brand) 100%);
       padding: 70px 0 60px;
       position: relative;
       overflow: hidden;
   }
   .vp-checkout .checkout-header::before {
       content: '';
       position: absolute;
       top: 0; left: 0; right: 0; bottom: 0;
       background-image: url('images/bg_5.jpg');
       background-size: cover;
       background-position: center;
       opacity: 0.12;
       z-index: 0;
   }
   .vp-checkout .checkout-header .container { position: relative; z-index: 1; }
   .vp-checkout .checkout-header .eyebrow {
       display: inline-block;
       background: rgba(255,255,255,0.14);
       border: 1px solid rgba(255,255,255,0.3);
       color: #ffe8e8;
       padding: 6px 18px; border-radius: 30px;
       font-size: 13px; letter-spacing: .06em; text-transform: uppercase;
       margin-bottom: 16px;
   }
   .vp-checkout .checkout-header h1 {
       color: white; font-size: 2.6rem; font-weight: 700; margin-bottom: 10px;
       text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
   }
   .vp-checkout .checkout-header .breadcrumbs { color: rgba(255,255,255,0.85); margin-bottom: 6px; }
   .vp-checkout .checkout-header .breadcrumbs a { color: #fff; text-decoration: none; }

   /* Progress steps */
   .vp-checkout .vp-steps {
       display: flex; justify-content: center; gap: 0;
       margin: 24px 0 6px; flex-wrap: wrap;
   }
   .vp-checkout .vp-step { display: flex; align-items: center; color: rgba(255,255,255,0.7); font-size: 13px; font-weight: 500; }
   .vp-checkout .vp-step .num {
       width: 26px; height: 26px; border-radius: 50%;
       background: rgba(255,255,255,0.2); color: #fff;
       display: inline-flex; align-items: center; justify-content: center;
       font-size: 12px; margin-right: 8px;
   }
   .vp-checkout .vp-step.active { color: #fff; }
   .vp-checkout .vp-step.active .num { background: #fff; color: var(--vp-brand-dark); }
   .vp-checkout .vp-step .bar { width: 46px; height: 2px; background: rgba(255,255,255,0.25); margin: 0 14px; }

   /* Layout */
   .vp-checkout .checkout-wrap { margin-top: -35px; position: relative; z-index: 2; }

   .vp-checkout .vp-panel {
       background: #fff; border-radius: 18px;
       box-shadow: 0 20px 55px rgba(92, 53, 53, 0.10);
       border: 1px solid rgba(123,74,74,0.06);
       overflow: hidden;
       margin-bottom: 30px;
   }
   .vp-checkout .vp-panel-head {
       padding: 22px 30px; border-bottom: 1px solid #f1e8e4;
       display: flex; align-items: center; gap: 12px;
   }
   .vp-checkout .vp-panel-head .ph-icon {
       width: 40px; height: 40px; border-radius: 12px;
       background: var(--vp-brand-light); color: var(--vp-brand-dark);
       display: flex; align-items: center; justify-content: center; font-size: 18px;
   }
   .vp-checkout .vp-panel-head h4 { margin: 0; color: #3b2626; font-weight: 700; font-size: 1.2rem; }
   .vp-checkout .vp-panel-body { padding: 26px 30px; }

   .vp-checkout .vp-group-title {
       font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em;
       color: var(--vp-brand); margin: 0 0 12px;
   }
   .vp-checkout .vp-detail-row {
       display: flex; justify-content: space-between; align-items: flex-start;
       padding: 11px 0; border-bottom: 1px solid #f4ece9; gap: 20px;
   }
   .vp-checkout .vp-detail-row:last-child { border-bottom: none; }
   .vp-checkout .vp-detail-label { color: #9a8888; font-weight: 500; white-space: nowrap; }
   .vp-checkout .vp-detail-value { color: #3b2626; font-weight: 600; text-align: right; word-break: break-word; }
   .vp-checkout .vp-remark { background: var(--vp-cream); border-radius: 10px; padding: 14px 16px; color: #6b5a5a; font-size: 14.5px; }

   /* Order summary */
   .vp-checkout .vp-summary-row { display: flex; justify-content: space-between; padding: 10px 0; color: #6b5a5a; }
   .vp-checkout .vp-summary-total {
       display: flex; justify-content: space-between; align-items: baseline;
       padding: 18px 0 6px; margin-top: 8px; border-top: 2px dashed #eaddd8;
   }
   .vp-checkout .vp-summary-total .lbl { font-weight: 700; color: #3b2626; font-size: 1.05rem; }
   .vp-checkout .vp-summary-total .amt { font-weight: 700; color: var(--vp-brand-dark); font-size: 2rem; }

   .vp-checkout .vp-pay-btn {
       width: 100%;
       background: linear-gradient(135deg, var(--vp-brand) 0%, var(--vp-brand-dark) 100%);
       border: none; border-radius: 50px; padding: 15px;
       color: #fff; font-weight: 600; font-size: 1.05rem;
       display: inline-flex; align-items: center; justify-content: center; gap: 8px;
       transition: all .25s ease;
   }
   .vp-checkout .vp-pay-btn:hover { transform: translateY(-2px); box-shadow: 0 14px 30px rgba(92, 53, 53, 0.3); color: #fff; }
   .vp-checkout .vp-back-link { display: inline-block; color: var(--vp-brand-dark); font-weight: 600; }
   .vp-checkout .vp-back-link:hover { color: var(--vp-brand); text-decoration: none; }

   .vp-checkout .vp-secure {
       display: flex; align-items: center; justify-content: center; gap: 8px;
       margin-top: 16px; color: #8a7a7a; font-size: 13px;
   }
   .vp-checkout .vp-secure .fa { color: #2e9e5b; }
   .vp-checkout .vp-razorpay-note {
       text-align: center; margin-top: 6px; font-size: 12px; color: #b0a0a0;
   }
   .vp-checkout .vp-policy {
       text-align: center; margin-top: 18px; padding-top: 16px; border-top: 1px solid #f1e8e4;
   }
   .vp-checkout .vp-policy small { color: #9a8888; }
   .vp-checkout .vp-policy a { color: var(--vp-brand); font-weight: 500; }

   @media (max-width: 768px) {
       .vp-checkout .checkout-header h1 { font-size: 1.9rem; }
       .vp-checkout .vp-panel-body { padding: 20px; }
       .vp-checkout .vp-steps .vp-step .bar { width: 24px; margin: 0 8px; }
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
        <span class="eyebrow">Almost Done</span>
        <h1 class="mb-0">Review &amp; Confirm</h1>
        <div class="vp-steps">
            <span class="vp-step"><span class="num"><i class="fa fa-check"></i></span> Details</span>
            <span class="bar"></span>
            <span class="vp-step active"><span class="num">2</span> Review</span>
            <span class="bar"></span>
            <span class="vp-step"><span class="num">3</span> Payment</span>
        </div>
    </div>
</div>

<!-- Checkout Body -->
<div class="container checkout-wrap">
    <div class="row justify-content-center">

        <!-- Booking Details -->
        <div class="col-lg-7 mb-2">
            <div class="vp-panel">
                <div class="vp-panel-head">
                    <span class="ph-icon"><i class="fa fa-clipboard"></i></span>
                    <h4>Booking Details</h4>
                </div>
                <div class="vp-panel-body">
                    <p class="vp-group-title">Your Information</p>
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Name</span>
                        <span class="vp-detail-value">{{ $formData['first_name'] ?? 'N/A' }}</span>
                    </div>
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Email</span>
                        <span class="vp-detail-value">{{ $formData['email'] ?? 'N/A' }}</span>
                    </div>
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Phone</span>
                        <span class="vp-detail-value">{{ $formData['phone'] ?? 'N/A' }}</span>
                    </div>

                    <p class="vp-group-title mt-4">Session</p>
                    @if(!empty($formData['candidate_type']))
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Candidate Type</span>
                        <span class="vp-detail-value">{{ $formData['candidate_type'] }}</span>
                    </div>
                    @endif
                    @if(!empty($formData['session_mode']))
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Mode</span>
                        <span class="vp-detail-value">{{ $formData['session_mode'] }}</span>
                    </div>
                    @endif
                    @if(!empty($formData['session_date']))
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Date</span>
                        <span class="vp-detail-value">{{ $formData['session_date'] }}</span>
                    </div>
                    @endif
                    @if(!empty($slotText))
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Time Slot(s)</span>
                        <span class="vp-detail-value">{{ $slotText }}</span>
                    </div>
                    @endif
                    <div class="vp-detail-row">
                        <span class="vp-detail-label">Duration</span>
                        <span class="vp-detail-value">{{ $formData['totalHour'] ?? '0' }} hour(s)</span>
                    </div>

                    @if(!empty($formData['remark']))
                    <p class="vp-group-title mt-4">Additional Notes</p>
                    <div class="vp-remark">{{ $formData['remark'] }}</div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-5 mb-2">
            <div class="vp-panel">
                <div class="vp-panel-head">
                    <span class="ph-icon"><i class="fa fa-credit-card"></i></span>
                    <h4>Order Summary</h4>
                </div>
                <div class="vp-panel-body">
                    <div class="vp-summary-row">
                        <span>Counselling Session</span>
                        <span>{{ $formData['totalHour'] ?? '0' }} hr(s)</span>
                    </div>
                    <div class="vp-summary-row">
                        <span>Subtotal</span>
                        <span>${{ $formData['totalPrice'] ?? '0' }}</span>
                    </div>
                    <div class="vp-summary-total">
                        <span class="lbl">Total Payable</span>
                        <span class="amt">${{ $formData['totalPrice'] ?? '0' }}</span>
                    </div>

                    <form action="{{ url('/payment') }}" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="name" value="{{ $formData['first_name'] ?? '' }}">
                        <input type="hidden" name="email" value="{{ $formData['email'] ?? '' }}">
                        <input type="hidden" name="phone" value="{{ $formData['phone'] ?? '' }}">
                        <input type="hidden" name="totalHour" value="{{ $formData['totalHour'] ?? '' }}">
                        <input type="hidden" name="amount" value="{{ $formData['totalPrice'] ?? '' }}">
                        <input type="hidden" name="remark" value="{{ $formData['remark'] ?? '' }}">
                        {{-- Session details carried through so the receipt/voucher can show them --}}
                        <input type="hidden" name="counsellor_id" value="{{ $formData['counsellor_id'] ?? '' }}">
                        <input type="hidden" name="candidate_type" value="{{ $formData['candidate_type'] ?? '' }}">
                        <input type="hidden" name="session_mode" value="{{ $formData['session_mode'] ?? '' }}">
                        <input type="hidden" name="session_date" value="{{ $formData['session_date'] ?? '' }}">
                        <input type="hidden" name="time_slots" value="{{ $slotText }}">
                        <input type="hidden" name="total_hour" value="{{ $formData['totalHour'] ?? '' }}">

                        <button type="submit" class="vp-pay-btn">
                            <i class="fa fa-lock"></i> Proceed to Secure Payment
                        </button>
                    </form>

                    <div class="vp-secure">
                        <span class="fa fa-shield"></span>
                        <span>256-bit SSL encrypted &amp; secure checkout</span>
                    </div>
                    <div class="vp-razorpay-note">Payments processed securely via Razorpay</div>

                    <div class="text-center mt-4">
                        <a href="{{ url('/slotBooking') }}" class="vp-back-link"><i class="fa fa-angle-left mr-1"></i> Back to Booking</a>
                    </div>

                    <div class="vp-policy">
                        <small>
                            By proceeding, you agree to our
                            <a href="{{ url('/termsAndConditions') }}" target="_blank">Terms</a>,
                            <a href="{{ route('privacy.policy') }}" target="_blank">Privacy</a>,
                            <a href="{{ route('refund.policy') }}" target="_blank">Refund</a> &amp;
                            <a href="{{ route('shipping.policy') }}" target="_blank">Shipping</a> policies.
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection
