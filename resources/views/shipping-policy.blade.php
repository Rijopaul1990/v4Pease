@extends('layouts.app')

@section('title', 'Service Delivery Policy | V4Peace Counselling Centre')
@section('meta_description', 'How V4Peace Counselling Centre delivers its online counselling services and session access details after booking. Read our service delivery policy.')

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
    <h1>Shipping and Delivery Policy</h1>
    <p>Last Updated: November 4, 2025</p>
</div>

<div class="container">
    <div class="policy-section">
        <h2>Service Delivery Policy</h2>
        
        <p><strong>Note:</strong> V4Peace Counselling provides digital/online counselling services. We do not ship physical products. This policy outlines how our online services are delivered.</p>

        <h2>1. Nature of Services</h2>
        <p>V4Peace offers the following digital services:</p>
        <ul>
            <li>Online video counselling sessions</li>
            <li>Phone counselling sessions</li>
            <li>Chat-based counselling support</li>
            <li>Digital resources and materials</li>
        </ul>

        <h2>2. Service Delivery Timeline</h2>
        
        <h3>2.1 Appointment Confirmation</h3>
        <ul>
            <li>Upon successful payment, you will receive instant booking confirmation via email</li>
            <li>Confirmation includes session details, date, time, and joining instructions</li>
            <li>Delivery time: Immediate (within 5 minutes of payment confirmation)</li>
        </ul>

        <h3>2.2 Session Access</h3>
        <ul>
            <li>Session link or call details will be sent 24 hours before the scheduled appointment</li>
            <li>Reminder notification sent 1 hour before the session</li>
            <li>Access to the session is available 10 minutes before the scheduled start time</li>
        </ul>

        <h3>2.3 Digital Resources</h3>
        <ul>
            <li>Any supplementary materials will be shared via email during or after the session</li>
            <li>Resources are provided in digital format (PDF, links, etc.)</li>
            <li>Delivery within 24 hours of session completion</li>
        </ul>

        <h2>3. Service Availability</h2>
        <p>Our online counselling services are available:</p>
        <ul>
            <li>24/7 booking system</li>
            <li>Sessions scheduled based on counselor availability</li>
            <li>Accessible from anywhere with internet connection</li>
            <li>Compatible with major devices (computer, tablet, smartphone)</li>
        </ul>

        <h2>4. Delivery Method</h2>
        <p>Services are delivered through:</p>
        <ul>
            <li><strong>Video Sessions:</strong> Secure video conferencing platform (link sent via email)</li>
            <li><strong>Phone Sessions:</strong> Direct call to your registered phone number</li>
            <li><strong>Chat Sessions:</strong> Secure messaging platform access</li>
            <li><strong>Email Communications:</strong> Sent to your registered email address</li>
        </ul>

        <h2>5. Technical Requirements</h2>
        <p>To receive our services, you need:</p>
        <ul>
            <li>Stable internet connection (for video/chat sessions)</li>
            <li>Working device (computer, tablet, or smartphone)</li>
            <li>Updated web browser or mobile app</li>
            <li>Email access for communications and materials</li>
        </ul>

        <h2>6. Delayed or Failed Service Delivery</h2>
        
        <h3>6.1 Our Responsibility</h3>
        <p>If we are unable to deliver the service due to:</p>
        <ul>
            <li>Technical issues on our platform</li>
            <li>Counselor unavailability</li>
            <li>System errors</li>
        </ul>
        <p>We will provide a full refund or reschedule at no additional cost.</p>

        <h3>6.2 Client Responsibility</h3>
        <p>If service cannot be delivered due to:</p>
        <ul>
            <li>Your technical issues (internet, device problems)</li>
            <li>Incorrect contact information provided</li>
            <li>Failure to join the session at scheduled time</li>
        </ul>
        <p>Standard cancellation and refund policies apply.</p>

        <h2>7. Confirmation and Notifications</h2>
        <p>You will receive notifications via:</p>
        <ul>
            <li>Email confirmations for all bookings</li>
            <li>Reminder emails 24 hours before session</li>
            <li>SMS notifications (if phone number provided)</li>
            <li>Session links and access details</li>
        </ul>

        <h2>8. Geographic Availability</h2>
        <p>Our online services are available:</p>
        <ul>
            <li>Globally - accessible from any country</li>
            <li>Time zones: Sessions scheduled according to your local time</li>
            <li>Language: Primary counselling in English and regional languages</li>
        </ul>

        <h2>9. Session Duration</h2>
        <p>Standard session delivery:</p>
        <ul>
            <li>Sessions are delivered for the booked time duration</li>
            <li>Typical session: 30 minutes to 1 hour (as per booking)</li>
            <li>Counselor will join on time and stay for the full duration</li>
            <li>Extended sessions may be available upon request</li>
        </ul>

        <h2>10. Contact for Delivery Issues</h2>
        <p>If you experience any issues receiving our services or accessing your session:</p>
        <ul>
            <li><strong>Email:</strong> v4peacecounselling@gmail.com</li>
            <li><strong>Phone:</strong> +91 98468 86752</li>
            <li><strong>Response Time:</strong> Within 2-4 hours during business hours</li>
        </ul>

        <h2>11. Post-Session Delivery</h2>
        <p>After your session:</p>
        <ul>
            <li>Session notes (if applicable) provided within 24 hours</li>
            <li>Recommended resources sent via email</li>
            <li>Follow-up appointment options shared</li>
            <li>Feedback form for service improvement</li>
        </ul>

        <p class="mt-4"><em>Since V4Peace Counselling provides only digital/online services, there is no physical shipping involved. All services are delivered electronically at the scheduled time.</em></p>

        <p class="mt-3"><strong>For any questions regarding service delivery, please contact us at v4peacecounselling@gmail.com</strong></p>
    </div>
</div>
@endsection

