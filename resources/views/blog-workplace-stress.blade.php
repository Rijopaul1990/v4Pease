@extends('layouts.app')

@section('title', 'How to Manage Stress in the Workplace')

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
            <span>Workplace Stress Management</span>
        </p>
        <h1 class="mb-0">How to Manage Stress in the Workplace: Practical Strategies to Stay Balanced</h1>
    </div>
</div>

<!-- Blog Content -->
<div class="container">
    <div class="blog-content">
        <div class="blog-meta">
            <div class="blog-date">
                <i class="fa fa-calendar"></i>
                <span>October 15, 2024</span>
            </div>
            <span class="blog-category">Workplace</span>
        </div>
        
        <img src="{{ asset('images/staff-1.jpg') }}" alt="Workplace Stress Management" class="blog-image">
        
        <div class="blog-text">
            <p>Stress has become an almost unavoidable part of the modern workplace. Between tight deadlines, increasing demands, and maintaining personal relationships, it's easy to feel overwhelmed. However, managing workplace stress is not only necessary for your mental well-being but also for maintaining productivity and achieving a healthy work-life balance. Below are practical strategies to help you manage stress and maintain mental clarity at work.</p>
            
            <h4>1. Prioritize Your Tasks Using the Eisenhower Matrix</h4>
            <p>Stress often arises from feeling overwhelmed by multiple responsibilities. To manage this, sort your tasks based on importance and urgency:</p>
            <ul>
                <li>Important &amp; Urgent: Do these first.</li>
                <li>Important, Not Urgent: Schedule time for these.</li>
                <li>Not Important, Urgent: Delegate these when possible.</li>
                <li>Not Important &amp; Not Urgent: Eliminate or postpone.</li>
            </ul>
            <p>This simple strategy helps ensure that you focus on what matters most without being sidetracked by distractions.</p>
            
            <h4>2. Set Clear Boundaries between Work &amp; Home</h4>
            <p>While being dedicated is admirable, overextending yourself can lead to burnout. Establish clear boundaries by:</p>
            <ul>
                <li>Creating a firm end-of-work routine.</li>
                <li>Not checking emails or messages after a certain time.</li>
                <li>Communicating your limits to colleagues and supervisors.</li>
            </ul>
            <p>Remember: Rest is productive. It replenishes your energy and improves focus.</p>
            
            <h4>3. Practice Mindfulness &amp; Meditation</h4>
            <p>Mindfulness helps ground you in the present moment, reducing the impact of overwhelming thoughts. Incorporate practices like:</p>
            <ul>
                <li>Daily deep breathing exercises.</li>
                <li>Guided meditation apps like Headspace or Calm.</li>
                <li>Setting aside 5–10 minutes a day for intentional relaxation.</li>
            </ul>
            <p>These practices can significantly lower your stress response and give you mental clarity during busy days.</p>
            
            <h4>4. Foster Supportive Work Relationships</h4>
            <p>Having a strong support system at work can make a significant difference. Share challenges with trusted colleagues, participate in team-building activities, or simply maintain small social interactions to combat isolation. Sharing your challenges can lighten the mental burden and lead to solutions.</p>
            
            <h4>5. Schedule Time for Physical Activity</h4>
            <p>Physical movement releases endorphins (natural mood lifters) and reduces stress. Incorporate exercise into your day, even if it's a 20-minute walk, stretching, or quick yoga break. It keeps your body active and your mind at ease.</p>
            
            <h4>Final Thoughts</h4>
            <p>Stress in the workplace is normal, but with the right strategies, you can take control of it. Remember, managing stress is a journey, and it starts with one small step every day. Implement these tips, and you'll soon notice a difference in how you handle workplace pressure. Take care of your mental health—it matters.</p>
            
            <a href="{{ url('/blog') }}" class="back-to-blog">
                <i class="fa fa-arrow-left mr-2"></i>
                Back to Blog
            </a>
        </div>
    </div>
</div>

@endsection
