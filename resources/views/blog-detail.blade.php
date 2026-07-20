@extends('layouts.app')

@section('title', $blog->title . ' | V4Peace Counselling Centre')
@section('meta_description', Str::limit(strip_tags($blog->display_text ?: $blog->content), 155))
@section('og_type', 'article')
@section('og_image', $blog->image_url)

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": {!! json_encode($blog->title) !!},
    "image": "{{ $blog->image_url }}",
    "datePublished": "{{ optional($blog->post_date)->toIso8601String() }}",
    "description": {!! json_encode(\Illuminate\Support\Str::limit(strip_tags($blog->display_text ?: $blog->content), 200)) !!},
    "author": { "@type": "Organization", "name": "V4Peace Counselling Centre" },
    "publisher": {
        "@type": "Organization",
        "name": "V4Peace Counselling Centre",
        "logo": { "@type": "ImageObject", "url": "{{ asset('images/new_log_tr1.PNG') }}" }
    },
    "mainEntityOfPage": "{{ url()->current() }}"
}
</script>
@endpush

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
        background-image: url('{{ asset('images/bg_5.jpg') }}');
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
    
    .blog-text ul, .blog-text ol {
        margin-bottom: 20px;
        padding-left: 20px;
    }
    
    .blog-text li {
        color: #555;
        line-height: 1.8;
        margin-bottom: 8px;
    }
    
    .blog-text img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
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
                <a href="{{ route('blog.index') }}">Blog <i class="fa fa-chevron-right"></i></a>
            </span>
            <span>{{ Str::limit($blog->title, 50) }}</span>
        </p>
        <h1 class="mb-0">{{ $blog->title }}</h1>
    </div>
</div>

<!-- Blog Content -->
<div class="container">
    <div class="blog-content">
        <div class="blog-meta">
            <div class="blog-date">
                <i class="fa fa-calendar"></i>
                <span>{{ $blog->post_date->format('F d, Y') }}</span>
            </div>
            <span class="blog-category">{{ $blog->workplace }}</span>
        </div>
        
        @if($blog->image)
            <img src="{{ $blog->image_url }}" 
                 alt="{{ $blog->title }}" 
                 class="blog-image"
                 onerror="this.src='{{ asset('images/staff-1.jpg') }}'">
        @endif
        
        <div class="blog-text">
            {!! $blog->content !!}
            
            <a href="{{ route('blog.index') }}" class="back-to-blog">
                <i class="fa fa-arrow-left mr-2"></i>
                Back to Blog
            </a>
        </div>
    </div>
</div>

@endsection

