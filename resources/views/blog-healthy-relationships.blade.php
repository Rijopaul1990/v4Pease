@extends('layouts.app')

@section('title', 'Building Healthy Relationships')

@section('content')
<style>
    .blog-single-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 60px 0 40px;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }
    
    .blog-single-header::before {
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
    
    .blog-single-header .container {
        position: relative;
        z-index: 1;
    }
    
    .blog-single-header h1 {
        color: white;
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        line-height: 1.3;
    }
    
    .blog-single-header .breadcrumbs {
        color: rgba(255, 255, 255, 0.9);
    }
    
    .blog-single-header .breadcrumbs a {
        color: white;
        text-decoration: none;
    }
    
    .blog-content {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 40px;
        margin-bottom: 30px;
    }
    
    .blog-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }
    
    .blog-date {
        display: flex;
        align-items: center;
        color: #666;
    }
    
    .blog-date i {
        margin-right: 8px;
    }
    
    .blog-category {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
    }
    
    .blog-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 30px;
    }
    
    .blog-text h4 {
        color: #333;
        margin-top: 30px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .blog-text p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .blog-text ul {
        margin-bottom: 20px;
        padding-left: 20px;
    }
    
    .blog-text li {
        color: #555;
        line-height: 1.8;
        margin-bottom: 8px;
    }
    
    .blog-text em {
        color: #667eea;
        font-weight: 500;
    }
    
    .back-to-blog {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 12px 30px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-block;
        margin-top: 30px;
    }
    
    .back-to-blog:hover {
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }
    
    @media (max-width: 768px) {
        .blog-single-header h1 {
            font-size: 1.6rem;
        }
        
        .blog-content {
            padding: 25px;
        }
        
        .blog-image {
            height: 250px;
        }
        
        .blog-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
    }
</style>

<!-- Header Section -->
<div class="blog-single-header">
    <div class="container">
        <p class="breadcrumbs mb-0">
            <span class="mr-2">
                <a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a>
            </span>
            <span class="mr-2">
                <a href="{{ url('/blog') }}">Blog <i class="fa fa-chevron-right"></i></a>
            </span>
            <span>Healthy Relationships</span>
        </p>
        <h1 class="mb-0">The Secrets to Building Healthy &amp; Fulfilling Relationships</h1>
    </div>
</div>

<!-- Blog Content -->
<div class="container">
    <div class="blog-content">
        <div class="blog-meta">
            <div class="blog-date">
                <i class="fa fa-calendar"></i>
                <span>October 5, 2024</span>
            </div>
            <span class="blog-category">Relationships</span>
        </div>
        
        <img src="{{ asset('images/staff-3.jpg') }}" alt="Healthy Relationships" class="blog-image">
        
        <div class="blog-text">
            <p>Healthy relationships form the foundation of emotional well-being and personal happiness. Whether it's romantic, familial, or professional, every relationship requires effort, communication, and understanding. So how can you strengthen your relationships to ensure mutual trust, respect, and connection? Here are expert insights into how you can foster and maintain meaningful, fulfilling relationships.</p>
            
            <h4>1. Practice Active Listening</h4>
            <p>Listening is more than just hearing words; it's about understanding the emotions and intentions behind them. Active listening involves:</p>
            <ul>
                <li>Giving the speaker your full attention.</li>
                <li>Not interrupting.</li>
                <li>Reflecting back to ensure understanding (e.g., "It sounds like you're feeling frustrated about…").</li>
            </ul>
            <p>This builds trust and shows others that you value their feelings.</p>
            
            <h4>2. Prioritize Empathy</h4>
            <p>Empathy is the ability to put yourself in someone else's shoes. It strengthens bonds by fostering mutual understanding. Ask yourself:</p>
            <ul>
                <li>How would I feel if I were in their situation?</li>
                <li>What emotions might they be experiencing?</li>
            </ul>
            <p>Empathy builds emotional safety, encouraging openness and honesty.</p>
            
            <h4>3. Set Healthy Boundaries</h4>
            <p>Boundaries define how we interact with others and maintain self-respect. They are not about shutting others out but about protecting your emotional energy.</p>
            <ul>
                <li>Learn to say "no" when necessary.</li>
                <li>Communicate your needs clearly and respectfully.</li>
                <li>Respect the boundaries of others without judgment.</li>
            </ul>
            <p>Healthy boundaries ensure mutual respect and understanding in all relationships.</p>
            
            <h4>4. Communicate Openly &amp; Honestly</h4>
            <p>Open communication is vital to resolving misunderstandings. Be honest about your feelings while being kind and respectful. Avoid blame or defensiveness and focus on sharing your feelings authentically.</p>
            <p><em>Example:</em> Instead of saying, "You never listen to me," try, "I feel unheard when I don't get the chance to share my thoughts."</p>
            
            <h4>5. Appreciate &amp; Celebrate the Small Things</h4>
            <p>Relationships thrive on positivity. A simple note of appreciation, a small gesture of kindness, or even a compliment can deepen connections and remind loved ones that they are valued.</p>
            
            <h4>Final Thoughts</h4>
            <p>Building strong relationships doesn't happen overnight. They require patience, communication, and mutual effort. Small, consistent actions create trust and joy in the long term. Healthy relationships are the heart of a fulfilling life. Invest in them.</p>
            
            <a href="{{ url('/blog') }}" class="back-to-blog">
                <i class="fa fa-arrow-left mr-2"></i>
                Back to Blog
            </a>
        </div>
    </div>
</div>

@endsection
