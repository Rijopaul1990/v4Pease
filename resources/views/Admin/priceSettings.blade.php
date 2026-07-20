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

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
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

                             <form class="forms-sample" action="{{ route('admin.addPrice') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="counsellor_id">Select Counsellor</label>
                                    <select name="counsellor_id" id="counsellor_id" class="form-control" required>
                                        <option value="">-- Choose --</option>
                                        @foreach($counsellors as $councellor)
                                            <option value="{{ $councellor['counsellor_id'] }}" {{ old('counsellor_id') == $councellor['counsellor_id'] ? 'selected' : '' }}>{{ $councellor['counsellor_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="candidate_type">Candidate Type</label>
                                    <select name="candidate_type" id="candidate_type" class="form-control" required>
                                        <option value="">-- Choose --</option>
                                        <option value="Adult" {{ old('candidate_type') == 'Adult' ? 'selected' : '' }}>Adult</option>
                                        <option value="Child" {{ old('candidate_type') == 'Child' ? 'selected' : '' }}>Child</option>
                                    </select>
                                </div>

                                <div class="form-group mt-3" id="child_age_limit_group" style="display: none;">
                                    <label for="child_age_limit">Child Age Limit (years)</label>
                                    <select name="child_age_limit" id="child_age_limit" class="form-control">
                                        <option value="">-- Choose --</option>
                                        @for($age = 3; $age <= 15; $age++)
                                            <option value="{{ $age }}" {{ old('child_age_limit') == $age ? 'selected' : '' }}>{{ $age }}</option>
                                        @endfor
                                    </select>
                                    <small class="text-muted">Applies to Child only. Children up to this age get the child price. Min 3, max 15.</small>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="price">Price ($)/Hour</label>
                                    <input type="number" name="price" id="price" class="form-control" required min="0" step="0.01" value="{{ old('price') }}">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4 class="card-title">Current Price Settings</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Counsellor</th>
                                            <th>Candidate Type</th>
                                            <th>Child Age Limit</th>
                                            <th>Price ($)/Hour</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($prices as $p)
                                        <tr>
                                            <td>{{ $p->counsellor_name ?? 'Counsellor #' . $p->councellor_id }}</td>
                                            <td>
                                                <span class="badge {{ $p->candidate_type == 'Child' ? 'badge-info' : 'badge-success' }}">{{ $p->candidate_type }}</span>
                                            </td>
                                            <td>{{ $p->candidate_type == 'Child' && $p->child_age_limit ? 'Up to ' . $p->child_age_limit . ' yrs' : '—' }}</td>
                                            <td>${{ $p->price_per_hour }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-3">No price settings added yet.</td>
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

<script>
    (function () {
        var typeSelect = document.getElementById('candidate_type');
        var ageGroup = document.getElementById('child_age_limit_group');
        var ageSelect = document.getElementById('child_age_limit');

        function toggleAgeLimit() {
            if (typeSelect.value === 'Child') {
                ageGroup.style.display = 'block';
                ageSelect.setAttribute('required', 'required');
            } else {
                ageGroup.style.display = 'none';
                ageSelect.removeAttribute('required');
                ageSelect.value = '';
            }
        }

        typeSelect.addEventListener('change', toggleAgeLimit);
        toggleAgeLimit();
    })();
</script>

@endsection