<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Payment Successful | V4Peace Counselling Centre</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('images/trade.PNG') }}">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    :root { --vp-brand: #7b4a4a; --vp-brand-dark: #5c3535; --vp-brand-light: #e5dbdb; --vp-page: #f3e9e6; }
    * { box-sizing: border-box; }
    body {
      margin: 0; min-height: 100vh; background: var(--vp-page);
      font-family: 'Roboto', sans-serif; color: #3b2626;
      display: flex; align-items: center; justify-content: center; padding: 30px 16px;
    }
    .voucher {
      width: 100%; max-width: 640px; background: #fff; border-radius: 18px;
      overflow: hidden; box-shadow: 0 25px 60px rgba(92, 53, 53, 0.18);
    }
    .voucher-head {
      background: linear-gradient(135deg, var(--vp-brand-dark) 0%, var(--vp-brand) 100%);
      color: #fff; text-align: center; padding: 34px 28px 30px;
    }
    .check-badge {
      width: 74px; height: 74px; border-radius: 50%; background: #fff; color: #2e9e5b;
      display: flex; align-items: center; justify-content: center; font-size: 40px;
      margin: 0 auto 16px; box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    .voucher-head h1 { font-size: 1.7rem; font-weight: 700; margin: 0 0 6px; }
    .voucher-head p { margin: 0; color: rgba(255,255,255,0.9); font-size: .95rem; }
    .voucher-brand {
      text-transform: uppercase; letter-spacing: .14em; font-size: 12px;
      color: rgba(255,255,255,0.75); margin-bottom: 18px;
    }

    .voucher-body { padding: 26px 32px 6px; }
    .sec-title {
      font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .06em;
      color: var(--vp-brand); margin: 18px 0 8px;
    }
    .sec-title:first-child { margin-top: 4px; }
    .drow {
      display: flex; justify-content: space-between; align-items: flex-start;
      gap: 18px; padding: 9px 0; border-bottom: 1px solid #f4ece9;
    }
    .drow .lbl { color: #9a8888; font-weight: 500; white-space: nowrap; }
    .drow .val { color: #3b2626; font-weight: 600; text-align: right; word-break: break-word; }
    .badge-paid {
      display: inline-block; background: #e5f5ec; color: #2e9e5b;
      font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: .04em;
      padding: 3px 12px; border-radius: 20px;
    }
    .badge-type {
      display: inline-block; background: var(--vp-brand-light); color: var(--vp-brand-dark);
      font-size: 12px; font-weight: 600; padding: 2px 10px; border-radius: 20px;
    }

    /* Perforated divider with side notches */
    .perf { position: relative; height: 0; border-top: 2px dashed #e5d8d3; margin: 22px 0 0; }
    .perf::before, .perf::after {
      content: ''; position: absolute; top: -15px; width: 30px; height: 30px;
      border-radius: 50%; background: var(--vp-page);
    }
    .perf::before { left: -32px; }
    .perf::after { right: -32px; }

    .stub {
      display: flex; justify-content: space-between; align-items: center;
      padding: 20px 32px 26px;
    }
    .stub .total-lbl { color: #9a8888; font-size: 13px; text-transform: uppercase; letter-spacing: .05em; }
    .stub .total-amt { font-size: 2rem; font-weight: 700; color: var(--vp-brand-dark); line-height: 1; }
    .stub .paid-side { text-align: right; }

    .voucher-actions { padding: 0 32px 30px; display: flex; gap: 12px; }
    .btn-v {
      flex: 1; text-align: center; text-decoration: none; cursor: pointer;
      border-radius: 30px; padding: 13px; font-weight: 600; font-size: .98rem;
      transition: all .2s ease; border: 1px solid transparent;
    }
    .btn-primary-v { background: var(--vp-brand); color: #fff; }
    .btn-primary-v:hover { background: var(--vp-brand-dark); }
    .btn-outline-v { background: #fff; border-color: #e0d3cf; color: var(--vp-brand-dark); }
    .btn-outline-v:hover { background: #fbf5f2; }

    .foot-note { text-align: center; color: #a08f8f; font-size: 12.5px; padding: 0 32px 26px; }

    @media print {
      body { background: #fff; }
      .voucher { box-shadow: none; }
      .voucher-actions { display: none !important; }
    }
    @media (max-width: 480px) {
      .voucher-body, .stub, .voucher-actions { padding-left: 20px; padding-right: 20px; }
      .voucher-actions { flex-direction: column; }
    }
  </style>
</head>
<body>

  @php
    $slots = $payment->time_slots ?? '';
    $pid = $paymentId ?? ($payment->razorpay_payment_id ?? '');

    // Build a consolidated session time range from the individual slots
    $sessionTime = '';
    $slotList = array_values(array_filter(array_map('trim', explode(',', $slots))));
    if (count($slotList)) {
        $firstParts = explode(' - ', $slotList[0]);
        $lastParts  = explode(' - ', $slotList[count($slotList) - 1]);
        $start = trim($firstParts[0] ?? '');
        $end   = trim($lastParts[1] ?? ($lastParts[0] ?? ''));
        if ($start !== '' && $end !== '') {
            $sessionTime = $start . ' – ' . $end;
        }
    }
  @endphp

  <div class="voucher" id="voucher">
    <div class="voucher-head">
      <div class="voucher-brand">V4Peace Counselling Centre</div>
      <div class="check-badge"><span class="fa fa-check"></span></div>
      <h1>Payment Successful!</h1>
      <p>Your counselling session is booked &amp; confirmed.</p>
    </div>

    <div class="voucher-body">
      <div class="sec-title">Client Details</div>
      <div class="drow"><span class="lbl">Name</span><span class="val">{{ $payment->name ?? 'N/A' }}</span></div>
      <div class="drow"><span class="lbl">Email</span><span class="val">{{ $payment->email ?? 'N/A' }}</span></div>
      <div class="drow"><span class="lbl">Phone</span><span class="val">{{ $payment->phone ?? 'N/A' }}</span></div>

      <div class="sec-title">Session Details</div>
      @if(!empty($counsellorName))
      <div class="drow"><span class="lbl">Counsellor</span><span class="val">{{ $counsellorName }}</span></div>
      @endif
      @if(!empty($payment->candidate_type))
      <div class="drow"><span class="lbl">Candidate Type</span><span class="val"><span class="badge-type">{{ $payment->candidate_type }}</span></span></div>
      @endif
      @if(!empty($payment->session_mode))
      <div class="drow"><span class="lbl">Mode</span><span class="val">{{ $payment->session_mode }}</span></div>
      @endif
      @if(!empty($payment->session_date))
      <div class="drow"><span class="lbl">Date</span><span class="val">{{ $payment->session_date }}</span></div>
      @endif
      @if(!empty($sessionTime))
      <div class="drow"><span class="lbl">Session Time</span><span class="val">{{ $sessionTime }}</span></div>
      @endif
      @if(!empty($slots))
      <div class="drow"><span class="lbl">Time Slot(s)</span><span class="val">{{ $slots }}</span></div>
      @endif
      @if(!empty($payment->total_hour))
      <div class="drow"><span class="lbl">Total Duration</span><span class="val">{{ $payment->total_hour }} hour(s)</span></div>
      @endif
      @if(!empty($payment->remark))
      <div class="drow"><span class="lbl">Notes</span><span class="val">{{ $payment->remark }}</span></div>
      @endif

      <div class="sec-title">Payment</div>
      <div class="drow"><span class="lbl">Order ID</span><span class="val">{{ $payment->order_id ?? 'N/A' }}</span></div>
      <div class="drow"><span class="lbl">Payment ID</span><span class="val">{{ $pid }}</span></div>
      <div class="drow"><span class="lbl">Date Issued</span><span class="val">{{ optional($payment->created_at)->format('d M Y, h:i A') }}</span></div>
      <div class="drow"><span class="lbl">Status</span><span class="val"><span class="badge-paid">Paid</span></span></div>
    </div>

    <div class="perf"></div>

    <div class="stub">
      <div>
        <div class="total-lbl">Total Paid</div>
        <div class="total-amt">${{ number_format((float)($payment->amount ?? 0), 2) }}</div>
      </div>
      <div class="paid-side">
        <span class="badge-paid"><span class="fa fa-check-circle"></span> Confirmed</span>
      </div>
    </div>

    <div class="voucher-actions">
      <a href="{{ url('/') }}" class="btn-v btn-primary-v">Go to Homepage</a>
      <a href="javascript:window.print()" class="btn-v btn-outline-v"><span class="fa fa-print"></span> Print / Save</a>
    </div>

    <p class="foot-note">A confirmation has been recorded for your booking. Please keep this voucher for your reference.</p>
  </div>

</body>
</html>
