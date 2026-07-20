@extends('layouts.app')

@section('title', 'Refund & Cancellation Policy | V4Peace')
@section('meta_description', 'Understand the refund and cancellation policy for V4Peace Counselling Centre sessions, including how to reschedule or cancel your appointment.')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
        color: #333;
    }
    .policy-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
        padding: 60px 20px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
    }
    .policy-header h1 {
        font-weight: 700;
        margin-bottom: 10px;
    }
    .policy-section {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 40px;
        margin-top: -40px;
        margin-bottom: 60px;
    }
    .policy-section h2 {
        color: #667eea;
        font-weight: 600;
        margin-top: 30px;
        margin-bottom: 20px;
    }
    .policy-section p {
        line-height: 1.8;
        margin-bottom: 15px;
    }
    .policy-section ul {
        padding-left: 20px;
        margin-bottom: 20px;
    }
    .policy-section li {
        margin-bottom: 10px;
        line-height: 1.7;
    }
</style>

<div class="policy-header">
    <h1>Refund and Cancellation Policy</h1>
    <p>Last Updated: November 4, 2025</p>
</div>

<div class="container">
    <div class="policy-section">
        <h2>1. Cancellation Policy</h2>
        
        <h3>1.1 Client-Initiated Cancellations</h3>
        <p>We understand that circumstances may require you to cancel or reschedule your appointment. The following rules apply:</p>
        <ul>
            <li><strong>24+ Hours Notice:</strong> Full refund or free rescheduling if cancelled at least 24 hours before the scheduled session</li>
            <li><strong>12-24 Hours Notice:</strong> 50% refund or rescheduling with a $10 fee</li>
            <li><strong>Less than 12 Hours:</strong> No refund, but rescheduling may be permitted at counselor's discretion with applicable fees</li>
            <li><strong>No-Show:</strong> No refund or rescheduling available</li>
        </ul>

        <h3>1.2 Counselor-Initiated Cancellations</h3>
        <p>If a counselor needs to cancel your session due to unforeseen circumstances:</p>
        <ul>
            <li>You will receive a full refund within 5-7 business days</li>
            <li>Or you may reschedule at no additional cost</li>
            <li>We will notify you as soon as possible via email or phone</li>
        </ul>

        <h2>2. Refund Policy</h2>

        <h3>2.1 Eligible for Refund</h3>
        <p>Refunds are provided in the following situations:</p>
        <ul>
            <li>Cancellation made at least 24 hours before the scheduled session</li>
            <li>Technical issues on our end that prevent the session from taking place</li>
            <li>Counselor unavailability due to emergency or unforeseen circumstances</li>
            <li>Service not delivered as described</li>
            <li>Payment errors or duplicate charges</li>
        </ul>

        <h3>2.2 Not Eligible for Refund</h3>
        <p>Refunds will not be provided in the following cases:</p>
        <ul>
            <li>No-show or late cancellations (less than 24 hours notice)</li>
            <li>Client's technical issues (internet connection, device problems)</li>
            <li>Dissatisfaction with counseling outcomes (as results vary by individual)</li>
            <li>After the session has been completed</li>
            <li>Change of mind after session confirmation</li>
        </ul>

        <h3>2.3 Refund Processing</h3>
        <p>Approved refunds will be processed as follows:</p>
        <ul>
            <li>Refund requests will be reviewed within 2-3 business days</li>
            <li>Approved refunds will be credited to the original payment method</li>
            <li>Processing time: 5-7 business days for credit/debit cards, 7-10 business days for net banking</li>
            <li>You will receive an email confirmation once the refund is processed</li>
        </ul>

        <h2>3. Rescheduling Policy</h2>
        <p>You may reschedule your session:</p>
        <ul>
            <li><strong>Free Rescheduling:</strong> Available if requested at least 24 hours before the scheduled session</li>
            <li><strong>One-Time Rescheduling:</strong> First reschedule is free; subsequent reschedules may incur a fee</li>
            <li><strong>Subject to Availability:</strong> Rescheduling depends on counselor availability</li>
            <li><strong>How to Reschedule:</strong> Contact us via email at v4peacecounselling@gmail.com or call +91 98468 86752</li>
        </ul>

        <h2>4. Payment Failures</h2>
        <p>If your payment fails or is declined:</p>
        <ul>
            <li>Your appointment will not be confirmed until successful payment</li>
            <li>You can retry payment or choose a different payment method</li>
            <li>No charges will be applied for failed transactions</li>
            <li>Contact our support team if you experience payment issues</li>
        </ul>

        <h2>5. Partial Refunds</h2>
        <p>Partial refunds may be issued in cases of:</p>
        <ul>
            <li>Session interrupted due to technical issues (prorated based on time completed)</li>
            <li>Service quality issues verified by our team</li>
            <li>Counselor lateness or early termination of session</li>
        </ul>

        <h2>6. How to Request a Refund or Cancellation</h2>
        <p>To request a refund or cancel your appointment:</p>
        <ol>
            <li>Email us at <strong>v4peacecounselling@gmail.com</strong> with your booking details</li>
            <li>Include your name, appointment date/time, and reason for cancellation</li>
            <li>You will receive a confirmation email within 24-48 hours</li>
            <li>Refunds (if applicable) will be processed within 5-7 business days</li>
        </ol>

        <h2>7. Emergency Situations</h2>
        <p>In case of genuine emergencies (medical, family, etc.), please contact us immediately. We will work with you to reschedule or provide a refund on a case-by-case basis.</p>

        <h2>8. Package and Multi-Session Bookings</h2>
        <p>If you have purchased a package or multiple sessions:</p>
        <ul>
            <li>Refunds are calculated based on unused sessions</li>
            <li>Package discounts may not apply to partial refunds</li>
            <li>Cancellation terms apply individually to each session</li>
        </ul>

        <h2>9. Dispute Resolution</h2>
        <p>If you have concerns about a refund or cancellation decision:</p>
        <ul>
            <li>Contact our customer support team within 7 days</li>
            <li>We will review your case and respond within 3-5 business days</li>
            <li>Decisions will be made fairly based on our policy and your circumstances</li>
        </ul>

        <h2>10. Contact Information</h2>
        <p>For questions or requests related to refunds and cancellations:</p>
        <ul>
            <li><strong>Email:</strong> v4peacecounselling@gmail.com</li>
            <li><strong>Phone:</strong> +91 98468 86752</li>
            <li><strong>Website:</strong> v4peace.com</li>
        </ul>

        <p class="mt-4"><em>By booking a session with V4Peace Counselling, you acknowledge that you have read, understood, and agree to this Refund and Cancellation Policy.</em></p>
    </div>
</div>
@endsection

