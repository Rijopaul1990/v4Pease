@extends('layouts.app')

@section('title', 'Privacy Policy | V4Peace Counselling Centre')
@section('meta_description', 'Learn how V4Peace Counselling Centre collects, uses and protects your personal information and maintains strict confidentiality for all counselling clients.')

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
    <h1>Privacy Policy</h1>
    <p>Last Updated: November 4, 2025</p>
</div>

<div class="container">
    <div class="policy-section">
        <h2>1. Introduction</h2>
        <p>At V4Peace Counselling ("we," "us," or "our"), we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website v4peace.com and use our online counselling services.</p>

        <h2>2. Information We Collect</h2>
        <p>We collect information that you provide directly to us, including:</p>
        <ul>
            <li><strong>Personal Information:</strong> Name, email address, phone number, date of birth</li>
            <li><strong>Payment Information:</strong> Billing details processed securely through Razorpay</li>
            <li><strong>Session Information:</strong> Appointment details, counselor preferences, selected time slots</li>
            <li><strong>Communication:</strong> Messages sent through contact forms or during sessions</li>
            <li><strong>Technical Information:</strong> IP address, browser type, device information</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use the collected information for the following purposes:</p>
        <ul>
            <li>To provide and maintain our counselling services</li>
            <li>To process your appointments and payments</li>
            <li>To communicate with you about your sessions and our services</li>
            <li>To improve our website and service quality</li>
            <li>To send you important updates and notifications</li>
            <li>To comply with legal obligations</li>
            <li>To protect against fraud and unauthorized access</li>
        </ul>

        <h2>4. Information Sharing and Disclosure</h2>
        <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
        <ul>
            <li><strong>With Your Consent:</strong> When you explicitly authorize us to share information</li>
            <li><strong>Service Providers:</strong> With trusted third-party service providers (e.g., Razorpay for payment processing)</li>
            <li><strong>Legal Requirements:</strong> When required by law or to protect our legal rights</li>
            <li><strong>Professional Counselors:</strong> Only the information necessary for your counselling sessions</li>
        </ul>

        <h2>5. Data Security</h2>
        <p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:</p>
        <ul>
            <li>SSL/TLS encryption for data transmission</li>
            <li>Secure payment processing through PCI-DSS compliant Razorpay</li>
            <li>Regular security audits and updates</li>
            <li>Access controls and authentication protocols</li>
            <li>Confidential storage of session records</li>
        </ul>

        <h2>6. Counselling Session Confidentiality</h2>
        <p>All information shared during counselling sessions is strictly confidential and protected under professional ethics guidelines. We maintain the confidentiality of your sessions except in cases where:</p>
        <ul>
            <li>There is a risk of harm to yourself or others</li>
            <li>We are legally required to disclose information</li>
            <li>You provide written consent for disclosure</li>
        </ul>

        <h2>7. Payment Information</h2>
        <p>Payment transactions are processed securely through Razorpay. We do not store your complete credit/debit card information on our servers. Razorpay complies with PCI-DSS standards and maintains the security of your payment data.</p>

        <h2>8. Cookies and Tracking Technologies</h2>
        <p>We use cookies and similar tracking technologies to enhance your experience on our website. You can control cookie preferences through your browser settings.</p>

        <h2>9. Your Rights</h2>
        <p>You have the right to:</p>
        <ul>
            <li>Access and receive a copy of your personal information</li>
            <li>Request correction of inaccurate information</li>
            <li>Request deletion of your personal information</li>
            <li>Withdraw consent for data processing</li>
            <li>Object to processing of your information</li>
            <li>Request data portability</li>
        </ul>

        <h2>10. Data Retention</h2>
        <p>We retain your personal information for as long as necessary to provide our services and comply with legal obligations. Session records are maintained as per professional standards and regulatory requirements.</p>

        <h2>11. Children's Privacy</h2>
        <p>Our services are designed for individuals aged 15 years and older. We do not knowingly collect information from children under 15 without parental consent.</p>

        <h2>12. Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date.</p>

        <h2>13. Contact Us</h2>
        <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us:</p>
        <ul>
            <li><strong>Email:</strong> v4peacecounselling@gmail.com</li>
            <li><strong>Phone:</strong> +91 98468 86752</li>
            <li><strong>Website:</strong> v4peace.com</li>
        </ul>

        <p class="mt-4"><em>By using our website and services, you acknowledge that you have read and understood this Privacy Policy.</em></p>
    </div>
</div>
@endsection

