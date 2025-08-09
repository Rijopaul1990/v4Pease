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
                            <h4 class="card-title">Price Setting</h4>
                             <form class="forms-sample" action="{{ route('admin.addPrice') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="counsellor_id">Select Counsellor</label>
                                    <select name="counsellor_id" id="counsellor_id" class="form-control" required>
                                        <option value="">-- Choose --</option>
                                        @foreach($counsellors as $councellor)
                                            <option value="{{ $councellor['counsellor_id'] }}">{{ $councellor['counsellor_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="price">Price ($)/Hour</label>
                                    <input type="number" name="price" id="price" class="form-control" required min="0" step="0.01">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

@endpush

@endsection