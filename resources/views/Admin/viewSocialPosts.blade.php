@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    @include('Admin.partials.navbar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title mb-0">Manage Social Media Posts</h4>
                                <a href="{{ route('admin.addSocialPost') }}" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-plus"></i> Add New Post
                                </a>
                            </div>

                            <p class="text-muted">The <strong>3 latest</strong> posts are shown on the home page.</p>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
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
                                            <th>Platform</th>
                                            <th>Link</th>
                                            <th>Added</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($posts as $index => $post)
                                        <tr>
                                            <td>
                                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" style="width: 70px; height: 70px; object-fit: cover; border-radius: 6px;">
                                            </td>
                                            <td>
                                                <strong>{{ $post->title }}</strong>
                                                @if($posts->currentPage() == 1 && $index < 3)
                                                    <span class="badge badge-success ml-1">On Home</span>
                                                @endif
                                            </td>
                                            <td><span class="badge badge-info">{{ $post->platform }}</span></td>
                                            <td><a href="{{ $post->link }}" target="_blank">{{ Str::limit($post->link, 40) }}</a></td>
                                            <td>{{ $post->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ $post->link }}" class="btn btn-sm btn-info" target="_blank" title="View">
                                                    <i class="mdi mdi-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $post->id }})" title="Delete">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4">
                                                <p class="text-muted mb-3">No social media posts found.</p>
                                                <a href="{{ route('admin.addSocialPost') }}" class="btn btn-primary btn-sm">Add Your First Post</a>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            @if($posts->count() > 0)
                            <div class="mt-3">
                                {{ $posts->links() }}
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
                Are you sure you want to delete this post? This action cannot be undone.
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
    function confirmDelete(postId) {
        var deleteForm = document.getElementById('deleteForm');
        deleteForm.action = '{{ url("admin/social-post") }}/' + postId;
        $('#deleteModal').modal('show');
    }
</script>

@endsection
