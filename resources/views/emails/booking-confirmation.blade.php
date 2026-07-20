@php
    $slots = array_values(array_filter(array_map('trim', explode(',', (string) ($payment->time_slots ?? '')))));
    $pid   = $paymentId ?? ($payment->razorpay_payment_id ?? '');
    $forCounsellor = $forCounsellor ?? false;
@endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body style="margin:0; padding:0; background:#f3e9e6; font-family: Arial, Helvetica, sans-serif; color:#3b2626;">
    <div style="max-width:600px; margin:0 auto; padding:24px;">

        <!-- Header -->
        <div style="background:#5c3535; background:linear-gradient(135deg,#5c3535 0%,#7b4a4a 100%); color:#ffffff; padding:30px 24px; text-align:center; border-radius:14px 14px 0 0;">
            <div style="font-size:12px; letter-spacing:2px; text-transform:uppercase; color:#ffe0e0;">V4Peace Counselling Centre</div>
            <h1 style="margin:12px 0 6px; font-size:22px;">{{ $forCounsellor ? 'New Booking Received' : 'Your Session is Confirmed!' }}</h1>
            <p style="margin:0; font-size:14px; color:rgba(255,255,255,0.9);">
                {{ $forCounsellor
                    ? 'A new counselling session has been booked with you.'
                    : 'Thank you for your booking. Here are your session details.' }}
            </p>
        </div>

        <!-- Body -->
        <div style="background:#ffffff; padding:26px 28px; border-radius:0 0 14px 14px;">

            @if($forCounsellor)
                <p style="margin:0 0 18px; font-size:15px;">Hello {{ $counsellorName ?? 'Counsellor' }}, you have a new confirmed booking:</p>
            @else
                <p style="margin:0 0 18px; font-size:15px;">Hello {{ $payment->name }}, your payment was successful and your session is booked.</p>
            @endif

            <!-- Client / Your details -->
            <h3 style="margin:18px 0 8px; font-size:13px; text-transform:uppercase; letter-spacing:1px; color:#7b4a4a;">
                {{ $forCounsellor ? 'Client Details' : 'Your Details' }}
            </h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                <tr><td style="padding:8px 0; color:#9a8888; width:42%;">Name</td><td style="padding:8px 0; text-align:right; font-weight:bold;">{{ $payment->name }}</td></tr>
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Email</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $payment->email }}</td></tr>
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Phone</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $payment->phone }}</td></tr>
            </table>

            <!-- Session details -->
            <h3 style="margin:22px 0 8px; font-size:13px; text-transform:uppercase; letter-spacing:1px; color:#7b4a4a;">Session Details</h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                @if(!empty($counsellorName))
                <tr><td style="padding:8px 0; color:#9a8888; width:42%;">Counsellor</td><td style="padding:8px 0; text-align:right; font-weight:bold;">{{ $counsellorName }}</td></tr>
                @endif
                @if(!empty($payment->candidate_type))
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Candidate Type</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $payment->candidate_type }}</td></tr>
                @endif
                @if(!empty($payment->session_mode))
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Mode</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $payment->session_mode }}</td></tr>
                @endif
                @if(!empty($payment->session_date))
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Date</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $payment->session_date }}</td></tr>
                @endif
                @if(count($slots))
                <tr>
                    <td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9; vertical-align:top;">Time Slot(s)</td>
                    <td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">
                        @foreach($slots as $s)
                            {{ $s }}@if(!$loop->last)<br>@endif
                        @endforeach
                    </td>
                </tr>
                @endif
                @if(!empty($payment->total_hour))
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Total Duration</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $payment->total_hour }} hour(s)</td></tr>
                @endif
                @if(!empty($payment->remark))
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9; vertical-align:top;">Notes</td><td style="padding:8px 0; text-align:right; border-top:1px solid #f4ece9;">{{ $payment->remark }}</td></tr>
                @endif
            </table>

            <!-- Payment -->
            <h3 style="margin:22px 0 8px; font-size:13px; text-transform:uppercase; letter-spacing:1px; color:#7b4a4a;">Payment</h3>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                <tr><td style="padding:8px 0; color:#9a8888; width:42%;">Order ID</td><td style="padding:8px 0; text-align:right; font-weight:bold;">{{ $payment->order_id }}</td></tr>
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Payment ID</td><td style="padding:8px 0; text-align:right; font-weight:bold; border-top:1px solid #f4ece9;">{{ $pid }}</td></tr>
                <tr><td style="padding:8px 0; color:#9a8888; border-top:1px solid #f4ece9;">Status</td><td style="padding:8px 0; text-align:right; border-top:1px solid #f4ece9;"><span style="background:#e5f5ec; color:#2e9e5b; font-weight:bold; padding:3px 12px; border-radius:20px; font-size:12px;">PAID</span></td></tr>
            </table>

            <!-- Total -->
            <div style="margin-top:22px; padding-top:18px; border-top:2px dashed #eaddd8; text-align:right;">
                <span style="color:#9a8888; font-size:13px; text-transform:uppercase; letter-spacing:1px;">Total Paid</span><br>
                <span style="font-size:26px; font-weight:bold; color:#5c3535;">${{ number_format((float) $payment->amount, 2) }}</span>
            </div>

            <p style="margin:26px 0 0; font-size:12.5px; color:#a08f8f; text-align:center;">
                {{ $forCounsellor
                    ? 'Please be available for the session at the scheduled time.'
                    : 'Please keep this email for your reference. We look forward to supporting you.' }}
            </p>
        </div>

        <p style="text-align:center; color:#a08f8f; font-size:12px; margin:16px 0 0;">V4Peace Counselling Centre &middot; Kothamangalam, Kerala</p>
    </div>
</body>
</html>
