<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Complete Payment | V4Peace Counselling Centre</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/trade.PNG') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        :root { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; }
        * { box-sizing: border-box; }
        body {
            margin: 0; min-height: 100vh;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #fff9f6 0%, #f3e9e6 100%);
            display: flex; align-items: center; justify-content: center;
            padding: 20px; color: #3b2626;
        }
        .vp-pay-card {
            background: #fff; border-radius: 20px;
            box-shadow: 0 25px 60px rgba(92, 53, 53, 0.15);
            max-width: 440px; width: 100%;
            padding: 44px 34px; text-align: center;
        }
        .vp-icon {
            width: 88px; height: 88px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 22px; font-size: 40px;
        }
        .vp-icon.loading { background: var(--vp-brand-light); color: var(--vp-brand-dark); }
        .vp-icon.cancel  { background: #fdeaea; color: #d9534f; }
        .vp-icon.failed  { background: #fdeaea; color: #d9534f; }
        .vp-spinner {
            width: 46px; height: 46px; border-radius: 50%;
            border: 4px solid var(--vp-brand-light);
            border-top-color: var(--vp-brand);
            animation: vpspin 0.9s linear infinite;
        }
        @keyframes vpspin { to { transform: rotate(360deg); } }
        .vp-pay-card h2 { font-size: 1.5rem; font-weight: 700; margin: 0 0 10px; }
        .vp-pay-card p { color: #6b5a5a; line-height: 1.6; margin: 0 0 26px; }
        .vp-amount {
            display: inline-block; background: #fff9f6; border: 1px solid #eee0db;
            color: var(--vp-brand-dark); font-weight: 700; font-size: 1.05rem;
            padding: 8px 20px; border-radius: 30px; margin-bottom: 22px;
        }
        .vp-btn {
            display: block; width: 100%; text-align: center; text-decoration: none;
            border: none; cursor: pointer; border-radius: 30px;
            padding: 14px; font-size: 1rem; font-weight: 600; margin-bottom: 12px;
            transition: all .25s ease; font-family: inherit;
        }
        .vp-btn-primary { background: var(--vp-brand); color: #fff; }
        .vp-btn-primary:hover { background: var(--vp-brand-dark); transform: translateY(-2px); box-shadow: 0 10px 24px rgba(92,53,53,.25); }
        .vp-btn-outline { background: transparent; border: 1px solid #e0d3cf; color: var(--vp-brand-dark); }
        .vp-btn-outline:hover { background: #fff5f2; }
        .vp-secure { margin-top: 18px; font-size: 12.5px; color: #a08f8f; }
        .vp-secure .fa { color: #2e9e5b; margin-right: 5px; }
        .hidden { display: none; }
    </style>
</head>
<body onload="startPayment()">

    <!-- Loading / redirecting state -->
    <div class="vp-pay-card" id="state-loading">
        <div class="vp-icon loading"><div class="vp-spinner"></div></div>
        <h2>Opening Secure Payment</h2>
        <p>Please complete your payment in the Razorpay window. Do not close or refresh this page.</p>
        <div class="vp-secure"><span class="fa fa-lock"></span> Secured by Razorpay</div>
    </div>

    <!-- Payment cancelled state -->
    <div class="vp-pay-card hidden" id="state-cancelled">
        <div class="vp-icon cancel"><span class="fa fa-times-circle"></span></div>
        <h2>Payment Cancelled</h2>
        <span class="vp-amount">Amount: ${{ $amount }}</span>
        <p>You cancelled the payment and have not been charged. You can try again or return to your booking.</p>
        <button type="button" class="vp-btn vp-btn-primary" onclick="retryPayment()">
            <span class="fa fa-refresh"></span>&nbsp; Try Again
        </button>
        <a href="{{ url('/slotBooking') }}" class="vp-btn vp-btn-outline">Back to Booking</a>
    </div>

    <!-- Payment failed state -->
    <div class="vp-pay-card hidden" id="state-failed">
        <div class="vp-icon failed"><span class="fa fa-exclamation-circle"></span></div>
        <h2>Payment Failed</h2>
        <p id="failed-msg">Something went wrong while processing your payment. You have not been charged.</p>
        <button type="button" class="vp-btn vp-btn-primary" onclick="retryPayment()">
            <span class="fa fa-refresh"></span>&nbsp; Try Again
        </button>
        <a href="{{ url('/slotBooking') }}" class="vp-btn vp-btn-outline">Back to Booking</a>
    </div>

    <!-- Processing (after successful payment, before redirect) -->
    <div class="vp-pay-card hidden" id="state-processing">
        <div class="vp-icon loading"><div class="vp-spinner"></div></div>
        <h2>Confirming Your Payment</h2>
        <p>Payment received. Please wait while we confirm your booking&hellip;</p>
    </div>

    <form name="razorpayForm" action="{{ route('razorpay.success') }}" method="POST">
        @csrf
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
    </form>

    <script>
        var rzp = null;

        function showState(id) {
            var states = ['state-loading', 'state-cancelled', 'state-failed', 'state-processing'];
            states.forEach(function (s) {
                document.getElementById(s).classList.add('hidden');
            });
            document.getElementById(id).classList.remove('hidden');
        }

        function startPayment() {
            var options = {
                "key": "{{ $razorpayKey }}",
                "amount": "{{ $amount * 100 }}",
                "currency": "USD",
                "name": "{{ $name }}",
                "description": "Counselling Session Payment",
                "order_id": "{{ $orderId }}",
                "handler": function (response) {
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                    if (response.razorpay_signature) {
                        document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    }
                    showState('state-processing');
                    document.forms['razorpayForm'].submit();
                },
                "prefill": {
                    "name": "{{ $name }}",
                    "email": "{{ $email }}",
                    "contact": "{{ $phone }}"
                },
                "theme": {
                    "color": "#7b4a4a"
                },
                "modal": {
                    "ondismiss": function () {
                        // User closed/cancelled the Razorpay window
                        showState('state-cancelled');
                    }
                }
            };

            rzp = new Razorpay(options);

            rzp.on('payment.failed', function (response) {
                var msg = (response && response.error && response.error.description)
                    ? response.error.description
                    : 'Something went wrong while processing your payment. You have not been charged.';
                document.getElementById('failed-msg').textContent = msg + ' You have not been charged.';
                showState('state-failed');
            });

            showState('state-loading');
            rzp.open();
        }

        function retryPayment() {
            showState('state-loading');
            if (rzp) {
                rzp.open();
            } else {
                startPayment();
            }
        }
    </script>

</body>
</html>
