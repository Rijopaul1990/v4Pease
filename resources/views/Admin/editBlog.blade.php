@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    @include('Admin.partials.navbar')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-0">Edit Blog Post</h4>
                                <a href="{{ route('admin.viewBlogs') }}" class="btn btn-light btn-sm">
                                    <i class="mdi mdi-arrow-left"></i> Back to List
                                </a>
                            </div>
                            <p class="card-description">Update the blog post details</p>
                            
                            <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group">
                                    <label for="title">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter blog title" value="{{ old('title', $blog->title) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="post_date">Post Date <span class="text-danger">*</span></label>
                                    <input type="date" name="post_date" class="form-control" id="post_date" value="{{ old('post_date', $blog->post_date->format('Y-m-d')) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="workplace">Workplace/Category <span class="text-danger">*</span></label>
                                    <select name="workplace" class="form-control" id="workplace" required>
                                        <option value="">Select Workplace/Category</option>
                                        <option value="Workplace" {{ old('workplace', $blog->workplace) == 'Workplace' ? 'selected' : '' }}>Workplace</option>
                                        <option value="Life Changes" {{ old('workplace', $blog->workplace) == 'Life Changes' ? 'selected' : '' }}>Life Changes</option>
                                        <option value="Relationships" {{ old('workplace', $blog->workplace) == 'Relationships' ? 'selected' : '' }}>Relationships</option>
                                        <option value="Mental Health" {{ old('workplace', $blog->workplace) == 'Mental Health' ? 'selected' : '' }}>Mental Health</option>
                                        <option value="Wellness" {{ old('workplace', $blog->workplace) == 'Wellness' ? 'selected' : '' }}>Wellness</option>
                                        <option value="Counseling" {{ old('workplace', $blog->workplace) == 'Counseling' ? 'selected' : '' }}>Counseling</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="image">Blog Image</label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                    <small class="form-text text-muted">Leave empty to keep current image. Accepted formats: JPG, PNG, GIF. Maximum size: 5MB</small>
                                    
                                    <div class="mt-2">
                                        <p class="mb-1"><strong>Current Image:</strong></p>
                                        <img id="current-img" src="{{ $blog->image_url }}" alt="Current Image" style="max-width: 300px; max-height: 200px; border-radius: 5px;">
                                    </div>
                                    
                                    <div id="image-preview" class="mt-2" style="display: none;">
                                        <p class="mb-1"><strong>New Image Preview:</strong></p>
                                        <img id="preview-img" src="" alt="Preview" style="max-width: 300px; max-height: 200px; border-radius: 5px;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="display_text">Display Text (Excerpt) <span class="text-danger">*</span></label>
                                    <textarea name="display_text" class="form-control" id="display_text" rows="5" placeholder="Enter a brief excerpt that will be shown on the blog listing page">{{ old('display_text', $blog->display_text) }}</textarea>
                                    <small class="form-text text-muted">This text will appear on the blog listing page. Use HTML editor below to format it.</small>
                                </div>

                                <div class="form-group">
                                    <label for="content">Blog Content <span class="text-danger">*</span></label>
                                    <textarea name="content" class="form-control" id="content" rows="15" placeholder="Enter the full blog content">{{ old('content', $blog->content) }}</textarea>
                                    <small class="form-text text-muted">Use the rich text editor to format your content with headings, lists, links, etc.</small>
                                </div>

                                <div class="form-group">
                                    <label for="slug">URL Slug <span class="text-danger">*</span></label>
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="blog-url-slug" value="{{ old('slug', $blog->slug) }}" required>
                                    <small class="form-text text-muted">This will be the URL for the blog post</small>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a href="{{ route('admin.viewBlogs') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>

<script>
    // Image preview
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-img').src = e.target.result;
                document.getElementById('image-preview').style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('image-preview').style.display = 'none';
        }
    });

    // Auto-generate slug from title
    document.getElementById('title').addEventListener('input', function() {
        const title = this.value;
        const slugInput = document.getElementById('slug');
        if (slugInput.dataset.autoGenerated !== 'false') {
            const slug = title
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '') // Remove special characters
                .replace(/[\s_-]+/g, '-') // Replace spaces and underscores with hyphens
                .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
            slugInput.value = slug;
            slugInput.dataset.autoGenerated = 'true';
        }
    });

    // Reset auto-generation flag when user manually edits slug
    document.getElementById('slug').addEventListener('input', function() {
        this.dataset.autoGenerated = 'false';
    });

    // Initialize Summernote for Display Text
    $(document).ready(function() {
        $('#display_text').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            placeholder: 'Enter a brief excerpt that will be shown on the blog listing page...'
        });
    });

    // Initialize Summernote for Content
    $(document).ready(function() {
        $('#content').summernote({
            height: 500,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            placeholder: 'Enter the full blog content. Use the toolbar to format your text...'
        });
    });
</script>

@endsection

