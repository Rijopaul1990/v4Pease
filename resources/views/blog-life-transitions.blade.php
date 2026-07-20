@extends('layouts.app')

@section('title', 'Navigating Life Transitions')

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
            <span>Life Transitions</span>
        </p>
        <h1 class="mb-0">Navigating Life Transitions: Expert Insights on Thriving During Change</h1>
    </div>
</div>

<!-- Blog Content -->
<div class="container">
    <div class="blog-content">
        <div class="blog-meta">
            <div class="blog-date">
                <i class="fa fa-calendar"></i>
                <span>October 10, 2024</span>
            </div>
            <span class="blog-category">Life Changes</span>
        </div>
        
        <img src="{{ asset('images/staff-2.jpg') }}" alt="Life Transitions" class="blog-image">
        
        <div class="blog-text">
            <p>Life transitions can be both exciting and overwhelming. Whether you're moving to a new city, changing careers, becoming a parent, or going through a breakup, transitions bring uncertainty, stress, and new opportunities for growth. Learning how to manage change can empower you to face challenges with confidence and adaptability. We've gathered expert insights into how you can build resilience and make the most of any transition in life.</p>
            
            <h4>1. Acknowledge &amp; Accept Your Feelings</h4>
            <p>The first step in managing change is acknowledging your emotions. It's okay to feel fear, anxiety, sadness, or excitement during transitions. Allow yourself to feel these emotions without judgment. Accepting your feelings allows you to process them and move forward without being overwhelmed.</p>
            <p><em>Tip:</em> Journaling your thoughts can help you identify patterns and triggers during this period.</p>
            
            <h4>2. Focus on What You Can Control</h4>
            <p>Life transitions often come with uncertainties. Instead of focusing on what you can't change, focus on the actions within your control. Ask yourself:</p>
            <ul>
                <li>What steps can I take to adapt to this change?</li>
                <li>Which small actions will lead to progress?</li>
            </ul>
            <p>Shifting your attention to these elements can boost your confidence and sense of agency.</p>
            
            <h4>3. Set Small, Achievable Goals</h4>
            <p>During transitions, big goals can feel intimidating or unachievable. Break them into smaller, manageable steps. This gives you a roadmap and a series of successes to build momentum.</p>
            <p><em>Example:</em> If you're transitioning to a new job, focus on learning one new skill at a time instead of trying to master everything at once.</p>
            
            <h4>4. Build a Support System</h4>
            <p>Surround yourself with people who can provide emotional support. Reach out to friends, family members, or even a mental health professional to talk about your fears or ask for advice. Having a trusted network to lean on can make transitions feel less isolating.</p>
            
            <h4>5. Embrace Flexibility &amp; Curiosity</h4>
            <p>Change can lead to growth and new opportunities. Adopt a mindset of curiosity rather than resistance. Ask yourself:</p>
            <ul>
                <li>What can I learn from this experience?</li>
                <li>How can this change shape my future in a positive way?</li>
            </ul>
            <p>Adopting this mindset can make even difficult transitions feel like opportunities for personal development.</p>
            
            <h4>Final Thoughts</h4>
            <p>Change is never easy, but it can lead to profound personal growth. Remember, you have the strength, adaptability, and resilience to weather any transition. Embrace change with patience, self-compassion, and an open mind. You are capable of thriving during change. Trust yourself.</p>
            
            <a href="{{ url('/blog') }}" class="back-to-blog">
                <i class="fa fa-arrow-left mr-2"></i>
                Back to Blog
            </a>
        </div>
    </div>
</div>

@endsection
