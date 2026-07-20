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

                            <h4 class="card-title">Add New Blog Post</h4>
                            <p class="card-description">Fill in the details to create a new blog post</p>
                            
                            <form action="{{ route('admin.blog.save') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="title">Blog Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter blog title" value="{{ old('title') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="post_date">Post Date <span class="text-danger">*</span></label>
                                    <input type="date" name="post_date" class="form-control" id="post_date" value="{{ old('post_date', date('Y-m-d')) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="workplace">Workplace/Category <span class="text-danger">*</span></label>
                                    <select name="workplace" class="form-control" id="workplace" required>
                                        <option value="">Select Workplace/Category</option>
                                        <option value="Workplace" {{ old('workplace') == 'Workplace' ? 'selected' : '' }}>Workplace</option>
                                        <option value="Life Changes" {{ old('workplace') == 'Life Changes' ? 'selected' : '' }}>Life Changes</option>
                                        <option value="Relationships" {{ old('workplace') == 'Relationships' ? 'selected' : '' }}>Relationships</option>
                                        <option value="Mental Health" {{ old('workplace') == 'Mental Health' ? 'selected' : '' }}>Mental Health</option>
                                        <option value="Wellness" {{ old('workplace') == 'Wellness' ? 'selected' : '' }}>Wellness</option>
                                        <option value="Counseling" {{ old('workplace') == 'Counseling' ? 'selected' : '' }}>Counseling</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="image">Blog Image <span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                                    <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF. Maximum size: 5MB</small>
                                    <div id="image-preview" class="mt-2" style="display: none;">
                                        <img id="preview-img" src="" alt="Preview" style="max-width: 300px; max-height: 200px; border-radius: 5px; margin-top: 10px;">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="display_text">Display Text (Excerpt) <span class="text-danger">*</span></label>
                                    <textarea name="display_text" class="form-control" id="display_text" rows="5" placeholder="Enter a brief excerpt that will be shown on the blog listing page">{{ old('display_text') }}</textarea>
                                    <small class="form-text text-muted">This text will appear on the blog listing page. Use HTML editor below to format it.</small>
                                </div>

                                <div class="form-group">
                                    <label for="content">Blog Content <span class="text-danger">*</span></label>
                                    <textarea name="content" class="form-control" id="content" rows="15" placeholder="Enter the full blog content">{{ old('content') }}</textarea>
                                    <small class="form-text text-muted">Use the rich text editor to format your content with headings, lists, links, etc.</small>
                                </div>

                                <div class="form-group">
                                    <label for="slug">URL Slug (Optional)</label>
                                    <input type="text" name="slug" class="form-control" id="slug" placeholder="blog-url-slug" value="{{ old('slug') }}">
                                    <small class="form-text text-muted">Leave empty to auto-generate from title</small>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CKEditor 5 Classic -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

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
        if (!slugInput.value || slugInput.dataset.autoGenerated === 'true') {
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

