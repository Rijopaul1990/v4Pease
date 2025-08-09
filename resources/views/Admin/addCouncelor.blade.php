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
                                <input type="text" name="counsellor_qualification" class="form-control" id="counsellor_qualification" placeholder="Qualification" required>
                            </div>

                            <div class="form-group">
                                <label for="insta_link">Instagram</label>
                                <input type="url" name="insta_link" class="form-control" id="insta_link" placeholder="Instagram Link">
                            </div>

                            <div class="form-group">
                                <label for="fb_link">Facebook</label>
                                <input type="url" name="fb_link" class="form-control" id="fb_link" placeholder="Facebook Link">
                            </div>

                            <div class="form-group">
                                <label for="twitter_link">Twitter</label>
                                <input type="url" name="twitter_link" class="form-control" id="twitter_link" placeholder="Twitter Link">
                            </div>

                            <div class="form-group">
                                <label>File upload</label>
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