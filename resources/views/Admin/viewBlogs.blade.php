@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    @include('Admin.partials.navbar')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title mb-0">Manage Blog Posts</h4>
                                <a href="{{ route('admin.addBlog') }}" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-plus"></i> Add New Blog
                                </a>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Post Date</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($blogs as $blog)
                                        <tr>
                                            <td>
                                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" style="width: 80px; height: 60px; object-fit: cover; border-radius: 5px;">
                                            </td>
                                            <td>
                                                <strong>{{ $blog->title }}</strong>
                                                <br>
                                                <small class="text-muted">{{ Str::limit(strip_tags($blog->display_text), 60) }}</small>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">{{ $blog->workplace }}</span>
                                            </td>
                                            <td>{{ $blog->post_date->format('M d, Y') }}</td>
                                            <td>{{ $blog->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-warning" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $blog->id }})" title="Delete">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-sm btn-info" target="_blank" title="View">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4">
                                                <p class="text-muted mb-3">No blog posts found.</p>
                                                <a href="{{ route('admin.addBlog') }}" class="btn btn-primary btn-sm">Add Your First Blog</a>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            @if($blogs->count() > 0)
                            <div class="mt-3">
                                {{ $blogs->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this blog post? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(blogId) {
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = '{{ url("admin/blog") }}/' + blogId;
        $('#deleteModal').modal('show');
    }
</script>

@endsection

