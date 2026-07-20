@extends('layouts.app')

@section('title', 'Terms & Conditions | V4Peace Counselling Centre')
@section('meta_description', 'Read the Terms & Conditions for using V4Peace Counselling Centre services and website, including booking, payments and user responsibilities.')

@section('content')
<style>
    body {
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      color: #333;
    }
    .terms-header {
      background: linear-gradient(135deg, #198754, #20c997);
      color: white;
      text-align: center;
      padding: 60px 20px;
      border-bottom-left-radius: 50px;
      border-bottom-right-radius: 50px;
    }
    .terms-header h1 {
      font-weight: 700;
      margin-bottom: 10px;
    }
    .terms-section {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      padding: 40px;
      margin-top: -40px;
      margin-bottom: 60px;
    }
    h5 {
      color: #198754;
      font-weight: 600;
      margin-top: 25px;
    }
    ul {
      padding-left: 20px;
    }
    .back-btn {
      display: inline-block;
      margin-top: 30px;
    }
  </style>
  <section class="terms-header">
    <h1>Terms & Conditions</h1>
    <p>Welcome to V4PEACE — Your mental well-being is our priority.</p>
  </section>
<div class="container terms-section">
    <p>
      Welcome to <strong>V4PEACE</strong>. We are committed to providing professional, confidential, and
      compassionate online counseling services to support your mental well-being.
      Please read the following Terms & Conditions carefully before accessing our website and services.
      Your use of our website and services signifies your agreement to these terms.
    </p>

    <h5>1. Acceptance of Terms</h5>
    <p>
      By accessing or using V4PEACE services, website, or counseling sessions, you agree to
      comply with and accept the following Terms & Conditions. If you do not agree, you are
      advised not to use or access the services. We reserve the right to change or update these terms
      at any time, and continued use of our services implies acceptance of any changes.
    </p>

    <h5>2. Scope of Services</h5>
    <p>V4PEACE provides mental health and well-being counseling services, including but not limited to:</p>
    <ul>
      <li>Career Counseling & Guidance</li>
      <li>Relationship & Marriage Counseling</li>
      <li>Life Coaching</li>
      <li>Parenting Support & Counseling</li>
      <li>Stress Management & Resilience Coaching</li>
      <li>Grief & Loss Counseling</li>
      <li>Trauma Recovery Support</li>
      <li>Behavioral Coaching & Habit Change</li>
      <li>Support for LGBTQIA+ Clients</li>
      <li>Health & Wellness Counseling</li>
      <li>Digital Well-being Counseling</li>
      <li>Crisis Intervention Services</li>
      <li>Cultural Adaptation & Cross-Cultural Support</li>
      <li>Peer Support Counseling</li>
      <li>Mindfulness & Meditation Coaching</li>
      <li>Performance Mindset Coaching</li>
      <li>Focus & Concentration Enhancement</li>
      <li>Work-Life Balance for Professionals</li>
    </ul>
    <p>
      Our services are non-clinical and do not substitute professional medical care. 
      If you require clinical therapy or psychiatric treatment, please consult a healthcare provider.
    </p>

    <h5>3. Client Responsibilities</h5>
    <ul>
      <li>Provide accurate and complete information during consultations.</li>
      <li>Attend scheduled sessions on time or notify 12 hours in advance for rescheduling.</li>
      <li>Use counseling sessions for personal development and support only.</li>
      <li>Inform your counselor of any major changes to your mental health status.</li>
    </ul>

    <h5>4. Confidentiality & Data Protection</h5>
    <p>
      We uphold strict confidentiality following Indian legal and ethical guidelines.
      Information will only be disclosed if legally required or if there’s an immediate risk of harm.
      We follow GDPR and IT Act standards for data protection.
    </p>

    <h5>5. Fees, Payment & Cancellation Policy</h5>
    <ul>
      <li>Fees are charged as per the structure on the website.</li>
      <li>Payments accepted via Paytm, UPI, cards, and net banking.</li>
      <li>Cancellations must be made 12 hours in advance.</li>
      <li>Refunds are discretionary and handled case-by-case.</li>
    </ul>

    <h5>6. Limitation of Liability</h5>
    <p>
      While we strive for professional and effective counseling, V4PEACE does not guarantee outcomes.
      We are not liable for any damages resulting from service use.
    </p>

    <h5>7. Termination of Counseling Services</h5>
    <ul>
      <li>Breach of terms by client.</li>
      <li>Mutual agreement that sessions are no longer beneficial.</li>
      <li>Harassment, unethical behavior, or misuse of services.</li>
    </ul>

    <h5>8. Governing Law & Dispute Resolution</h5>
    <p>
      These Terms are governed by Indian law. Disputes will be resolved amicably or under Indian jurisdiction.
    </p>

    <h5>9. Third-Party Services & External Links</h5>
    <p>
      Our website may include links to external services. V4PEACE is not responsible for third-party content or practices.
    </p>

    <h5>10. Data Usage & Technology Security</h5>
    <p>
      We use secure, encrypted technology to protect your privacy and data in line with GDPR and IT Act standards.
    </p>

    <h5>11. Acceptance of Terms</h5>
    <ul>
      <li>You have read, understood, and agreed to these Terms & Conditions.</li>
      <li>You agree to comply with all stated policies.</li>
    </ul>

    <p>
      For questions or concerns, please contact us at:  
      <strong>v4peacecounselling@gmail.com</strong>
    </p>
  </div>
@endsection