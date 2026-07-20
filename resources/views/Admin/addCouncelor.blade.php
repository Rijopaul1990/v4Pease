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
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                        <h4 class="card-title">Add Councelor</h4>
                        <!-- <p class="card-description"> Basic form elements </p> -->
                        <form action="{{ route('admin.save') }}" method="POST" enctype="multipart/form-data" class="forms-sample"> 
                            @csrf  <!-- CSRF protection -->
                            
                            <div class="form-group">
                                <label for="counsellor_name">Name</label>
                                <input type="text" name="counsellor_name" class="form-control" id="counsellor_name" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                                <label for="counsellor_qualification">Qualification</label>
                                <input type="text" name="counsellor_qualification" class="form-control" id="counsellor_qualification" placeholder="e.g., MSW, MBA, UGC-NET, Ph.D" required>
                            </div>

                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" class="form-control" id="designation" placeholder="e.g., Senior Counsellor">
                            </div>

                            <div class="form-group">
                                <label for="bio">Bio / About</label>
                                <textarea name="bio" class="form-control" id="bio" rows="4" placeholder="Short description shown on the counsellor page..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email address">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number">
                            </div>

                            <div class="form-group">
                                <label for="insta_link">Instagram <small class="text-muted">(optional)</small></label>
                                <input type="text" name="insta_link" class="form-control" id="insta_link" placeholder="Instagram Link">
                            </div>

                            <div class="form-group">
                                <label for="fb_link">Facebook <small class="text-muted">(optional)</small></label>
                                <input type="text" name="fb_link" class="form-control" id="fb_link" placeholder="Facebook Link">
                            </div>

                            <div class="form-group">
                                <label for="twitter_link">Twitter <small class="text-muted">(optional)</small></label>
                                <input type="text" name="twitter_link" class="form-control" id="twitter_link" placeholder="Twitter Link">
                            </div>

                            <div class="form-group">
                                <label for="google_link">Google <small class="text-muted">(optional)</small></label>
                                <input type="text" name="google_link" class="form-control" id="google_link" placeholder="Google Link">
                            </div>

                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection