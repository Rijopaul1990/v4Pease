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
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title mb-0">Edit Counsellor</h4>
                                <a href="{{ route('admin.viewCounsellors') }}" class="btn btn-secondary btn-sm">
                                    <i class="mdi mdi-arrow-left"></i> Back to List
                                </a>
                            </div>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.counsellor.update', $counsellor->counsellor_id) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="counsellor_name">Name</label>
                                    <input type="text" name="counsellor_name" class="form-control" id="counsellor_name" placeholder="Name"
                                           value="{{ old('counsellor_name', $counsellor->counsellor_name) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="counsellor_qualification">Qualification</label>
                                    <input type="text" name="counsellor_qualification" class="form-control" id="counsellor_qualification" placeholder="e.g., MSW, MBA, UGC-NET, Ph.D"
                                           value="{{ old('counsellor_qualification', $counsellor->counsellor_qualification) }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="designation" class="form-control" id="designation" placeholder="e.g., Senior Counsellor"
                                           value="{{ old('designation', $counsellor->designation) }}">
                                </div>

                                <div class="form-group">
                                    <label for="bio">Bio / About</label>
                                    <textarea name="bio" class="form-control" id="bio" rows="4" placeholder="Short description shown on the counsellor page...">{{ old('bio', $counsellor->bio) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email address"
                                           value="{{ old('email', $counsellor->email) }}">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number"
                                           value="{{ old('phone', $counsellor->phone) }}">
                                </div>

                                <div class="form-group">
                                    <label for="insta_link">Instagram <small class="text-muted">(optional)</small></label>
                                    <input type="text" name="insta_link" class="form-control" id="insta_link" placeholder="Instagram Link"
                                           value="{{ old('insta_link', $counsellor->insta_link) }}">
                                </div>

                                <div class="form-group">
                                    <label for="fb_link">Facebook <small class="text-muted">(optional)</small></label>
                                    <input type="text" name="fb_link" class="form-control" id="fb_link" placeholder="Facebook Link"
                                           value="{{ old('fb_link', $counsellor->fb_link) }}">
                                </div>

                                <div class="form-group">
                                    <label for="twitter_link">Twitter <small class="text-muted">(optional)</small></label>
                                    <input type="text" name="twitter_link" class="form-control" id="twitter_link" placeholder="Twitter Link"
                                           value="{{ old('twitter_link', $counsellor->twitter_link) }}">
                                </div>

                                <div class="form-group">
                                    <label for="google_link">Google <small class="text-muted">(optional)</small></label>
                                    <input type="text" name="google_link" class="form-control" id="google_link" placeholder="Google Link"
                                           value="{{ old('google_link', $counsellor->google_link) }}">
                                </div>

                                <div class="form-group">
                                    <label>Current Photo</label>
                                    <div class="mb-2">
                                        <img src="{{ $counsellor->photo_url }}" alt="{{ $counsellor->counsellor_name }}"
                                             style="width: 110px; height: 110px; object-fit: cover; border-radius: 8px; border: 1px solid #eee;">
                                    </div>
                                    <label for="photo">Replace Photo (leave empty to keep current)</label>
                                    <input type="file" name="photo" id="photo" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update Counsellor</button>
                                <a href="{{ route('admin.viewCounsellors') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
