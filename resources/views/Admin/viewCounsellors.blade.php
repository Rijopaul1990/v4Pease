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
                                <h4 class="card-title mb-0">Manage Counsellors</h4>
                                <a href="{{ route('admin.addcouncelor') }}" class="btn btn-primary btn-sm">
                                    <i class="mdi mdi-plus"></i> Add New Counsellor
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
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Qualification</th>
                                            <th>Contact</th>
                                            <th>Social Links</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($counsellors as $counsellor)
                                        <tr>
                                            <td>
                                                <img src="{{ $counsellor->photo_url }}" alt="{{ $counsellor->counsellor_name }}"
                                                     style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                            </td>
                                            <td><strong>{{ $counsellor->counsellor_name }}</strong></td>
                                            <td><small class="text-muted">{{ $counsellor->counsellor_qualification }}</small></td>
                                            <td>
                                                <small class="text-muted d-block">{{ $counsellor->email ?: '—' }}</small>
                                                <small class="text-muted d-block">{{ $counsellor->phone ?: '—' }}</small>
                                            </td>
                                            <td>
                                                @if($counsellor->insta_link)
                                                    <a href="{{ $counsellor->insta_link }}" target="_blank" title="Instagram" class="mr-2"><i class="mdi mdi-instagram"></i></a>
                                                @endif
                                                @if($counsellor->fb_link)
                                                    <a href="{{ $counsellor->fb_link }}" target="_blank" title="Facebook" class="mr-2"><i class="mdi mdi-facebook"></i></a>
                                                @endif
                                                @if($counsellor->twitter_link)
                                                    <a href="{{ $counsellor->twitter_link }}" target="_blank" title="Twitter" class="mr-2"><i class="mdi mdi-twitter"></i></a>
                                                @endif
                                                @if(!$counsellor->insta_link && !$counsellor->fb_link && !$counsellor->twitter_link)
                                                    <small class="text-muted">—</small>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.counsellor.edit', $counsellor->counsellor_id) }}" class="btn btn-sm btn-warning" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                        onclick="confirmDelete({{ $counsellor->counsellor_id }}, '{{ addslashes($counsellor->counsellor_name) }}')" title="Delete">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4">
                                                <p class="text-muted mb-3">No counsellors found.</p>
                                                <a href="{{ route('admin.addcouncelor') }}" class="btn btn-primary btn-sm">Add Your First Counsellor</a>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            @if($counsellors->count() > 0)
                            <div class="mt-3">
                                {{ $counsellors->links() }}
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
                Are you sure you want to delete <strong id="deleteName"></strong>? This will also remove their time slots and price settings. This action cannot be undone.
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
    function confirmDelete(counsellorId, counsellorName) {
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = '{{ url("admin/counsellor") }}/' + counsellorId;
        document.getElementById('deleteName').textContent = counsellorName;
        $('#deleteModal').modal('show');
    }
</script>

@endsection
