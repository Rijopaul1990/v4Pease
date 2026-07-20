@extends('Admin/layout/app')

@section('content')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_navbar.html -->
    @include('Admin.partials.navbar')
    
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Career Applications</h4>
                            <p class="card-description">View and manage career applications</p>
                            
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
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Qualification</th>
                                            <th>Experience</th>
                                            <th>Applied Date</th>
                                            <th>Resume</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($applications as $index => $application)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $application->name }}</td>
                                                <td>{{ $application->qualification }}</td>
                                                <td>{{ $application->experience }} years</td>
                                                <td>{{ $application->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.career.download', $application->id) }}" 
                                                       class="btn btn-sm btn-primary" 
                                                       title="Download Resume">
                                                        <i class="mdi mdi-download"></i> Download
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="button" 
                                                            class="btn btn-sm btn-info" 
                                                            data-toggle="modal" 
                                                            data-target="#detailsModal{{ $application->id }}">
                                                        <i class="mdi mdi-eye"></i> View
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Details Modal -->
                                            <div class="modal fade" id="detailsModal{{ $application->id }}" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel{{ $application->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailsModalLabel{{ $application->id }}">Application Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-bold">Name:</label>
                                                                        <p>{{ $application->name }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-bold">Qualification:</label>
                                                                        <p>{{ $application->qualification }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-bold">Years of Experience:</label>
                                                                        <p>{{ $application->experience }} years</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-bold">Applied Date:</label>
                                                                        <p>{{ $application->created_at->format('F d, Y h:i A') }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-bold">Additional Information:</label>
                                                                        <p>{{ $application->notes ?? 'N/A' }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="font-weight-bold">Resume:</label>
                                                                        <br>
                                                                        <a href="{{ route('admin.career.download', $application->id) }}" 
                                                                           class="btn btn-primary">
                                                                            <i class="mdi mdi-download"></i> Download Resume
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    <div class="alert alert-info">
                                                        No career applications found.
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

