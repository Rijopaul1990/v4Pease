@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('Admin.partials.navbar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title mb-0">Add Social Media Post</h4>
                                <a href="{{ route('admin.viewSocialPosts') }}" class="btn btn-secondary btn-sm">
                                    <i class="mdi mdi-format-list-bulleted"></i> View All Posts
                                </a>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.socialPost.save') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Title / Caption</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Short caption for the post" value="{{ old('title') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="platform">Platform</label>
                                    <select name="platform" id="platform" class="form-control" required>
                                        @foreach(['Instagram','Facebook','Twitter','YouTube','LinkedIn'] as $pf)
                                            <option value="{{ $pf }}" {{ old('platform') == $pf ? 'selected' : '' }}>{{ $pf }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="link">Post Link (URL)</label>
                                    <input type="url" name="link" id="link" class="form-control" placeholder="https://instagram.com/p/..." value="{{ old('link') }}" required>
                                    <small class="text-muted">Clicking the post on the website opens this link.</small>
                                </div>

                                <div class="form-group">
                                    <label for="image">Post Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    <small class="text-muted">Recommended: a square image. Max 5MB.</small>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
